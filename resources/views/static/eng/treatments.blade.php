@extends('layout')


@section('content')
    <section class="lg:px-16 px-6">
        <header class="lg:mb-12 mb-6 lg:mt-12 mt-6">
            <h1 class="text-teal-500 lg:text-3xl text-xl font-bold text-gradient">Treatments:</h1>
        </header>

        <div class="flex lg:flex-row flex-col lg:-mx-12">
            <div class="lg:w-1/2 w-full lg:px-12">
                <p class="text-lg leading-loose">
                    The best way to treat a UTI is by taking antibiotics prescribed by a doctor.  The medicine will kill the
                    bacteria that caused the infection and will relieve the symptoms. It is important that you take the
                    medicine exactly how the doctor prescribed and not miss a day of treatment. It is important to note that
                    even a minor UTI can have serious complications if not treated properly including kidney or blood infections.
                </p>
            </div>
            <div class="lg:w-1/2 w-full px-12 hidden lg:block">
                <img src="{{ asset('img/illustrations/treatment.svg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
