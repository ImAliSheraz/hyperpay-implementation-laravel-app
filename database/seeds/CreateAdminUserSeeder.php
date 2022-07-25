<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Ali Sheraz',
            'email' => 'ali.sheraz@novatoresols.com',
            'password' => bcrypt('Demo@123')
        ]);
    }
}
