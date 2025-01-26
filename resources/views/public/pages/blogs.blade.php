@extends('public.layout.master')
@section('title', 'Blogs')

@section('content')
    <!-- BREADCRUMB SECTION START -->
    <section
        style="padding-top: 327px; padding-bottom: 158px; text-align: center; background: url('{{ asset('web/img/breadcrumb-bg.jpg') }}') no-repeat center center / cover; position: relative; z-index: 1; overflow: hidden;"
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
            <img src="{{ asset('web/img/breadcrumb-vector-1.svg') }}" alt="vector"
                class="absolute -z-[1] pointer-events-none bottom-[34px] left-0 xl:left-auto xl:right-[90%]">
            <img src="{{ asset('web/img/breadcrumb-vector-2.svg') }}" alt="vector"
                class="absolute -z-[1] pointer-events-none bottom-0 right-0 xl:right-auto xl:left-[60%]">
        </div>
    </section>
    <!-- BREADCRUMB SECTION END -->


    <!-- MAIN CONTENT START -->
    <div class="ed-event-details-content py-[120px] xl:py-[80px] md:py-[60px]">
        @if (isset($blogs) && count($blogs) > 0)
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-[30px] lg:gap-[15px]">
                @foreach ($blogs as $blog)
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
                                    <span class="text font-medium text-[14px] text-edgray">By {{ $blog->author }}</span>
                                </div>

                                <!-- single info -->
                                <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><img src="{{ asset('web/img/icon/tag.svg') }}"
                                            alt="icon"></span>
                                    <span class="text font-medium text-[14px] text-edgray">{{ $blog->category }}</span>
                                </div>
                            </div>

                            <h4 class="et-blog__title text-[20px] sm:text-[18px] font-semibold leading-[1.6] mb-[20px]"><a
                                    href="{{ route('blog.details', $blog->id) }}" class="hover:text-edpurple">{{ $blog->title }}</a>
                            </h4>

                            <a href="{{ route('blog.details', $blog->id) }}"
                                class="font-semibold text-[16px] text-edgray inline-flex items-center gap-[10px] hover:text-edpurple">Read
                                More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                @endforeach
            </div>


            <!-- PAGINATION START -->
            @if ($blogs->hasPages())
                <div class="flex items-center gap-[20px] pt-[60px] justify-center text-[16px]">
                    <!-- Previous Page Link -->
                    @if ($blogs->onFirstPage())
                        <span class="text-gray-400 cursor-not-allowed">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </span>
                    @else
                        <a href="{{ $blogs->previousPageUrl() }}" class="hover:text-edpurple">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </a>
                    @endif

                    <!-- Pagination Links -->
                    <div class="ed-pagination flex gap-[10px] items-center">
                        @foreach ($blogs->links()->elements[0] as $page => $url)
                            @if ($page == $blogs->currentPage())
                                <span
                                    class="border border-[#d9d9d9] rounded-full w-[50px] h-[50px] flex items-center justify-center text-white bg-edpurple">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}"
                                    class="border border-[#d9d9d9] rounded-full w-[50px] h-[50px] flex items-center justify-center text-etBlack hover:bg-edpurple hover:border-edpurple hover:text-white">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    </div>

                    <!-- Next Page Link -->
                    @if ($blogs->hasMorePages())
                        <a href="{{ $blogs->nextPageUrl() }}" class="hover:text-edpurple">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    @else
                        <span class="text-gray-400 cursor-not-allowed">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                    @endif
                </div>
            @endif
            <!-- PAGINATION END -->

        </div>
        @else
        <div class="flex items-center justify-center flex-col">
            <img src="{{ asset('/') }}images/empty.jpg" alt="Photo" style="height: 300px; width: auto; margin-bottom: 20px;">
            <h5 class="text-center text-secondary">No Blog Found!</h5>
        </div>
        @endif
    </div>
    <!-- MAIN CONTENT END -->
@endsection
