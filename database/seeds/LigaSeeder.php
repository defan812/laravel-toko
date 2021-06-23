<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
        	'name' => 'Bundes Liga',
        	'country' => 'Jerman',
        	'images' => 'bundesliga.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'Premier League',
        	'country' => 'Inggris',
        	'images' => 'premierleague.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'La Liga',
        	'country' => 'Spanyol',
        	'images' => 'laliga.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'Serie A',
        	'country' => 'Itali',
        	'images' => 'seriea.png',
        ]);
    }
}
