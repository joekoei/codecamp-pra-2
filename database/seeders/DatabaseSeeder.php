<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $bookseeder = new BookSeeder;
        $bookseeder->run();

        $userseeder = new UserSeeder();
        $userseeder->run();
    }
}
