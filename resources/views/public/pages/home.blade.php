@extends('public.layout.master')
@section('title', 'Edustring')

@section('content')
    <!-- BANNER SECTION START -->
    <section class="ed-2-banner bg-edoffwhite pt-[120px] pb-[190px] relative z-[1] overflow-hidden">
        <div class="container max-w-[71.6%] xxxl:max-w-[86.5%] xxl:max-w-[90.6%] mx-auto">
            <div class="flex md:flex-col gap-x-[112px] gap-y-[40px] items-center">
                <!-- banner text -->
                <div class="max-w-[49%] xxxl:max-w-[45.5%] md:max-w-full shrink-0">
                    {{-- <h6 class="ed-section-sub-title !text-black before:!content-none">ONLINE <span
                            class="text-edpurple">Learning</span> COURSE</h6> --}}
                    {{-- <h1
                        class="font-medium text-[clamp(35px,5.4vw,80px)] text-edblue tracking-tight leading-[1.12] mb-[25px]">
                        Explore Your Skills With <span class="font-bold"><span class="inline-block text-edpurple relative"
                                style="background-image: url('{{ asset('web/img/banner-2-title-vector.svg') }}'); background-size: 240px 21px; background-repeat: no-repeat; background-position: left bottom;">Abroad
                            </span>Education</span></h1> --}}
                    <h1
                        class="font-medium text-[clamp(35px,5.4vw,80px)] text-edblue tracking-tight leading-[1.12] mb-[25px]">
                        Your <span class="font-bold"><span class="inline-block text-edpurple relative"
                                style="background-image: url('{{ asset('web/img/banner-2-title-vector.svg') }}'); background-size: 240px 21px; background-repeat: no-repeat; background-position: left bottom;">Success
                            </span>Journey</span> Start With Us</h1>
                    <p class="text-edgray font-medium mb-[41px]">Edustring Can Fulfil Your International Education Dream
                        As Per Your Best Fit with world top universities and collages.</p>
                    <div class="flex flex-wrap gap-[10px]">
                        <a href="{{ route('contact') }}"
                            class="ed-btn !bg-transparent border border-edpurple !text-edpurple hover:!bg-edpurple hover:!text-white">Apply Online</a>
                        <a href="{{ route('about') }}"
                            class="ed-btn !bg-transparent border border-black !text-black hover:!bg-black hover:!text-white">Discover</a>
                    </div>
                </div>

                <!-- banner image -->
                <div class="max-w-[51%] md:max-w-full">
                    <div class="w-max relative z-[1] flex gap-[30px] items-center">
                        <img src="{{ asset('web/img/banner-2-img-1.jpg') }}" alt="banner image"
                            class="border-[10px] border-white rounded-[20px] max-w-[241px] aspect-[261/366]">
                        <img src="{{ asset('web/img/banner-2-img-2.jpg') }}" alt="banner image" class="rounded-[20px]">

                        <!-- vectors -->
                        <div>
                            <div
                                class="w-[242px] aspect-square rounded-full bg-edpurple opacity-80 blur-[110px] absolute -z-[1] bottom-0 left-[163px]">
                            </div>
                            <img src="{{ asset('web/img/banner-2-img-vector-1.svg') }}" alt="vector"
                                class="pointer-events-none absolute -z[1] top-[30px] -left-[35px]">
                            <img src="{{ asset('web/img/banner-2-img-vector-2.svg') }}" alt="vector"
                                class="pointer-events-none absolute -z[1] -top-[50px] -right-[40px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- vector -->
        <div>
            <img src="{{ asset('web/img/banner-2-vector-1.svg') }}" alt="vector"
                class="pointer-events-none absolute -z-[1] top-[135px] left-[38px] xxxl:hidden">
            <img src="{{ asset('web/img/banner-2-vector-2.svg') }}" alt="vector"
                class="pointer-events-none absolute -z-[1] bottom-0 left-0">
            <img src="{{ asset('web/img/banner-2-vector-3.svg') }}" alt="vector"
                class="pointer-events-none absolute -z-[1] -bottom-[8px] right-0">
        </div>
    </section>
    <!-- BANNER SECTION END -->


    <!-- CATEGORIES SECTION START -->
    <div class="ed-2-categories -mt-[98px] relative z-[2]">
        <div
            class="mx-[15.8%] xxxl:mx-[9.8%] xxl:mx-[3.5%] bg-white p-[40px] sm:p-[30px] xxs:p-[20px] rounded-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)]">
            <div class="grid grid-cols-3 xl:grid-cols-3 md:grid-cols-1 xxs:grid-cols-1 gap-[20px]">
                <!-- single category -->
                <div
                    class="border border-[#e5e5e5] rounded-[10px] py-[16px] px-[20px] flex sm:flex-col items-center sm:items-start gap-y-[15px] gap-x-[20px] hover:bg-[#F8B81F] hover:border-[#F8B81F] group">
                    <!-- icon -->
                    <div
                        class="bg-[#F8B81F] shrink-0 w-[84px] sm:w-[64px] aspect-square rounded-full p-[14px] duration-[400ms] flex items-center justify-center group-hover:bg-white">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 0C10.4772 0 6 4.47715 6 10C6 13.866 8.20914 17.2835 11.5 18.7417V23C11.5 23.8284 12.1716 24.5 13 24.5H19C19.8284 24.5 20.5 23.8284 20.5 23V18.7417C23.7909 17.2835 26 13.866 26 10C26 4.47715 21.5228 0 16 0ZM18 28H14V30H18V28ZM20 26H12V28H20V26Z" class="fill-white group-hover:fill-[#F8B81F]" />
                            <path d="M16 4C12.6863 4 10 6.68629 10 10C10 11.6569 10.6321 13.1566 11.7574 14.2426L10.3431 15.6569C9.95355 16.0464 9.95355 16.6795 10.3431 17.069L11.7574 18.4833C12.8434 19.6086 14.3431 20.2407 16 20.2407C19.3137 20.2407 22 17.5544 22 14.2407C22 10.927 19.3137 8.24074 16 8.24074C14.3431 8.24074 12.8434 8.87285 11.7574 9.99815L10.3431 8.58382C9.95355 8.1943 9.95355 7.56117 10.3431 7.17165L11.7574 5.75732C12.8434 4.63202 14.3431 4 16 4Z" class="fill-white group-hover:fill-[#F8B81F]" />
                        </svg>
                    </div>
                    <!-- text -->
                    <div>
                        <h5 class="font-semibold text-[20px] text-edblue duration-[400ms] group-hover:text-white">One Stop Study Solution</h5>
                        <h6 class="text-[#808080] duration-[400ms] group-hover:text-white mt-[10px]">Your comprehensive guide to academic success, offering personalized study solutions for every educational need.</h6>
                    </div>
                </div>

                <!-- single category -->
                <div
                    class="border border-[#e5e5e5] rounded-[10px] py-[16px] px-[20px] flex sm:flex-col items-center sm:items-start gap-y-[15px] gap-x-[20px] hover:bg-[#F92596] hover:border-[#F92596] group">
                    <!-- icon -->
                    <div
                        class="bg-[#F92596] shrink-0 w-[84px] sm:w-[64px] aspect-square rounded-full p-[14px] duration-[400ms] flex items-center justify-center group-hover:bg-white">

                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_90_1106)">
                                <path
                                    d="M34.9453 0H30.6562C30.0733 0 29.6016 0.471727 29.6016 1.05469V2.10938H20.9698C20.5329 0.884391 19.3732 0 18 0C16.6268 0 15.4671 0.884391 15.0302 2.10938H6.39844V1.05469C6.39844 0.471727 5.92671 0 5.34375 0H1.05469C0.471727 0 0 0.471727 0 1.05469V5.27344C0 5.8564 0.471727 6.32812 1.05469 6.32812H5.34375C5.92671 6.32812 6.39844 5.8564 6.39844 5.27344V4.20469H10.73C7.06971 6.49132 4.65623 10.5075 4.36774 15.0057C3.10226 15.42 2.17969 16.598 2.17969 18C2.17969 19.7447 3.59902 21.1641 5.34375 21.1641C7.08848 21.1641 8.50781 19.7447 8.50781 18C8.50781 16.6542 7.65977 15.51 6.47297 15.0534C6.83283 10.0384 10.3321 5.81147 15.1997 4.60547C15.7261 5.62338 16.7771 6.32812 18 6.32812C19.2229 6.32812 20.2739 5.62338 20.8003 4.60547C25.6679 5.8114 29.1672 10.0383 29.527 15.0533C28.3402 15.51 27.4922 16.6542 27.4922 18C27.4922 19.7447 28.9115 21.1641 30.6562 21.1641C32.401 21.1641 33.8203 19.7447 33.8203 18C33.8203 16.598 32.8977 15.42 31.6323 15.0057C31.3438 10.5075 28.9303 6.50538 25.27 4.21875H29.6016V5.27344C29.6016 5.8564 30.0733 6.32812 30.6562 6.32812H34.9453C35.5283 6.32812 36 5.8564 36 5.27344V1.05469C36 0.471727 35.5283 0 34.9453 0ZM25.1754 34.6918C24.6237 33.0037 23.0344 31.7109 21.1641 31.7109H14.8359C12.9656 31.7109 11.3763 33.0037 10.8246 34.6918C10.6119 35.3427 11.1656 36 11.8505 36H24.1495C24.8343 36 25.3881 35.3427 25.1754 34.6918Z"
                                    class="fill-white group-hover:fill-[#f92596]" />
                                <path
                                    d="M27.315 21.6337L19.0547 9.24316V19.2489C20.2797 19.6858 21.1641 20.8455 21.1641 22.2187C21.1641 23.9634 19.7447 25.3828 18 25.3828C16.2553 25.3828 14.8359 23.9634 14.8359 22.2187C14.8359 20.8455 15.7203 19.6858 16.9453 19.2489V9.24316L8.68501 21.6337C8.40587 22.0519 8.46149 22.6091 8.81685 22.9644C10.753 24.9006 11.9907 27.395 12.4683 30.0706C13.201 29.7734 13.9978 29.6015 14.8359 29.6015H21.1641C22.0022 29.6015 22.799 29.7733 23.5317 30.0704C24.0093 27.3947 25.247 24.9006 27.1832 22.9644C27.5385 22.6091 27.5942 22.0519 27.315 21.6337Z"
                                    class="fill-white group-hover:fill-[#f92596]" />
                                <path
                                    d="M18 21.1641C17.4181 21.1641 16.9453 21.6368 16.9453 22.2188C16.9453 22.8007 17.4181 23.2734 18 23.2734C18.5819 23.2734 19.0547 22.8007 19.0547 22.2188C19.0547 21.6368 18.5819 21.1641 18 21.1641Z"
                                    class="fill-white group-hover:fill-[#f92596]" />
                            </g>
                            <defs>
                                <clipPath id="clip0_90_1106">
                                    <rect width="36" height="36" class="fill-white group-hover:fill-[#f92596]" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <!-- text -->
                    <div>
                        <h5 class="font-semibold text-[20px] text-edblue duration-[400ms] group-hover:text-white">One To One Discussion</h5>
                        <h6 class="text-[#808080] duration-[400ms] group-hover:text-white mt-[10px]">Engage in personalized, one-on-one discussions for tailored guidance and expert advice on your educational journey.</h6>
                    </div>
                </div>

                <!-- single category -->
                <div
                    class="border border-[#e5e5e5] rounded-[10px] py-[16px] px-[20px] flex sm:flex-col items-center sm:items-start gap-y-[15px] gap-x-[20px] hover:bg-[#5866EB] hover:border-[#5866EB] group">
                    <!-- icon -->
                    <div
                        class="bg-[#5866EB] shrink-0 w-[84px] sm:w-[64px] aspect-square rounded-full p-[14px] duration-[400ms] flex items-center justify-center group-hover:bg-white">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M36 33.8906H33.8906V12.6562H27.4922V33.8906H25.3828V21.0938H19.0547V33.8906H16.9453V16.875H10.6172V33.8906H8.50781V23.2031H2.10938V33.8906H0V36H36V33.8906Z"
                                    class="fill-white group-hover:fill-[#5866eb]" />
                                <path
                                    d="M36.0001 8.4375V0H27.4922V2.10938H32.3993L22.2188 12.2195L13.7813 3.78204L0.309082 17.184L1.80041 18.6754L13.7813 6.76484L22.2188 15.2023L33.8907 3.60077V8.4375H36.0001Z"
                                    class="fill-white group-hover:fill-[#5866eb]" />
                            </g>
                        </svg>
                    </div>
                    <!-- text -->
                    <div>
                        <h5 class="font-semibold text-[20px] text-edblue duration-[400ms] group-hover:text-white">End To End Support</h5>
                        <h6 class="text-[#808080] duration-[400ms] group-hover:text-white mt-[10px]">Providing seamless, end-to-end support from initial consultation to successful educational achievement.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORIES SECTION END -->


    <!-- ABOUT SECTION START -->
    <section class="ed-2-about bg-edoffwhite py-[120px] xl:py-[80px] md:py-[60px] relative z-[1]">
        <div
            style="background-image: url('{{ asset('web/img/about-us-bg.png') }}'); position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-repeat: no-repeat; background-size: cover; background-position: center; mix-blend-mode: multiply; opacity: 0.05; z-index: -1;">
        </div>
        <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
            <div class="flex md:flex-col gap-x-[75px] gap-y-[30px]">
                <!-- left -->
                <div class="max-w-[46%] md:max-w-full grow shrink-0">
                    <div class="relative flex items-end">
                        <img src="{{ asset('web/img/about-2-image-1.png') }}" alt="About Image"
                            class="border-[12px] border-white rounded-full">

                        <!-- video btn -->
                        <div class="relative shrink-0 -ml-[202px] lg:-ml-[262px] md:-ml-[202px] xs:-ml-[242px] -mb-[24px]">
                            <img src="{{ asset('web/img/about-2-image-2.png') }}" alt="About Image"
                                class="border-[8px] border-white rounded-full w-[292px] xs:w-[252px] aspect-square">
                            <a href="https://youtu.be/5ppDzM8m9lI?si=zml3HbV176DBsZlg" data-fslightbox="gallery"
                                class="flex items-center justify-center w-[60px] aspect-square bg-white rounded-full text-edyellow absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] before:border before:absolute before:top-[50%] before:-translate-y-[50%] before:left-[50%] before:-translate-x-[50%] before:w-[calc(100%+15px)] before:h-[calc(100%+15px)] before:rounded-full before:transition before:duration-[400ms] hover:bg-edpurple hover:text-white hover:before:border-edpurple"><i
                                    class="fa-solid fa-play"></i></a>
                        </div>

                        <!-- vectors -->
                        <div>
                            <img src="{{ asset('web/img/about-2-img-vector.svg') }}" alt="vector"
                                class="absolute pointer-events-none top-[60px] right-[65px] -z-[1]">
                            <img src="{{ asset('web/img/about-2-img-vector-2.svg') }}" alt="vector"
                                class="absolute pointer-events-none -bottom-[30px] right-0 -z-[1] md:hidden">
                        </div>
                    </div>
                </div>

                <!-- right -->
                <div class="max-w-[54%] md:max-w-full">
                    <h6 class="ed-section-sub-title">About us</h6>
                    <h2 class="ed-section-title mb-[6px]">Learn New <span class="inline-block font-bold">Skills</span>
                        To Go Ahead For Your Career</h2>
                    <p class="text-edgray mb-[34px]">Edustring is a dynamic education consultancy dedicated to guiding students toward achieving their academic and career aspirations. We provide personalized support, expert advice, and tailored solutions to unlock every learner's potential.</p>
                    <ul
                        class="ed-about-list font-medium text-[18px] text-edblue grid grid-cols-2 xxs:grid-cols-1 gap-[20px] xxs:gap-[15px] mb-[52px] *:pl-[40px] *:relative">
                        <li> <img src="{{ asset('web/img/icon/checkmark.svg') }}" style="width: 30px;"
                                class="absolute left-0 -top-[3px] aspect-square border border-edpurple rounded-full bg-no-repeat bg-[length:15px_13px] bg-center">
                            Flexible Course Plan</li>
                        <li> <img src="{{ asset('web/img/icon/checkmark.svg') }}" style="width: 30px;"
                                class="absolute left-0 -top-[3px] aspect-square border border-edpurple rounded-full bg-no-repeat bg-[length:15px_13px] bg-center">
                            Educator Support</li>
                        <li> <img src="{{ asset('web/img/icon/checkmark.svg') }}" style="width: 30px;"
                                class="absolute left-0 -top-[3px] aspect-square border border-edpurple rounded-full bg-no-repeat bg-[length:15px_13px] bg-center">
                            Expert mentors</li>
                        <li> <img src="{{ asset('web/img/icon/checkmark.svg') }}" style="width: 30px;"
                                class="absolute left-0 -top-[3px] aspect-square border border-edpurple rounded-full bg-no-repeat bg-[length:15px_13px] bg-center">
                            Lifetime Access</li>
                    </ul>
                    <a href="{{ route('about') }}" class="ed-btn">know more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END -->


    <!-- CLASSES SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px] bg-cover bg-top bg-no-repeat"
        style="background-image: url('{{ asset('web/img/classes-bg.jpg') }}');">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div class="flex flex-col gap-x-[85px] items-start relative">
                <!-- heading -->
                <div class="relative w-full"
                    style="background-image: url('{{ asset('web/img/admission-title-vector.svg') }}'); background-repeat: no-repeat; background-size: 100% 100%;">
                    <div class="shrink-0 max-w-[290px]">
                        <h6 class="ed-section-sub-title">Admission</h6>
                        <h2 class="ed-section-title !text-[30px] pb-[42px] lg:pb-0 mb-[40px] lg:mb-[20px]">Admission
                            Process</h2>
                        <a href="{{ route('contact') }}" class="ed-btn">Admission Now</a>
                    </div>
                </div>

                <!-- cards -->
                <div
                    class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[24px] -mt-[140px] lg:mt-[25px] w-[66%] ml-auto lg:w-[100%]">
                    <!-- single process -->
                    <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                        <span class="icon block mb-[13px]">
                            <img src="{{ asset('web/img/admission-process-icon.svg') }}" alt="admission process"
                                class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[18px] mb-[5px] text-edblue"><a href="#"
                                class="hover:text-edpurple">Request Info</a></h4>
                        <p class="text-edgray2 group-hover:text-black mb-[18px]">Reach out for detailed program information.</p>
                        <a href="#"
                            class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                            More</a>
                    </div>

                    <!-- single process -->
                    <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                        <span class="icon block mb-[13px]">
                            <img src="{{ asset('web/img/admission-process-icon.svg') }}" alt="admission process"
                                class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[18px] mb-[5px] text-edblue"><a href="#"
                                class="hover:text-edpurple">Apply Online</a></h4>
                        <p class="text-edgray2 group-hover:text-black mb-[18px]">Complete the application form digitally.</p>
                        <a href="#"
                            class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                            More</a>
                    </div>

                    <!-- single process -->
                    <div class="bg-white rounded-[10px] p-[24px] shadow-[0_4px_50px_rgba(0,0,0,0.09)]">
                        <span class="icon block mb-[13px]">
                            <img src="{{ asset('web/img/admission-process-icon.svg') }}" alt="admission process"
                                class="mb-[11px]">
                        </span>
                        <h4 class="font-semibold text-[18px] mb-[5px] text-edblue"><a href="#"
                                class="hover:text-edpurple">Submit Form</a></h4>
                        <p class="text-edgray2 group-hover:text-black mb-[18px]">Finalize and send your application form.</p>
                        <a href="#"
                            class="ed-btn !h-[40px] !bg-white border !border-edpurple !text-edpurple !text-[14px] !font-semibold hover:!bg-edpurple hover:!text-white">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CLASSES SECTION END -->


    <!-- SERVICES SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div class="flex md:flex-col gap-[45px] items-center">
                <div>
                    <h6 class="ed-section-sub-title">Top Destinations</h6>
                    <h2 class="ed-section-title mb-[19px]">Explore Top Global Study Destinations</h2>
                    <p class="mb-[31px]">We collaborate with top-quality partners across a wide range of destinations worldwide.  
                        This ensures students have access to the best educational opportunities globally.</p>

                    <div class="flex flex-wrap gap-x-[24px] gap-y-[15px]">
                        <a href="{{ route('contact') }}" class="ed-btn">Apply Now</a>
                        <div class="flex items-center gap-[16px]">
                            <span
                                class="icon bg-edyellow w-[44px] aspect-square rounded-full outline-[1px] outline outline-edyellow outline-offset-[2px] flex items-center justify-center">
                                <img src="{{ asset('web/img/icon/phone.svg') }}" alt="call icon" class="w-[22px]">
                            </span>

                            <span class="txt font-semibold text-etBlack">
                                <span class="block text-[16px] font-medium text-edgray mb-[2px] opacity-80">Call Us
                                    Now</span>
                                <a href="tel:+880 1609-794780"
                                    class="font-semibold text-[18px] hover:text-edyellow">+880 1609-794780</a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="space-y-[30px] max-w-[50%] md:max-w-full shrink-0 grow">
                    <!-- single service -->
                    <div
                        class="flex xxs:flex-col items-center xxs:items-start gap-x-[20px] gap-y-[15px] odd:ml-[86px] lg:odd:ml-[56px] xxs:odd:ml-[26px]">
                        <!-- icon -->
                        <span
                            class="shrink-0 w-[120px] aspect-square rounded-[8px] bg-[#F39F5F]/20 flex items-center justify-center">
                            <img src="{{ asset('web/img/uk-flag.svg') }}" alt="UK flag" class="p-[15px] rounded-[20px]">
                        </span>

                        <div>
                            <h6 class="font-semibold text-[30px] text-edblue mb-[5px]">UK</h6>
                            <p class="text-edgray">Unlock Your Future with Education in the UK.</p>
                        </div>
                    </div>

                    <!-- single service -->
                    <div
                        class="flex xxs:flex-col items-center xxs:items-start gap-x-[20px] gap-y-[15px] odd:ml-[86px] lg:odd:ml-[56px] xxs:odd:ml-[26px]">
                        <!-- icon -->
                        <span
                            class="shrink-0 w-[120px] aspect-square rounded-[8px] bg-[#F39F5F]/20 flex items-center justify-center">
                            <img src="{{ asset('web/img/india-flag.svg') }}" alt="India flag" class="p-[15px] rounded-[20px]">
                        </span>

                        <div>
                            <h6 class="font-semibold text-[30px] text-edblue mb-[5px]">India</h6>
                            <p class="text-edgray">Experience World-Class Education in India.</p>
                        </div>
                    </div>

                    <!-- single service -->
                    <div
                        class="flex xxs:flex-col items-center xxs:items-start gap-x-[20px] gap-y-[15px] odd:ml-[86px] lg:odd:ml-[56px] xxs:odd:ml-[26px]">
                        <!-- icon -->
                        <span
                            class="shrink-0 w-[120px] aspect-square rounded-[8px] bg-[#F39F5F]/20 flex items-center justify-center">
                            <img src="{{ asset('web/img/china-flag.svg') }}" alt="China flag" class="p-[15px] rounded-[20px]">
                        </span>

                        <div>
                            <h6 class="font-semibold text-[30px] text-edblue mb-[5px]">China</h6>
                            <p class="text-edgray">Discover Excellence in Education with China.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- vectors -->
        <div class="xxl:hidden">
            <img src="{{ asset('web/img/service-vector-1.svg') }}" alt="vector"
                class="absolute -z-[1] bottom-[140px] left-[45px]">
            <img src="{{ asset('web/img/form-notice-vector-1.svg') }}" alt="vector"
                class="absolute -z-[1] top-[140px] right-[40px]">
        </div>
    </section>
    <!-- SERVICES SECTION END -->


    <!-- CTA SECTION START -->
    <section class="bg-edpurple relative z-[1] overflow-hidden">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div class="flex md:flex-col items-center gap-[60px] lg:gap-[40px] md:gap-y-[20px]">
                <div class="grow md:pt-[60px]">
                    <h6 class="ed-section-sub-title ed-section-sub-title--white">ARE YOU READY FOR THIS OFFER</h6>
                    <h2 class="ed-section-title !text-white mb-[36px]">20% Offer For Very First 10 <span
                            class="font-normal text-[40px] xxl:text-[35px] xl:text-[30px] xs:text-[28px] xxs:text-[25px]">Student’s</span></h2>
                    <div class="flex flex-wrap gap-[16px]">
                        <a href="{{ route('contact') }}"
                            class="ed-btn !bg-edyellow !text-black hover:!bg-edblue hover:!text-white">Become a student</a>
                        {{-- <a href="#" class="ed-btn !bg-transparent !text-white border border-white hover:!bg-white hover:!text-edblue">Become a teacher</a> --}}
                    </div>
                </div>

                <!-- image -->
                <div class="shrink-0 relative z-[1] pr-[40px] lg:pr-0">
                    <img src="{{ asset('web/img/cta-img.png') }}" alt="image">
                    <img src="{{ asset('web/img/cta-img-vector.svg') }}" alt="vector"
                        class="absolute right-[0] lg:right-[-40px] top-[20px] -z-[1] max-w-[460px]">
                </div>
            </div>
        </div>

        <!-- vector -->
        <div>
            <img src="{{ asset('web/img/cta-vector-1.png') }}" alt="vector"
                class="absolute -z-[1] bottom-0 left-0 pointer-events-none">
            <img src="{{ asset('web/img/cta-vector-2.png') }}" alt="vector"
                class="absolute -z-[1] top-0 right-0 pointer-events-none">
        </div>
    </section>
    <!-- CTA SECTION END -->


    <!-- TESTIMONIAL SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
        <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
            <div class="flex md:flex-col gap-[30px]">
                <!-- heading -->
                <div class="max-w-[370px] md:max-w-full shrink-0">
                    <h6 class="ed-section-sub-title">Testimonials</h6>
                    <h2 class="ed-section-title mb-[36px] md:mb-[26px]">What Students Say About Us</h2>
                    <!-- slider nav -->
                    <div
                        class="ed-2-testimonial-slider-nav flex gap-[15px] *:w-[40px] *:h-[40px] *:rounded-full *:border *:border-[#808080]/20 *:text-edpurple *:text-[18px]">
                        <button class="prev hover:bg-edpurple hover:border-edpubg-edpurple hover:text-white"><i
                                class="fa-solid fa-angle-left"></i></button>
                        <button class="next hover:bg-edpurple hover:border-edpubg-edpurple hover:text-white"><i
                                class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>

                <!-- slider container -->
                <div>
                    <div class="ed-2-testimonial-slider swiper max-w-[1200px]">
                        <div class="swiper-wrapper">
                            <!-- single testimony -->
                            <div class="swiper-slide w-[570px] lg:w-[540px] xs:w-full">
                                <div
                                    class="et-testimony bg-white p-[30px] xxs:p-[20px] border border-[#d9d9d9] rounded-[20px]">
                                    <!-- single testimony heading -->
                                    <div
                                        class="et-testimony__heading flex xxs:flex-col items-center gap-[22px] mb-[42px] xxs:mb-[22px]">
                                        <img src="{{ asset('web/img/user-2.png') }}" alt="reviewer image"
                                            class="w-[70px] aspect-square rounded-full shrink-0">

                                        <div class="flex items-center justify-between grow xxs:w-full">
                                            <div class="left">
                                                <h5 class="text-edblue font-semibold text-[20px] mb-[1px]">Sarah Thompson</h5>
                                                <h6 class="text-[16px] text-edpurple font-normal">University of Manchester, UK</h6>
                                            </div>

                                            <div class="right">
                                                <img src="{{ asset('web/img/icon/quotation.svg') }}"
                                                    alt="quotation mark">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-[#445375] font-normal mb-[21px]">EduString made the entire admission process seamless and stress-free. Their guidance was invaluable in selecting the right program. I’m truly grateful for their support!</p>

                                    <!-- rating stars -->
                                    <div
                                        class="inline-flex items-center gap-[6px] border border-edyellow rounded-full px-[10px] h-[40px]">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                    </div>
                                </div>
                            </div>

                            <!-- single testimony -->
                            <div class="swiper-slide w-[570px] lg:w-[540px] xs:w-full">
                                <div
                                    class="et-testimony bg-white p-[30px] xxs:p-[20px] border border-[#d9d9d9] rounded-[20px]">
                                    <!-- single testimony heading -->
                                    <div
                                        class="et-testimony__heading flex xxs:flex-col items-center gap-[22px] mb-[42px] xxs:mb-[22px]">
                                        <img src="{{ asset('web/img/user-2.png') }}" alt="reviewer image"
                                            class="w-[70px] aspect-square rounded-full shrink-0">

                                        <div class="flex items-center justify-between grow xxs:w-full">
                                            <div class="left">
                                                <h5 class="text-edblue font-semibold text-[20px] mb-[1px]">Ankit Sharma</h5>
                                                <h6 class="text-[16px] text-edpurple font-normal">Delhi University, India</h6>
                                            </div>

                                            <div class="right">
                                                <img src="{{ asset('web/img/icon/quotation.svg') }}"
                                                    alt="quotation mark">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-[#445375] font-normal mb-[21px]">Thanks to EduString, I found the perfect course that matched my interests. Their team was always approachable and ready to help. Highly recommend their services!</p>

                                    <!-- rating stars -->
                                    <div
                                        class="inline-flex items-center gap-[6px] border border-edyellow rounded-full px-[10px] h-[40px]">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                    </div>
                                </div>
                            </div>

                            <!-- single testimony -->
                            <div class="swiper-slide w-[570px] lg:w-[540px] xs:w-full">
                                <div
                                    class="et-testimony bg-white p-[30px] xxs:p-[20px] border border-[#d9d9d9] rounded-[20px]">
                                    <!-- single testimony heading -->
                                    <div
                                        class="et-testimony__heading flex xxs:flex-col items-center gap-[22px] mb-[42px] xxs:mb-[22px]">
                                        <img src="{{ asset('web/img/user-2.png') }}" alt="reviewer image"
                                            class="w-[70px] aspect-square rounded-full shrink-0">

                                        <div class="flex items-center justify-between grow xxs:w-full">
                                            <div class="left">
                                                <h5 class="text-edblue font-semibold text-[20px] mb-[1px]">Li Wei</h5>
                                                <h6 class="text-[16px] text-edpurple font-normal">Tsinghua University, China</h6>
                                            </div>

                                            <div class="right">
                                                <img src="{{ asset('web/img/icon/quotation.svg') }}"
                                                    alt="quotation mark">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-[#445375] font-normal mb-[21px]">EduString provided excellent assistance with my application. They ensured everything was accurate and on time. I couldn’t have done it without their expertise!</p>

                                    <!-- rating stars -->
                                    <div
                                        class="inline-flex items-center gap-[6px] border border-edyellow rounded-full px-[10px] h-[40px]">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                        <img src="{{ asset('web/img/icon/star.svg') }}" alt="star">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- vector -->
        <img src="{{ asset('web/img/testimonial-2-vector.svg') }}" alt="vector"
            class="absolute -z-[1] pointer-events-none left-[44px] bottom-[60px]">
    </section>
    <!-- TESTIMONIAL SECTION END -->

    
    <!-- GALLERY SECTION START -->
    <div class="overflow-hidden">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h5
                class="font-semibold text-[24px] text-edblue text-center mb-[40px] relative z-[1] before:absolute before:-z-[1] before:w-[100%] before:h-[1px] before:left-0 before:top-[50%] before:bg-[#D9D9D9] before:-translate-y-[50%]">
                <span class="bg-white px-[20px]">Our Gallery</span>
            </h5>

            <!-- gallery slider -->
            <div class="ed-gallery-slider swiper overflow-visible">
                <div class="swiper-wrapper">
                    <div class="swiper-slide max-w-max">
                        <a href="{{ asset('web/img/gallery-img-1.jpg') }}" data-fslightbox="gallery"
                            class="block rounded-[40px] overflow-hidden"><img
                                src="{{ asset('web/img/gallery-img-1.jpg') }}" alt="Gallery image"></a>
                    </div>
                    <div class="swiper-slide max-w-max">
                        <div class="relative rounded-[40px] overflow-hidden">
                            <img src="{{ asset('web/img/gallery-img-2.jpg') }}" alt="Gallery image">
                            <a href="https://youtu.be/5ppDzM8m9lI?si=zml3HbV176DBsZlg" data-fslightbox="gallery"
                                class="flex items-center justify-center w-[60px] aspect-square bg-white rounded-full text-[#3746D2] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] before:border before:absolute before:top-[50%] before:-translate-y-[50%] before:left-[50%] before:-translate-x-[50%] before:w-[calc(100%+15px)] before:h-[calc(100%+15px)] before:rounded-full before:transition before:duration-[400ms] hover:bg-edpurple hover:text-white hover:before:border-edpurple"><i
                                    class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide max-w-max">
                        <a href="{{ asset('web/img/gallery-img-3.jpg') }}" data-fslightbox="gallery"
                            class="block rounded-[40px] overflow-hidden"><img
                                src="{{ asset('web/img/gallery-img-3.jpg') }}" alt="Gallery image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GALLERY SECTION END -->


    <!-- TEACHER SECTION START -->
    <section class="bg-[#FAF9F6] py-[120px] xl:py-[80px] md:py-[60px] relative z-[1]">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <!-- heading -->
            <div
                class="flex flex-wrap xs:flex-col xs:text-center justify-between items-center gap-y-[15px] mb-[46px] md:mb-[30px]">
                <div>
                    <h6 class="ed-section-sub-title">Our Expert</h6>
                    <h2 class="ed-section-title">Our Expert Mentor</h2>
                </div>
            </div>

            <div class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                <!-- single teacher -->
                <div class="ed-teacher group">
                    <div class="ed-teacher__img rounded-[16px] overflow-hidden">
                        <img src="{{ asset('web/img/teacher-1.jpg') }}" alt="Team Member Image"
                            class="w-full aspect-[370/375] duration-[400ms] group-hover:scale-110">
                    </div>

                    <div
                        class="ed-teacher__txt bg-white relative z-[1] mx-[25px] lg:mx-[20px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] px-[25px] xl:px-[20px] md:px-[15px] pb-[30px] lg:pb-[25px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
                        <div class="ed-teacher-socials absolute right-[20px] -top-[43px]">
                            <div
                                class="ed-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] bottom-[calc(100%+8px)] translate-y-[100%] group-hover:translate-y-0 group-hover:opacity-100">
                                <a href="#"
                                    class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"
                                    class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"
                                    class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div
                                class="ed-teacher-socials__icon bg-edpurple w-[36px] aspect-square rounded-full bg-etBlue flex items-center justify-center">
                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z"
                                        fill="white"></path>
                                </svg>
                            </div>
                        </div>
                        <h5 class="font-semibold text-[20px] text-etBlack mb-[4px]"><a href="teacher-details.html"
                                class="hover:text-etBlue">Salah Uddin</a></h5>
                        <span class="text-etGray text-[16px]">Senior Consultants, Edustring</span>
                    </div>
                </div>

                <!-- single teacher -->
                <div class="ed-teacher group">
                    <div class="ed-teacher__img rounded-[16px] overflow-hidden">
                        <img src="{{ asset('web/img/saikat.jpg') }}" alt="Team Member Image"
                            class="w-full aspect-[370/375] duration-[400ms] group-hover:scale-110">
                    </div>

                    <div
                        class="ed-teacher__txt bg-white relative z-[1] mx-[25px] lg:mx-[20px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] px-[25px] xl:px-[20px] md:px-[15px] pb-[30px] lg:pb-[25px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
                        <div class="ed-teacher-socials absolute right-[20px] -top-[43px]">
                            <div
                                class="ed-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] bottom-[calc(100%+8px)] translate-y-[100%] group-hover:translate-y-0 group-hover:opacity-100">
                                <a href="https://www.facebook.com/saikat.mahmud4"
                                    class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/eftakhar-mahmud"
                                    class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/saikat_mahmud4"
                                    class="bg-white text-edpurple w-[36px] h-[36px] flex items-center justify-center rounded-full hover:text-white hover:bg-edpurple"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div
                                class="ed-teacher-socials__icon bg-edpurple w-[36px] aspect-square rounded-full bg-etBlue flex items-center justify-center">
                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z"
                                        fill="white"></path>
                                </svg>
                            </div>
                        </div>
                        <h5 class="font-semibold text-[20px] text-etBlack mb-[4px]"><a href="teacher-details.html"
                                class="hover:text-etBlue">Saikat Mahmud</a></h5>
                        <span class="text-etGray text-[16px]">Senior Consultants, Edustring</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- vector -->
        <div>
            <img src="{{ asset('web/img/teacher-vector-1.svg') }}" alt="vecotr"
                class="pointer-events-none absolute -z-[1] bottom-0 left-0">
            <img src="{{ asset('web/img/teacher-vector-2.svg') }}" alt="vecotr"
                class="pointer-events-none absolute -z-[1] top-[105px] right-0">
        </div>
    </section>
    <!-- TEACHER SECTION END -->


    <!-- STATS SECTION START -->
    <section class="py-[80px] bg-edblue">
        <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
            <div class="flex md:flex-wrap gap-[70px] lg:gap-[50px] *:flex-auto">
                <!-- single stat -->
                <div
                    class="text-white text-center md:w-[45%] shrink-0 pr-[80px] lg:pr-[60px] last:pr-0 border-r border-white/20 last:border-0 md:even:pr-0 md:even:border-r-0 xs:pr-0 xs:border-r-0">
                    <img src="{{ asset('web/img/stat-1.png') }}" alt="icon"
                        class="w-max max-w-full mx-auto mb-[7px]">
                    <h3 class="font-bold text-[36px]">5+</h3>
                    <h6 class="font-medium">Year of experience</h6>
                </div>

                <!-- single stat -->
                <div
                    class="text-white text-center md:w-[45%] shrink-0 pr-[80px] lg:pr-[60px] last:pr-0 border-r border-white/20 last:border-0 md:even:pr-0 md:even:border-r-0 xs:pr-0 xs:border-r-0">
                    <img src="{{ asset('web/img/stat-2.png') }}" alt="icon"
                        class="w-max max-w-full mx-auto mb-[7px]">
                    <h3 class="font-bold text-[36px]">94%</h3>
                    <h6 class="font-medium">Visa Approved</h6>
                </div>

                <!-- single stat -->
                {{-- <div
                    class="text-white text-center md:w-[45%] shrink-0 pr-[80px] lg:pr-[60px] last:pr-0 border-r border-white/20 last:border-0 md:even:pr-0 md:even:border-r-0 xs:pr-0 xs:border-r-0">
                    <img src="{{ asset('web/img/stat-3.png') }}" alt="icon"
                        class="w-max max-w-full mx-auto mb-[7px]">
                    <h3 class="font-bold text-[36px]">100+</h3>
                    <h6 class="font-medium">Experts Instructors</h6>
                </div> --}}

                <!-- single stat -->
                <div
                    class="text-white text-center md:w-[45%] shrink-0 pr-[80px] lg:pr-[60px] last:pr-0 border-r border-white/20 last:border-0 md:even:pr-0 md:even:border-r-0 xs:pr-0 xs:border-r-0">
                    <img src="{{ asset('web/img/stat-4.png') }}" alt="icon"
                        class="w-max max-w-full mx-auto mb-[7px]">
                    <h3 class="font-bold text-[36px]">100+</h3>
                    <h6 class="font-medium">Admission Success</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- STATS SECTION END -->


    <!-- BLOG SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <!-- heading -->
            <div class="text-center mb-[46px] md:mb-[30px]">
                <h6 class="ed-section-sub-title">Latest Blog</h6>
                <h2 class="ed-section-title">Our Latest Blogs</h2>
            </div>

            <!-- blog cards -->
            <div
                class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 xs:max-w-[65%] xxs:max-w-full xs:mx-auto gap-[30px] lg:gap-[20px] sm:gap-[15px]">
                <!-- single blog -->
                <div
                    class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                    <div class="ed-blog__img relative z-[1] mb-[45px]">
                        <div class="overflow-hidden rounded-[6px]">
                            <img src="{{ asset('web/img/blog-1.png') }}" alt="blog image"
                                class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                        </div>

                        <div
                            class="bg-white absolute left-[20px] bottom-0 translate-y-[50%] rounded-[10px] font-bold text-[14px] text-black inline-block uppercase overflow-hidden text-center shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                            <span class="bg-edyellow text-white block py-[3px] rounded-[10px]">10</span>
                            <span class="px-[11px] py-[2px] block">June</span>
                        </div>
                    </div>

                    <div class="et-blog__txt">
                        <div class="et-blog__infos flex gap-x-[30px] mb-[13px]">
                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                <span class="icon"><img src="{{ asset('web/img/icon/user.svg') }}"
                                        alt="icon"></span>
                                <span class="text font-medium text-[14px] text-edgray">By Admin</span>
                            </div>

                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                <span class="icon"><img src="{{ asset('web/img/icon/tag.svg') }}"
                                        alt="icon"></span>
                                <span class="text font-medium text-[14px] text-edgray">Meditation</span>
                            </div>
                        </div>

                        <h4 class="et-blog__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]"><a
                                href="{{ route('blog.details') }}" class="hover:text-edpurple">Which Yoga Hybrid Is Right For
                                You?</a></h4>

                        <a href="{{ route('blog.details') }}"
                            class="font-semibold text-[16px] text-edgray inline-flex items-center gap-[10px] hover:text-edpurple">Read
                            More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- single blog -->
                <div
                    class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                    <div class="ed-blog__img relative z-[1] mb-[45px]">
                        <div class="overflow-hidden rounded-[6px]">
                            <img src="{{ asset('web/img/blog-2.png') }}" alt="blog image"
                                class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                        </div>

                        <div
                            class="bg-white absolute left-[20px] bottom-0 translate-y-[50%] rounded-[10px] font-bold text-[14px] text-black inline-block uppercase overflow-hidden text-center shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                            <span class="bg-edyellow text-white block py-[3px] rounded-[10px]">10</span>
                            <span class="px-[11px] py-[2px] block">June</span>
                        </div>
                    </div>

                    <div class="et-blog__txt">
                        <div class="et-blog__infos flex gap-x-[30px] mb-[13px]">
                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                <span class="icon"><img src="{{ asset('web/img/icon/user.svg') }}"
                                        alt="icon"></span>
                                <span class="text font-medium text-[14px] text-edgray">By Admin</span>
                            </div>

                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                <span class="icon"><img src="{{ asset('web/img/icon/tag.svg') }}"
                                        alt="icon"></span>
                                <span class="text font-medium text-[14px] text-edgray">Meditation</span>
                            </div>
                        </div>

                        <h4 class="et-blog__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]"><a
                                href="{{ route('blog.details') }}" class="hover:text-edpurple">Which Yoga Hybrid Is Right For
                                You?</a></h4>

                        <a href="{{ route('blog.details') }}"
                            class="font-semibold text-[16px] text-edgray inline-flex items-center gap-[10px] hover:text-edpurple">Read
                            More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- single blog -->
                <div
                    class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                    <div class="ed-blog__img relative z-[1] mb-[45px]">
                        <div class="overflow-hidden rounded-[6px]">
                            <img src="{{ asset('web/img/blog-3.png') }}" alt="blog image"
                                class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                        </div>

                        <div
                            class="bg-white absolute left-[20px] bottom-0 translate-y-[50%] rounded-[10px] font-bold text-[14px] text-black inline-block uppercase overflow-hidden text-center shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                            <span class="bg-edyellow text-white block py-[3px] rounded-[10px]">10</span>
                            <span class="px-[11px] py-[2px] block">June</span>
                        </div>
                    </div>

                    <div class="et-blog__txt">
                        <div class="et-blog__infos flex gap-x-[30px] mb-[13px]">
                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                <span class="icon"><img src="{{ asset('web/img/icon/user.svg') }}"
                                        alt="icon"></span>
                                <span class="text font-medium text-[14px] text-edgray">By Admin</span>
                            </div>

                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                <span class="icon"><img src="{{ asset('web/img/icon/tag.svg') }}"
                                        alt="icon"></span>
                                <span class="text font-medium text-[14px] text-edgray">Meditation</span>
                            </div>
                        </div>

                        <h4 class="et-blog__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]"><a
                                href="{{ route('blog.details') }}" class="hover:text-edpurple">Which Yoga Hybrid Is Right For
                                You?</a></h4>

                        <a href="{{ route('blog.details') }}"
                            class="font-semibold text-[16px] text-edgray inline-flex items-center gap-[10px] hover:text-edpurple">Read
                            More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
            </div>

            <!-- partners -->
            <div class="ed-partners-slider swiper mt-[100px] xl:mt-[70px] md:mt-[50px]">
                <div class="swiper-wrapper">
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="{{ asset('web/img/partner-1.png') }}" alt="Partner Logo"
                            class="xxs:mx-auto"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="{{ asset('web/img/partner-2.png') }}" alt="Partner Logo"
                            class="xxs:mx-auto"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="{{ asset('web/img/partner-3.png') }}" alt="Partner Logo"
                            class="xxs:mx-auto"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="{{ asset('web/img/partner-4.png') }}" alt="Partner Logo"
                            class="xxs:mx-auto"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="{{ asset('web/img/partner-5.png') }}" alt="Partner Logo"
                            class="xxs:mx-auto"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="{{ asset('web/img/partner-6.png') }}" alt="Partner Logo"
                            class="xxs:mx-auto"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="{{ asset('web/img/partner-1.png') }}" alt="Partner Logo"
                            class="xxs:mx-auto"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="{{ asset('web/img/partner-2.png') }}" alt="Partner Logo"
                            class="xxs:mx-auto"></div>
                </div>
            </div>

            <!-- vector -->
            <div>
                <img src="{{ asset('web/img/form-notice-vector-1.svg') }}" alt="vector"
                    class="absolute -z-[1] bottom-[288px] left-0 pointer-events-none">
            </div>
        </div>
    </section>
    <!-- BLOG SECTION END -->


    <!-- FAQ SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
        <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
            <div class="grid grid-cols-2 md:grid-cols-1 gap-x-[60px] gap-y-[25px] items-center">
                <!-- left -->
                <div class="grow shrink-0">
                    <div class="relative flex items-end md:justify-center mb-[140px]">
                        <img src="{{ asset('web/img/faq-2-img-1.jpg') }}" alt="About Image"
                            class="border-[8px] border-white rounded-[8px] shrink-0">
                        <img src="{{ asset('web/img/faq-2-img-2.jpg') }}" alt="About Image"
                            class="border-[8px] border-white rounded-[8px] shrink-0 -ml-[202px] lg:-ml-[272px] -mb-[140px]">

                        <!-- vectors -->
                        <div>
                            <img src="{{ asset('web/img/about-2-img-vector.svg') }}" alt="vector"
                                class="absolute pointer-events-none rounded-full top-[60px] right-[110px] -z-[1]">
                            <img src="{{ asset('web/img/about-2-img-vector.svg') }}" alt="vector"
                                class="absolute pointer-events-none rounded-full top-[100%] left-[30px] -z-[1]">
                            <img src="{{ asset('web/img/faq-img-vector.svg') }}" alt="vector"
                                class="absolute pointer-events-none top-[52%] left-[20px] -z-[1]">
                            <img src="{{ asset('web/img/banner-2-img-vector-2.svg') }}" alt="vector"
                                class="absolute pointer-events-none top-[30px] right-[50px]">
                        </div>
                    </div>
                </div>

                <!-- text -->
                <div>
                    <h6 class="ed-section-sub-title">FAQ</h6>
                    <h2 class="ed-section-title mb-[26px]">We Are Always Ensure Best University For Your Learning</h2>

                    <div class="ed-accordion space-y-[20px]">
                        <!-- single question -->
                        <div
                            class="ed-single-accordion-item bg-white rounded-[6px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] open">
                            <div class="ed-single-accordion-item__header flex items-center justify-between cursor-pointer">
                                <h3 class="ed-single-accordion-item__title font-semibold text-[20px] text-etBlack">How can EduString help me with my study abroad plans?</h3>
                                <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                            </div>

                            <div class="ed-single-accordion-item__body">
                                <p class="font-light text-[16px] text-etGray">We provide personalized guidance, from selecting universities and programs to completing applications and preparing for visas.</p>
                            </div>
                        </div>

                        <!-- single question -->
                        <div
                            class="ed-single-accordion-item bg-white rounded-[6px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)]">
                            <div class="ed-single-accordion-item__header flex items-center justify-between cursor-pointer">
                                <h3 class="ed-single-accordion-item__title font-semibold text-[20px] text-etBlack">What are the costs involved in studying abroad?</h3>
                                <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                            </div>

                            <div class="ed-single-accordion-item__body">
                                <p class="font-light text-[16px] text-etGray">Costs vary by country and program; we help you estimate tuition, living expenses, and funding opportunities.</p>
                            </div>
                        </div>

                        <!-- single question -->
                        <div
                            class="ed-single-accordion-item bg-white rounded-[6px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)]">
                            <div class="ed-single-accordion-item__header flex items-center justify-between cursor-pointer">
                                <h3 class="ed-single-accordion-item__title font-semibold text-[20px] text-etBlack">Do you assist with scholarships and financial aid?</h3>
                                <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                            </div>

                            <div class="ed-single-accordion-item__body">
                                <p class="font-light text-[16px] text-etGray">Yes, we guide you through scholarship options and application processes to make education abroad more affordable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- vector -->
        <img src="{{ asset('web/img/faq-2-vector.svg') }}" alt="vector"
            class="absolute -z-[1] pointer-events-none right-0 bottom-[255px]">
    </section>
    <!-- FAQ SECTION END -->
@endsection
