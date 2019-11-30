@extends('layout')


@section('content')
    <section class="px-16">
        <header class="mb-12 mt-12">
            <h1 class="text-teal-500 text-3xl font-bold text-gradient">Treatments:</h1>
        </header>

        <div class="flex -mx-12">
            <div class="w-1/2 px-12">
                <p class="text-lg leading-loose">
                    The best way to treat a UTI is by taking antibiotics prescribed by a doctor.  The medicine will kill the
                    bacteria that caused the infection and will relieve the symptoms. It is important that you take the
                    medicine exactly how the doctor prescribed and not miss a day of treatment. It is important to note that
                    even a minor UTI can have serious complications if not treated properly including kidney or blood infections.
                </p>
            </div>
            <div class="w-1/2 px-12">
                <img src="{{ asset('img/illustrations/treatment.svg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
