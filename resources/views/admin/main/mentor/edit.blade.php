@extends('admin.layouts.master')
@section('title', 'Edit Mentor')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Edit Mentor</h4>
                            </div>
                            <div>
                                <a href="{{ route('mentors.index') }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-arrow-left mr-2"></i> Mentor List</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('mentors.update', $mentor->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mt-3">
                                    <label for="name" class="col-md-4 required">Name: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $mentor->name }}" placeholder="Mentor Name" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="position" class="col-md-4 required">Position: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="position" id="position" class="form-control"
                                            value="{{ $mentor->position }}" placeholder="Position (e.g., Senior Developer)"
                                            required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="photo" class="col-md-4">Photo:</label>
                                    <div class="col-md-8">
                                        <input type="file" name="photo" id="photo" class="form-control"
                                            accept="image/*" />
                                        @if ($mentor->photo)
                                            <img src="{{ asset('storage/' . $mentor->photo) }}" alt="Mentor Photo"
                                                class="mt-2 rounded" style="height: 80px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="fb_link" class="col-md-4">Facebook Link:</label>
                                    <div class="col-md-8">
                                        <input type="url" name="fb_link" id="fb_link" class="form-control"
                                            value="{{ $mentor->fb_link }}" placeholder="https://facebook.com/username" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="insta_link" class="col-md-4">Instagram Link:</label>
                                    <div class="col-md-8">
                                        <input type="url" name="insta_link" id="insta_link" class="form-control"
                                            value="{{ $mentor->insta_link }}"
                                            placeholder="https://instagram.com/username" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="linkedin_link" class="col-md-4">LinkedIn Link:</label>
                                    <div class="col-md-8">
                                        <input type="url" name="linkedin_link" id="linkedin_link" class="form-control"
                                            value="{{ $mentor->linkedin_link }}"
                                            placeholder="https://linkedin.com/in/username" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <input type="submit" value="Update Mentor" class="btn btn-success">
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
