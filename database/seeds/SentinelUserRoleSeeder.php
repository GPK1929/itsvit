<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentinelUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_users')->delete();

        $adminUser = Sentinel::findByCredentials(['login' => 'ak@itsvit.org']);
        $adminRole = Sentinel::findRoleByName('Admins');
        // Assign the roles to the users
        $adminRole->users()->attach($adminUser);

        $this->command->info('Users assigned to roles seeded!');
    }
}
