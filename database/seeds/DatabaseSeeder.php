<?php

use Illuminate\Database\Seeder;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Luca',
            'surname' => 'Rossi',
            'email' => 'hello@lucarossi.dev',
        ]);
    }
}
