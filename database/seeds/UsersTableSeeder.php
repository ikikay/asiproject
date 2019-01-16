<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            [
                'users_nom' => 'ADMIN',
                'users_prenom' => 'Admin',
                'users_email' => 'admin@admin.fr',
                'users_password' => bcrypt('P@ssw0rd'),
                'created_at' => Carbon::parse('2000-01-01'),
                'updated_at' => Carbon::parse('2000-01-01')
            ], [
                'users_nom' => 'COURBEZ',
                'users_prenom' => 'Julian',
                'users_email' => 'julian.courbez@gmail.com',
                'users_password' => bcrypt('P@ssw0rd'),
                'created_at' => Carbon::parse('2000-01-01'),
                'updated_at' => Carbon::parse('2000-01-01')
            ]
        ]);
    }

}
