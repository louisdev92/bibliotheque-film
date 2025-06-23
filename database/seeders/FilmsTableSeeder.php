<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmsTableSeeder extends Seeder
{
    public function run()
    {
        $films = [
            ['titre' => 'Le Parrain', 'annee' => 1972, 'note' => 10, 'commentaire' => 'Un classique indémodable, la beuverie parfaite.'],
            ['titre' => 'Pulp Fiction', 'annee' => 1994, 'note' => 9, 'commentaire' => 'Dialogues tranchants comme un bon shot.'],
            ['titre' => 'Inception', 'annee' => 2010, 'note' => 8, 'commentaire' => 'Un trip mental qui donne le tournis.'],
            ['titre' => 'The Dark Knight', 'annee' => 2008, 'note' => 9, 'commentaire' => 'Le Joker, le roi du chaos alcoolisé.'],
            ['titre' => 'Forrest Gump', 'annee' => 1994, 'note' => 8, 'commentaire' => 'La vie c’est comme une tournée, parfois ça picole fort.'],
            ['titre' => 'Gladiator', 'annee' => 2000, 'note' => 7, 'commentaire' => 'Des combats épiques, parfaits pour une soirée bière.'],
            ['titre' => 'Titanic', 'annee' => 1997, 'note' => 6, 'commentaire' => 'Un drame qui coule comme une bonne cuite.'],
            ['titre' => 'Avatar', 'annee' => 2009, 'note' => 7, 'commentaire' => 'Un voyage coloré pour oublier la gueule de bois.'],
            ['titre' => 'Fight Club', 'annee' => 1999, 'note' => 8, 'commentaire' => 'Premier règle du Fight Club: boire un coup.'],
            ['titre' => 'Le Fabuleux Destin d’Amélie Poulain', 'annee' => 2001, 'note' => 7, 'commentaire' => 'Douceur et poésie avec un goût de cocktail.'],
            ['titre' => 'Interstellar', 'annee' => 2014, 'note' => 9, 'commentaire' => 'Un shot intergalactique de science-fiction.'],
            ['titre' => 'The Matrix', 'annee' => 1999, 'note' => 9, 'commentaire' => 'La pilule rouge ou la bleue? Choisis ton verre.'],
            ['titre' => 'La La Land', 'annee' => 2016, 'note' => 7, 'commentaire' => 'Musique et rêves, parfait pour une soirée jazzy.'],
            ['titre' => 'Jurassic Park', 'annee' => 1993, 'note' => 7, 'commentaire' => 'Des dinos et de la bière, combo gagnant.'],
            ['titre' => 'Les Évadés', 'annee' => 1994, 'note' => 10, 'commentaire' => 'Évasion garantie, comme un bon whisky.'],
            ['titre' => 'Le Seigneur des Anneaux : La Communauté de l’Anneau', 'annee' => 2001, 'note' => 9, 'commentaire' => 'Une quête épique pour une pinte héroïque.'],
            ['titre' => 'Django Unchained', 'annee' => 2012, 'note' => 8, 'commentaire' => 'Western sanglant, à boire cul sec.'],
            ['titre' => 'Les Indestructibles', 'annee' => 2004, 'note' => 7, 'commentaire' => 'Famille, action et cocktails explosifs.'],
            ['titre' => 'Shutter Island', 'annee' => 2010, 'note' => 8, 'commentaire' => 'Mystère et absinthe, un mélange qui détonne.'],
            ['titre' => 'Le Grand Budapest Hotel', 'annee' => 2014, 'note' => 7, 'commentaire' => 'Un cocktail coloré et décalé.'],
            ['titre' => 'Mad Max : Fury Road', 'annee' => 2015, 'note' => 8, 'commentaire' => 'Un shot d’adrénaline à haut voltage.'],
            ['titre' => 'Toy Story', 'annee' => 1995, 'note' => 7, 'commentaire' => 'Nostalgie et soda pétillant.'],
            ['titre' => 'Les Gardiens de la Galaxie', 'annee' => 2014, 'note' => 8, 'commentaire' => 'Playlist cosmique et bière interstellaire.'],
            ['titre' => 'La Vie est Belle', 'annee' => 1997, 'note' => 9, 'commentaire' => 'Un shot d’émotion pour la soirée.'],
            ['titre' => 'Whiplash', 'annee' => 2014, 'note' => 8, 'commentaire' => 'Du jazz, du rythme et des coups de fouet.'],
            ['titre' => 'Inglourious Basterds', 'annee' => 2009, 'note' => 8, 'commentaire' => 'Un toast à Tarantino et ses coups de feu.'],
            ['titre' => 'Le Roi Lion', 'annee' => 1994, 'note' => 8, 'commentaire' => 'L’aventure au pays des cocktails fruités.'],
            ['titre' => 'La Forme de l’Eau', 'annee' => 2017, 'note' => 7, 'commentaire' => 'Romance aquatique et mojitos.'],
            ['titre' => 'Blade Runner 2049', 'annee' => 2017, 'note' => 8, 'commentaire' => 'Futur dystopique et shots glacés.'],
            ['titre' => 'Her', 'annee' => 2013, 'note' => 7, 'commentaire' => 'Un amour digital, doux comme un cocktail.'],
            ['titre' => 'Parasite', 'annee' => 2019, 'note' => 9, 'commentaire' => 'Un thriller qui te laisse sans souffle (et sans verre).'],
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}
