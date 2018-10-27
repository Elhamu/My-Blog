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
        User::create([
           'name'  => 'elham usama',
           'email'  => 'elhamusama@gmail.com',
           
           'password' =>Hash::make('123456'),
           'url' =>'Tulips',
           'remember_token' => str_random(10),
        ]);
    }
}
