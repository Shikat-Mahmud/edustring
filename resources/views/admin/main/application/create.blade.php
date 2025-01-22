@extends('admin.layouts.master')
@section('title', 'Add Student Application')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Add Student Application</h4>
                            </div>
                            <div>
                                <a href="{{ route('applications.index') }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-arrow-left mr-2 "></i> Application List</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('applications.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="first_name" class="col-md-4">First Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name" id="first_name" class="form-control"
                                            placeholder="First Name" required />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="last_name" class="col-md-4">Last Name </label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" id="last_name" class="form-control"
                                            placeholder="Last Name" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="phone" class="col-md-4">Phone <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Phone" required />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="whatsapp" class="col-md-4">WhatsApp </label>
                                    <div class="col-md-8">
                                        <input type="text" name="whatsapp" id="whatsapp" class="form-control"
                                            placeholder="WhatsApp" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="email" class="col-md-4">Email </label>
                                    <div class="col-md-8">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Email" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="other" class="col-md-4">Students Address </label>
                                    <div class="col-md-8">
                                        <input type="text" name="other" id="other" class="form-control"
                                            placeholder="Students Address" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="program" class="col-md-4">Desired Program <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select name="program" id="program" class="form-control" required>
                                            <option value="" disabled selected>Select Desired Program</option>
                                            <option value="Bachelor">Bachelor</option>
                                            <option value="Masters">Masters</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="Certificate">Certificate</option>
                                            <option value="PhD">PhD</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="country" class="col-md-4">Desired Country <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select name="country" id="country" class="form-control">
                                            <option value="" disabled selected>Select Desired Country</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="India">India</option>
                                            <option value="China">China</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="subject" class="col-md-4">Desired Subject <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select name="subject" id="subject" class="form-control">
                                            <option value="" disabled selected>Select Desired Subject</option>
                                            <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                                            <option value="Automobile Engineering">Automobile Engineering</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Computer Science and Engineering">Computer Science and
                                                Engineering</option>
                                            <option value="Biotechnology Engineering">Biotechnology Engineering</option>
                                            <option value="Electrical and Electronics Engineering">Electrical and
                                                Electronics Engineering</option>
                                            <option value="Electronics and Communication Engineering">Electronics and
                                                Communication Engineering</option>
                                            <option value="Automation and Robotics">Automation and Robotics</option>
                                            <option value="Petroleum Engineering">Petroleum Engineering</option>
                                            <option value="Instrumentation Engineering">Instrumentation Engineering
                                            </option>
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
                                            <option value="Animation, Graphics and Multimedia">Animation, Graphics and
                                                Multimedia</option>
                                            <option value="B.Sc. – Nutrition &amp; Dietetics">B.Sc. – Nutrition &amp;
                                                Dietetics</option>
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
                                            <option value="Integrated Law Course- BA + LL.B">Integrated Law Course- BA +
                                                LL.B</option>
                                            <option value="Journalism and Mass Communication">Journalism and Mass
                                                Communication</option>
                                            <option value="Fashion Designing">Fashion Designing</option>
                                            <option value="Social Work">Social Work</option>
                                            <option value="Travel and Tourism Management">Travel and Tourism Management
                                            </option>
                                            <option value="Aviation Courses">Aviation Courses</option>
                                            <option value="Hospitality and Hotel Administration">Hospitality and Hotel
                                                Administration</option>
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
                                </div>

                                <div class="row mt-3">
                                    <label for="photo" class="col-md-4">Photo</label>
                                    <div class="col-md-8">
                                        <input type="file" name="photo" class="form-control" accept="image/*" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-4 ">
                                        <input type="submit" value="Create" class="btn btn-success">
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
