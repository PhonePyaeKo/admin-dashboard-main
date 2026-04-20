<div class="bg-white border-t border-gray-200">
    <!-- Main Footer -->
    {{-- <div class="py-10 px-5 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Logo + Description -->
            <div class="space-y-4">
                <a href="/" aria-label="Go to Home">
                    <img src="{{ $settings['site_logo'] }}" alt="AVATR Logo" class="h-[117px] w-[120px]">
                </a>
                <div class="lg:text-lg font-bold leading-relaxed py-3">
                    {{ app()->getLocale() == 'en' ? $settings['site_description'] : (app()->getLocale() == 'mm' ? $settings['site_description_mm'] : $settings['site_description_cn']) }}
                </div>
            </div>

            <!-- Other + Product + Social Media -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:text-end">
                <!-- Other -->
                <div>
                    <div class="text-gray-600 text-lg font-semibold mb-3">{{ __('labels.footer.others') }}</div>
                    <ul class="space-y-2">
                        @php
                            $included = ['aboutus', 'contactus'];
                        @endphp
                        @foreach ($all_menus->whereIn('route_name', $included) as $item)
                            <li><a href="#{{ $item->route_name }}" class="hover:text-white transition hover:bg-black hover:px-4 hover:py-1 hover:rounded-lg">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Product -->
                <div>
                    <div class="text-gray-600 text-lg font-semibold mb-3">{{ __('labels.footer.products') }}</div>
                    <ul class="space-y-2">
                        @php
                            $excluded = ['home', 'aboutus', 'contactus'];
                        @endphp
                        @foreach ($all_menus->whereNotIn('route_name', $excluded) as $item)
                            <li><a href="{{ $item->route_name }}" class="hover:text-white transition hover:bg-black hover:px-2 hover:py-1 hover:rounded-lg">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Social Media -->
                <div>
                    <div class="text-gray-600 text-lg font-semibold mb-3">{{ __('labels.footer.social_media') }}</div>
                    <div class="grid grid-cols-9 md:grid-cols-12 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-2">
                            <a href="{{ $settings['facebook'] }}" aria-label="Connect with Facebook" target="_blank" class="text-blue-600"><i class="fab fa-facebook text-2xl"></i></a>
                        </div>
                        <div>
                            <a href="{{ $settings['linkedin'] }}" aria-label="Connect with YouTube" target="_blank" class="text-red-600"><i class="fab fa-youtube text-2xl"></i></a>
                        </div>
                        <div class="lg:col-span-2">
                            <a href="{{ $settings['twitter'] }}" aria-label="Connect with TikTok" target="_blank" class="text-black"><i class="fab fa-twitter text-2xl"></i></a>
                        </div>
                        <div>
                            <a href="{{ $settings['instragram'] }}" aria-label="Connect with Twitter" target="_blank" class="text-black"><i class="fab fa-x-twitter text-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div>
        <section class="bg-[#EEEEEE] w-full py-10">
            <div class="flex flex-col md:flex-row justify-between items-center mx-4 md:mx-20 max-w-[1440px] mx-auto">
                <h2
                    class="font-bold text-[32px] md:text-[40px] leading-[48px] text-[#333333] font-[DM Sans] mb-4 md:mb-0">
                    LOGO</h2>
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="email" name="email" placeholder="Your email"
                        class="p-2 border-gray-300 border rounded bg-white w-full md:w-auto">
                    <button
                        class="bg-[#FD5545] text-white px-4 py-2 rounded w-full md:w-[170px] font-bold">Subscribe</button>
                </div>
            </div>
        </section>
    </div>

    <!-- Copyright -->
    {{-- <div class="py-5 px-5 lg:px-20 border-gray-200 text-center justify-center text-white bg-black">
        © {{ __('labels.footer.developed_year') }} {{ $settings['site_name'] }}.
        {{ __('labels.footer.all_rights_reserved') }}.
    </div> --}}
    <div>
        <section
            class="flex flex-col md:flex-row items-center justify-between 
                bg-[#9A9A9A] px-4 md:px-20 py-6 gap-4 
                max-w-[1440px] mx-auto text-center md:text-left">

            <!-- Logo -->

            <ul class="flex justify-around w-[112px] h-[32px]">
                <li>
                    <a href="{{$settings['facebook']}}">
                        <img src="{{ asset('images/facebook.png') }}" alt="facebook">
                    </a>
                </li>
                <li>
                    <a href="{{$settings['twitter']}}">
                        <img src="{{ asset('images/twitter.png') }}" alt="twitter">
                    </a>
                </li>
                <li>
                    <a href="{{$settings['instagram']}}">
                        <img src="{{ asset('images/instagram.png') }}" alt="instagram">
                    </a>
                </li>
            </ul>
            {{-- <img src="{{ asset('images/facebook.png') }}" alt="logo" class="w-[100px] md:w-[112px] h-auto">
                <img src="{{ asset('images/twitter.png') }}" alt="logo" class="w-[100px] md:w-[112px] h-auto">
                <img src="{{ asset('images/instagram.png') }}" alt="logo" class="w-[100px] md:w-[112px] h-auto"> --}}


            <!-- Text -->
            <p class="text-white text-sm md:text-base">
                {{$settings['footer_copyright']}}
            </p>

        </section>
    </div>

</div>
