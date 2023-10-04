<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insertOrIgnore([

            [
                'name' => 'Director ICT',
                'role' => 'staff',
                'email' => 'd-ict@dtsapi.icreateagency.com',
                'password' => Hash::make('fmfdts@2023'),
                'id' => 1

            ],
            [
                'name' => 'Deputy Director ICT',
                'role' => 'staff',
                'email' => 'dd-ict@dtsapi.icreateagency.com',
                'password' => Hash::make('fmfdts@2023'),
                'id' => 2

            ],
            [
                'name' => 'Assistant Director ICT',
                'role' => 'staff',
                'email' => 'ad-ict@dtsapi.icreateagency.com',
                'password' => Hash::make('fmfdts@2023'),
                'id' => 3

            ],
            [
                'name' => 'CPA ICT',
                'role' => 'staff',
                'email' => 'cpa-ict@dtsapi.icreateagency.com',
                'password' => Hash::make('fmfdts@2023'),
                'id' => 4

            ],
            [
                'name' => 'CCE ICT Registry ',
                'role' => 'staff',
                'email' => 'cce-ict@dtsapi.icreateagency.com',
                'password' => Hash::make('fmfdts@2023'),
                'id' => 5

            ],
            [
                'name' => 'Victor Asuquo',
                'role' => 'visitor',
                'email' => 'victechsystems55@gmail.com',
                'password' => Hash::make('passmyword'),
                'id' => 6

            ],
            [
                'name' => 'Super Admin',
                'role' => 'super-admin',
                'email' => 'superadmin@mail.com',
                'password' => Hash::make('passmyword'),
                'id' => 7

            ],

        ]);
    }
}
