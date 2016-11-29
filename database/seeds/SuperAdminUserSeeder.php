<?php

use Illuminate\Database\Seeder;
use App\User;

class SuperAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::find(1);
        $superAdmin->super_admin = 1;
        $superAdmin->save();
    }
}
