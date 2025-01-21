@extends('admin.layouts.master')
@section('title', 'Blog List')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Blog List
                            </div>
                            <div>
                                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">Add Blog</a>
                            </div>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>{{ $blog->title }}</td>
                                                <td>
                                                    @if ($blog->image)
                                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Image"
                                                            style="height: 50px; border-radius: 6px;">
                                                    @else
                                                        <img src="https://placehold.co/400" alt="Default Image"
                                                            style="height: 50px; border-radius: 6px;">
                                                    @endif
                                                </td>
                                                <td>{{ $blog->category }}</td>
                                                <td>{{ $blog->author }}</td>
                                                <td>{{ $blog->date }}</td>
                                                <td>
                                                    @if ($blog->status == '1')
                                                        <span>Published</span> <i
                                                            class="fas fa-circle text-c-green f-10 m-r-15"
                                                            aria-hidden="true" style="color: green; mergin-left: 2px;"></i>
                                                    @elseif($blog->status == '0')
                                                        <span>Unpublished</span> <i
                                                            class="fas fa-circle text-c-red f-10 m-r-15" aria-hidden="true"
                                                            style="color: red; mergin-left: 2px;"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-secondary btn-sm me-2"
                                                            href="{{ route('blogs.show', $blog->id) }}"><i
                                                                class="ph ph-eye"></i></a>

                                                        <a class="btn btn-info btn-sm me-2"
                                                            href="{{ route('blogs.edit', $blog->id) }}"><i
                                                                class="ph ph-pencil"></i></a>

                                                        <form class="deleteForm"
                                                            action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm btnDelete"><i
                                                                    class="ph ph-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
