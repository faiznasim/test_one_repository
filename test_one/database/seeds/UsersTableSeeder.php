<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $customerRole = Role::where('name', 'customer')->first();

        $adminUser = User::create([
            'name' => 'admin',
            'email' => 'admin@devskill.com',
            'password' => bcrypt('123456789'),
            'mobile' => '01234567891',
            'shipping address' => 'DevSkill, Dhaka',
        ]);

        $customerUser = User::create([
            'name' => 'nasim',
            'email' => 'faiznasim.aust@gmail.com',
            'password' => bcrypt('12345678'),
            'mobile' => '01711217500',
            'shipping address' => 'Khulna',
        ]);

        $adminUser->roles()->attach($adminRole);
        $adminUser->roles()->attach($customerRole);
        $customerUser->roles()->attach($customerRole);
    }
}
