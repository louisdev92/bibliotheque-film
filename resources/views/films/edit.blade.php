@extends('layouts.app')

@section('title', 'Modifier un film - Alcolociné')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="text-warning">✏️ Modifier ta cuite critique</h1>
            <p class="fst-italic">Parce qu’un bon film mérite une meilleure descente !</p>
        </div>

        <div class="card shadow border-warning mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('films.update', $film) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="titre" class="form-label text-warning">Titre du film</label>
                        <input type="text" id="titre" name="titre" class="form-control" value="{{ $film->titre }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="annee" class="form-label text-warning">Année de sortie</label>
                        <input type="number" id="annee" name="annee" class="form-control" value="{{ $film->annee }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="note" class="form-label text-warning">Note (force du shot)</label>
                        <input type="number" id="note" name="note" class="form-control" value="{{ $film->note }}" min="0" max="10" required>
                    </div>

                    <div class="mb-3">
                        <label for="commentaire" class="form-label text-warning">Commentaire (effet secondaire)</label>
                        <textarea id="commentaire" name="commentaire" class="form-control" rows="4" required>{{ $film->commentaire }}</textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-warning">Valider la correction</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('films.index') }}" class="btn btn-outline-secondary">← Retour à la cave à films</a>
        </div>
    </div>
@endsection
