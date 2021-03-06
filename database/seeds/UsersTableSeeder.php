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
                'email' => 'admin@admin.fr',
                'password' => bcrypt('P@ssw0rd'),
                'role' => 'admin',
                'created_at' => Carbon::parse('2000-01-01'),
                'updated_at' => Carbon::parse('2000-01-01')
            ], [
                'users_nom' => 'COURBEZ',
                'users_prenom' => 'Julian',
                'email' => 'julian.courbez@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('P@ssw0rd'),
                'created_at' => Carbon::parse('2000-01-01'),
                'updated_at' => Carbon::parse('2000-01-01')
            ], [
                'users_nom' => 'MONROLIN',
                'users_prenom' => 'Lucas',
                'email' => 'lucas.monrolin@gmail.com',
                'role' => 'user',
                'password' => bcrypt('Momolin'),
                'created_at' => Carbon::parse('2000-01-01'),
                'updated_at' => Carbon::parse('2000-01-01')
            ]
        ]);
    }

}
