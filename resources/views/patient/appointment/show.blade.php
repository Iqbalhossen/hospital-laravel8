@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2">Appointment</th>
                            <th >
                                <a target="_blank" class="btn btn-info" href="{{route('appointment.print',$appointment->id)}}">
                                    Print
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Appointment ID</th>
                            <td>{{$appointment->id}}</td>
                        </tr>
                        <tr>
                            <th>Patient Name</th>
                            <td>{{$appointment->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Doctor Name</th>
                            <td>{{$appointment->doctor?$appointment->doctor->name:'TBA'}}</td>
                        </tr>
                        <tr>
                            <th>Appointment Date</th>
                            <td>{{Carbon\Carbon::parse($appointment->appoint_at)->format('d-m-y')}}
                                <br>
                                {{$appointment->slot?$appointment->slot->start.'-'.$appointment->slot->end:''}}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Account</th>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>{{$appointment->amount}}</td>
                        </tr>

                        <tr>
                            <th>Discount</th>
                            <td>{{$appointment->discount}}</td>
                        </tr>
                        <tr>
                            <th>Given</th>
                            <td>{{$appointment->given}}</td>
                        </tr>
                        <tr>
                            <th>Due</th>
                            <td>{{($appointment->doctor?$appointment->doctor->doctor->visit:0)+$appointment->amount-$appointment->discount-$appointment->given}}</td>

                        </tr>

                    </tbody>
                </table>
            </div>
            @include('common.appointment_prescription')

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="2">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointment->notes as $note)
                            <tr>
                                <th>
                                    {{$note->user->name}}
                                    <br>
                                {{$note->created_at->diffForHumans()}}</th>
                                <td>{{$note->note}}</td>
                            </tr>
                            @endforeach

                            <tr>
                                <th>Add Note</th>
                                <td>
                                    <form action="{{route('appointment.note.store',$appointment->id)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <textarea name="note" id="note" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success" type="submit">Add Note</button>
                                        </div>
                                    </form>
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="2">Therapies</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Dose</th>
                                {{-- <th>price</th>
                                <th>Total</th> --}}
                                <th>Given</th>
                                <th>Action</th>
                            </tr>
                            @foreach($appointment->therapies as $therapy)
                            <tr>
                                <td>{{$therapy->therapy->therapy_name}}</td>
                                <td>{{$therapy->total}}</td>
                                {{-- <td>{{$therapy->therapy->price}}</td>
                                <td>{{$therapy->total * $therapy->therapy->price}} --}}
                                <td>{{$therapy->given}}</td>
                                <td>
                                    <a href="{{route('patient.therapy.history',$therapy->id)}}" class="btn btn-sm btn-info">View</a>
                                </td>
                                </td>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th colspan="2">Tests</th>
                         </tr>

                     </thead>
                     <tbody>

                         @foreach($appointment->tests as $test)
                         <tr>
                             <td>{{$test->name}}</td>
                             <td>{{$test->description}}</td>

                             </td>
                         @endforeach

                     </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
