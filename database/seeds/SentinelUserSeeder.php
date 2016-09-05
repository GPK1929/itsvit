<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentinelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        Sentinel::registerAndActivate([
            'email'         => 'ak@itsvit.org',
            'password'      => 'admin',
            'first_name'    => 'Igor',
            'last_name'     => 'Nikolaev',
        ]);

    
        $this->command->info('Users seeded!');

    }
}
