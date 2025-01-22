@extends('admin.layouts.master')
@section('title', 'Edit Application')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Edit Application</h4>

                            </div>
                            <div>
                                <a href="{{ route('applications.index') }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-arrow-left mr-2 "></i> Application List</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('applications.update', $application->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mt-3">
                                    <label for="first_name" class="col-md-4">First Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name" id="first_name"
                                            value="{{ $application->first_name }}" class="form-control" placeholder="First Name" required />
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <label for="last_name" class="col-md-4">Last Name </label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" id="last_name"
                                            value="{{ $application->last_name }}" class="form-control" placeholder="Last Name" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="phone" class="col-md-4">Phone <span
                                        class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" id="phone"
                                            value="{{ $application->phone }}" class="form-control" placeholder="Phone" required/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="whatsapp" class="col-md-4">WhatsApp </label>
                                    <div class="col-md-8">
                                        <input type="text" name="whatsapp" id="whatsapp"
                                            value="{{ $application->whatsapp }}" class="form-control" placeholder="WhatsApp" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="email" class="col-md-4">Email </label>
                                    <div class="col-md-8">
                                        <input type="text" name="email" id="email"
                                            value="{{ $application->email }}" class="form-control" placeholder="Email" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="other" class="col-md-4">Students Address </label>
                                    <div class="col-md-8">
                                        <input type="text" name="other" id="other"
                                            value="{{ $application->other }}" class="form-control" placeholder="Students Address" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="program" class="col-md-4">Desired Program <span
                                        class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select name="program" id="program" class="form-control" required>
                                            <option value="" disabled {{ !$application->program ? 'selected' : '' }}>
                                                Select Desired Program</option>
                                            <option value="Bachelor"
                                                {{ $application->program == 'Bachelor' ? 'selected' : '' }}>Bachelor</option>
                                            <option value="Masters"
                                                {{ $application->program == 'Masters' ? 'selected' : '' }}>Masters</option>
                                            <option value="Diploma"
                                                {{ $application->program == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                            <option value="Certificate"
                                                {{ $application->program == 'Certificate' ? 'selected' : '' }}>Certificate</option>
                                            <option value="PhD"
                                                {{ $application->program == 'PhD' ? 'selected' : '' }}>PhD</option>
                                            <option value="Others"
                                                {{ $application->program == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="country" class="col-md-4">Desired Country <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select name="country" id="country" class="form-control">
                                            <option value="" disabled {{ !$application->country ? 'selected' : '' }}>
                                                Select Desired Country</option>
                                            <option value="United Kingdom"
                                                {{ $application->country == 'United Kingdom' ? 'selected' : '' }}>United
                                                Kingdom</option>
                                            <option value="India"
                                                {{ $application->country == 'India' ? 'selected' : '' }}>India</option>
                                            <option value="China"
                                                {{ $application->country == 'China' ? 'selected' : '' }}>China</option>
                                            <option value="Malaysia"
                                                {{ $application->country == 'Malaysia' ? 'selected' : '' }}>Malaysia
                                            </option>
                                            <option value="Australia"
                                                {{ $application->country == 'Australia' ? 'selected' : '' }}>Australia
                                            </option>
                                            <option value="Others"
                                                {{ $application->country == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="subject" class="col-md-4">Desired Subject <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select name="subject" id="subject" class="form-control">
                                            <option value="" disabled {{ !$application->subject ? 'selected' : '' }}>
                                                Select Desired Subject</option>
                                            <option value="Aeronautical Engineering"
                                                {{ $application->subject == 'Aeronautical Engineering' ? 'selected' : '' }}>
                                                Aeronautical Engineering</option>
                                            <option value="Automobile Engineering"
                                                {{ $application->subject == 'Automobile Engineering' ? 'selected' : '' }}>
                                                Automobile Engineering</option>
                                            <option value="Civil Engineering"
                                                {{ $application->subject == 'Civil Engineering' ? 'selected' : '' }}>Civil
                                                Engineering</option>
                                            <option value="Computer Science and Engineering"
                                                {{ $application->subject == 'Computer Science and Engineering' ? 'selected' : '' }}>
                                                Computer Science and Engineering</option>
                                            <option value="Biotechnology Engineering"
                                                {{ $application->subject == 'Biotechnology Engineering' ? 'selected' : '' }}>
                                                Biotechnology Engineering</option>
                                            <option value="Electrical and Electronics Engineering"
                                                {{ $application->subject == 'Electrical and Electronics Engineering' ? 'selected' : '' }}>
                                                Electrical and Electronics Engineering</option>
                                            <option value="Electronics and Communication Engineering"
                                                {{ $application->subject == 'Electronics and Communication Engineering' ? 'selected' : '' }}>
                                                Electronics and Communication Engineering</option>
                                            <option value="Automation and Robotics"
                                                {{ $application->subject == 'Automation and Robotics' ? 'selected' : '' }}>
                                                Automation and Robotics</option>
                                            <option value="Petroleum Engineering"
                                                {{ $application->subject == 'Petroleum Engineering' ? 'selected' : '' }}>
                                                Petroleum Engineering</option>
                                            <option value="Instrumentation Engineering"
                                                {{ $application->subject == 'Instrumentation Engineering' ? 'selected' : '' }}>
                                                Instrumentation Engineering</option>
                                            <option value="Ceramic Engineering"
                                                {{ $application->subject == 'Ceramic Engineering' ? 'selected' : '' }}>
                                                Ceramic Engineering</option>
                                            <option value="Chemical Engineering"
                                                {{ $application->subject == 'Chemical Engineering' ? 'selected' : '' }}>
                                                Chemical Engineering</option>
                                            <option value="Structural Engineering"
                                                {{ $application->subject == 'Structural Engineering' ? 'selected' : '' }}>
                                                Structural Engineering</option>
                                            <option value="Transportation Engineering"
                                                {{ $application->subject == 'Transportation Engineering' ? 'selected' : '' }}>
                                                Transportation Engineering</option>
                                            <option value="Construction Engineering"
                                                {{ $application->subject == 'Construction Engineering' ? 'selected' : '' }}>
                                                Construction Engineering</option>
                                            <option value="Power Engineering"
                                                {{ $application->subject == 'Power Engineering' ? 'selected' : '' }}>Power
                                                Engineering</option>
                                            <option value="Robotics Engineering"
                                                {{ $application->subject == 'Robotics Engineering' ? 'selected' : '' }}>
                                                Robotics Engineering</option>
                                            <option value="Textile Engineering"
                                                {{ $application->subject == 'Textile Engineering' ? 'selected' : '' }}>
                                                Textile Engineering</option>
                                            <option value="Information Technology"
                                                {{ $application->subject == 'Information Technology' ? 'selected' : '' }}>
                                                Information Technology</option>
                                            <option value="Architecture"
                                                {{ $application->subject == 'Architecture' ? 'selected' : '' }}>
                                                Architecture</option>
                                            <option value="Nursing"
                                                {{ $application->subject == 'Nursing' ? 'selected' : '' }}>Nursing</option>
                                            <option value="Pharmacy"
                                                {{ $application->subject == 'Pharmacy' ? 'selected' : '' }}>Pharmacy
                                            </option>
                                            <option value="Computer Applications"
                                                {{ $application->subject == 'Computer Applications' ? 'selected' : '' }}>
                                                Computer Applications</option>
                                            <option value="Interior Design"
                                                {{ $application->subject == 'Interior Design' ? 'selected' : '' }}>Interior
                                                Design</option>
                                            <option value="Bachelor of Dental Surgery"
                                                {{ $application->subject == 'Bachelor of Dental Surgery' ? 'selected' : '' }}>
                                                Bachelor of Dental Surgery</option>
                                            <option value="Animation, Graphics and Multimedia"
                                                {{ $application->subject == 'Animation, Graphics and Multimedia' ? 'selected' : '' }}>
                                                Animation, Graphics and Multimedia</option>
                                            <option value="B.Sc. – Nutrition &amp; Dietetics"
                                                {{ $application->subject == 'B.Sc. – Nutrition & Dietetics' ? 'selected' : '' }}>
                                                B.Sc. – Nutrition &amp; Dietetics</option>
                                            <option value="Physiotherapy"
                                                {{ $application->subject == 'Physiotherapy' ? 'selected' : '' }}>
                                                Physiotherapy</option>
                                            <option value="Applied Geology"
                                                {{ $application->subject == 'Applied Geology' ? 'selected' : '' }}>Applied
                                                Geology</option>
                                            <option value="Liberal Arts"
                                                {{ $application->subject == 'Liberal Arts' ? 'selected' : '' }}>Liberal
                                                Arts</option>
                                            <option value="Physics"
                                                {{ $application->subject == 'Physics' ? 'selected' : '' }}>Physics</option>
                                            <option value="Chemistry"
                                                {{ $application->subject == 'Chemistry' ? 'selected' : '' }}>Chemistry
                                            </option>
                                            <option value="Mathematics"
                                                {{ $application->subject == 'Mathematics' ? 'selected' : '' }}>Mathematics
                                            </option>
                                            <option value="BBA" {{ $application->subject == 'BBA' ? 'selected' : '' }}>
                                                BBA</option>
                                            <option value="MBA" {{ $application->subject == 'MBA' ? 'selected' : '' }}>
                                                MBA</option>
                                            <option value="Fine Arts"
                                                {{ $application->subject == 'Fine Arts' ? 'selected' : '' }}>Fine Arts
                                            </option>
                                            <option value="Event Management"
                                                {{ $application->subject == 'Event Management' ? 'selected' : '' }}>Event
                                                Management</option>
                                            <option value="Integrated Law Course- BA + LL.B"
                                                {{ $application->subject == 'Integrated Law Course- BA + LL.B' ? 'selected' : '' }}>
                                                Integrated Law Course- BA + LL.B</option>
                                            <option value="Journalism and Mass Communication"
                                                {{ $application->subject == 'Journalism and Mass Communication' ? 'selected' : '' }}>
                                                Journalism and Mass Communication</option>
                                            <option value="Fashion Designing"
                                                {{ $application->subject == 'Fashion Designing' ? 'selected' : '' }}>
                                                Fashion Designing</option>
                                            <option value="Social Work"
                                                {{ $application->subject == 'Social Work' ? 'selected' : '' }}>Social Work
                                            </option>
                                            <option value="Travel and Tourism Management"
                                                {{ $application->subject == 'Travel and Tourism Management' ? 'selected' : '' }}>
                                                Travel and Tourism Management</option>
                                            <option value="Aviation Courses"
                                                {{ $application->subject == 'Aviation Courses' ? 'selected' : '' }}>
                                                Aviation Courses</option>
                                            <option value="Hospitality and Hotel Administration"
                                                {{ $application->subject == 'Hospitality and Hotel Administration' ? 'selected' : '' }}>
                                                Hospitality and Hotel Administration</option>
                                            <option value="Design"
                                                {{ $application->subject == 'Design' ? 'selected' : '' }}>Design</option>
                                            <option value="Performing Arts"
                                                {{ $application->subject == 'Performing Arts' ? 'selected' : '' }}>
                                                Performing Arts</option>
                                            <option value="History"
                                                {{ $application->subject == 'History' ? 'selected' : '' }}>History</option>
                                            <option value="in Economics"
                                                {{ $application->subject == 'in Economics' ? 'selected' : '' }}>in
                                                Economics</option>
                                            <option value="LLB" {{ $application->subject == 'LLB' ? 'selected' : '' }}>
                                                LLB</option>
                                            <option value="LLM" {{ $application->subject == 'LLM' ? 'selected' : '' }}>
                                                LLM</option>
                                            <option value="English"
                                                {{ $application->subject == 'English' ? 'selected' : '' }}>English</option>
                                            <option value="MBBS"
                                                {{ $application->subject == 'MBBS' ? 'selected' : '' }}>MBBS</option>
                                            <option value="Others"
                                                {{ $application->subject == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Photo</label>
                                    <div class="col-md-8">
                                        <input type="file" name="photo" value="{{ $application->photo }}"
                                            class="form-control" accept="image/*" />
                                        @if (isset($application->photo))
                                            <img src="{{ asset('storage/' . $application->photo) }}" alt="Photo"
                                                style="height: 80px" class="mt-2 rounded">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-4 ">
                                        <input type="submit" value="update" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
