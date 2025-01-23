<!-- HEADER SECTION START -->
@php
    $settings = generalSettings();
@endphp
<header
    class="absolute z-[99] top-0 inset-x-[100px] xxl:inset-x-[30px] xl:inset-x-0 bg-white rounded-bl-[10px] rounded-br-[10px]">

    <!-- bottom header -->
    <div class="px-[30px] xxl:px-[15px] lg:px-[20px] py-[28px] lg:py-[18px] flex justify-between to-be-fixed">
        <div class="logo xxs:max-w-[20%] lg:max-w-[10%]">
            <a href="{{ route('home') }}">
                @if ($settings->logo)
                    <img src="{{ asset('storage/' . $settings->logo) }}" alt="logo" style="height: 60px;" class="logo">
                @else
                    <img src="{{ asset('web/img/logo.png') }}" alt="logo" style="height: 60px;" class="logo">
                @endif
            </a>
        </div>

        <div class="flex lg:items-center lg:gap-[60px] xxs:gap-[30px]">
            <div class="flex items-center gap-[100px] xl:gap-[30px] lg:gap-y-0">
                <!-- nav -->
                <div class="ed-header-nav-container">
                    <ul
                        class="to-go-to-sidebar-in-mobile ed-header-nav flex lg:flex-col gap-x-[43px] xl:gap-x-[33px] font-kanit text-[17px] font-normal">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li class="has-sub-menu relative">
                            <a role="button">Study Abroad</a>

                            <ul class="ed-header-submenu">
                                <li><a href="{{ route('study.uk') }}">Study In UK</a></li>
                                <li><a href="{{ route('study.india') }}">Study In India</a></li>
                                <li><a href="{{ route('study.china') }}">Study In China</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('our.blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>

                <!-- right actions -->
                <div class="flex items-center gap-x-[60px] xxs:gap-[30px]">
                    {{-- <button class="ed-search-opener-btn group">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M15.962 15.9063L12.0216 12.0025C13.0011 10.8356 13.5911 9.33716 13.5911 7.70448C13.5911 3.992 10.5427 0.97168 6.79561 0.97168C3.04849 0.97168 0 3.992 0 7.70448C0 11.4167 3.04849 14.4368 6.79561 14.4368C8.44348 14.4368 9.95601 13.8523 11.1338 12.8819L15.0743 16.7858C15.1968 16.9072 15.3575 16.9679 15.5181 16.9679C15.6788 16.9679 15.8395 16.9072 15.9621 16.7858C16.2072 16.5429 16.2072 16.1491 15.962 15.9063ZM1.25549 7.70448C1.25549 4.67786 3.74076 2.21553 6.79561 2.21553C9.85038 2.21553 12.3356 4.67786 12.3356 7.70448C12.3356 10.7309 9.85038 13.1929 6.79561 13.1929C3.74076 13.1929 1.25549 10.7309 1.25549 7.70448Z"
                                    class="fill-edblue group-hover:fill-edpurple" />
                            </g>
                        </svg>
                    </button> --}}
                    <a href="{{ route('apply') }}" class="ed-btn to-go-to-sidebar-in-mobile lg:m-[20px]">apply now</a>
                </div>
            </div>

            <!-- mobile menu button -->
            <button type="button" class="ed-mobile-menu-open-btn hidden lg:inline-block text-edblue text-[18px]"><i
                    class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>
<!-- HEADER SECTION END -->
