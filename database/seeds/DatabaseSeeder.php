<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ContratsTableSeeder::class);
        $this->call(NiveauxTableSeeder::class);
        $this->call(QuestionnaireTableSeeder::class);
        $this->call(ThemesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(ReponsesPredefiniesTableSeeder::class);
        $this->call(JeuDeTestTableSeeder::class);
    }
}
