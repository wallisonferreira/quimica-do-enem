@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <!-- Card -->
            <div class="card card-cascade wider reverse">

            <!-- Card image -->
            {{--  <div class="view view-cascade overlay">
                <img class="card-img-top" src="{{ asset("img/fluxograma.png") }}" alt="Card image cap">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>  --}}

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

                <!-- Title -->
                <h4 class="card-title"><strong>A teoria de resposta ao item</strong></h4>
                <!-- Subtitle -->
                <h6 class="font-weight-bold indigo-text py-2">T.R.I. no ENEM</h6>
                <!-- Text -->
                <p class="card-text text-justify">Sabe-se que o ENEM utiliza-se da Teoria de Resposta ao Item – TRI para construção das questões nas diferentes áreas do conhecimento. A TRI é resultado dos primeiros estudos em Psicometria, consistindo em um modelo matemático para mensurar a probabilidade de um aluno apresentar determinada resposta a um item (questão).
                </p>
                <p class="card-text"><i class="fas fa-quote-left"></i>O modelo utilizado no ENEM é o modelo logístico de três parâmetros que, além dos parâmetros de discriminação e de dificuldade, também faz uso de um parâmetro para controlar o acerto casual. Este último parâmetro tem um papel bastante importante nas avaliações com itens de múltipla escolha, caso do ENEM. Esse parâmetro representa a proficiência mínima que o aluno deve possuir para que sua probabilidade de acerto seja alta, ou seja, ele poderia ser chamado de “proficiência do item” (INEP, 2012).<i class="fas fa-quote-right"></i>
                </p>
                <p class="card-text text-justify">Primeiramente deve-se compreender do que se trata o traço latente, que são
                propriedades psicológicas que a princípio não poderiam ser mensuradas
                estatisticamente, como trata Araújo et al., (2009) “tais como proficiência em
                determinado conteúdo na avaliação educacional, atitude em relação a mudança
                organizacional, nível de estresse, nível de depressão, qualidade de vida, entre outros.”
                Muitos autores relatam a produção de inúmeras pesquisas que foram desenvolvidas do
                século 19 até os dias de hoje na tentativa de propor um modelo totalmente estatístico
                capaz de medir e criar comparativos para o traço latente. Desde a Teoria Clássica de
                Medidas e do desenvolvimento da Análise Fatorial, foram realizadas inúmeras
                propostas até chegar a Teoria da Resposta ao Item, que revolucionou o cenário de teoria
                de medidas nessa área. No início do século 20 houve um grande salto nessas propostas,
                quando “Thurstone desenvolveu um importante precursor probabilístico da TRI
                denominado Lei dos Julgamentos Comparativos” Araújo et al., (2009). Esse modelo
                introduziu duas vertentes importantes para a TRI, que são os mecanismos acumulativo e
                de desdobramento. O mecanismo acumulativo funciona apenas para respostas
                dicotômicas, que são questões corrigidas como certo ou errado, já o modelo de
                desdobramento trata do acerto casual, ambos utilizam matematicamente a função
                logística para tratar dos dados estatisticamente.
                </p>
                <p class="card-text text-justify">O importante é considerar o avanço que a TRI trouxe para os estudos de
                Psicometria, pois, finalmente tornou-se possível desenvolver modelos matemáticos com
                o auxílio de programas de computador avançados para definir os traços latentes do

                público-alvo além de mensurar também “a relação entre a probabilidade de o indivíduo
                dar uma resposta correta a um item e os parâmetros definidos para os itens, dentro da
                área de conhecimento em estudo” (ARAÚJO et al., 2009).
                </p>
                <p class="card-text text-justify">Assim, o desenvolvimento formal da teoria só ganhou força em 1950 quando
                Frederic Lord fez uso de ferramentas computacionais fundamentais para colocar a teoria
                em prática. A Teoria da Resposta ao Item superou a Teoria Clássica de Medidas, pois o
                “novo” instrumento de medida não depende das características dos examinados que irão
                se submeter aos questionários e testes, o que era considerado como uma clara limitação
                da Teoria Clássica.
                </p>
                <p class="card-text text-justify">Os modelos da TRI dependem fundamentalmente do tipo de item apresentado e
                do processo de construção e desenvolvimento da resposta, o modelo utilizado no ENEM
                é de natureza acumulativa, em que a “probabilidade de um indivíduo escolher ou dar
                uma resposta correta ao item aumenta com a ampliação do seu traço latente, assim,
                níveis maiores de traço latente conduzem a valores mais altos de probabilidade de
                resposta correta” (ARAÚJO et al., 2009). Ou seja, conforme o aluno responde o
                questionário, estatisticamente cria-se no momento da correção uma espécie de padrão
                para o seu traço latente – suas capacidades de responder um item corretamente – que
                funciona como a medida da proficiência do mesmo, criando um tipo de escala de
                capacidades dentro dos conteúdos abordados nas mais variadas formas possíveis.
                Assim, qualquer resposta considerada correta a um item que de acordo com o traço
                latente do aluno esteja fora da sua proficiência naquele tema, será considerado acerto
                casual. E este, por sua vez, é considerado um dos maiores trunfos da TRI dentro do
                Modelo Logístico de 3 parâmetros.
                </p>
                <p class="card-text text-justify">Tendo em vista que em questionários extensos e diversos onde é possível que
                ocorra acertos casuais, como ocorre nas provas do ENEM, essa medida de proficiência
                da TRI considera não apenas o número de acertos, mas também, o padrão de respostas
                do aluno, pois, “a TRI surgiu como uma forma de considerar cada item particularmente,
                sem relevar os escores totais; portanto, as conclusões não dependem exclusivamente do
                teste ou questionário, mas de cada item que o compõe” (ARAÚJO et al., 2009). Ou
                seja, cada item de forma isolada passa por pré-testes que definem a proficiência mínima
                que o estudante deve ter desenvolvido para responder corretamente o mesmo. Assim,
                alunos com a mesma quantidade de acertos podem receber notas diferentes, onde o
                aluno que apresentar maior coerência de acordo com a prova no geral obterá maior nota.

                Sendo assim, a prova é capaz de mensurar o nível de conhecimento do aluno sem
                considerar apenas um aspecto fixado em acertos e erros.
                </p>

                <!-- Linkedin -->
                <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                <!-- Twitter -->
                <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                <!-- Dribbble -->
                <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

            </div>

            </div>
            <!-- Card -->
        </div>
    </div>
@endsection

{{--  url('{{ asset("img/fluxograma.png") }}')  --}}