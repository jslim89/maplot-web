<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        if (app()->environment() === 'production') {
            exit('Bro, you\'re on production!!! Please stop doing this!!!');
        }

        DB::table('user')->truncate();

        User::create([
            'id'          => 1,
            'name'        => 'Js Lim',
            'username'    => 'js',
            'password'    => Hash::make('water2fall'),
        ]);
    }
}
