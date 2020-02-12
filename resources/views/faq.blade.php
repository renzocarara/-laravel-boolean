{{-- ---------------------------------------------------------------------------
NOTA: quando questa view viene richiamata,
riceve in ingresso 2 variabili, ovvero 2 array: $lista_faq_sx e $lista_faq_dx
che contengono tutte le faq (si vede invocazione nel file web.php)
--------------------------------------------------------------------------- --}}

@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "FAQ - Boolean Careers")

@section('content')
<main>

    <section id="faq-section" class="first_section">

        <h1>Domande frequenti</h1>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>

        <div class="container-fluid">
            <div class="row">

                <div id="left_faq" class="col-xl-6">
                    <h2>Prima del corso</h2>

                    <div class="accordion" id="leftFaqAccordion">

                        {{-- scorro l'array ed estraggo le faq (domanda + risposta) una ad una --}}
                        @foreach ($lista_faq_sx as $index => $faq)

                        <div class="card">
                            <div class="card-header clearfix" id="leftQuestion_{{ $index }}">
                                <h3 class="mb-0">
                                    <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse" data-target="#leftAnswer_{{ $index }}" aria-expanded="true" aria-controls="leftAnswer_{{ $index }}">
                                        {{-- testo domanda --}}
                                        {{ $faq['q'] }}
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h3>
                            </div>

                            <div id="leftAnswer_{{ $index }}" class="collapse" aria-labelledby="leftQuestion_{{ $index }}" data-parent="#leftFaqAccordion">
                                <div class="card-body">
                                    {{-- testo risposta --}}
                                    {{$faq['a']}}
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>
                <div id="right_faq" class="col-xl-6">
                    <h2>Dopo il corso</h2>

                    <div class="accordion" id="rightFaqAccordion">

                        {{-- scorro l'array ed estraggo le faq (domanda + risposta) una ad una --}}
                        @foreach ($lista_faq_dx as $index => $faq)

                        <div class="card">
                            <div class="card-header clearfix" id="rightQuestion_{{ $index }}">
                                <h3 class="mb-0">
                                    <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse" data-target="#rightAnswer_{{ $index }}" aria-expanded="true" aria-controls="rightAnswer_{{ $index }}">
                                        {{-- testo domanda --}}
                                        {{ $faq['q'] }}
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h3>
                            </div>

                            <div id="rightAnswer_{{ $index }}" class="collapse" aria-labelledby="rightQuestion_{{ $index }}" data-parent="#rightFaqAccordion">
                                <div class="card-body">
                                    {{-- testo risposta --}}
                                    {{$faq['a']}}
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>

    </section>

</main>

@endsection