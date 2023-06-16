<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Analytic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnalyticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Analytic::create(['tracked_name' => 'Users', 'total_items' => User::count(), "total_views" => 0, "concurrent" => User::count()]);
       
    }
}