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

        $users->push(['name' => 'Sebastian Njose', 'phone' => '0712177278', 'email' => 'sebastian@njose.com', 'password' => '1961', 'enabled' => true]);
        $users->push(['name' => 'Patra Asasira', 'phone' => '07875263998', 'email' => 'patraasasira@gmail.com', 'password' => '1234', 'enabled' => false]);

        foreach ($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'phone' => $user['phone'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
                'enabled' => $user['enabled']
            ]);
        }
    }
}
