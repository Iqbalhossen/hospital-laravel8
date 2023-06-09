@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Add New Therapy Group</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <a href="{{ '/admin/therapy/list' }}" class="btn btn-success">Therapy List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <form method="post" action="{{ route('group.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Group Name*</label>
                                <div class="col-sm-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ old('name') }}" />
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Group Price*</label>
                                <div class="col-sm-6">
                                    <input id="price" type="text" class="form-control" name="price"
                                        value="{{ old('price') }}" />
                                    @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="doses" class="col-sm-2 col-form-label">Therapies</label>
                                <div class="col-sm-6">
                                    <select multiple name="therapies[]" id="" class="select2 form-control">
                                        @foreach ($therapies as $therapy)
                                            <option value="{{ $therapy->id }}">{{ $therapy->therapy_name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Create Therapy Group</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

@endsection
