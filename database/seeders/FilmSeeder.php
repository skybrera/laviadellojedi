<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('films')->insert([
            ["titolo" => "La minaccia fantasma","anno" => "1999-05-19"],
            ["titolo" => "L'attacco dei cloni","anno" => "2002-05-16"],
            ["titolo" => "La vendetta dei Sith","anno" => "2005-05-19"],
            ["titolo" => "Una nuova speranza","anno" => "1977-05-25"],
            ["titolo" => "L'Impero colpisce ancora","anno" => "1980-05-21"],
            ["titolo" => "Il ritorno dello Jedi","anno" => "1983-05-25"],
            ["titolo" => "Il risveglio della forza","anno" => "2015-12-18"],
            ["titolo" => "Gli ultimi Jedi","anno" => "2017-12-15"],
            ["titolo" => "L'ascesa di Skywalker","anno" => "2019-12-18"]
        ]);
    }
}
