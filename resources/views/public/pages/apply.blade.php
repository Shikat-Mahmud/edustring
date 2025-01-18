@extends('public.layout.master')
@section('title', 'Apply Now')

@section('content')
    <!-- BREADCRUMB SECTION START -->
    <section
        style="padding-top: 327px; padding-bottom: 158px; text-align: center; background: url('{{ asset('web/img/breadcrumb-bg.jpg') }}') no-repeat center center / cover; position: relative; z-index: 1; overflow: hidden;"
        class="xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">Apply Now</h1>
            <ul class="flex items-center justify-center gap-[10px] text-white">
                <li><a href="{{ route('home') }}" class="text-edyellow">Home</a></li>
                <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
                <li>Apply Now</li>
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

                <!-- right side contact form -->
                <div>
                    <h1
                        class="text-[40px] md:text-[35px] sm:text-[30px] xxs:text-[28px] font-semibold text-edblue mb-[38px]">
                        Start Your Study Abroad Journey
                    </h1>
                    {{-- <p class="text-edgray font-normal text-[16px] mb-[38px]">
                        Submit your application to explore global education opportunities. We are here to guide you every
                        step of the way.
                    </p> --}}

                    <form action="#" enctype="multipart/form-data" method="POST"
                        class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]">
                        <!-- First Name -->
                        <div>
                            <label for="ed-first-name" class="font-lato font-semibold text-edblue block mb-[12px]">First
                                Name*</label>
                            <input type="text" name="first_name" id="ed-first-name" placeholder="First Name"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label for="ed-last-name" class="font-lato font-semibold text-edblue block mb-[12px]">Last
                                Name</label>
                            <input type="text" name="last_name" id="ed-last-name" placeholder="Last Name"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="ed-phone" class="font-lato font-semibold text-edblue block mb-[12px]">Phone*</label>
                            <input type="text" name="phone" id="ed-phone" placeholder="Phone Number"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>

                        <!-- WhatsApp -->
                        <div>
                            <label for="ed-whatsapp"
                                class="font-lato font-semibold text-edblue block mb-[12px]">WhatsApp</label>
                            <input type="text" name="whatsapp" id="ed-whatsapp" placeholder="WhatsApp Number"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="ed-email" class="font-lato font-semibold text-edblue block mb-[12px]">Email</label>
                            <input type="email" name="email" id="ed-email" placeholder="Email Address"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>

                        <!-- Program -->
                        <div>
                            <label for="ed-program"
                                class="font-lato font-semibold text-edblue block mb-[12px]">Program*</label>
                            <select name="program" id="ed-program"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none bg-white">
                                <option value="" disabled selected>Select Program</option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Masters">Masters</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Certificate">Certificate</option>
                                <option value="PhD">PhD</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <!-- Country -->
                        <div>
                            <label for="ed-country"
                                class="font-lato font-semibold text-edblue block mb-[12px]">Country</label>
                            <input type="text" name="country" id="ed-country" placeholder="Preferred Country"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="ed-subject"
                                class="font-lato font-semibold text-edblue block mb-[12px]">Subject</label>
                            <select name="program" id="ed-program"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none bg-white">
                                <option value="" disabled selected>Select Subject</option>
                                <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                                <option value="Automobile Engineering">Automobile Engineering</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                                <option value="Biotechnology Engineering">Biotechnology Engineering</option>
                                <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                                <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                                <option value="Automation and Robotics">Automation and Robotics</option>
                                <option value="Petroleum Engineering">Petroleum Engineering</option>
                                <option value="Instrumentation Engineering">Instrumentation Engineering</option>
                                <option value="Ceramic Engineering">Ceramic Engineering</option>
                                <option value="Chemical Engineering">Chemical Engineering</option>
                                <option value="Structural Engineering">Structural Engineering</option>
                                <option value="Transportation Engineering">Transportation Engineering</option>
                                <option value="Construction Engineering">Construction Engineering</option>
                                <option value="Power Engineering">Power Engineering</option>
                                <option value="Robotics Engineering">Robotics Engineering</option>
                                <option value="Textile Engineering">Textile Engineering</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Nursing">Nursing</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Computer Applications">Computer Applications</option>
                                <option value="Interior Design">Interior Design</option>
                                <option value="Bachelor of Dental Surgery">Bachelor of Dental Surgery</option>
                                <option value="Animation, Graphics and Multimedia">Animation, Graphics and Multimedia</option>
                                <option value="B.Sc. – Nutrition &amp; Dietetics">B.Sc. – Nutrition &amp; Dietetics</option>
                                <option value="Physiotherapy">Physiotherapy</option>
                                <option value="Applied Geology">Applied Geology</option>
                                <option value="Liberal Arts">Liberal Arts</option>
                                <option value="Physics">Physics</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="BBA">BBA</option>
                                <option value="MBA">MBA</option>
                                <option value="Fine Arts">Fine Arts</option>
                                <option value="Event Management">Event Management</option>
                                <option value="Integrated Law Course- BA + LL.B">Integrated Law Course- BA + LL.B</option>
                                <option value="Journalism and Mass Communication">Journalism and Mass Communication</option>
                                <option value="Fashion Designing">Fashion Designing</option>
                                <option value="Social Work">Social Work</option>
                                <option value="Travel and Tourism Management">Travel and Tourism Management</option>
                                <option value="Aviation Courses">Aviation Courses</option>
                                <option value="Hospitality and Hotel Administration">Hospitality and Hotel Administration</option>
                                <option value="Design">Design</option>
                                <option value="Performing Arts">Performing Arts</option>
                                <option value="History">History</option>
                                <option value="in Economics">in Economics</option>
                                <option value="LLB">LLB</option>
                                <option value="LLM">LLM</option>
                                <option value="English">English</option>
                                <option value="MBBS">MBBS</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <!-- Photo Upload -->
                        <div class="col-span-2 xxs:col-span-1">
                            <label for="ed-photo" class="font-lato font-semibold text-edblue block mb-[12px]">Upload Your
                                Photo</label>
                            <input type="file" name="photo" id="ed-photo"
                                class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="bg-edpurple h-[55px] px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-edblue">
                                Submit Application <span class="icon pl-[10px]"><i
                                        class="fa-solid fa-arrow-right-long"></i></span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- vector -->
        <img src="{{ asset('web/img/faq-2-vector.svg') }}" alt="vector"
            class="absolute -z-[1] pointer-events-none right-0 bottom-[255px]">
    </section>
    <!-- FAQ SECTION END -->
@endsection
