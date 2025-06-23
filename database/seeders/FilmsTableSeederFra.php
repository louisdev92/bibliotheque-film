<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmsTableSeederFra extends Seeder
{
    public function run()
    {
        $filmsPires = [
            ['titre' => 'Gomez vs Tavarès', 'annee' => 2004, 'note' => 2, 'commentaire' => 'L’absurde au max, si t’aimes pas l’humour qui tombe à plat, fuis !'],
            ['titre' => 'Les Anges Gardiens', 'annee' => 1995, 'note' => 3, 'commentaire' => 'Quand De Funès et Belmondo perdent la bouteille.'],
            ['titre' => 'La Vérité si je mens ! 3', 'annee' => 2012, 'note' => 4, 'commentaire' => 'La saga qui fatigue le fun.'],
            ['titre' => 'Les Rois Mages', 'annee' => 2001, 'note' => 3, 'commentaire' => '3 Rois, 0 crédibilité.'],
            ['titre' => 'Astérix & Obélix : Mission Cléopâtre', 'annee' => 2002, 'note' => 5, 'commentaire' => 'Cultissime mais parfois lourd comme une brique.'],
            ['titre' => 'Gaston Lagaffe', 'annee' => 2018, 'note' => 3, 'commentaire' => 'Quand le comique de situation se casse la gueule.'],
            ['titre' => 'Camping 3', 'annee' => 2016, 'note' => 2, 'commentaire' => 'Le camping infernal, version redite sans fin.'],
            ['titre' => 'Disco', 'annee' => 2008, 'note' => 3, 'commentaire' => 'Stalone n’a qu’à bien se tenir… ou pas.'],
            ['titre' => 'Les Visiteurs : La Révolution', 'annee' => 2016, 'note' => 2, 'commentaire' => 'La révolution, oui, mais dans la déception.'],
            ['titre' => 'Astérix aux Jeux Olympiques', 'annee' => 2008, 'note' => 4, 'commentaire' => 'C’est pas gagné pour la médaille d’or.'],
            ['titre' => 'Babysitting 2', 'annee' => 2015, 'note' => 3, 'commentaire' => 'Quand l’humour devient un pétard mouillé.'],
            ['titre' => 'Taxi 4', 'annee' => 2007, 'note' => 4, 'commentaire' => 'La dernière de la saga, mais la première en déception.'],
            ['titre' => 'Camping Paradis', 'annee' => 2006, 'note' => 3, 'commentaire' => 'Sérieusement ?'],
            ['titre' => 'Les Tuches 3', 'annee' => 2018, 'note' => 3, 'commentaire' => 'Déjà deux, pourquoi trois ?'],
            ['titre' => 'Rien à déclarer', 'annee' => 2010, 'note' => 4, 'commentaire' => 'L’humour belge à la française… bof.'],
            ['titre' => 'Robin des Bois, la véritable histoire', 'annee' => 2015, 'note' => 2, 'commentaire' => 'Spoiler : elle n’est pas véritable.'],
            ['titre' => 'Les Profs 2', 'annee' => 2015, 'note' => 3, 'commentaire' => 'L’école de la grosse blague lourde.'],
            ['titre' => 'Un indien dans la ville', 'annee' => 1994, 'note' => 4, 'commentaire' => 'So 90’s mais gênant.'],
            ['titre' => 'L’arnacoeur 2', 'annee' => 2023, 'note' => 2, 'commentaire' => 'Jamais sorti mais faudrait éviter.'],
            ['titre' => 'Radin !', 'annee' => 2016, 'note' => 3, 'commentaire' => 'C’est l’histoire d’un mec… radin. Voilà.'],
            ['titre' => 'Le Dîner de Cons 2', 'annee' => 2024, 'note' => 2, 'commentaire' => 'La suite qui aurait dû rester dans les cartons.'],
            ['titre' => 'Brice 3', 'annee' => 2016, 'note' => 3, 'commentaire' => 'Brice, le come-back qui fait flop.'],
            ['titre' => 'L’amour c’est mieux à deux', 'annee' => 2010, 'note' => 3, 'commentaire' => 'Oublie ça, vraiment.'],
            ['titre' => 'La Beuze', 'annee' => 2003, 'note' => 2, 'commentaire' => 'Parodie ? Plutôt un naufrage.'],
            ['titre' => 'Les Rois du gag', 'annee' => 2006, 'note' => 3, 'commentaire' => 'Même les rois peuvent rater leur coup.'],
            ['titre' => 'Camping 2', 'annee' => 2010, 'note' => 3, 'commentaire' => 'Le début d’un cauchemar.'],
            ['titre' => 'OSS 117 : Rio ne répond plus', 'annee' => 2009, 'note' => 5, 'commentaire' => 'Pas mauvais, mais la comparaison avec le premier pique.'],
            ['titre' => 'Les Profs', 'annee' => 2013, 'note' => 4, 'commentaire' => 'Parfois il faut laisser la place à d’autres.'],
            ['titre' => 'Le Boulet', 'annee' => 2002, 'note' => 3, 'commentaire' => 'Quand l’humour loupe la cible.'],
            ['titre' => 'Les Sous-doués passent le bac', 'annee' => 1980, 'note' => 4, 'commentaire' => 'Classique mais tellement kitsch qu’on en rigole jaune.'],
        ];

        foreach ($filmsPires as $film) {
            Film::create($film);
        }
    }
}
