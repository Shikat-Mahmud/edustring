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
                                    <label for="address" class="col-md-4">Students Address </label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" id="address" class="form-control"
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
                                        <input type="text" name="subject" id="subject" class="form-control"
                                            placeholder="Desired Subject" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="photo" class="col-md-4">Photo</label>
                                    <div class="col-md-8">
                                        <input type="file" name="photo" class="form-control" accept="image/*" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="other" class="col-md-4">Other Data <span
                                            style="color: #6A7885; font-size: 12px;"> (optional)</span> </label>
                                    <div class="col-md-8">
                                        <input type="text" name="other" id="other" class="form-control"
                                            placeholder="Other Data..." />
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
