<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon as Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(config('auth.table'))->truncate();
        //Add the master administrator, user id of 1
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('hoan123456'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Default User',
                'email' => 'user@user.com',
                'password' => bcrypt('hoan123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Teacher User',
                'email' => 'teacher@teacher.com',
                'password' => bcrypt('hoan123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table(config('auth.table'))->insert($users);

        if(env('DB_DRIVER') == 'mysql')
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
