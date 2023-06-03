@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Edit Therapy</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <a href="{{ '/admin/therapy/list' }}" class="btn btn-success">Therapy List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/therapy/edit-store">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $therapy->id }}" />
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Therapy Name*</label>
                                <div class="col-sm-6">
                                    <input id="therapy_name" type="text" class="form-control" name="therapy_name"
                                        value="{{ $therapy->therapy_name }}" />
                                    @if ($errors->has('therapy_name'))
                                        <span class="text-danger">{{ $errors->first('therapy_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="doses" class="col-sm-2 col-form-label">Machines</label>
                                <div class="col-sm-6">
                                    <select multiple name="machines[]" id="" class="form-control select2">
                                        @foreach ($machines as $machine)
                                            <option @if (in_array($machine->id, $therapy_machines))
                                                selected
                                        @endif
                                        value="{{ $machine->id }}">{{ $machine->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update Therapy</button>
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
