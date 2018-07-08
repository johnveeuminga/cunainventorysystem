<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();

        $user->name = 'Cuna Admin';
        $user->username = 'admin';
        $user->password = bcrypt('password');
        $user->account_type = 'admin';

        $user->save();
    }
}
