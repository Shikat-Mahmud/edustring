@extends('public.layout.master')
@section('title', 'Contact')

@section('content')
    <!-- BREADCRUMB SECTION START -->
    <section 
        style="padding-top: 327px; padding-bottom: 158px; text-align: center; background: url('{{ asset('web/img/breadcrumb-bg.jpg') }}') no-repeat center center / cover; position: relative; z-index: 1; overflow: hidden;"
        class="xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">Contact us</h1>
            <ul class="flex items-center justify-center gap-[10px] text-white">
                <li><a href="{{ route('home') }}" class="text-edyellow">Home</a></li>
                <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
                <li>Contact us</li>
            </ul>
        </div>

        <div class="vectors">
            <img src="{{ asset('web/img/breadcrumb-vector-1.svg') }}" alt="vector" class="absolute -z-[1] pointer-events-none bottom-[34px] left-0 xl:left-auto xl:right-[90%]">
            <img src="{{ asset('web/img/breadcrumb-vector-2.svg') }}" alt="vector" class="absolute -z-[1] pointer-events-none bottom-0 right-0 xl:right-auto xl:left-[60%]">
        </div>
    </section>
    <!-- BREADCRUMB SECTION END -->


    <!-- CONTACT SECTION START -->
    <section class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <div class="grid grid-cols-2 md:grid-cols-1 gap-[60px] xl:gap-[40px] items-center">
                <!-- left side contact infos -->
                <div class="rounded-[16px] overflow-hidden">
                    <div class="bg-edpurple p-[40px] sm:p-[30px] xxs:p-[20px] space-y-[24px] text-[16px]">
                        <!-- single contact info -->
                        <div class="flex flex-wrap xxs:flex-col items-center xxs:items-start gap-[20px] gap-y-[10px] pb-[20px] text-white border-b border-white/30 last:border-0 last:pb-0">
                            <span class="icon shrink-0 border border-dashed border-white rounded-full h-[62px] w-[62px] flex items-center justify-center">
                                <img src="{{ asset('web/img/icon/call-msg.svg') }}" alt="icon">
                            </span>

                            <div class="txt">
                                <span class="font-normal">Call Us 7/24</span>
                                <h4 class="font-medium text-[24px] xxs:text-[22px]"><a href="tel:+880 1609-794780">+880 1609-794780</a></h4>
                            </div>
                        </div>

                        <!-- single contact info -->
                        <div class="flex flex-wrap xxs:flex-col items-center xxs:items-start gap-[20px] gap-y-[10px] pb-[20px] text-white border-b border-white/30 last:border-0 last:pb-0">
                            <span class="icon shrink-0 border border-dashed border-white rounded-full h-[62px] w-[62px] flex items-center justify-center">
                                <img src="{{ asset('web/img/icon/mail-at.svg') }}" alt="icon">
                            </span>

                            <div class="txt">
                                <span class="font-normal">Make a Quote</span>
                                <h4 class="font-medium text-[24px] xxs:text-[22px]"><a href="mailto:contact@edustring.com">contact@edustring.com</a></h4>
                            </div>
                        </div>

                        <!-- single contact info -->
                        <div class="flex flex-wrap xxs:flex-col items-center xxs:items-start gap-[20px] gap-y-[10px] pb-[20px] text-white border-b border-white/30 last:border-0 last:pb-0">
                            <span class="icon shrink-0 border border-dashed border-white rounded-full h-[62px] w-[62px] flex items-center justify-center">
                                <img src="{{ asset('web/img/icon/location-dot-circle.svg') }}" alt="icon">
                            </span>

                            <div class="txt">
                                <span class="font-normal">Location</span>
                                <h4 class="font-medium text-[24px] xxs:text-[22px]">Dhaka, Bangladesh</h4>
                            </div>
                        </div>
                    </div>

                    <!-- video cover -->
                    <div class="relative">
                        <img src="{{ asset('web/img/contact-video-cover.jpg') }}" alt="video cover" class="w-full brightness-[80%]">
                        {{-- <a href="https://youtu.be/5ppDzM8m9lI?si=zml3HbV176DBsZlg" data-fslightbox class="video-btn-shadow w-[58px] aspect-square rounded-full bg-white text-[18px] text-edpurple flex items-center justify-center absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%]">
                            <i class="fa-solid fa-play"></i>
                        </a> --}}
                    </div>
                </div>

                <!-- right side contact form -->
                <div>
                    <h2 class="text-[40px] md:text-[35px] sm:text-[30px] xxs:text-[28px] font-semibold text-edblue mb-[7px]">Ready to Get Started?</h2>
                    <p class="text-edgray font-normal text-[16px] mb-[38px]">We have professional alliance's with leading Universities and Colleges around the world.</p>

                    <form action="#" class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]">
                        <div class="col-span-2 xxs:col-span-1">
                            <label for="ed-contact-name" class="font-lato font-semibold text-edblue block mb-[12px]">Your Name*</label>
                            <input type="text" name="name" id="ed-contact-name" placeholder="Your Name" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>
                        <div>
                            <label for="ed-contact-email" class="font-lato font-semibold text-edblue block mb-[12px]">Your Email*</label>
                            <input type="email" name="email" id="ed-contact-email" placeholder="Your Email" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>
                        <div>
                            <label for="ed-contact-phone" class="font-lato font-semibold text-edblue block mb-[12px]">Your Phone No*</label>
                            <input type="phone" name="phone" id="ed-contact-phone" placeholder="Your Phone No" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>
                        <div class="col-span-2 xxs:col-span-1">
                            <label for="ed-contact-message" class="font-lato font-semibold text-edblue block mb-[12px]">Your Message*</label>
                            <textarea name="message" id="ed-contact-message" placeholder="Your Message" class="border border-[#ECECEC] h-[145px] p-[20px] rounded-[4px] w-full focus:outline-none"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-edpurple h-[55px] px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-edblue">Send Message <span class="icon pl-[10px]"><i class="fa-solid fa-arrow-right-long"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END -->
@endsection
