@extends('layouts.frontend')
@section('content')
    @foreach ($sections as $section)
        <div>
            @if ($section->name == 'Banner Slider')
                <section class="w-full min-h-[600px] lg:min-h-[800px]">
                    <div class="relative">

                        <!-- Background -->
                        <img src="{{ asset('images/Background.png') }}" alt=""
                            class="w-full h-[600px] lg:h-full object-cover">

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
                <section class="w-full py-10 md:py-12">
                    <div class="grid gap-8 md:gap-10 md:grid-cols-12 items-start px-4 md:pl-12 lg:pl-[135px]">

                        <!-- Left Side -->
                        <div class="md:col-span-4 text-center md:text-left">
                            <h2
                                class="text-[#FD5545] font-DM Sans font-bold text-[64px] sm:text-[80px] md:text-[156px] leading-none ">
                                {{$section->content_descriptions->where('sort',2)->first()->title}}
                            </h2>
                            <p class="font-DM Sans text-lg md:text-xl leading-[28px] md:leading-[32px] text-[#333333]">
                                {{$section->content_descriptions->where('sort',2)->first()->description}}
                            </p>
                        </div>

                        <!-- Right Side -->
                        <div class="md:col-span-8">

                            <!-- Title -->
                            <div class="mb-6 md:mb-10 text-center md:text-left">
                                <h2 class="font-DM Sans font-bold text-xl md:text-2xl leading-[28px] md:leading-[32px]">
                                    {{$section->content_descriptions->where('sort',1)->first()->title}}
                                </h2>
                                <p
                                    class="font-DM Sans text-sm md:text-base leading-[22px] md:leading-[24px] text-[#999999]">
                                    {{$section->content_descriptions->where('sort',1)->first()->description}}
                                </p>
                            </div>

                            <!-- Stats -->
                            <div class="grid gap-6 grid-cols-1 sm:grid-cols-3 text-center md:text-left">

                                <div>
                                    <h2
                                        class="font-DM Sans font-bold text-[40px] sm:text-[48px] md:text-[56px] leading-tight text-[#333333]">
                                        {{$section->content_descriptions->where('sort',3)->first()->title}}
                                    </h2>
                                    <p class="font-DM Sans text-base md:text-xl leading-[28px] md:leading-[32px]">
                                        {{$section->content_descriptions->where('sort',3)->first()->description}}
                                    </p>
                                </div>

                                <div>
                                    <h2
                                        class="font-DM Sans font-bold text-[40px] sm:text-[48px] md:text-[56px] leading-tight text-[#333333]">
                                        {{$section->content_descriptions->where('sort',4)->first()->title}}
                                    </h2>
                                    <p class="font-DM Sans text-base md:text-xl leading-[28px] md:leading-[32px]">
                                        {{$section->content_descriptions->where('sort',4)->first()->description}}
                                    </p>
                                </div>

                                <div>
                                    <h2
                                        class="font-DM Sans font-bold text-[40px] sm:text-[48px] md:text-[56px] leading-tight text-[#333333]">
                                        {{$section->content_descriptions->where('sort',5)->first()->title}}
                                    </h2>
                                    <p class="font-DM Sans text-base md:text-xl leading-[28px] md:leading-[32px]">
                                        {{$section->content_descriptions->where('sort',5)->first()->description}}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            @endif
        </div>
    @endforeach
@endsection
