<?php

namespace Database\Seeders;

use App\Models\Bread;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créer trois pains avec des liens d'images valides
        Bread::create([
            'name' => 'Pain de campagne',
            'price' => 3.50,
            'description' => 'Un délicieux pain rustique avec une croûte croustillante.',
            'image' => 'https://cdn.pixabay.com/photo/2016/10/27/22/52/bread-1776746_960_720.jpg',
        ]);

        Bread::create([
            'name' => 'Baguette tradition',
            'price' => 1.20,
            'description' => 'Une baguette classique avec une mie légère et aérée.',
            'image' => 'https://cdn.pixabay.com/photo/2014/11/03/16/37/baguettes-515728_960_720.jpg',
        ]);

        Bread::create([
            'name' => 'Pain complet',
            'price' => 2.80,
            'description' => 'Un pain complet riche en fibres, idéal pour la santé.',
            'image' => 'https://cdn.pixabay.com/photo/2017/08/07/15/25/bread-2607213_960_720.jpg',
        ]);
    }
}
