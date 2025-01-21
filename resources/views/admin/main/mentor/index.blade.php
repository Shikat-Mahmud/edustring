@extends('admin.layouts.master')
@section('title', 'Mentor List')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Mentor List
                            </div>
                            <div>
                                <a href="{{ route('mentors.create') }}" class="btn btn-primary btn-sm">Add Mentor</a>
                            </div>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Position</th>
                                            <th>Facebook</th>
                                            <th>Instagram</th>
                                            <th>LinkedIn</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mentors as $mentor)
                                            <tr>
                                                <td>{{ $mentor->name }}</td>
                                                <td>
                                                    @if ($mentor->photo)
                                                        <img src="{{ asset('storage/' . $mentor->photo) }}" alt="Photo"
                                                            style="height: 50px; border-radius: 6px;">
                                                    @else
                                                        <img src="https://placehold.co/400" alt="Default Image"
                                                            style="height: 50px; border-radius: 6px;">
                                                    @endif
                                                </td>
                                                <td>{{ $mentor->position }}</td>
                                                <td>
                                                    @if ($mentor->fb_link)
                                                        <a href="{{ $mentor->fb_link }}" target="_blank"><i
                                                                class="ph ph-facebook-logo"></i></a>
                                                    @else
                                                        --
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($mentor->insta_link)
                                                        <a href="{{ $mentor->insta_link }}" target="_blank"><i
                                                                class="ph ph-instagram-logo"></i></a>
                                                    @else
                                                        --
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($mentor->linkedin_link)
                                                        <a href="{{ $mentor->linkedin_link }}" target="_blank"><i
                                                                class="ph ph-linkedin-logo"></i></a>
                                                    @else
                                                        --
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-info btn-sm me-2"
                                                            href="{{ route('mentors.edit', $mentor->id) }}"><i
                                                                class="ph ph-pencil"></i></a>

                                                        <form class="deleteForm"
                                                            action="{{ route('mentors.destroy', $mentor->id) }}"
                                                            method="post">
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
