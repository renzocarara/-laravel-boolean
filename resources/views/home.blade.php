@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "Il corso per diventare web developer e trovare un nuovo lavoro")

@section('content')

<main>

    <section class="jumbo first_section container d-flex">

        <div class="jumbo-left">

            <h1>DIVENTA
                <strong>SVILUPPATORE WEB</strong></h1>
            <div class="jumbo-left-img-wrapper">
                <img id="jumbo-left-img" class="img-fluid" alt="Impara da casa tua" src="https://www.boolean.careers/images/homepage/pc-black-gif.gif">
            </div>
            <p><strong>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</strong></p>
            <ul>
                <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
                <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
                <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
            </ul>

        </div>

        <div class="jumbo-right align-self-center">
            <img id="jumbo-right-img" alt="Impara da casa tua" src="https://www.boolean.careers/images/homepage/pc-black-gif.gif">
        </div>

    </section>

    <section id="home-section-1" class="container-fluid">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <p>98%</p>
                    <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
                </div>

                <div class="col-lg-4 text-center">
                    <p>€ 23.000</p>
                    <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
                </div>

                <div class="col-lg-4 text-center">
                    <p>#1</p>
                    <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
                </div>
            </div>
        </div>

    </section>

    <section id="home-section-2">

    </section>

    <section id="home-section-3">

    </section>

</main>

@endsection