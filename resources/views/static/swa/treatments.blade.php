@extends('layout')


@section('content')
    <section class="px-16">
        <header class="mb-12 mt-12">
            <h1 class="text-teal-500 text-3xl font-bold text-gradient">Matibabu:</h1>
        </header>

        <div class="flex -mx-12">
            <div class="w-1/2 px-12">
                <p class="text-lg leading-loose">
                    Njia bora ya kutibu UTI ni kwa kutumia dawa ulizoandikiwa na daktari. Dawa hiyo itaua bakteria
                    waliosababisha maambukizo na kupunguza dalili. Ni muhimu kwamba unywe dawa hiyo jinsi daktari
                    alivyoamuru na usikose siku ya matibabu. Ni muhimu kutambua kuwa hata UTI ndogo inaweza kuwa na
                    shida kubwa ikiwa haitatibiwa vizuri ikiwa ni pamoja na maambukizo ya figo au damu.
                </p>
            </div>
            <div class="w-1/2 px-12">
                <img src="{{ asset('img/illustrations/treatment.svg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
