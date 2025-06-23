{{-- resources/views/films/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Cave à films - Alcolociné')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-warning">La cave à films</h2>
        <a href="{{ route('films.create') }}" class="btn btn-primary">➕ Ajouter ta cuite critique</a>
    </div>

    {{-- Statistiques --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-center bg-dark text-light border-warning">
                <div class="card-body">
                    <h6 class="card-title">Moyenne des shots</h6>
                    <p class="display-6">{{ number_format($moyenneShots ?? 0, 1) }} / 10</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center bg-dark text-light border-success">
                <div class="card-body">
                    <h6 class="card-title">Année la plus beurrée</h6>
                    <p class="display-6">{{ $anneePlusBeurree ?? '—' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center bg-dark text-light border-danger">
                <div class="card-body">
                    <h6 class="card-title">Nombre de cuites</h6>
                    <p class="display-6">{{ $nombreCuites ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Barre de filtres et recherche --}}
    <form method="GET" action="{{ route('films.index') }}" class="mb-4">
        <div class="row g-3 mb-2">
            <div class="col-md-4">
                <select name="tri" class="form-select" onchange="this.form.submit()">
                    <option value="">-- Choisis ton tirage --</option>
                    <option value="note" {{ request('tri') == 'note' ? 'selected' : '' }}>Force du shot (note)</option>
                    <option value="annee" {{ request('tri') == 'annee' ? 'selected' : '' }}>Année de la beuverie (année)</option>
                </select>
            </div>
            <div class="col-md-4">
                <select name="filtre" class="form-select" onchange="this.form.submit()">
                    <option value="">-- Filtre ta tournée --</option>
                    <option value="recent" {{ request('filtre') == 'recent' ? 'selected' : '' }}>Dernières cuites servies</option>
                    <option value="top" {{ request('filtre') == 'top' ? 'selected' : '' }}>Les gueuletons au top</option>
                    <option value="navet" {{ request('filtre') == 'navet' ? 'selected' : '' }}>Les navets à jeter</option>
                    <option value="7plus" {{ request('filtre') == '7plus' ? 'selected' : '' }}>Shots qui claquent (note ≥ 7)</option>
                </select>
            </div>
            <div class="col-md-4">
                <select name="annee" class="form-select" onchange="this.form.submit()">
                    <option value="">-- Année de cuite --</option>
                    @foreach ($anneesDisponibles as $annee)
                        <option value="{{ $annee }}" {{ request('annee') == $annee ? 'selected' : '' }}>
                            {{ $annee }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-8">
                <input type="text" name="search" class="form-control" placeholder="🔍 Cherche ta cuite ou ton film" value="{{ request('search') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-warning w-100 fw-bold text-uppercase">Lancer la tournée</button>
            </div>
            <div class="col-md-2 d-flex align-items-center">
                <a href="{{ route('films.index') }}" class="btn btn-outline-light w-100 fw-bold text-uppercase"
                   title="Réinitialiser les filtres">
                    🔄 Réinitialiser
                </a>
            </div>
        </div>
    </form>

    {{-- Zone des critiques --}}
    @php
        $auteurs = [
            ['name' => 'Philou33', 'avatar' => 'philou.jpg'],
            ['name' => 'Josy84', 'avatar' => 'josy.jpg'],
            ['name' => 'ChrisDuCamping', 'avatar' => 'parizot.jpg'],
            ['name' => 'Mbappon01', 'avatar' => 'mbappe.jpg'],
            ['name' => 'Pedric41', 'avatar' => 'cedric.jpg'],
            ['name' => 'DonutLover57', 'avatar' => 'homer.jpg'],
            ['name' => 'Mamadou des Doucettes', 'avatar' => 'mamad2.jpg'],
            ['name' => 'CarglassOliv', 'avatar' => 'oliv.jpg'],
            ['name' => 'CetaTlem', 'avatar' => 'cete.jpg'],
            ['name' => '_', 'avatar' => 'caillou.jpg'],
        ];
    @endphp

    @forelse ($films as $film)
        @php
            $badgeClass = $film->note >= 8 ? 'bg-success' : ($film->note >= 5 ? 'bg-warning text-dark' : 'bg-danger');
            $auteur = $auteurs[array_rand($auteurs)];
        @endphp
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="{{ asset($auteur['avatar']) }}" alt="{{ $auteur['name'] }}"
                         class="rounded-circle shadow-sm"
                         style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #f5c2c7;">
                    <span class="fw-semibold" style="color: white;">Par <strong>{{ $auteur['name'] }}</strong></span>
                </div>

                <h5 class="card-title">
                    {{ $film->titre }} ({{ $film->annee }})
                    <span class="badge {{ $badgeClass }} ms-2">
                        Shot : {{ $film->note }} / 10 🍻
                    </span>
                </h5>

                <p class="card-text fst-italic" style="color: white;">"{{ $film->commentaire }}"</p>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('films.edit', $film) }}" class="btn btn-sm btn-warning">✏️ Modifier la critique</a>
                    <form action="{{ route('films.destroy', $film) }}" method="POST" onsubmit="return confirm('Confirme que tu veux supprimer cette cuite ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">🗑️ Jette le verre</button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="text-center mt-5" style="color: white; text-shadow: 1px 1px 4px rgba(0,0,0,0.8);">
            <div style="max-width: 300px; margin: 0 auto;">
                <video autoplay loop muted playsinline
                       style="width: 100%; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.7);">
                    <source src="{{ asset('dehors.mp4') }}" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
            <p class="mt-3 mb-0" style="font-size: 1.25rem; font-weight: 500;">
                Aucun film pour le moment... T’es sobre ? 😅
            </p>
        </div>
    @endforelse

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $films->links() }}
    </div>
@endsection
