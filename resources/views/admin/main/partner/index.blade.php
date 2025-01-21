@extends('admin.layouts.master')
@section('title', 'Partner List')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Partner List
                            </div>
                            <div>
                                <a href="{{ route('partners.create') }}" class="btn btn-primary btn-sm">Add Partner</a>
                            </div>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Logo</th>
                                            <th>URL</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partners as $partner)
                                            <tr>
                                                <td>{{ $partner->company_name }}</td>
                                                <td>
                                                    @if ($partner->company_logo)
                                                        <img src="{{ asset('storage/' . $partner->company_logo) }}" alt="Logo"
                                                            style="height: 50px; border-radius: 6px;">
                                                    @else
                                                        <img src="https://placehold.co/400" alt="Default Logo"
                                                            style="height: 50px; border-radius: 6px;">
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($partner->company_url)
                                                        <a href="{{ $partner->company_url }}" target="_blank">
                                                            {{ $partner->company_url }}
                                                        </a>
                                                    @else
                                                        --
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-info btn-sm me-2"
                                                            href="{{ route('partners.edit', $partner->id) }}"><i
                                                                class="ph ph-pencil"></i></a>

                                                        <form class="deleteForm"
                                                            action="{{ route('partners.destroy', $partner->id) }}"
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
