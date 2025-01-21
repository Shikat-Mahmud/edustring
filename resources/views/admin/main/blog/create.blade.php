@extends('admin.layouts.master')
@section('title', 'Add Blog')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Add Blog</h4>
                            </div>
                            <div>
                                <a href="{{ route('blogs.index') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-arrow-left mr-2"></i> Blog List
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="title" class="col-md-4">Blog Title: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" id="title" class="form-control"
                                            placeholder="Blog Title" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="subtitle" class="col-md-4">Subtitle: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="subtitle" id="subtitle" class="form-control"
                                            placeholder="Blog Subtitle" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="category" class="col-md-4">Category: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="category" id="category" class="form-control"
                                            placeholder="Category" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="author" class="col-md-4">Author: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="author" id="author" class="form-control"
                                            placeholder="Author" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="date" class="col-md-4">Date: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="date" name="date" id="date" class="form-control" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="tag" class="col-md-4">Tag: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="tag" id="tag" class="form-control"
                                            placeholder="Tag" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="content" class="col-md-4">Content: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <textarea name="content" id="content" class="form-control"
                                            placeholder="Content" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="image" class="col-md-4">Image: <span
                                        class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" id="image" class="form-control"
                                            accept="image/*" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
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
