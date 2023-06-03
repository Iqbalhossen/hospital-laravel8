@extends('layouts.app')

@section('content')
    <!-- /.card-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Leave Type List</b>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        @include('filter-form')
                        <table id="d-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Limit</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leaveTypes as $key => $leaveType)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $leaveType->name }}</td>
                                        <td>{{ $leaveType->limit }}</td>
                                        <td>{{ $leaveType->created_at->format('d M Y') }}</td>
                                        <td>
                                            <div class="btn-group">

                                                <a class="btn btn-info btn-sm"
                                                    href="{{ route('leave-type.edit', $leaveType->id) }}">
                                                    Edit
                                                </a>

                                                <a class="btn btn-danger btn-sm"
                                                    href="{{ route('leave-type.remove', $leaveType->id) }}">
                                                    Delete
                                                </a>

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
    <!-- /.card-body -->
@endsection
