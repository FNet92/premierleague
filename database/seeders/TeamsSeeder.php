<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{

    public function run()
    {
        $teamNames = ['Liverpool', 'Manchester City', 'Chelsea', 'Arsenal'];

        foreach ($teamNames as $teamName) {
            DB::table('teams')->insert([
                'name' => $teamName,
                'strength' => rand(1, 100),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
