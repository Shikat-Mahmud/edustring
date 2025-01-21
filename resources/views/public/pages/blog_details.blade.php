@extends('public.layout.master')
@section('title', 'Read Blog')

@section('content')
    <!-- BREADCRUMB SECTION START -->
    <section
        style="padding-top: 327px; padding-bottom: 158px; text-align: center; background: url('{{ asset('web/img/breadcrumb-bg.jpg') }}') no-repeat center center / cover; position: relative; z-index: 1; overflow: hidden;"
        class="xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">Blog Details</h1>
            <ul class="flex items-center justify-center gap-[10px] text-white">
                <li><a href="{{ route('home') }}" class="text-edyellow">Home</a></li>
                <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
                <li>Blog Details</li>
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


    <!-- MAIN CONTENT START -->
    <div class="ed-event-details-content py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div class="flex gap-[30px] lg:gap-[20px] md:flex-col md:items-center">
                <!-- left content -->
                <div class="left grow space-y-[40px] md:space-y-[30px]">
                    <!-- post -->
                    <div>
                        <div class="img overflow-hidden rounded-[8px] mb-[30px] relative">
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('web/img/news-details-img-1.jpg') }}"
                                alt="blog-cover" class="max-h-[380px] max-w-full rounded-[8px]">

                            @php
                                $date = \Carbon\Carbon::parse($blog->date);
                                $day = $date->format('d');
                                $month = $date->format('M');
                                $year = $date->format('Y');
                            @endphp

                            <div
                                class="bg-[#ECF0F5] rounded-[10px] font-medium text-[14px] text-black inline-block uppercase overflow-hidden text-center absolute top-[20px] left-[20px]">
                                <span class="bg-edpurple text-white block py-[3px] rounded-[10px]">{{ $day }}
                                    {{ $month }}</span>
                                <span class="px-[11px] py-[2px] block">{{ $year }}</span>
                            </div>
                        </div>

                        <!-- txt -->
                        <div>
                            <!-- infos -->
                            <div class="flex items-center gap-[30px] mb-[7px]">
                                <!-- single info -->
                                <div class="flex gap-[10px] items-center">
                                    <span class="icon shrink-0"><img src="{{ asset('web/img/icon/user.svg') }}"
                                            alt="icon"></span>
                                    <span class="text-[14px] text-edgray">by {{ $blog->author }}</span>
                                </div>

                                <!-- single info -->
                                <div class="flex gap-[10px] items-center">
                                    <span class="icon shrink-0"><img src="{{ asset('web/img/icon/tag.svg') }}"
                                            alt="icon"></span>
                                    <span class="text-[14px] text-edgray">{{ $blog->category }}</span>
                                </div>
                            </div>

                            {{-- title --}}
                            <h3
                                class="text-[30px] lg:text-[27px] sm:text-[24px] xxs:text-[22px] font-semibold text-black mb-[18px]">
                                {{ $blog->title }}</h3>

                            {{-- subtitle --}}
                            <blockquote
                                class="bg-edoffwhite italic rounded-[10px] px-[40px] xxs:p-[25px] pr-[120px] xxs:pr-[100px] py-[30px] mt-[32px] mb-[28px] relative text-[16px] font-normal">
                                {{ $blog->subtitle }}

                                <span class="icon absolute right-[40px] bottom-[35px]">
                                    <svg width="36" height="26" viewBox="0 0 36 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 15.3691H7.71428L2.57139 25.5539H10.2857L15.4286 15.3691V0.0917969H0V15.3691Z"
                                            class="fill-edpurple" />
                                        <path
                                            d="M20.5703 0.0917969V15.3691H28.2846L23.1417 25.5539H30.856L35.9989 15.3691V0.0917969H20.5703Z"
                                            class="fill-edpurple" />
                                    </svg>
                                </span>
                            </blockquote>

                            <div id="blogContent" class="font-normal text-[16px] text-edgray mb-[16px]">{!! $blog->content !!}</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN CONTENT END -->

    <!-- BLOG SECTION START -->
    @if (isset($relatedBlogs) && !$relatedBlogs->isEmpty())
        <section class="pb-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <!-- heading -->
                <div class="text-center mb-[46px] md:mb-[30px]">
                    <h2 class="ed-section-title">Related Blogs</h2>
                </div>

                <!-- blog cards -->
                <div
                    class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 xs:max-w-[65%] xxs:max-w-full xs:mx-auto gap-[30px] lg:gap-[20px] sm:gap-[15px]">
                    <!-- single blog -->
                    @foreach ($relatedBlogs as $blog)
                        <div
                            class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                            <div class="ed-blog__img relative z-[1] mb-[45px]">
                                <div class="overflow-hidden rounded-[6px]">
                                    <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('web/img/blog-1.png') }}"
                                        alt="blog image"
                                        class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                                </div>

                                @php
                                    $date = \Carbon\Carbon::parse($blog->date);
                                    $day = $date->format('d');
                                    $month = $date->format('M');
                                    $year = $date->format('Y');
                                @endphp

                                <div
                                    class="bg-white absolute left-[20px] bottom-0 translate-y-[50%] rounded-[10px] font-bold text-[14px] text-black inline-block uppercase overflow-hidden text-center shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                                    <span class="bg-edyellow text-white block py-[3px] rounded-[10px]">{{ $day }}
                                        {{ $month }}</span>
                                    <span class="px-[11px] py-[2px] block">{{ $year }}</span>
                                </div>
                            </div>

                            <div class="et-blog__txt">
                                <div class="et-blog__infos flex gap-x-[30px] mb-[13px]">
                                    <!-- single info -->
                                    <div class="et-blog-info flex items-center gap-x-[10px]">
                                        <span class="icon"><img src="{{ asset('web/img/icon/user.svg') }}"
                                                alt="icon"></span>
                                        <span class="text font-medium text-[14px] text-edgray">By
                                            {{ $blog->author }}</span>
                                    </div>

                                    <!-- single info -->
                                    <div class="et-blog-info flex items-center gap-x-[10px]">
                                        <span class="icon"><img src="{{ asset('web/img/icon/tag.svg') }}"
                                                alt="icon"></span>
                                        <span class="text font-medium text-[14px] text-edgray">{{ $blog->category }}</span>
                                    </div>
                                </div>

                                <h4 class="et-blog__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]">
                                    <a href="{{ route('blog.details', $blog->id) }}"
                                        class="hover:text-edpurple">{{ $blog->title }}</a></h4>

                                <a href="{{ route('blog.details', $blog->id) }}"
                                    class="font-semibold text-[16px] text-edgray inline-flex items-center gap-[10px] hover:text-edpurple">Read
                                    More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- vector -->
                <div>
                    <img src="{{ asset('web/img/form-notice-vector-1.svg') }}" alt="vector"
                        class="absolute -z-[1] bottom-[288px] left-0 pointer-events-none">
                </div>
            </div>
        </section>
    @endif
    <!-- BLOG SECTION END -->
@endsection
