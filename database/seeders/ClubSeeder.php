<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubDetails = [
            [
                'name' => 'Real Madrid CF',
                'country' => 'Spain',
                'established' => 1902,
            ],
            [
                'name' => 'Atletico Madrid',
                'country' => 'Spain',
                'established' => 1903,
            ],
            [
                'name' => 'FC Barcelona',
                'country' => 'Spain',
                'established' => 1899,
            ],
            [
                'name' => 'Liverpool',
                'country' => 'England',
                'established' => 1892,
            ],
            [
                'name' => 'Arsenal FC',
                'country' => 'England',
                'established' => 1886,
            ],
            [
                'name' => 'Inter Milan',
                'country' => 'Italy',
                'established' => 1908,
            ],
            [
                'name' => 'Juventus',
                'country' => 'Italy',
                'established' => 1897,
            ],
            [
                'name' => 'FC Bayern Munchen',
                'country' => 'Germany',
                'established' => 1900,
            ],
            [
                'name' => 'Borrussia Dortmund',
                'country' => 'Germany',
                'established' => 1909,
            ],
            [
                'name' => 'Paris Saint Germain',
                'country' => 'France',
                'established' => 1970,
            ],
        ];
        

        // Looping untuk memasukkan data ke tabel prodi
        foreach ($clubDetails as $club) {
            Club::create([
                'name' => $club['name'],
                'country' => $club['country'],
                'established' => $club['established'],
            ]);
        }
    }
}
