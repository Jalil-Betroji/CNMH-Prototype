<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project; 

class ProjectTableSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'CNMH',
            'description' => 'Créer une application de gestion pour CNMH',
            'start_date' => '2023-11-22',
            'end_date' => '2023-11-27',
        ]);
        
        Project::create([
            'name' => 'Navilux',
            'description' => 'Créer une application de gestion pour la société Navilux',
            'start_date' => '2023-11-22',
            'end_date' => '2023-11-27',
        ]);
        
        Project::create([
            'name' => 'Netflix',
            'description' => 'Créer une application de gestion pour la société Netflix',
            'start_date' => '2023-11-28',
            'end_date' => '2023-12-03',
        ]);
        
        Project::create([
            'name' => 'Script Whatsapp',
            'description' => 'Créer une application de gestion pour la société Ntx',
            'start_date' => '2023-11-28',
            'end_date' => '2023-12-03',
        ]);
        
        Project::create([
            'name' => 'Ai tasks',
            'description' => 'Créer une application de gestion pour la société web-ai',
            'start_date' => '2023-12-04',
            'end_date' => '2023-12-10',
        ]);
        
        Project::create([
            'name' => 'Plateforme de films',
            'description' => 'Créer une application de gestion pour la société web-tech',
            'start_date' => '2023-12-04',
            'end_date' => '2023-12-10',
        ]);
        
    }
}
