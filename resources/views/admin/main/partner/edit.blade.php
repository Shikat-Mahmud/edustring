@extends('admin.layouts.master')
@section('title', 'Edit Partner')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Edit Partner</h4>
                            </div>
                            <div>
                                <a href="{{ route('partners.index') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-arrow-left mr-2"></i> Partner List
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('partners.update', $partner->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mt-3">
                                    <label for="company_name" class="col-md-4 required">Company Name: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="company_name" id="company_name" class="form-control"
                                            placeholder="Company Name" value="{{ $partner->company_name }}" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="company_logo" class="col-md-4">Company Logo:</label>
                                    <div class="col-md-8">
                                        <input type="file" name="company_logo" id="company_logo" class="form-control"
                                            accept="image/*" />
                                        @if (isset($partner->company_logo))
                                            <img src="{{ asset('storage/' . $partner->company_logo) }}" alt="Logo"
                                                style="height: 80px;" class="mt-2 rounded">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="company_url" class="col-md-4">Company URL:</label>
                                    <div class="col-md-8">
                                        <input type="url" name="company_url" id="company_url" class="form-control"
                                            placeholder="https://example.com" value="{{ $partner->company_url }}" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <input type="submit" value="Update" class="btn btn-success">
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
