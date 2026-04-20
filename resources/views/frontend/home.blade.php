@extends('layouts.frontend')
@section('content')
    @foreach ($sections as $section)
        <div>
            @if ($section->name == 'Banner Slider')
                <section class="w-full min-h-[600px] lg:min-h-[800px]">
                    <div class="relative">

                        <!-- Background -->
                        {{-- @php
                            $bannerBackground = $section->bannerslider->first()?->getFirstMediaUrl('banner_image') ?: asset('images/Background.png');
                        @endphp
                        <img src="{{ $bannerBackground }}" alt=""
                            class="w-full h-[600px] lg:h-full object-cover"> --}}
                        @php
                            $banner = $section->bannerslider->first();
                        @endphp
                        <img src="{{ $banner && $banner->getFirstMediaUrl('banner_image')
                            ? $banner->getFirstMediaUrl('banner_image')
                            : asset('images/Background.png') }}"
                            alt="......bg" class="w-full h-[600px] lg:h-full object-cover">>

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/50"></div>

                        <!-- Content -->
                        <div
                            class="absolute inset-0 flex flex-col justify-start lg:justify-center 
                   items-center lg:items-start text-center lg:text-left 
                   px-4 pt-12 sm:pt-16 lg:pt-0 
                   lg:left-[135px] lg:px-0 lg:max-w-xl">

                            <h2 class="font-bold text-[26px] sm:text-[32px] lg:text-[72px] text-white mb-3">
                                {{ $section->bannerslider->first()->title }}
                            </h2>

                            <p class="text-sm lg:text-base text-white mb-5 max-w-md">
                                {{ $section->bannerslider->first()->description }}
                            </p>

                            <button
                                class="bg-[#FD5545] text-white w-[140px] lg:w-[170px] h-[44px] lg:h-[48px] font-semibold">
                                {{ $section->bannerslider->first()->button_text }}
                            </button>
                        </div>

                        <!-- Bottom Cards -->
                        <div
                            class="absolute bottom-0 left-4 right-4 
                    grid grid-cols-1 gap-4 md:gap-0 lg:gap-0
                    md:grid-cols-3 
                    md:left-[60px] lg:left-[135px] 
                    md:right-[60px] lg:right-[135px]">

                            <div class="bg-[#FD5545] p-5 md:p-6 lg:p-8 rounded h-full">
                                <h2 class="text-sm md:text-base font-bold text-white mb-2">
                                    {{ $section->bannerslider->first()->bottom_card_one_title }}
                                </h2>
                                <p class="text-xs md:text-base text-white">
                                    {{ $section->bannerslider->first()->bottom_card_one_description }}
                                </p>
                            </div>

                            <div class="bg-[#333333] p-5 md:p-6 lg:p-8 rounded h-full">
                                <h2 class="text-sm md:text-base font-bold text-white mb-2">
                                    {{ $section->bannerslider->first()->bottom_card_two_title }}
                                </h2>
                                <p class="text-xs md:text-base text-gray-400">
                                    {{ $section->bannerslider->first()->bottom_card_two_description }}
                                </p>
                            </div>

                            <div class="bg-[#444444] p-5 md:p-6 lg:p-8 rounded h-full">
                                <h2 class="text-sm md:text-base font-bold text-white mb-2">
                                    {{ $section->bannerslider->first()->bottom_card_three_title }}
                                </h2>
                                <p class="text-xs md:text-base text-gray-400">
                                    {{ $section->bannerslider->first()->bottom_card_three_description }}
                                </p>
                            </div>

                        </div>

                    </div>
                </section>
            @endif

            @if ($section->name == 'Cloud Sharing')
                <section id="take-advantage" class="w-full py-10 md:py-12">
                    <div class="grid gap-8 md:gap-10 md:grid-cols-12 items-start px-4 md:pl-12 lg:pl-[135px]">

                        <!-- Left Side -->
                        <div class="md:col-span-4 text-center md:text-left">
                            <h2
                                class="text-[#FD5545] font-DM Sans font-bold text-[64px] sm:text-[80px] md:text-[156px] leading-none ">
                                {{ $section->content_descriptions->where('sort', 2)->first()->title }}
                            </h2>
                            <p class="font-DM Sans text-lg md:text-xl leading-[28px] md:leading-[32px] text-[#333333]">
                                {{ $section->content_descriptions->where('sort', 2)->first()->description }}
                            </p>
                        </div>

                        <!-- Right Side -->
                        <div class="md:col-span-8">

                            <!-- Title -->
                            <div class="mb-6 md:mb-10 text-center md:text-left">
                                <h2 class="font-DM Sans font-bold text-xl md:text-2xl leading-[28px] md:leading-[32px]">
                                    {{ $section->content_descriptions->where('sort', 1)->first()->title }}
                                </h2>
                                <p
                                    class="font-DM Sans text-sm md:text-base leading-[22px] md:leading-[24px] text-[#999999]">
                                    {{ $section->content_descriptions->where('sort', 1)->first()->description }}
                                </p>
                            </div>

                            <!-- Stats -->
                            <div class="grid gap-6 grid-cols-1 sm:grid-cols-3 text-center md:text-left">

                                <div>
                                    <h2
                                        class="font-DM Sans font-bold text-[40px] sm:text-[48px] md:text-[56px] leading-tight text-[#333333]">
                                        {{ $section->content_descriptions->where('sort', 3)->first()->title }}
                                    </h2>
                                    <p class="font-DM Sans text-base md:text-xl leading-[28px] md:leading-[32px]">
                                        {{ $section->content_descriptions->where('sort', 3)->first()->description }}
                                    </p>
                                </div>

                                <div>
                                    <h2
                                        class="font-DM Sans font-bold text-[40px] sm:text-[48px] md:text-[56px] leading-tight text-[#333333]">
                                        {{ $section->content_descriptions->where('sort', 4)->first()->title }}
                                    </h2>
                                    <p class="font-DM Sans text-base md:text-xl leading-[28px] md:leading-[32px]">
                                        {{ $section->content_descriptions->where('sort', 4)->first()->description }}
                                    </p>
                                </div>

                                <div>
                                    <h2
                                        class="font-DM Sans font-bold text-[40px] sm:text-[48px] md:text-[56px] leading-tight text-[#333333]">
                                        {{ $section->content_descriptions->where('sort', 5)->first()->title }}
                                    </h2>
                                    <p class="font-DM Sans text-base md:text-xl leading-[28px] md:leading-[32px]">
                                        {{ $section->content_descriptions->where('sort', 5)->first()->description }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if ($section->name == 'Services')
                <section id="services" class="w-full py-10 md:py-12">
                    <div class="flex flex-col gap-8 md:gap-10 lg:flex-row lg:items-center px-4 md:px-0">

                        <!-- Image -->
                        <div class="w-full lg:w-1/2">
                            @php
                                $servicesImage =
                                    $section->content_descriptions
                                        ->where('sort', 1)
                                        ->first()
                                        ?->getFirstMediaUrl('featured_image') ?:
                                    asset('images/Services.png');
                            @endphp
                            <img src="{{ $servicesImage }}" alt="" class="w-full h-auto mx-auto rounded">
                        </div>

                        <!-- Content -->
                        <div class="w-full lg:w-1/2">
                            <div
                                class="flex flex-col justify-center items-center lg:items-start text-center lg:text-left p-4 md:p-10">

                                <!-- Title -->
                                <h2 class="font-bold text-[26px] sm:text-[32px] md:text-[56px] leading-tight max-w-xl">
                                    {{ $section->content_descriptions->where('sort', 1)->first()->title }}
                                </h2>

                                <!-- Item 1 -->
                                <div
                                    class="flex flex-col sm:flex-row items-center sm:items-start gap-4 md:gap-6 mt-6 md:mt-8">
                                    @php
                                        $service1Image =
                                            $section->content_descriptions
                                                ->where('sort', 2)
                                                ->first()
                                                ?->getFirstMediaUrl('featured_image') ?:
                                            asset('images/Quality.png');
                                    @endphp
                                    <img src="{{ $service1Image }}" alt="" class="w-12 h-12">

                                    <div>
                                        <h2 class="font-bold text-xl md:text-2xl">
                                            {{ $section->content_descriptions->where('sort', 2)->first()->title }}</h2>
                                        <p class="text-[#999999] text-sm md:text-base max-w-md">
                                            {{ $section->content_descriptions->where('sort', 2)->first()->description }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div
                                    class="flex flex-col sm:flex-row items-center sm:items-start gap-4 md:gap-6 mt-6 md:mt-10">
                                    @php
                                        $service2Image =
                                            $section->content_descriptions
                                                ->where('sort', 3)
                                                ->first()
                                                ?->getFirstMediaUrl('featured_image') ?:
                                            asset('images/Helpful.png');
                                    @endphp
                                    <img src="{{ $service2Image }}" alt="" class="w-12 h-12">

                                    <div>
                                        <h2 class="font-bold text-xl md:text-2xl">
                                            {{ $section->content_descriptions->where('sort', 3)->first()->title }}</h2>
                                        <p class="text-[#999999] text-sm md:text-base max-w-md">
                                            {{ $section->content_descriptions->where('sort', 3)->first()->description }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </section>
            @endif

            @if ($section->name == 'Together')
                <section class="w-full px-4 md:px-0 py-8 md:py-0">
                    <div class="relative mx-auto max-w-[1440px] overflow-hidden rounded-md">

                        <!-- Background Image -->
                        <img src="{{ asset('images/Together.png') }}" alt=""
                            class="w-full h-[300px] sm:h-[400px] md:h-auto object-cover block">

                        <!-- Overlay (important for readability) -->
                        <div class="absolute inset-0 bg-black/40"></div>

                        <!-- Content -->
                        <div
                            class="absolute inset-0 flex flex-col justify-center items-center md:items-center text-center md:text-left px-4 md:left-[50px] md:px-0">

                            <h2
                                class="font-DM Sans font-bold text-[24px] sm:text-[32px] md:text-[56px] leading-tight text-white mb-4">
                                {{ $section->content_descriptions->where('sort', 1)->first()->title }}
                            </h2>

                            <button type="submit"
                                class="bg-[#FD5545] text-white w-[140px] md:w-[170px] h-[44px] md:h-[48px] font-semibold">
                                {{ $section->content_descriptions->where('sort', 1)->first()->description }}
                            </button>

                        </div>
                    </div>
                </section>
            @endif

            @if ($section->name == 'Crew')
                <section id="portfolio" class="w-full px-4 md:px-0 mt-5">
                    <div class="flex flex-col mx-auto max-w-[1440px] mb-40 gap-5">
                        <h2 class="font-DM Sans font-bold text-[40px] md:text-[56px] leading-[64px] text-[#333333]">
                            {{ $section->content_descriptions->where('sort', 1)->first()->title }}
                        </h2>
                        <p
                            class="font-DM Sans font-normal text-[18px] md:text-[20px] leading-[32px] text-[#333333] max-w-3xl">
                            {{ $section->content_descriptions->where('sort', 1)->first()->description }}
                        </p>
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                            <div class="text-center">
                                <img src="{{ asset('images/Sebastian Bennett.png') }}" alt=""
                                    class="w-full h-auto rounded-lg mb-5">
                                <h2 class="font-DM Sans font-bold text-xl leading-[32px] text-[#333333]">
                                    {{ $section->content_descriptions->where('sort', 2)->first()->title }}
                                </h2>
                                <p class="font-DM Sans font-normal text-base leading-[24px] text-[#999999]">
                                    {{ $section->content_descriptions->where('sort', 2)->first()->description }}</p>
                            </div>
                            <div class="relative text-center">
                                <img src="{{ asset('images/Graham Griffiths.png') }}" alt=""
                                    class="w-full h-auto rounded-lg mb-5">
                                <h2 class="font-DM Sans font-bold text-xl leading-[32px] text-[#333333]">
                                    {{ $section->content_descriptions->where('sort', 3)->first()->title }}
                                </h2>
                                <p class="font-DM Sans font-normal text-base leading-[24px] text-[#999999]">
                                    {{ $section->content_descriptions->where('sort', 3)->first()->description }}</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/Monica Böttger.png') }}" alt=""
                                    class="w-full h-auto rounded-lg mb-5">
                                <h2 class="font-DM Sans font-bold text-xl leading-[32px] text-[#333333]">
                                    {{ $section->content_descriptions->where('sort', 4)->first()->title }}</h2>
                                <p class="font-DM Sans font-normal text-base leading-[24px] text-[#999999]">
                                    {{ $section->content_descriptions->where('sort', 4)->first()->description }}</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/Leon Hunt.png') }}" alt=""
                                    class="w-full h-auto rounded-lg mb-5">
                                <h2 class="font-DM Sans font-bold text-xl leading-[32px] text-[#333333]">
                                    {{ $section->content_descriptions->where('sort', 5)->first()->title }}</h2>
                                <p class="font-DM Sans font-normal text-base leading-[24px] text-[#999999]">
                                    {{ $section->content_descriptions->where('sort', 5)->first()->description }}</p>
                            </div>
                        </div>
                        <div class="flex justify-center md:justify-center mt-10">
                            <button type="submit"
                                class="border border-sky-500 text-sky-500 hover:bg-sky-500 hover:text-white p-2 font-bold w-[170px] rounded">{{ $section->content_descriptions->where('sort', 6)->first()->title }}</button>
                        </div>
                    </div>
                </section>
            @endif

            @if ($section->name == 'Our News')
                <section id="packages" class="w-full px-4 md:px-0 my-5">
                    <div class="max-w-[1440px] mx-auto flex flex-col gap-10">
                        <h2 class="font-bold text-[40px] md:text-[56px] leading-[64px] text-center md:text-left">
                            {{ $section->content_descriptions->where('sort', 1)->first()->title }}
                        </h2>
                        <div class="grid gap-8 md:grid-cols-3">
                            <div class="md:col-span-1">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="mb-1 font-bold text-[20px] md:text-[24px] leading-[32px]">
                                            {{ $section->content_descriptions->where('sort', 2)->first()->title }}</h2>
                                        <span
                                            class="text-[#999999] font-normal text-base leading-[24px]">{{ $section->content_descriptions->where('sort', 2)->first()->description }}</span>
                                    </div>
                                    <div>
                                        <h2 class="mb-1 font-bold text-[20px] md:text-[24px] leading-[32px]">
                                            {{ $section->content_descriptions->where('sort', 3)->first()->title }}</h2>
                                        <span
                                            class="text-[#999999] font-normal text-base leading-[24px]">{{ $section->content_descriptions->where('sort', 3)->first()->description }}</span>
                                    </div>
                                    <div>
                                        <h2 class="mb-1 font-bold text-[20px] md:text-[24px] leading-[32px]">
                                            {{ $section->content_descriptions->where('sort', 4)->first()->title }}</h2>
                                        <span
                                            class="text-[#999999] font-normal text-base leading-[24px]">{{ $section->content_descriptions->where('sort', 4)->first()->description }}</span>
                                    </div>
                                    <div>
                                        <h2 class="mb-1 font-bold text-[20px] md:text-[24px] leading-[32px]">
                                            {{ $section->content_descriptions->where('sort', 5)->first()->title }}</h2>
                                        <span
                                            class="text-[#999999] font-normal text-base leading-[24px]">{{ $section->content_descriptions->where('sort', 5)->first()->description }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/Business meeting.png') }}" alt=""
                                    class="w-full h-auto rounded-lg mb-4">
                                <h2 class="font-bold text-lg">
                                    {{ $section->content_descriptions->where('sort', 6)->first()->title }}</h2>
                                <span
                                    class="text-[#999999] font-normal text-base leading-[24px]">{{ $section->content_descriptions->where('sort', 6)->first()->description }}</span>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/Never giving up.png') }}" alt=""
                                    class="w-full h-auto rounded-lg mb-4">
                                <h2 class="font-bold text-lg">
                                    {{ $section->content_descriptions->where('sort', 7)->first()->title }}</h2>
                                <span
                                    class="text-[#999999] font-normal text-base leading-[24px]">{{ $section->content_descriptions->where('sort', 7)->first()->description }}</span>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="border border-sky-500 text-sky-500 hover:bg-sky-500 hover:text-white p-2 font-bold w-[170px] rounded">{{ $section->content_descriptions->where('sort', 8)->first()->title }}</button>
                        </div>
                    </div>
                </section>
            @endif

            @if ($section->name == 'Contact')
                <section id="contact" class="w-full px-4 md:px-0 py-20">
                    <div class="max-w-[1440px] mx-auto flex flex-col gap-10 md:flex-row md:gap-5">
                        <div class="w-full md:w-1/2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488799.67591351684!2d95.85190884071179!3d16.838879493817203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1775203462402!5m2!1sen!2smm"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                        </div>
                        <div class="w-full md:w-1/2 flex flex-col gap-5 p-6 md:p-10">
                            <h2 class="font-bold text-[32px] md:text-[40px] leading-[48px]">
                                {{ $section->content_descriptions->where('sort', 1)->first()->title }} </h2>
                            <p class="font-normal text-base text-[#999999] max-w-md mb-10">
                                {{ $section->content_descriptions->where('sort', 1)->first()->description }}</p>
                            <span
                                class="font-bold text-xl md:text-2xl">{{ $section->content_descriptions->where('sort', 2)->first()->title }}</span>
                            <span
                                class="font-bold text-base leading-[24px] mb-10">{{ $section->content_descriptions->where('sort', 2)->first()->description }}</span>
                            <img src="{{ asset('images/social.png') }}" alt="Social Media Icons"
                                class="w-[112px] h-[32px]">
                        </div>
                    </div>
                </section>
            @endif
        </div>
    @endforeach
@endsection
