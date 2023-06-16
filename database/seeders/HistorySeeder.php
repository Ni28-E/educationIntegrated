<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        History::create(['id' => 1, 'jan' => 0, 'feb' => 0, 'mar' => 0, 'apr' => 0, 'may' => 0, 'jun' => 0, 'jul' => 0, 'aug' => 0, 'sep' => 0, 'oct' => 0, 'nov' => 0, 'dec' => 0, 'total' => 0, 'year' => 2022, 'analytic_id' => 1]);
        History::create(['id' => 2, 'jan' => 0, 'feb' => 0, 'mar' => 0, 'apr' => 0, 'may' => 0, 'jun' => 0, 'jul' => 0, 'aug' => 0, 'sep' => 0, 'oct' => 0, 'nov' => 0, 'dec' => 0, 'total' => 0, 'year' => 2023, 'analytic_id' => 1]);
    }
}