<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Edu String')</title>
    <link rel="shortcut icon" href="{{ asset('web/favicon.svg') }}" type="image/x-icon">

    <!-- plugins & libraries css -->
    <link rel="stylesheet" href="{{ asset('web/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/font-awesome/all.min.css') }}">

    <!-- tailwind css -->
    <link rel="stylesheet" href="{{ asset('web/css/output.css') }}">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">

    {{-- toaster --}}
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    @stack('style')
</head>

<body>
    <div class="ed-overlay group">
        <div
            class="fixed inset-0 z-[100] group-[.active]:bg-edblue/80 duration-[400ms] pointer-events-none group-[.active]:pointer-events-auto">
        </div>
    </div>

    <!-- search -->
    <div class="ed-search group">
        <form action="#"
            class="bg-white fixed z-[100] top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] h-[100px] md:h-[70px] xxs:h-[50px] w-[1224px] max-w-[95%] flex gap-[10px] rounded-full overflow-hidden px-[40px] xxs:px-[20px] pointer-events-none opacity-0 group-[.active]:pointer-events-auto group-[.active]:opacity-100 duration-[400ms]">
            <input type="search" name="ed-search" placeholder="Search Here..."
                class="bg-transparent w-full focus:outline-none">
            <button class="text-[25px] md:text-[22px] xxs:text-[20px]"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    <!-- sidebar -->
    <div class="ed-sidebar">
        <div
            class="translate-x-[100%] transition-transform ease-linear duration-300 fixed right-0 w-full max-w-[25%] xl:max-w-[30%] lg:max-w-[40%] md:max-w-[50%] sm:max-w-[60%] xxs:max-w-full bg-white h-full z-[100] overflow-auto">
            <!-- heading -->
            <div class="ed-sidebar-heading p-[20px] lg:p-[20px] border-b border-edgray/20">
                <div class="logo flex justify-between items-center">
                    <a href="index.html"><img src="web/img/logo.png" style="height: 60px;" alt="logo"></a>

                    <button type="button"
                        class="ed-sidebar-close-btn border border-edgray/20 w-[45px] aspect-square shrink-0 text-black text-[22px] rounded-full hover:text-edpurple"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
            </div>

            <!-- mobile menu -->
            <div class="ed-header-nav-in-mobile"></div>
        </div>
    </div>

    <!-- HEADER SECTION START -->
    @include('public.includes.header')
    <!-- HEADER SECTION END -->

    <main>
        @yield('content')
    </main>

    <!-- FOOTER SECTION START -->
    @include('public.includes.footer')
    <!-- FOOTER SECTION END -->


    <!-- js -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>

    <script src="{{ asset('web/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('web/vendor/fslightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('web/vendor/mixitup/mixitup.min.js') }}"></script>
    <script src="{{ asset('web/vendor/slim-select/slimselect.min.js') }}"></script>
    <script src="{{ asset('web/js/main.js') }}"></script>
    <script src="{{ asset('web/js/accordion.js') }}"></script>

    <!-- Toastr JS -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "maxOpened": 3
        };

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @elseif (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @elseif (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @elseif (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif
    </script>
    @stack('script')
</body>

</html>
