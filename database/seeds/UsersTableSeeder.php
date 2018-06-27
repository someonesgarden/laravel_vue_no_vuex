<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Daisuke Nishimura',
            'email' => 'd@someonesgarden.org',
            'password' => Hash::make('atala0628'),
            'saved' => [1,3,5,7]
        ]);
    }
}
