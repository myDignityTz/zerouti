@extends('layout')

@section('content')
    <section class="w-2/3 mx-auto">
        <header class="mb-12 mt-12">
            <h1 class="text-teal-500 text-3xl font-bold">Symptoms:</h1>
        </header>
    </section>

    <section class="w-2/3 mx-auto pb-24">
        <div>
            <h2 class="text-sm uppercase tracking-wider font-semibold mb-4">Symptoms of UTI's</h2>
            <ul>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Have a urinary tract</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Having pain while urinating</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Have urine from a small amount</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Cloudy-like urine</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Have a reddish-brown, pinkish-brown urine acne-like color (having a sign of blood in the urine)</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Have a strong-smelling urine</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="flex border-t border-teal-200">
        <div class="w-1/2 px-8 py-24 bg-teal-100">
            <h3 class="text-2xl font-semibold text-teal-800 mb-4">The most common symptoms occur in women.</h3>
            <div class="text-lg text-gray-900">
                Women with lower urinary tract infections may have pain in the pelvis.
                This includes the symptoms listed above. Symptoms of upper urinary tract
                infections are similar in women and men.
            </div>
        </div>
        <div class="w-1/2 px-8 py-24 bg-white">
            <h3 class="text-2xl font-semibold text-teal-800 mb-4">Most common symptoms occur in men.</h3>
            <div class="text-lg text-gray-900">
                Symptoms of lower urinary tract infection (UTI) in men include rectum (rectal) pain as well as the
                symptoms mentioned above. Symptoms of upper urinary tract infections in men are similar to the symptoms
                that are affecting or occurring in women.
            </div>
        </div>
    </section>

    <section class=" py-24 bg-teal-700">
        <div class="w-2/3 mx-auto text-teal-100 text-4xl">
            Urinary tract infection "UTI" does not always show signs and symptoms but when these infections present the
            signs and symptoms it may include some of the signs and symptoms listed above.
        </div>
    </section>
@endsection
