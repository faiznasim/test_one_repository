<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//DB::table('role_user')->truncate();
		//DB::table('role_user')->delete();
        Role::truncate();

        Role::create([
            'name' => 'admin'
        ]);

        Role::create([
            'name' => 'customer'
        ]);
    }
}
