<?php

use Illuminate\Database\Seeder;

class NewGamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Game::class, 10)->create();
    }
}
