<?php

use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
            'role_id'  => '1',
            'name'     => 'Gomab.admin',
            'firstname'  => 'Enrique.admin',
            'username'   => 'admin',
            'birthday'   => '1989-09-21',
            'email'      => 'admin@gomab.com',
            'password'   => bcrypt('rootadmin')
        ]);

        DB::table('users')->insert([
            'role_id'  => '2',
            'name'     => 'Gomab.author',
            'firstname'  => 'Enrique.author',
            'username'   => 'author',
            'birthday'   => '1988-09-21',
            'email'      => 'author@gomab.com',
            'password'   => bcrypt('rootauthor')
        ]);

        DB::table('users')->insert([
            'role_id'  => '3',
            'name'     => 'Gomab.consumer',
            'firstname'  => 'Enrique.consumer',
            'username'   => 'consumer',
            'birthday'   => '1990-09-21',
            'email'      => 'consumer@gomab.com',
            'password'   => bcrypt('rootconsumer')
        ]);
    }
}
