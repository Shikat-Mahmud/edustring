@extends('admin.layouts.master')
@section('title', 'Blog Details')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Blog Details</h4>

                            </div>
                            <div>
                                <a href="{{ route('blogs.index') }}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left mr-2 "></i> Blog List</a>
                            </div>
                        </div>
                        <div class="card-body text-dark">
                            <div class="p-2 text-center">
                                @if (isset($blog->image))
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Photo"
                                        style="height: 200px; border-radius: 10px;">
                                @else
                                    <img src="{{ asset('/assets/images/default-blog.jpg') }}" alt="Default-Image">
                                @endif
                            </div>
                            <br>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Title: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $blog->title }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Subtitle: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $blog->subtitle ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Category: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $blog->category }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Author: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $blog->author }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Date: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $blog->date }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Tag: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $blog->tag }}</p>
                                </div>
                            </div>
                            
                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Status: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3"> <b>
                                            @if ($blog->status == 1)
                                                Published <i class="fas fa-circle text-c-green f-10 m-r-15"
                                                    aria-hidden="true" style="color: green; margin-left: 2px;"></i>
                                            @else
                                                Unpublished <i class="fas fa-circle text-c-red f-10 m-r-15"
                                                    aria-hidden="true" style="color: red; margin-left: 2px;"></i>
                                            @endif
                                        </b></p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Content: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $blog->content }}</p>
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
