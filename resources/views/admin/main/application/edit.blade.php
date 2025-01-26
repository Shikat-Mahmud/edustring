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

                            <form action="{{ route('applications.update', $application->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mt-3">
                                    <label for="first_name" class="col-md-4">First Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name" id="first_name"
                                            value="{{ $application->first_name }}" class="form-control"
                                            placeholder="First Name" required />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="last_name" class="col-md-4">Last Name </label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" id="last_name"
                                            value="{{ $application->last_name }}" class="form-control"
                                            placeholder="Last Name" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="phone" class="col-md-4">Phone <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" id="phone"
                                            value="{{ $application->phone }}" class="form-control" placeholder="Phone"
                                            required />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="whatsapp" class="col-md-4">WhatsApp </label>
                                    <div class="col-md-8">
                                        <input type="text" name="whatsapp" id="whatsapp"
                                            value="{{ $application->whatsapp }}" class="form-control"
                                            placeholder="WhatsApp" />
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
                                    <label for="address" class="col-md-4">Students Address </label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" id="address"
                                            value="{{ $application->address }}" class="form-control"
                                            placeholder="Students Address" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="amount" class="col-md-4">Amount Received </label>
                                    <div class="col-md-8">
                                        <input type="text" name="amount" id="amount"
                                            value="{{ $application->amount }}" class="form-control"
                                            placeholder="Amount Received" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="status" class="col-md-4">Status </label>
                                    <div class="col-md-8">
                                        <select name="status" id="status" class="form-control">
                                            <option value="Initiated"
                                                {{ $application->status == 'Initiated' ? 'selected' : '' }}>Initiated
                                            </option>
                                            <option value="Pending"
                                                {{ $application->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="Success"
                                                {{ $application->status == 'Success' ? 'selected' : '' }}>Success</option>
                                            <option value="Failed"
                                                {{ $application->status == 'Failed' ? 'selected' : '' }}>Failed</option>
                                            <option value="Canceled"
                                                {{ $application->status == 'Canceled' ? 'selected' : '' }}>Canceled
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="program" class="col-md-4">Desired Program <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select name="program" id="program" class="form-control" required>
                                            <option value="" disabled
                                                {{ !$application->program ? 'selected' : '' }}>
                                                Select Desired Program</option>
                                            <option value="Bachelor"
                                                {{ $application->program == 'Bachelor' ? 'selected' : '' }}>Bachelor
                                            </option>
                                            <option value="Masters"
                                                {{ $application->program == 'Masters' ? 'selected' : '' }}>Masters</option>
                                            <option value="Diploma"
                                                {{ $application->program == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                            <option value="Certificate"
                                                {{ $application->program == 'Certificate' ? 'selected' : '' }}>Certificate
                                            </option>
                                            <option value="PhD" {{ $application->program == 'PhD' ? 'selected' : '' }}>
                                                PhD</option>
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
                                            <option value="" disabled
                                                {{ !$application->country ? 'selected' : '' }}>
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
                                        <input type="text" name="subject" id="subject"
                                            value="{{ $application->subject }}" class="form-control"
                                            placeholder="Desired Subject" />
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
                                    <label for="other" class="col-md-4">Other Data <span
                                            style="color: #6A7885; font-size: 12px;"> (optional)</span> </label>
                                    <div class="col-md-8">
                                        <input type="text" name="other" id="other"
                                            value="{{ $application->other }}" class="form-control"
                                            placeholder="Other Data..." />
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
