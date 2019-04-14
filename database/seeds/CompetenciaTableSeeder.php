<?php

use Illuminate\Database\Seeder;

class CompetenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            ['descricao' => 'Compreender as ciências naturais e as tecnologias a elas associadas como construções humanas, percebendo seus papéis nos processos de produção e no desenvolvimento econômico e social da humanidade.'],
            ['descricao' => 'Identificar a presença e aplicar as tecnologias associadas às ciências naturais em diferentes contextos.'],
            ['descricao' => 'Associar intervenções que resultam em degradação ou conservação ambiental a processos produtivos e sociais e a instrumentos ou ações científico-tecnológicos.'],
            ['descricao' => 'Compreender interações entre organismos e ambiente, em particular aquelas relacionadas à saúde humana, relacionando conhecimentos científicos, aspectos culturais e características individuais.'],
            ['descricao' => 'Entender métodos e procedimentos próprios das ciências naturais e aplicá-los em diferentes contextos.'],
            ['descricao' => 'Apropriar-se de conhecimentos da física para, em situações problema, interpretar, avaliar ou planejar intervenções científicotecnológicas.'],
            ['descricao' => 'Apropriar-se de conhecimentos da química para, em situações problema, interpretar, avaliar ou planejar intervenções científicotecnológicas.'],
            ['descricao' => 'Apropriar-se de conhecimentos da biologia para, em situações problema, interpretar, avaliar ou planejar intervenções científicotecnológicas.'],
        ];

        $competencias = [
            [
                'ordem' => 'H1',
                'descricao' => 'Reconhecer características ou propriedades de fenômenos ondulatórios ou oscilatórios, relacionando-os a seus usos em difere ntes contextos.',
                'area' => 1,
            ],
            [
                'ordem' => 'H2',
                'descricao' => 'Associar a solução de problemas de comunicação, transporte, saúde ou outro, com o correspondente desenvolvimento científico e tecnológico.',
                'area' => 1,
            ],
            [
                'ordem' => 'H3',
                'descricao' => 'Confrontar interpretações científicas com interpretações baseadas no senso comum, ao longo do tempo ou em diferentes culturas.',
                'area' => 1,
            ],
            [
                'ordem' => 'H4',
                'descricao' => 'Avaliar propostas de intervenção no ambiente, considerando a qualidade da vida humana ou medidas de conservação, recuperação ou utilização sustentável da biodiversidade.',
                'area' => 1,
            ],
            [
                'ordem' => 'H5',
                'descricao' => 'Dimensionar circuitos ou dispositivos elétricos de uso cotidiano.',
                'area' => 2,
            ],
            [
                'ordem' => 'H6',
                'descricao' => 'Relacionar informações para compreender manuais de instalação ou utilização de aparelhos, ou sistemas tecnológicos de uso comum.',
                'area' => 2,
            ],
            [
                'ordem' => 'H7',
                'descricao' => 'Selecionar testes de controle, parâmetros ou critérios para a comparação de materiais e produtos, tendo em vista a defesa do consumidor, a saúde do trabalhador ou a qualidade de vida.',
                'area' => 2,
            ],
            [
                'ordem' => 'H8',
                'descricao' => 'Identificar etapas em processos de obtenção, transformação, utilização ou reciclagem de recursos naturais, energéticos ou matérias-primas, considerando processos biológicos, químicos ou físicos neles envolvidos.',
                'area' => 3,
            ],
            [
                'ordem' => 'H9',
                'descricao' => 'Compreender a importância dos ciclos biogeoquímicos ou do fluxo energia para a vida, ou da ação de agentes ou fenômenos que podem causar alterações nesses processos.',
                'area' => 3,
            ],
            [
                'ordem' => 'H10',
                'descricao' => 'Analisar perturbações ambientais, identificando fontes, transporte e(ou) destino dos poluentes ou prevendo efeitos em sistemas naturais, produtivos ou sociais.',
                'area' => 3,
            ],
            [
                'ordem' => 'H11',
                'descricao' => 'Reconhecer benefícios, limitações e aspectos éticos da biotecnologia, considerando estruturas e processos biológicos envolvidos em produtos biotecnológicos.',
                'area' => 3,
            ],
            [
                'ordem' => 'H12',
                'descricao' => 'Avaliar impactos em ambientes naturais decorrentes de atividades sociais ou econômicas, considerando interesses contraditórios.',
                'area' => 3,
            ],
            [
                'ordem' => 'H13',
                'descricao' => 'Reconhecer mecanismos de transmissão da vida, prevendo ou explicando a manifestação de características dos seres vivos.',
                'area' => 4,
            ],
            [
                'ordem' => 'H14',
                'descricao' => 'Identificar padrões em fenômenos e processos vitais dos organismos, como manutenção do equilíbrio interno, defesa, relações com o ambiente, sexualidade, entre outros.',
                'area' => 4,
            ],
            [
                'ordem' => 'H15',
                'descricao' => 'Interpretar modelos e experimentos para explicar fenômenos ou processos biológicos em qualquer nível de organização dos sistemas biológicos.',
                'area' => 4,
            ],
            [
                'ordem' => 'H16',
                'descricao' => 'Compreender o papel da evolução na produção de padrões, processos biológicos ou na organização taxonômica dos seres vivos.',
                'area' => 4,
            ],
            [
                'ordem' => 'H17',
                'descricao' => 'Relacionar informações apresentadas em diferentes formas de linguagem e representação usadas nas ciências físicas, químicas ou biológicas, como texto discursivo, gráficos, tabelas, relações matemáticas ou linguagem simbólica.',
                'area' => 5,
            ],
            [
                'ordem' => 'H18',
                'descricao' => 'Relacionar propriedades físicas, químicas ou biológicas de produtos, sistemas ou procedimentos tecnológicos às finalidades a que se destinam.',
                'area' => 5,
            ],
            [
                'ordem' => 'H19',
                'descricao' => 'Avaliar métodos, processos ou procedimentos das ciências naturais que contribuam para diagnosticar ou solucionar problemas de ordem social, econômica ou ambiental.',
                'area' => 5,
            ],
            [
                'ordem' => 'H20',
                'descricao' => 'Caracterizar causas ou efeitos dos movimentos de partículas, substâncias, objetos ou corpos celestes.',
                'area' => 6,
            ],
            [
                'ordem' => 'H21',
                'descricao' => 'Utilizar leis físicas e (ou) químicas para interpretar processos naturais ou tecnológicos inseridos no contexto da termodinâmica e(ou) do eletromagnetismo.',
                'area' => 6,
            ],
            [
                'ordem' => 'H22',
                'descricao' => 'Compreender fenômenos decorrentes da interação entre a radiação e a matéria em suas manifestações em processos naturais ou tecnológicos, ou em suas implicações biológicas, sociais, econômicas ou ambientais.',
                'area' => 6,
            ],
            [
                'ordem' => 'H23',
                'descricao' => 'Avaliar possibilidades de geração, uso ou transformação de energia em ambientes específicos, considerando implicações éticas, ambientais, sociais e/ou econômicas.',
                'area' => 6,
            ],
            [
                'ordem' => 'H24',
                'descricao' => 'Utilizar códigos e nomenclatura da química para caracterizar materiais, substâncias ou transformações químicas.',
                'area' => 7,
            ],
            [
                'ordem' => 'H25',
                'descricao' => 'Caracterizar materiais ou substâncias, identificando etapas, rendimentos ou implicações biológicas, sociais, econômicas ou ambientais de sua obtenção ou produção.',
                'area' => 7,
            ],
            [
                'ordem' => 'H26',
                'descricao' => 'Avaliar implicações sociais, ambientais e/ou econômicas na produção ou no consumo de recursos energéticos ou minerais, identificando transformações químicas ou de energia envolvidas nesses processos.',
                'area' => 7,
            ],
            [
                'ordem' => 'H27',
                'descricao' => 'Avaliar propostas de intervenção no meio ambiente aplicando conhecimentos químicos, observando riscos ou benefícios.',
                'area' => 7,
            ],
            [
                'ordem' => 'H28',
                'descricao' => 'Associar características adaptativas dos organismos com seu modo de vida ou com seus limites de distribuição em diferentes ambientes, em especial em ambientes brasileiros.',
                'area' => 8,
            ],
            [
                'ordem' => 'H29',
                'descricao' => 'Interpretar experimentos ou técnicas que utilizam seres vivos, analisando implicações para o ambiente, a saúde, a produção de alimentos, matérias primas ou produtos industriais.',
                'area' => 8,
            ],
            [
                'ordem' => 'H30',
                'descricao' => 'Avaliar propostas de alcance individual ou coletivo, identificando aquelas que visam à preservação e a implementação da saúde individual, coletiva ou do ambiente.',
                'area' => 8,
            ],
        ];
    }
}
