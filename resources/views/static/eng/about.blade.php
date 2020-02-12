@extends('layout')


@section('content')
    <section class="lg:w-2/3 lg:px-0 mx-auto w-full px-6">
        <header class="lg:mb-12 lg:mt-12 mt-6 mb-6">
            <h1 class="text-teal-500 lg:text-3xl text-xl font-bold text-gradient">About us:</h1>
        </header>

        <div class="mb-12">
            <p class="lg:text-2xl text-xl font-semibold text-gray-500">
                Zero UTI aims at decreasing the spread U.T.I among girls in
                secondary schools and the entire community.
            </p>
        </div>

        <div class="mb-12">
            <iframe
                class="w-full rounded-lg shadow-lg video-height"
                height="565"
                src="https://www.youtube.com/embed/GFU2yQipa7o"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>

        <div class="mb-12">
            <h2 class="mb-6 text-sm uppercase tracking-wider font-semibold">THE PROBLEM</h2>
            <p class="mb-4 lg:leading-loose lg:text-xl text-lg border-l-4 border-teal-300 pl-4">
                8.1 million people suffer from UTI according to WHO statistics 2017.
            </p>
            <p class="mb-4 lg:leading-loose leading-relaxed text-lg">
                According to the research we conducted in 5  public schools in Dar es salaam, we found out that girls
                are the most affected group by UTI disease due to limited, dirty and very poor latrines, lack of access
                to clean water while at school, and personal hygiene education . This situation makes girls to hold or
                restrain from using the latrines for whole day and acquire the disease easily.  This has contributed to
                school absentees, increased school dropouts, poor performance and this puts girls at a high risk of
                gender based violence since they become dependant on their families or partners and prone to deadly
                diseases in the future such as cervical cancer and  kidney failure.
            </p>
        </div>


        <div class="mb-12 bg-gradient rounded-lg lg:py-10 py-5 lg:px-12 px-6 shadow-lg">
            <h2 class="mb-6 text-sm text-teal-900 uppercase tracking-wider font-semibold">WHAT DO WE DO</h2>
            <p class="mb-4 leading-relaxed text-teal-900 font-bold lg:text-3xl text-xl">
                Through this web-based platform we raise awareness to students and key stakeholders about personal
                hygiene and critical situations of water and sanitation in schools respectively.  The system will also
                invite different key players and stakeholders to financially and improve the wellbeing and WASH
                situation in selected schools.
            </p>
        </div>
    </section>
@endsection
