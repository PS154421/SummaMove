<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'naam' => 'Squat',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Push-up',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Dip',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Plank',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Paardentrap',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Mountain climber',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Burpee',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Lunge',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Wall sit',
                'beschrijving' => 'nog niet bekend',
            ],
            [
                'naam' => 'Crunch',
                'beschrijving' => 'nog niet bekend',
            ]
        ];
        DB::table('oefeningen')->insert($data);
    }
}
