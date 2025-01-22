@extends('admin.layouts.master')
@section('title', 'Student Details')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Student Details</h4>

                            </div>
                            <div>
                                <a href="{{ route('applications.index') }}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left mr-2 "></i> Application List</a>
                            </div>
                        </div>
                        <div class="card-body text-dark">
                            <div class="p-2 text-center">
                                @if (isset($student->photo))
                                    <img src="{{ asset('storage/' . $student->photo) }}" alt="Photo"
                                        style="height: 200px; border-radius: 10px;">
                                @else
                                    <img src="{{ asset('/assets/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
                                @endif
                            </div>
                            <br>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>First Name: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->first_name }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Last Name: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->last_name }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Phone: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->phone }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>WhatsApp: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->whatsapp }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Email: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->email }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Program: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->program }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Desired Country: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3 badge bg-info">{{ $student->country }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Desired Subject: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->subject }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Student Address: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->address ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Other Data: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $student->other ?? 'N/A' }}</p>
                                </div>
                            </div>
                            
                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Status: </span>
                                </div>
                                <div class="col-md-8">
                                    @if ($student->status == 'Initiated')
                                        <p class="ml-3 badge bg-primary">{{ $student->status }}</p>
                                    @endif
                                    @if ($student->status == 'Pending')
                                        <p class="ml-3 badge bg-warning">{{ $student->status }}</p>
                                    @endif
                                    @if ($student->status == 'Success')
                                        <p class="ml-3 badge bg-success">{{ $student->status }}</p>
                                    @endif
                                    @if ($student->status == 'Failed')
                                        <p class="ml-3 badge bg-danger">{{ $student->status }}</p>
                                    @endif
                                    @if ($student->status == 'Cenceled')
                                        <p class="ml-3 badge bg-secondary">{{ $student->status }}</p>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Amount Received: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3"><b>{{ $student->amount ?? 'N/A' }}</b></p>
                                </div>
                            </div>

                            <br>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
