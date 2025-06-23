<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        $query = Film::query();

        // Recherche
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('titre', 'like', '%' . $search . '%')
                    ->orWhere('commentaire', 'like', '%' . $search . '%');
            });
        }

        // Tri
        if ($request->filled('tri')) {
            if ($request->tri === 'note') {
                $query->orderByDesc('note');
            } elseif ($request->tri === 'annee') {
                $query->orderByDesc('annee');
            }
        }

        // Filtres personnalisés
        if ($request->filled('filtre')) {
            switch ($request->filtre) {
                case 'recent':
                    $query->latest();
                    break;
                case 'top':
                    $query->where('note', '>=', 8)->orderByDesc('note');
                    break;
                case 'navet':
                    $query->where('note', '<', 4)->orderBy('note');
                    break;
                case '7plus':
                    $query->where('note', '>=', 7);
                    break;
            }
        }

        // Filtre par année
        if ($request->filled('annee')) {
            $query->where('annee', $request->annee);
        }

        // Clone de la query pour stats dynamiques
        $filmsFiltres = clone $query;

// Clone de la requête pour les stats (avec filtres mais sans pagination)
        $statsQuery = clone $query;

// Calcul des statistiques sur la requête filtrée
        $moyenneShots = $statsQuery->avg('note');

        $anneePlusBeurree = (clone $query)
            ->select('annee')
            ->groupBy('annee')
            ->orderByRaw('COUNT(*) DESC')
            ->value('annee');

        $nombreCuites = $query->count();

        // Liste des années disponibles
        $anneesDisponibles = Film::select('annee')->distinct()->orderByDesc('annee')->pluck('annee');

        // Pagination
        $films = $query->paginate(10)->withQueryString();

        return view('films.index', [
            'films' => $films,
            'moyenneShots' => $moyenneShots,
            'anneePlusBeurree' => $anneePlusBeurree,
            'nombreCuites' => $nombreCuites,
            'anneesDisponibles' => $anneesDisponibles,
        ]);
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'annee' => 'required|integer',
            'note' => 'required|integer|min:0|max:10',
        ]);

        Film::create($request->all());

        return redirect()->route('films.index');
    }

    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    public function update(Request $request, Film $film)
    {
        $request->validate([
            'titre' => 'required',
            'annee' => 'required|integer',
            'note' => 'required|integer|min:0|max:10',
        ]);

        $film->update($request->all());

        return redirect()->route('films.index');
    }

    public function destroy(Film $film)
    {
        $film->delete();

        return redirect()->route('films.index');
    }
}
