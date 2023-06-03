@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Doctor List</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                        <div class="dropdown float-right">
                            <a href="{{'/admin/doctor/add'}}" class="btn btn-success">Add Doctors</a>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">NID</th>
                                <th scope="col">Specialist</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctors as $doctor)
                                <tr>
                                    <th scope="row">
                                        {{$doctor->name}}
                                    </th>
                                    <th scope="row">
                                        {{$doctor->phone}}
                                    </th>
                                    <th scope="row">
                                        {{$doctor->email}}
                                    </th>
                                    <th scope="row">
                                        {{$doctor->nid}}
                                    </th>
                                    <th scope="row">
                                        {{$doctor->specialist_list}}
                                    </th>
                                    <td>
                                        @if($doctor->status == 1)
                                            <b class="text-success">Active</b>
                                        @else($doctor->status == 0)
                                            <b class="text-danger">In-Active</b>
                                        @endif
                                    </td>
                                    <th scope="row">
                                        {{$doctor->created_at}}
                                    </th>
                                    <th scope="row">
                                        {{$doctor->updated_at}}
                                    </th>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{'/employee/doctor/edit/'.$doctor->id.'/'.$doctor->user_id}}">
                                            Edit
                                        </a> <br/>
                                        <a class="btn btn-success btn-sm my-1"
                                            href="{{'/employee/doctor/change-status/'.$doctor->id}}">
                                            Change status
                                        </a> <br/>
                                        <a class="btn btn-danger btn-sm"
                                            href="{{'/employee/doctor/delete/'.$doctor->id}}">
                                            Delete
                                        </a> <br/>
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
@endsection
