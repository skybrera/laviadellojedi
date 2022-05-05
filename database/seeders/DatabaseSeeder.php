<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call(FilmSeeder::class);
        $this->call(JediSeeder::class);
        $this->call(QuoteSeeder::class);
    }
}
