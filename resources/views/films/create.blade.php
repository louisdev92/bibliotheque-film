@extends('layouts.app')

@section('title', 'Ajouter un film - Alcolociné')

@section('content')
    <divv class="container">
        <div class="mb-4 text-center">
            <h1 class="text-warning">🍿 Ajouter un nouveau shot cinématographique</h1>
            <p class="fst-italic">Parce qu’un chef-d’œuvre ou une purge, ça se note !</p>
        </div>

        <div class="card shadow border-warning mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('films.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="titre" class="form-label text-warning">Titre du film</label>
                        <input type="text" id="titre" name="titre" class="form-control" placeholder="Ex : Le Parrain IV - L'Apéro final" required>
                    </div>

                    <div class="mb-3">
                        <label for="annee" class="form-label text-warning">Année de sortie</label>
                        <input type="number" id="annee" name="annee" class="form-control" placeholder="Ex : 2025" required>
                    </div>

                    <div class="mb-3">
                        <label for="note" class="form-label text-warning">Note (force du shot)</label>
                        <input type="number" id="note" name="note" class="form-control" placeholder="Entre 0 et 10" min="0" max="10" required>
                    </div>

                    <div class="mb-3">
                        <label for="commentaire" class="form-label text-warning">Commentaire (délire ou vomi verbal)</label>
                        <textarea id="commentaire" name="commentaire" class="form-control" rows="4" placeholder="Raconte-nous ta cuite ciné..." required></textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Ajouter à la cave</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('films.index') }}" class="btn btn-outline-secondary">← Retour à la cave à films</a>
        </div>
    </divv>
@endsection
