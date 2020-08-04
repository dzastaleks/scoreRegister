<?php

use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Club::create([
            'name'=>'Proleter'
        ]);
        App\Club::create([
            'name'=>'Partizan'
        ]);
        App\Club::create([
            'name'=>'Mačva'
        ]);
        App\Club::create([
            'name'=>'Crvena zvezda'
        ]);
        App\Club::create([
            'name'=>'Čukarički'
        ]);
        App\Club::create([
            'name'=>'Rad'
        ]);
        App\Club::create([
            'name'=>'Mladost Lučani'
        ]);
        App\Club::create([
            'name'=>'TSC Bačka Topola'
        ]);
        App\Club::create([
            'name'=>'Radnički Niš'
        ]);
        App\Club::create([
            'name'=>'Spartak'
        ]);
        App\Club::create([
            'name'=>'Vojvodina'
        ]);
        App\Club::create([
            'name'=>'Javor Matis'
        ]);
        App\Club::create([
            'name'=>'Voždovac'
        ]);
        App\Club::create([
            'name'=>'Inđija'
        ]);
        App\Club::create([
            'name'=>'Radnik Surdulica'
        ]);
        App\Club::create([
            'name'=>'Napredak Kruševac'
        ]);
    }
}
