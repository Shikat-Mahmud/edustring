@extends('admin.layouts.master')
@section('title', 'Add Blog')
@push('styles')
    <style>
        .bootstrap-tagsinput {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            display: inline-block;
            /* padding: 4px 6px; */
            color: #555;
            vertical-align: middle;
            /* border-radius: 4px; */
            max-width: 100%;
            /* line-height: 22px; */
            cursor: text;
        }

        .bootstrap-tagsinput input {
            border: none;
            box-shadow: none;
            outline: none;
            background-color: transparent;
            /* padding: 0 6px; */
            margin: 0;
            width: auto;
            max-width: 100%;
        }

        .bootstrap-tagsinput.form-control input::-moz-placeholder {
            color: #777;
            opacity: 1;
        }

        .bootstrap-tagsinput.form-control input:-ms-input-placeholder {
            color: #777;
        }

        .bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
            color: #777;
        }

        .bootstrap-tagsinput input:focus {
            border: none;
            box-shadow: none;
        }

        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: white;
        }

        .bootstrap-tagsinput .tag [data-role="remove"] {
            margin-left: 8px;
            cursor: pointer;
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:after {
            content: "x";
            padding: 0px 2px;
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:hover {
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        }
    </style>
@endpush
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
                                    <label for="date" class="col-md-4">Date: <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="date" name="date" id="date" class="form-control" required />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="tag" class="col-md-4">Tags: <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="tag" value="" placeholder="Comma-separated tags"
                                            data-role="tagsinput" id="tag" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="content" class="col-md-4">Content: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <textarea name="content" id="content" class="form-control" placeholder="Content" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="image" class="col-md-4">Image: <span class="text-danger">*</span></label>
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
