@extends('public.layout.master')
@section('title', 'About')

@section('content')
    <!-- BREADCRUMB SECTION START -->
    <section
        style="padding-top: 327px; padding-bottom: 158px; text-align: center; background: url('{{ asset('web/img/breadcrumb-bg.jpg') }}') no-repeat center center / cover; position: relative; z-index: 1; overflow: hidden;"
        class="xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">About us</h1>
            <ul class="flex items-center justify-center gap-[10px] text-white">
                <li><a href="{{ route('home') }}" class="text-edyellow">Home</a></li>
                <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
                <li>About us</li>
            </ul>
        </div>

        <div class="vectors">
            <img src="{{ asset('web/img/breadcrumb-vector-1.svg') }}" alt="vector"
                class="absolute -z-[1] pointer-events-none bottom-[34px] left-0 xl:left-auto xl:right-[90%]">
            <img src="{{ asset('web/img/breadcrumb-vector-2.svg') }}" alt="vector"
                class="absolute -z-[1] pointer-events-none bottom-0 right-0 xl:right-auto xl:left-[60%]">
        </div>
    </section>
    <!-- BREADCRUMB SECTION END -->


    <!-- ABOUT SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div class="flex sm:flex-col items-start justify-between gap-[15px]">
                <h2 class="ed-section-title">About Edustring</h2>

                <div class="max-w-[50%] sm:max-w-full mb-[60px]">
                    <p class="text-edgray2 mb-[25px]">Edustring student consultancy is one of the renowned international
                        education consultancy firms which assisting overseas students. <br>
                        The head office of Edustring is located in UK which helps all
                        International students to get admission into top-ranked universities from the United Kingdom, USA,
                        India and China. At the same time, we have a very strong relationship with our partner Australian,
                        Canadian, German Universities.</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="md:w-[10%] xxs:w-[5%]">
                    <img src="{{ asset('web/img/about-inner-img.jpg') }}" alt="About image"
                        class="w-[633px] max-w-[633px] sm:max-w-[308px] aspect-[633/431px]">
                </div>

                <div class="md:w-[90%] xxs:w-[95%]">
                    <div
                        class="bg-white p-[50px] lg:p-[30px] xxs:p-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] -ml-[92px] xl:-ml-[134px] lg:-ml-[278px] md:ml-0">
                        <h6
                            class="font-semibold uppercase text-edpurple relative z-[1] pl-[40px] mb-[10px] before:absolute before:left-0 before:top-[50%] before:-translate-y-[50%] before:h-[1px] before:w-[30px] before:bg-edpurple">
                            About Edustring</h6>
                        <h4 class="font-semibold text-[30px] md:text-[26px] xs:text-[22px] leading-[1.2] mb-[26px]">WE
                            SUPPORT YOUR AMBITION</h4>
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
                        <div class="flex flex-wrap items-center gap-x-[24px] gap-y-[20px]">
                            <div class="flex gap-x-[8px]">
                                <div class="rounded-full overflow-hidden w-[58px] aspect-square shrink-0">
                                    <img src="{{ asset('web/img/saikat.jpg') }}" alt="Principal"
                                        class="w-[58px] aspect-square">
                                </div>
                                <div>
                                    <h5 class="font-semibold text-[18px] text-black mb-[4px]">Saikat Mahmud</h5>
                                    <h6 class="text-edgray">Mentor <span class="text-edpurple">Edustring</span></h6>
                                </div>
                            </div>
                            <a href="mailto:contact@edustring.com" class="ed-btn gap-[10px]">message mentor <span class="icon"><i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END -->


    <!-- EMPLOYABILITY SECTION START -->
    <section class="bg-[#FAF9F6] relative z-[1] overflow-hidden">
        <div
            class="flex lg:flex-col items-end gap-[130px] xxxl:gap-[100px] xxl:gap-[60px] lg:gap-y-0 ml-[19.5%] xxxl:ml-[14.71%] xxl:ml-[9.71%] xl:ml-[5.71%] lg:mx-[5.71%] md:mx-[12px]">
            <!-- left / text -->
            <div class="py-[120px] xl:py-[80px] md:py-[60px]">
                {{-- <h6 class="ed-section-sub-title">employability</h6> --}}
                <h2 class="ed-section-title mb-[28px]">Why chose us</h2>
                <p class="text-edgray mb-[11px]">87% of people learning for professional development report career benefits.</p>
                
                <div class="mb-[23px]">
                    <h6
                    class="font-semibold text-[18px] text-[#002147] relative pl-[30px] before:absolute before:bg-edyellow before:w-[20px] before:h-[2px] before:left-0 before:top-[50%] before:-translate-y-[50%]">
                    Our Vision</h6>
                    <p>
                        To be the global leader in education consultancy, empowering students worldwide.
                    </p>
                </div>
                <div class="mb-[23px]">
                    <h6
                    class="font-semibold text-[18px] text-[#002147] relative pl-[30px] before:absolute before:bg-edyellow before:w-[20px] before:h-[2px] before:left-0 before:top-[50%] before:-translate-y-[50%]">
                    Our Mission</h6>
                    <p>
                        To provide exceptional guidance and innovative solutions for world-class education opportunities.
                    </p>
                </div>
                <div class="mb-[23px]">
                    <h6
                    class="font-semibold text-[18px] text-[#002147] relative pl-[30px] before:absolute before:bg-edyellow before:w-[20px] before:h-[2px] before:left-0 before:top-[50%] before:-translate-y-[50%]">
                    Our Goal</h6>
                    <p>
                        To create pathways for higher education abroad, fostering personal and national growth.
                    </p>
                </div>

                <a href="{{ route('apply') }}"
                    class="ed-btn !bg-transparent border border-edpurple !text-edpurple hover:!bg-edpurple hover:!text-white">Apply
                    Now</a>
            </div>

            <!-- right / img / form -->
            <div class="relative shrink-0 xxxl:max-w-[55%] lg:max-w-full">
                <img src="{{ asset('web/img/employability-img.jpg') }}" alt="image" class="min-h-[280px]">
                <div
                    class="absolute bottom-0 text-white p-[40px] xs:p-[20px] bg-white/5 backdrop-blur-[13.5914px] w-full shadow-[0_12px_16px_-4px_rgba(30,41,59,0.04),0_4px_6px_-2px_rgba(30,41,59,0.1)]">
                    <h4 class="font-semibold text-[30px] xs:text-[26px] xxs:text-[22px] mb-[12px]">Find A career that suits
                        you</h4>

                    <form action="#">
                        <label for="career-interest" class="text-[15px] font-medium inline-block mb-[10px]">Choose a Career
                            Interest</label>
                        <div class="flex xxs:flex-col gap-[15px]">
                            <input type="text" name="career-interest" id="career-interest"
                                placeholder="Enter Your Email"
                                class="bg-transparent border border-white rounded-[4px] p-[15px] w-full focus:outline-none placeholder:text-white/80">
                            <button type="submit" class="ed-btn !h-[56px] shrink-0 !rounded-[4px]">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- vector -->
        <img src="{{ asset('web/img/employability-vector.svg') }}" alt="vector"
            class="absolute -z-[1] bottom-[186px] left-[37px] pointer-events-none">
    </section>
    <!-- EMPLOYABILITY SECTION END -->
@endsection
