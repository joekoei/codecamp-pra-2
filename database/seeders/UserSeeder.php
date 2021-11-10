<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Sales Manager';
        $user->email = 'sm@curio.nl';
        $user->password = '';

        $user = new User();
        $user->name = 'Sales Manager';
        $user->email = 'sm@curio.nl';
        $user->password = '';
    }
}
