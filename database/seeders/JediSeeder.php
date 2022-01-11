<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JediSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('jedi')->insert([
            [
                "nome" => "Yoda"
            ],
            [
                "nome" => "Luke Skywalker"
            ],
            [
                "nome" => "Anakin Skywalker"
            ],
            [
                "nome" => "Boba Fett"
            ],
            [
                "nome" => "D-3BO"
            ],
            [
                "nome" => "Darth Fener"
            ],
            [
                "nome" => "Finn"
            ],
            [
                "nome" => "Han Solo"
            ],
            [
                "nome" => "Imperatore Palpatine"
            ],
            [
                "nome" => "Jabba The Hutt"
            ],
            [
                "nome" => "Jango Fett"
            ],
            [
                "nome" => "Lando Calrissian"
            ],
            [
                "nome" => "Obi Wan Kenobi"
            ],
            [
                "nome" => "Darth Sidious"
            ],
            [
                "nome" => "Principessa Leila Organa"
            ],
            [
                "nome" => "Qui-Gon Jinn"
            ],
            [
                "nome" => "Rey"
            ]
        ]);
    }
}
