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
        User::create([
            'name' => 'Ari',
            'email'    => 'ari@dxtr.asia',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'Maulana',
            'email'    => 'maulana@dxtr.asia',
            'password' => Hash::make('123456'),
        ]);
    }
}
