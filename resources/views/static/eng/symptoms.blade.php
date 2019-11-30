@extends('layout')

@section('content')
    <section class="px-16 mx-auto">
        <header class="mb-12 mt-12">
            <h1 class="text-teal-500 text-3xl font-bold text-gradient">Symptoms:</h1>
        </header>
    </section>

    <section class="flex px-16 pb-24">
        <div class="w-1/2">
            <h2 class="text-sm uppercase tracking-wider font-semibold mb-4">Symptoms of UTI's</h2>
            <ul class="align-top">
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                    </svg>
                    <span class="ml-4">Pain or burning sensation when urinating</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Strong and frequent urge to urinate</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Cloudy, bloody or strong smelling urine</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Nausea and vomiting</span>
                </li>
                <li class="flex  mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Muscle aches and abdominal pain</span>
                </li>
            </ul>
        </div>
        <div class="w-1/2">
            <div class="px-12">
                <img src="{{ asset('img/illustrations/symptoms.svg') }}" alt="">
            </div>
        </div>
    </section>

    <section class="flex">
        <div class="flex w-1/2 px-16 py-24 bg-teal-100 border-r border-teal-200">
            <div class="bg-gradient h-16 w-16 mr-6 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current text-white">
                    <path fill="none" d="M0 0h24v24H0z"/><path d="M11 15.934A7.501 7.501 0 0 1 12 1a7.5 7.5 0 0 1 1 14.934V18h5v2h-5v4h-2v-4H6v-2h5v-2.066zM12 14a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11z"/>
                </svg>
            </div>
            <div class="w-4/5">
                <h3 class="text-xl font-bold text-teal-800 mb-4">The most common symptoms occur in women.</h3>
                <div class="text-lg text-gray-900">
                    Women with lower urinary tract infections may have pain in the pelvis.
                    This includes the symptoms listed above. Symptoms of upper urinary tract
                    infections are similar in women and men.
                </div>
            </div>
        </div>
        <div class="flex w-1/2 px-16 py-24 bg-teal-100">
            <div class="bg-gradient h-16 w-16 mr-6 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current text-white">
                    <path fill="none" d="M0 0h24v24H0z"/><path d="M15.05 8.537L18.585 5H14V3h8v8h-2V6.414l-3.537 3.537a7.5 7.5 0 1 1-1.414-1.414zM10.5 20a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11z"/>
                </svg>
            </div>
            <div class="w-4/5">
                <h3 class="text-xl font-bold text-teal-800 mb-4">Most common symptoms occur in men.</h3>
                <div class="text-lg text-gray-900">
                    Symptoms of lower urinary tract infection (UTI) in men include rectum (rectal) pain as well as the
                    symptoms mentioned above. Symptoms of upper urinary tract infections in men are similar to the symptoms
                    that are affecting or occurring in women.
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-teal-700 bg-gradient">
        <div class="w-2/3 mx-auto text-teal-100 text-4xl">
            Urinary tract infection "UTI" does not always show signs and symptoms but when these infections present the
            signs and symptoms it may include some of the signs and symptoms listed above.
        </div>
    </section>

    <section class="py-24">
        <div class="px-16">
            <header class="mb-12">
                <h2 class="mb-4 font-semibold text-2xl text-teal-700">TYPES OF UTIs</h2>
                <p class="text-gray-700 text-lg">
                    Each type of UTI" infection can give or show signs and symptoms and this will depend on the location of
                    the infection.
                </p>
            </header>
            <table class="w-full text-left">
                <thead class="text-sm uppercase text-gray-500 tracking-wider">
                    <tr class="border-b">
                        <th class="py-4">Urinary tract infection "UTI"</th>
                        <th class="py-4 px-4">Signs and symptoms</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b align-top">
                        <th class="py-6 capitalize text-gray-700">urethritis</th>
                        <td class="py-6 px-4">
                            <ul>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Have pain while urinating</span>
                                </li>
                            </ul>

                        </td>
                    </tr>
                    <tr class="border-b align-top">
                        <th class="py-6 capitalize text-gray-700">Cystitis</th>
                        <td class="py-6 px-4">
                            <ul>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Pressure in the diaphragm</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Lower abdominal pain</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Frequent urination, and pain during urination</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Urine having blood</span>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="align-top">
                        <th class="py-6 capitalize text-gray-700">cystitis</th>
                        <td class="py-6 px-4">
                            <ul>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Having upper-back pain in the kidney</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Have a high fever</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Have a shaking situation</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Have nausea</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Vomiting</span>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
