@extends('admin.layouts.master')
@section('title', 'Edit Blog')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Edit Blog</h4>
                            </div>
                            <div>
                                <a href="{{ route('blogs.index') }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-arrow-left mr-2 "></i> Blog List</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('blogs.update', $blog->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mt-3">
                                    <label for="title" class="col-md-4">Title: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ $blog->title }}" placeholder="Blog Title" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="subtitle" class="col-md-4">Subtitle: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="subtitle" id="subtitle" class="form-control"
                                        value="{{ $blog->subtitle }}" placeholder="Blog Subtitle" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="author" class="col-md-4">Author: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="author" id="author" class="form-control"
                                            value="{{ $blog->author }}" placeholder="Author Name" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="date" class="col-md-4">Date: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="date" name="date" id="date" value="{{ $blog->date }}" class="form-control" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="category" class="col-md-4">Category: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="category" id="category" class="form-control"
                                            value="{{ $blog->category }}" placeholder="Comma-separated tags" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="tag" class="col-md-4">Tags</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tag" id="tag" class="form-control"
                                            value="{{ $blog->tag }}" placeholder="Comma-separated tags" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="status" class="col-md-4">Publication Status: </label>
                                    <div class="col-md-8">
                                        <label for="status-published">
                                            <input type="radio" id="status-published" name="status" {{ $blog->status == 1 ? 'checked' : '' }} value="1" />
                                            Published
                                        </label>
                                        <label for="status-unpublished" class="ms-3">
                                            <input type="radio" id="status-unpublished" name="status" {{ $blog->status == 0 ? 'checked' : '' }} value="0" />
                                            Unpublished
                                        </label>
                                    </div>
                                </div>                                
                                <div class="row mt-3">
                                    <label for="content" class="col-md-4">Content: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <textarea name="content" id="content" class="form-control" rows="6" placeholder="Blog Content" required>{{ $blog->content }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="image" class="col-md-4">Image: <span
                                        class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="file" name="image"  value="{{ $blog->image }}" class="form-control" accept="image/*" />
                                        @if (isset($blog->image))
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Image"
                                                style="height: 80px" class="mt-2 rounded">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4 ">
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
