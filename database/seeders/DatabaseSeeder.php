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
            'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGFpbnxlbnwwfHwwfHx8MA%3D%3D',
        ]);

        Bread::create([
            'name' => 'Baguette tradition',
            'price' => 1.20,
            'description' => 'Une baguette classique avec une mie légère et aérée.',
            'image' => 'https://images.unsplash.com/photo-1486887396153-fa416526c108?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGFpbnxlbnwwfHwwfHx8MA%3D%3D',
        ]);

        Bread::create([
            'name' => 'Pain complet',
            'price' => 2.80,
            'description' => 'Un pain complet riche en fibres, idéal pour la santé.',
            'image' => 'https://images.unsplash.com/photo-1521471109507-43d61bb345dd?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cGFpbnxlbnwwfHwwfHx8MA%3D%3D',
        ]);
    }
}
