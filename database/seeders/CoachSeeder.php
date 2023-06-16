<?php

namespace Database\Seeders;

use App\Models\Coach;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Coach Companies
        $coach = Coach::create([
            'category_id' => 1,
            'name' => "A. Baino",
            'organisation' => "Classy Notes",
            'email' => "info@blvcoaching.nl",
            'website' => "https://www.cn-lawfinancegroup.com/",
            'about' => "Classy Notes - Als creatieve professionals werken wij oplossingsgericht, service gericht en inclusief. Als bedrijf bekijken wij de kansen voor onze klanten kritisch zodat wij de juiste prestatie kunnen behalen. - Schulden oplossen zonder schuldhulpverlening-traject - Financieel - Juridisch incasso",
            'specialties' => "Debt Tracking_Budgeting_Finacial Planning"
        ]);
    }
}
