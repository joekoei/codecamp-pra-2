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
        $user->name = 'Klant';
        $user->email = 'klant@codecamp.nl';
        $user->password = '$2y$10$6QZCyqt7Cp3KiqTJMsXeEuzbIDGk.hLSnQGUiOWZYP7.DTd42EMBm';
        $user->rol = 'klant';
        $user->save();

        $user = new User();
        $user->name = 'Content Leverancier';
        $user->email = 'content@codecamp.nl';
        $user->password = '$2y$10$6QZCyqt7Cp3KiqTJMsXeEuzbIDGk.hLSnQGUiOWZYP7.DTd42EMBm';
        $user->rol = 'content';
        $user->save();

        $user = new User();
        $user->name = 'Maintenance Coordinator';
        $user->email = 'maintenance@codecamp.nl';
        $user->password = '$2y$10$6QZCyqt7Cp3KiqTJMsXeEuzbIDGk.hLSnQGUiOWZYP7.DTd42EMBm';
        $user->rol = 'maintenance';
        $user->save();

        $user = new User();
        $user->name = 'Marketing Manager';
        $user->email = 'marketing@codecamp.nl';
        $user->password = '$2y$10$6QZCyqt7Cp3KiqTJMsXeEuzbIDGk.hLSnQGUiOWZYP7.DTd42EMBm';
        $user->rol = 'marketing';
        $user->save();

        $user = new User();
        $user->name = 'Sales Manager';
        $user->email = 'sales@codecamp.nl';
        $user->password = '$2y$10$6QZCyqt7Cp3KiqTJMsXeEuzbIDGk.hLSnQGUiOWZYP7.DTd42EMBm';
        $user->rol = 'sales';
        $user->save();

        $user = new User();
        $user->name = 'Beheerder';
        $user->email = 'beheerder@codecamp.nl';
        $user->password = '$2y$10$6QZCyqt7Cp3KiqTJMsXeEuzbIDGk.hLSnQGUiOWZYP7.DTd42EMBm';
        $user->rol = 'beheerder';
        $user->save();
    }
}
