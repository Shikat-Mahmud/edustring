@extends('admin.layouts.master')
@section('title', 'Application List')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Application List
                            </div>
                            @if (auth()->check() && auth()->user()->hasPermissionTo('create-application'))
                                <div>
                                    <a href="{{ route('applications.create') }}" class="btn btn-primary btn-sm">Add
                                        Student</a>
                                </div>
                            @endif
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $item)
                                            <tr>
                                                <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>
                                                    @if ($item->status == 'Initiated')
                                                        <p class="ml-3 badge bg-primary">{{ $item->status }}</p>
                                                    @endif
                                                    @if ($item->status == 'Pending')
                                                        <p class="ml-3 badge bg-warning">{{ $item->status }}</p>
                                                    @endif
                                                    @if ($item->status == 'Success')
                                                        <p class="ml-3 badge bg-success">{{ $item->status }}</p>
                                                    @endif
                                                    @if ($item->status == 'Failed')
                                                        <p class="ml-3 badge bg-danger">{{ $item->status }}</p>
                                                    @endif
                                                    @if ($item->status == 'Cenceled')
                                                        <p class="ml-3 badge bg-secondary">{{ $item->status }}</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        @if (auth()->check() && auth()->user()->hasPermissionTo('show-application'))
                                                            <a class="btn btn-secondary btn-sm me-2"
                                                                href="{{ route('applications.show', $item->id) }}"><i
                                                                    class="ph ph-eye"></i></a>
                                                        @endif

                                                        @if (auth()->check() && auth()->user()->hasPermissionTo('edit-application'))
                                                            <a class="btn btn-info btn-sm me-2"
                                                                href="{{ route('applications.edit', $item->id) }}"><i
                                                                    class="ph ph-pencil"></i></a>
                                                        @endif

                                                        @if (auth()->check() && auth()->user()->hasPermissionTo('delete-application'))
                                                            <form class="deleteForm"
                                                                action="{{ route('applications.destroy', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="btn btn-danger btn-sm btnDelete"><i
                                                                        class="ph ph-trash"></i></button>
                                                            </form>
                                                        @endif
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
