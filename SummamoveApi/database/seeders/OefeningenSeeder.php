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
                'beschrijving' => 'Steek je armen vooruit, buig je knieën en duw je billen naar achter. 
                 Probeer je knieën in een hoek van 90 graden te houden. Ga daarna naar boven en herhaal deze oefening.',
            ],
            [
                'naam' => 'Push-up',
                'beschrijving' => 'Ga zo liggen dat alleen je tenen en handen de grond raken.
                 Ga met je lichaam naar beneden tot je borst de grond raakt.
                 Beweeg je lichaam daarna weer omhoog.
                 Herhaal dit proces.',
            ],
            [
                'naam' => 'Dip',
                'beschrijving' => 'Ga ergens aan hangen.
                 Strek je armen en laat je benen achter je hangen.',
            ],
            [
                'naam' => 'Plank',
                'beschrijving' => 'Ga liggen met je tenen en onderarmen op de grond
                 Hou deze positie aan voor de hoeveelheid seconde die jij wilt seconden.',
            ],
            [
                'naam' => 'Paardentrap',
                'beschrijving' => 'Ga liggen met je ellebogen en knieën op de grond.
                 Strek je rechterbeen naar achter.
                 Hou dit vast voor een paar seconde doe daaraan je been terug.
                 Doe dit proces om en om met je linkerbeen.',
            ],
            [
                'naam' => 'Mountain climber',
                'beschrijving' => 'Zet jezelf in een push-up positie.
                 Haal een van je benen naar de tegenovergestelde arm.
                 Verander van links naar rechts.
                 Herhaal dit proces.',
            ],
            [
                'naam' => 'Burpee',
                'beschrijving' => 'Buk voor over richting push-up positie.
                 Doe een push-up en sta zo snel mogelijk weer op en strek jezelf uit en herhaal dit proces.',
            ],
            [
                'naam' => 'Lunge',
                'beschrijving' => 'Stap met een van je voeten uit, hou dit een paar seconde vast.
                 Stap met je andere voet bij en herhaal dit proces.',
            ],
            [
                'naam' => 'Wall sit',
                'beschrijving' => 'Ga met je rug tegen de muur zitten, hou een hoek van 90 graden bij je benen.
                 Hou deze positie voor een paar seconde vol.',
            ],
            [
                'naam' => 'Crunch',
                'beschrijving' => 'Doe een sit up. Hou deze houding de hele oefening vol, maar dan met je armen in je nek.',
            ]
        ];
        DB::table('oefeningen')->insert($data);
    }
}
