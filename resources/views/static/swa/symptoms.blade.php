@extends('layout')

@section('content')
    <section class="px-16 mx-auto">
        <header class="mb-12 mt-12">
            <h1 class="text-teal-500 text-3xl font-bold text-gradient">Dalili:</h1>
        </header>
    </section>

    <section class="flex px-16 pb-24">
        <div class="w-1/2">
            <h2 class="text-sm uppercase tracking-wider font-semibold mb-4">
                Dalili za UTI’s
            </h2>
            <ul class="align-top">
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                    </svg>
                    <span class="ml-4">Kuwa na hali ya mkwamo wa mkojo</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Kuwa na maumivu wakati ya kukojoa</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Kuwa na hali ya mkojo kutoka toka kwa kiasi kidogo</span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Mkojo unaokuwa kama mawingu</span>
                </li>
                <li class="flex  mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">
                        Kuwa na mkojo wenye rangi nyekundu, wenye rangi kama pinki au rangi kama ya
                        kokakola (kuwa na ishara ya damu kwenye mkojo)
                    </span>
                </li>
                <li class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                    <span class="ml-4">Kuwa na mkojo wenye harufu kali</span>
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
                <h3 class="text-xl font-bold text-teal-800 mb-4">Dalili za kawaida zinazotokea kwa wanawake.</h3>
                <div class="text-lg text-gray-900">
                    Wanawake wenye maambukizi ya chini ya njia ya mkojo wanaweza kuwa na maumivu ya fupanyonga. Hii ni
                    pamoja na dalili zilizoorodheshwa hapo juu. Dalili za maambukizi ya juu ya njia ya mkojo zinafanana
                    kwa wanawake na wanaume.
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
                <h3 class="text-xl font-bold text-teal-800 mb-4">Dalili za kwaida zinazotokea kwa wanaume.</h3>
                <div class="text-lg text-gray-900">
                    Dalili za maambukizi ya chini ya njia ya mkojo “UTI” kwa wanaume ni pamoja na maumivu ya rectum
                    (rectal) pamoja na dalili ambazo zimetajwa hapo juu. Dalili za maambukizi ya juu ya njia ya mkojo
                    kwa wanaume ni sawa na dalili zile zinazowakumba au zinazotokea kwa wanawake.
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-teal-700 bg-gradient">
        <div class="w-2/3 mx-auto text-teal-100 text-4xl">
            Maambukizi ya njia ya mkojo “UTI” hayatoi ishara na dalili mara kwa mara lakini maambukizi haya yanapotoa
            ishara na dalili zinaweza kujumuisha baadhi ya ishara na dalili zilizoorodheshwa hapo juu.
        </div>
    </section>

    <section class="py-24">
        <div class="px-16">
            <header class="mb-12">
                <h2 class="mb-4 font-semibold text-2xl text-teal-700">AINA ZA UTIs</h2>
                <p class="text-gray-700 text-lg">
                    Kila aina ya maambukizi ya “UTI” inaweza kutoa au kuonyesha ishara na dalili yake na hali hii
                    itategemeanan na sehemu ambapo patakuwa na maambukizi hayo.
                </p>
            </header>
            <table class="w-full text-left">
                <thead class="text-sm uppercase text-gray-500 tracking-wider">
                    <tr class="border-b">
                        <th class="py-4">
                            Sehemu ya maambukizi ya njia ya mkojo “UTI”
                        </th>
                        <th class="py-4 px-4">
                            Ishara na dalili
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b align-top">
                        <th class="py-6 capitalize text-gray-700">Urethra</th>
                        <td class="py-6 px-4">
                            <ul>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Kuwa na maumivu wakati wa kukojoa</span>
                                </li>
                            </ul>

                        </td>
                    </tr>
                    <tr class="border-b align-top">
                        <th class="py-6 capitalize text-gray-700">Kibofu</th>
                        <td class="py-6 px-4">
                            <ul>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Shinikizo katika fupanyonga</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Maumivu ya chini ya tumbo</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Kukojoa mara kwa mara, na kuwa na maumivu wakati ya kukojoa</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Mkojo kuwa na damu</span>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="align-top">
                        <th class="py-6 capitalize text-gray-700">Figo</th>
                        <td class="py-6 px-4">
                            <ul>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Kuwa na maumivu ya juu ya upande kwenye figo</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Kuwa na homa kali</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Kuwa na hali ya kutetemeka</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Kuwa na kichefuchefu</span>
                                </li>
                                <li class="flex items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-teal-500 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                                    </svg>
                                    <span class="ml-2">Kutapika</span>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
