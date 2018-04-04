<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = collect([]);

        $users->push(['name' => 'Sebastian Njose', 'email' => 'sebastian@njose.com', 'password' => '1961']);
        $users->push(['name' => 'Patra Asasira', 'email' => 'patraasasira@gmail.com', 'password' => '1234']);

        foreach ($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password'])
            ]);
        }
    }
}
