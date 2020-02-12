@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "FAQ - Boolean Careers")

@section('content')
<main>
    {{-- {{ dd($lista_faq_sx) }} --}}
    {{-- {{ dd($lista_faq_dx) }} --}}

    <section id="faq-section" class="first_section">

        {{-- @if(!empty($lista_faq_sx))
            @foreach ($lista_faq_sx as $faq)
                <p>faq n. {{$loop->iteration}} domanda: {{$faq['q']}}</p>
                <p>faq n. {{$loop->iteration}} risposta: {{$faq['a']}}</p>
            @endforeach
        @else
            <p>L'elenco faq è vuoto.</p>
        @endif --}}

        <h1>Domande frequenti</h1>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>

        <div class="container-fluid">
            <div class="row">

                <div id="left_faq" class="col-xl-6">
                    <h2>Prima del corso</h2>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header clearfix" id="headingOne">
                                <h3 class="mb-0 float-left">
                                    Chi può fare il corso Boolean?
                                </h3>
                                <button class="btn btn-link float-right collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Chiunque abbia una forte curiosità verso il mondo della programmazione e voglia di imparare a fare il mestiere di sviluppatore.
                                    Età e curriculum non sono una discriminante: infatti, i nostri studenti hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza lavorativa, ma anche affermati professionisti che vogliono cambiare
                                    settore.Se non hai mai programmato o se hai già seguito qualche corso ma senti di non aver approfondito abbastanza per diventare programmatore, Boolean è il corso che fa per te.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header clearfix" id="headingTwo">
                                <h3 class="mb-0 float-left">
                                    Che competenze devo avere per iniziare il corso?
                                </h3>
                                <button class="btn btn-link float-right collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Il corso parte da zero, quindi non serve alcuna competenza di programmazione, è necessario però superare il processo di selezione.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header clearfix" id="headingThree">
                                <h3 class="mb-0 float-left">
                                    In cosa consiste il processo di selezione?
                                </h3>
                                <button class="btn btn-link float-right collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Boolean è un corso intensivo che richiede impegno costante, dedizione e un’attitudine al problem solving. Per assicurarci che ogni studente abbia concrete possibilità di diventare uno sviluppatore e iniziare una
                                    nuova carriera, selezioniamo gli studenti tramite un test di logica a risposta multipla e un colloquio motivazionale. Contattaci per iniziare il tuo percorso o per saperne di più!
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div id="right_faq" class="col-xl-6">
                    <h2>Dopo il corso</h2>

                </div>
            </div>
        </div>


    </section>

</main>

@endsection
