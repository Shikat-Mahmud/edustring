@extends('admin.layouts.master')
@section('title', 'Edit Review')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Edit Review</h4>
                            </div>
                            <div>
                                <a href="{{ route('reviews.index') }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-arrow-left mr-2 "></i> Review List</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('reviews.update', $review->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mt-3">
                                    <label for="name" class="col-md-4 required">Student Name: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $review->name }}" placeholder="Student Name" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="email" class="col-md-4 required">Email: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="email" id="email" class="form-control"
                                            value="{{ $review->email }}" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="university" class="col-md-4 required">Student University: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="university" id="university" class="form-control"
                                            value="{{ $review->university }}" placeholder="University, Country" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="review" class="col-md-4" required>Review: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                            <textarea name="content" id="content" class="form-control" rows="6" placeholder="Blog Content" required>{{ $review->review }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="rating" class="col-md-4" required>
                                        Rating <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <select name="rating" id="rating" class="form-control">
                                            <option value="">Select a rating</option>
                                            <option value="1" {{ $review->rating == 1 ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ $review->rating == 2 ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ $review->rating == 3 ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ $review->rating == 4 ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ $review->rating == 5 ? 'selected' : '' }}>5</option>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Photo</label>
                                    <div class="col-md-8">
                                        <input type="file" name="photo" value="{{ $review->photo }}"
                                            class="form-control" accept="image/*" />
                                        @if (isset($review->photo))
                                            <img src="{{ asset('storage/' . $review->photo) }}" alt="Photo"
                                                style="height: 80px" class="mt-2 rounded">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4 ">
                                        <input type="submit" value="Add" class="btn btn-success">
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
