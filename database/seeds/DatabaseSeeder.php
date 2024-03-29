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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        \App\User::truncate();
        \App\Conteudo::truncate();
        \App\Area::truncate();
        \App\Competencia::truncate();

        $this->call(UserTableSeeder::class);
        $this->call(CompetenciaTableSeeder::class);
        $this->call(ConteudoTableSeeder::class);
    }
}
