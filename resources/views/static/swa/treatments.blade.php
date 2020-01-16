@extends('layout')


@section('content')
    <section class="lg:px-16 px-6">
        <header class="lg:mb-12 mb-6 lg:mt-12 mt-6">
            <h1 class="text-teal-500 lg:text-3xl text-xl font-bold text-gradient">Matibabu:</h1>
        </header>

        <div class="flex lg:flex-row flex-col lg:-mx-12">
            <div class="lg:w-1/2 w-full lg:px-12">
                <p class="text-lg leading-loose">
                    Njia bora ya kutibu UTI ni kwa kutumia dawa ulizoandikiwa na daktari. Dawa hiyo itaua bakteria
                    waliosababisha maambukizo na kupunguza dalili. Ni muhimu kwamba unywe dawa hiyo jinsi daktari
                    alivyoamuru na usikose siku ya matibabu. Ni muhimu kutambua kuwa hata UTI ndogo inaweza kuwa na
                    shida kubwa ikiwa haitatibiwa vizuri ikiwa ni pamoja na maambukizo ya figo au damu.
                </p>
            </div>
            <div class="lg:w-1/2 w-full px-12 hidden lg:block">
                <img src="{{ asset('img/illustrations/treatment.svg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
