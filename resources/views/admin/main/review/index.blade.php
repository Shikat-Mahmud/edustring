@extends('admin.layouts.master')
@section('title', 'Review List')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Review List
                            </div>
                            <div>
                                <a href="{{ route('reviews.create') }}" class="btn btn-primary btn-sm">Add review</a>
                            </div>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Email</th>
                                            <th>University</th>
                                            <th>Review</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    @if ($item->photo)
                                                        <img src="{{ asset('storage/' . $item->photo) }}" alt="Photo"
                                                            style="height: 50px; border-radius: 6px;">
                                                    @else
                                                        <img src="https://placehold.co/400" alt="Default Image"
                                                            style="height: 50px; border-radius: 6px;">
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->email)
                                                        {{ $item->email }}
                                                    @else
                                                        --
                                                    @endif
                                                </td>
                                                <td>{{ $item->university }}</td>
                                                <td>
                                                    @php
                                                        $words = explode(' ', $item->review);
                                                        $shortenedMessage =
                                                            count($words) > 15
                                                                ? implode(' ', array_slice($words, 0, 15)) . '...'
                                                                : $item->review;
                                                    @endphp
                                                    {{ $shortenedMessage }}
                                                </td>
                                                <td>{{ $item->rating }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-info btn-sm me-2"
                                                            href="{{ route('reviews.edit', $item->id) }}"><i
                                                                class="ph ph-pencil"></i></a>

                                                        <form class="deleteForm"
                                                            action="{{ route('reviews.destroy', $item->id) }}"
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
