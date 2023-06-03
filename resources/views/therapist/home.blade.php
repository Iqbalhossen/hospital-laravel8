@extends('layouts.therapist')

@section('content')
    <!-- /.card-header -->
    <div class="row" style="height: 300px;">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="{{url('/therapist/appointment/list')}}">
                        <div class="info-box mb-3">
                            <div class="info-box-content">
                                <span class="info-box-text">Total Appointment</span>
                                <span class="info-box-number">{{ count($appointments) }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Therapy</span>
                            <span class="info-box-number">{{ $therapyCounts }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Completed</span>
                            <span class="info-box-number">{{ $therapyCompletedCounts }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>



                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Pending Therapy</span>
                            <span class="info-box-number">{{ $therapyCounts - $therapyCompletedCounts }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>




                <!-- /.col -->
            </div>
            <!-- /.content -->
        </div>
        <!-- ./wrapper -->

    @endsection
