<?php

use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Season::create([
            'name'=>'2020/2021',
            'season_start'=>'2020.08.05',
            'season_end'=>'2021.06.04'
        ]);
    }
}
