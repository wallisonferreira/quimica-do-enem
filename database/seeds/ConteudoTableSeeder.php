<?php

use Illuminate\Database\Seeder;
use App\Conteudo;

class ConteudoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conteudos = [
            ['descricao' => 'Termodinâmica -Termoquímica'],
            ['descricao' => 'Eletroquímica'],
            ['descricao' => 'Química orgânica'],
            ['descricao' => 'Química verde'],
            ['descricao' => 'Soluções'],
            ['descricao' => 'Gases'],
            ['descricao' => 'Ciclos do carbono – nitrogênio'],
            ['descricao' => 'Tipos de ligação'],
            ['descricao' => 'Radioatividade'],
            ['descricao' => 'Propriedades coligativas'],
            ['descricao' => 'Reações químicas'],
            ['descricao' => 'Análise imediata'],
            ['descricao' => 'Química inorgânica'],
            ['descricao' => 'Propriedades químicas'],
            ['descricao' => 'Equilíbrio químico'],
            ['descricao' => 'Estequiometria'],
            ['descricao' => 'Interações intermoleculares'],
            ['descricao' => 'Atomística'],
            ['descricao' => 'Propriedades periódicas'],
        ];

        foreach ($conteudos as $conteudo) {
            Conteudo::create([
                'descricao' => $conteudo['descricao']
            ]);
        }
    }
}
