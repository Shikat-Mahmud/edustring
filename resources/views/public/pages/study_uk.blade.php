@extends('public.layout.master')
@section('title', 'Study In UK')

@section('content')
    <!-- BREADCRUMB SECTION START -->
    <section
        style="padding-top: 327px; padding-bottom: 158px; text-align: center; background: url('{{ asset('web/img/breadcrumb-bg.jpg') }}') no-repeat center center / cover; position: relative; z-index: 1; overflow: hidden;"
        class="xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">Study In UK</h1>
            <ul class="flex items-center justify-center gap-[10px] text-white">
                <li><a href="{{ route('home') }}" class="text-edyellow">Home</a></li>
                <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
                <li>Study In UK</li>
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


    <!-- main content -->
    <div class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <!-- cover -->
            <div
                class="rounded-[8px] overflow-hidden relative z-[2] before:absolute before:inset-0 before:-z-[0] mb-[40px] md:mb-[25px] xs:mb-[15px]">
                {{-- before:bg-edpurple/20 --}}
                <img src="{{ asset('web/img/study_in_uk_banner.jpg') }}" alt="Course Cover"
                    class="rounded-[8px] w-full aspect-[1170/552]">

                {{-- <a href="https://www.youtube.com/watch?v=ht7vYtWOazI&amp;pp=ygUPY291cnNlIG92ZXJ2aWV3" data-fslightbox
                    class="absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] w-[75px] xs:w-[65px] xxs:w-[60px] aspect-square bg-white rounded-full flex items-center justify-center text-[28px] text-edpurple hover:text-black before:absolute before:animate-borderFade before:-inset-[12px] before:border before:border-white before:rounded-full after:absolute after:animate-borderFade after:-inset-[5px] after:border after:border-white after:rounded-full"><i
                        class="fa-solid fa-play"></i></a> --}}
            </div>

            <!-- txt -->
            <div class="flex gap-[30px] lg:gap-[20px] md:flex-col md:items-center">
                <div class="left max-w-full grow">
                    <div>
                        <h4
                            class="font-semibold text-[30px] lg:text-[27px] xs:text-[25px] xxs:text-[23px] text-edblue mb-[23px]">Study In United Kingdom</h4>

                        <!-- tabs container -->
                        <div>
                            <div class="ed-tab duration-[400ms]">
                                <div>
                                    <h4
                                        class="font-semibold text-[25px] lg:text-[20px] xs:text-[18px] xxs:text-[16px] text-edblue mt-[28px] mb-[15px]">Your Future in UK Higher Education</h4>
                                    <div class="space-y-[10px]">
                                        <p class="text-edgray">Your journey to world-class education begins in the United Kingdom. Discover prestigious universities, cutting-edge research facilities, and a vibrant cultural experience that will shape your academic and professional life. Seize this opportunity to connect with university admissions teams, explore scholarship options, and join the ranks of thousands of international students who choose the UK each year. With flexible study programs, internationally recognized degrees, and a welcoming environment for global learners, now is the time to start your UK education adventure.</p>
                                    </div>
                                </div>

                                <div>
                                    <h4
                                        class="font-semibold text-[25px] lg:text-[20px] xs:text-[18px] xxs:text-[16px] text-edblue mt-[28px] mb-[15px]">A Blend of Tradition and Innovation</h4>
                                    <div class="space-y-[10px]">
                                        <p class="text-edgray">From the state-of-the-art research labs in Manchester to the historic halls of Cambridge, British universities blend centuries-old traditions with modern innovation. Whether you're pursuing breakthrough scientific discoveries, advancing in business, or exploring the creative arts, the UK offers programs tailored to your aspirations. International students benefit from a multicultural campus life, extensive industry partnerships, and valuable post-study work opportunities to launch a global career. With its emphasis on critical thinking, independent research, and practical skills, the UK's education system is a gateway to success, recognized by employers worldwide.</p>
                                    </div>
                                </div>

                                <div>
                                    <h4
                                        class="font-semibold text-[25px] lg:text-[20px] xs:text-[18px] xxs:text-[16px] text-edblue mt-[28px] mb-[15px]">Beyond the Classroom</h4>
                                    <div class="space-y-[10px]">
                                        <p class="text-edgray">The UK isn't just about academic excellence; it’s about holistic growth. International students are supported through dedicated services, vibrant campus communities, and a rich array of extracurricular activities. Immerse yourself in a country that has nurtured global leaders, Nobel laureates, and industry pioneers. This is your chance to build a world-class foundation for your ambitions. Take action today and unlock a future of limitless possibilities by choosing the United Kingdom for your higher education.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Form BLOCK -->
                        <div class="mt-[50px]">
                            <h5 class="font-semibold text-[22px] text-edblue mb-[17px]">Contact Us for Admission</h5>
                            <hr class="mb-[20px]">
                            <form action="{{ route('contact.us') }}" enctype="multipart/form-data" method="POST"
                                class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]">
                                @csrf
                                <div class="col-span-2 xxs:col-span-1">
                                    <label for="ed-course-review-name"
                                        class="font-lato font-semibold text-edblue block mb-[12px]">Your Name*</label>
                                    <input type="text" name="name" id="ed-course-review-name" placeholder="Your Name"
                                        class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                                </div>
                                <div>
                                    <label for="ed-course-review-email"
                                        class="font-lato font-semibold text-edblue block mb-[12px]">Your Email</label>
                                    <input type="email" name="email" id="ed-course-review-email"
                                        placeholder="Your Email"
                                        class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                                </div>
                                <div>
                                    <label for="ed-course-review-phone"
                                        class="font-lato font-semibold text-edblue block mb-[12px]">Your Phone No*</label>
                                    <input type="phone" name="phone" id="ed-course-review-phone"
                                        placeholder="Your Phone No"
                                        class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                                </div>
                                <div class="col-span-2 xxs:col-span-1">
                                    <label for="ed-course-review-message"
                                        class="font-lato font-semibold text-edblue block mb-[12px]">Your Message</label>
                                    <textarea name="message" id="ed-course-review-message" placeholder="Your Message"
                                        class="border border-[#ECECEC] h-[145px] p-[20px] rounded-[4px] w-full focus:outline-none"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="bg-edpurple h-[55px] px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-edblue">Send <span class="icon pl-[10px]"><i
                                                class="fa-solid fa-arrow-right-long"></i></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
