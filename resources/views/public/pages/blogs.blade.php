@extends('public.layout.master')
@section('title', 'Blogs')

@section('content')
<!-- BREADCRUMB SECTION START -->
<section style="padding-top: 327px; padding-bottom: 158px; text-align: center; background: url('{{ asset('web/img/breadcrumb-bg.jpg') }}') no-repeat center center / cover; position: relative; z-index: 1; overflow: hidden;"
class="xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
    <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
        <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">Blogs</h1>
        <ul class="flex items-center justify-center gap-[10px] text-white">
            <li><a href="{{ route('home') }}" class="text-edyellow">Home</a></li>
            <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
            <li>Blogs</li>
        </ul>
    </div>

    <div class="vectors">
        <img src="{{ asset('web/img/breadcrumb-vector-1.svg') }}" alt="vector" class="absolute -z-[1] pointer-events-none bottom-[34px] left-0 xl:left-auto xl:right-[90%]">
        <img src="{{ asset('web/img/breadcrumb-vector-2.svg') }}" alt="vector" class="absolute -z-[1] pointer-events-none bottom-0 right-0 xl:right-auto xl:left-[60%]">
    </div>
</section>
<!-- BREADCRUMB SECTION END -->


<!-- MAIN CONTENT START -->
<div class="ed-event-details-content py-[120px] xl:py-[80px] md:py-[60px]">
    <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
        <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-[30px] lg:gap-[15px]">
            <!-- single news -->
            <div>
                <!-- img -->
                <div class="rounded-[8px] overflow-hidden">
                    <img src="{{ asset('web/img/blog-inner-1.jpg') }}" alt="News Image" class="w-full aspect-[450/294] object-cover">
                </div>

                <!-- txt -->
                <div class="bg-white mx-[20px] lg:mx-[15px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] p-[25px] lg:p-[20px] rounded-[8px] -mt-[67px] relative">
                    <span class="inline-block mb-[10px] font-medium text-edgray2">MARCH 24, 2024</span>
                    <h5><a href="{{ route('blog.details') }}" class="font-semibold text-[24px] lg:text-[22px] sm:text-[20px] leading-[142%] hover:text-edpurple">Peer pressure changes how teens tackle</a></h5>
                    <div class="flex justify-between items-center border-t border-[#D9D9D9] pt-[30px] md:pt-[20px] mt-[33px] md:mt-[23px]">
                        <div class="flex items-center gap-[10px]">
                            <img src="{{ asset('web/img/user-2.png') }}" alt="Blog Author Image" class="w-[44px] aspect-square rounded-full">
                            <div>
                                <h6 class="font-medium text-[16px] leading-[1.3]">Admin</h6>
                                <span class="text-[14px] text-edgray">Co Founder</span>
                            </div>
                        </div>
                        <a href="{{ route('blog.details') }}" class="text-edpurple text-[18px] hover:text-black"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- single news -->
            <div>
                <!-- img -->
                <div class="rounded-[8px] overflow-hidden">
                    <img src="{{ asset('web/img/blog-inner-2.jpg') }}" alt="News Image" class="w-full aspect-[450/294] object-cover">
                </div>

                <!-- txt -->
                <div class="bg-white mx-[20px] lg:mx-[15px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] p-[25px] lg:p-[20px] rounded-[8px] -mt-[67px] relative">
                    <span class="inline-block mb-[10px] font-medium text-edgray2">MARCH 24, 2024</span>
                    <h5><a href="{{ route('blog.details') }}" class="font-semibold text-[24px] lg:text-[22px] sm:text-[20px] leading-[142%] hover:text-edpurple">Best and fastest data
                            server ever</a></h5>
                    <div class="flex justify-between items-center border-t border-[#D9D9D9] pt-[30px] md:pt-[20px] mt-[33px] md:mt-[23px]">
                        <div class="flex items-center gap-[10px]">
                            <img src="{{ asset('web/img/user-2.png') }}" alt="Blog Author Image" class="w-[44px] aspect-square rounded-full">
                            <div>
                                <h6 class="font-medium text-[16px] leading-[1.3]">Admin</h6>
                                <span class="text-[14px] text-edgray">Co Founder</span>
                            </div>
                        </div>
                        <a href="{{ route('blog.details') }}" class="text-edpurple text-[18px] hover:text-black"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- single news -->
            <div>
                <!-- img -->
                <div class="rounded-[8px] overflow-hidden">
                    <img src="{{ asset('web/img/program-2.jpg') }}" alt="News Image" class="w-full aspect-[450/294] object-cover">
                </div>

                <!-- txt -->
                <div class="bg-white mx-[20px] lg:mx-[15px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] p-[25px] lg:p-[20px] rounded-[8px] -mt-[67px] relative">
                    <span class="inline-block mb-[10px] font-medium text-edgray2">MARCH 24, 2024</span>
                    <h5><a href="{{ route('blog.details') }}" class="font-semibold text-[24px] lg:text-[22px] sm:text-[20px] leading-[142%] hover:text-edpurple">Monday Night Concert In Lake View Mountain City</a></h5>
                    <div class="flex justify-between items-center border-t border-[#D9D9D9] pt-[30px] md:pt-[20px] mt-[33px] md:mt-[23px]">
                        <div class="flex items-center gap-[10px]">
                            <img src="{{ asset('web/img/user-2.png') }}" alt="Blog Author Image" class="w-[44px] aspect-square rounded-full">
                            <div>
                                <h6 class="font-medium text-[16px] leading-[1.3]">Admin</h6>
                                <span class="text-[14px] text-edgray">Co Founder</span>
                            </div>
                        </div>
                        <a href="{{ route('blog.details') }}" class="text-edpurple text-[18px] hover:text-black"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- single news -->
            <div>
                <!-- img -->
                <div class="rounded-[8px] overflow-hidden">
                    <img src="{{ asset('web/img/program-3.jpg') }}" alt="News Image" class="w-full aspect-[450/294] object-cover">
                </div>

                <!-- txt -->
                <div class="bg-white mx-[20px] lg:mx-[15px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] p-[25px] lg:p-[20px] rounded-[8px] -mt-[67px] relative">
                    <span class="inline-block mb-[10px] font-medium text-edgray2">MARCH 24, 2024</span>
                    <h5><a href="{{ route('blog.details') }}" class="font-semibold text-[24px] lg:text-[22px] sm:text-[20px] leading-[142%] hover:text-edpurple">Peer pressure changes how teens tackle</a></h5>
                    <div class="flex justify-between items-center border-t border-[#D9D9D9] pt-[30px] md:pt-[20px] mt-[33px] md:mt-[23px]">
                        <div class="flex items-center gap-[10px]">
                            <img src="{{ asset('web/img/user-2.png') }}" alt="Blog Author Image" class="w-[44px] aspect-square rounded-full">
                            <div>
                                <h6 class="font-medium text-[16px] leading-[1.3]">Admin</h6>
                                <span class="text-[14px] text-edgray">Co Founder</span>
                            </div>
                        </div>
                        <a href="{{ route('blog.details') }}" class="text-edpurple text-[18px] hover:text-black"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- single news -->
            <div>
                <!-- img -->
                <div class="rounded-[8px] overflow-hidden">
                    <img src="{{ asset('web/img/program-1.jpg') }}" alt="News Image" class="w-full aspect-[450/294] object-cover">
                </div>

                <!-- txt -->
                <div class="bg-white mx-[20px] lg:mx-[15px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] p-[25px] lg:p-[20px] rounded-[8px] -mt-[67px] relative">
                    <span class="inline-block mb-[10px] font-medium text-edgray2">MARCH 24, 2024</span>
                    <h5><a href="{{ route('blog.details') }}" class="font-semibold text-[24px] lg:text-[22px] sm:text-[20px] leading-[142%] hover:text-edpurple">Peer pressure changes how teens tackle</a></h5>
                    <div class="flex justify-between items-center border-t border-[#D9D9D9] pt-[30px] md:pt-[20px] mt-[33px] md:mt-[23px]">
                        <div class="flex items-center gap-[10px]">
                            <img src="{{ asset('web/img/user-2.png') }}" alt="Blog Author Image" class="w-[44px] aspect-square rounded-full">
                            <div>
                                <h6 class="font-medium text-[16px] leading-[1.3]">Admin</h6>
                                <span class="text-[14px] text-edgray">Co Founder</span>
                            </div>
                        </div>
                        <a href="{{ route('blog.details') }}" class="text-edpurple text-[18px] hover:text-black"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- single news -->
            <div>
                <!-- img -->
                <div class="rounded-[8px] overflow-hidden">
                    <img src="{{ asset('web/img/blog-inner-1.jpg') }}" alt="News Image" class="w-full aspect-[450/294] object-cover">
                </div>

                <!-- txt -->
                <div class="bg-white mx-[20px] lg:mx-[15px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] p-[25px] lg:p-[20px] rounded-[8px] -mt-[67px] relative">
                    <span class="inline-block mb-[10px] font-medium text-edgray2">MARCH 24, 2024</span>
                    <h5><a href="{{ route('blog.details') }}" class="font-semibold text-[24px] lg:text-[22px] sm:text-[20px] leading-[142%] hover:text-edpurple">Peer pressure changes how teens tackle</a></h5>
                    <div class="flex justify-between items-center border-t border-[#D9D9D9] pt-[30px] md:pt-[20px] mt-[33px] md:mt-[23px]">
                        <div class="flex items-center gap-[10px]">
                            <img src="{{ asset('web/img/user-2.png') }}" alt="Blog Author Image" class="w-[44px] aspect-square rounded-full">
                            <div>
                                <h6 class="font-medium text-[16px] leading-[1.3]">Admin</h6>
                                <span class="text-[14px] text-edgray">Co Founder</span>
                            </div>
                        </div>
                        <a href="{{ route('blog.details') }}" class="text-edpurple text-[18px] hover:text-black"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- PAGINATION START -->
        <div class="flex items-center gap-[20px] pt-[60px] justify-center text-[16px]">
            <a href="#" class="hover:text-edpurple"><i class="fa-solid fa-arrow-left-long"></i></a>
            <div class="ed-pagination flex gap-[10px] items-center">
                <a href="#" class="border border-[#d9d9d9] rounded-full w-[50px] h-[50px] flex items-center justify-center text-etBlack hover:bg-edpurple hover:border-edpurple hover:text-white active">01</a>
                <a href="#" class="border border-[#d9d9d9] rounded-full w-[50px] h-[50px] flex items-center justify-center text-etBlack hover:bg-edpurple hover:border-edpurple hover:text-white">02</a>
                <a href="#" class="border border-[#d9d9d9] rounded-full w-[50px] h-[50px] flex items-center justify-center text-etBlack hover:bg-edpurple hover:border-edpurple hover:text-white">03</a>
            </div>
            <a href="#" class="hover:text-edpurple"><i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <!-- PAGINATION END -->
    </div>
</div>
<!-- MAIN CONTENT END -->
@endsection