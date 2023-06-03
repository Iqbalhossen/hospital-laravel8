@extends('layouts.compounder')


@section('content')
    <!-- /.card-header -->
    <div class="row" style="height: 300px;">

        {{-- <div class="row" style="width:60%;margin-left:20%">
            <div class="col-md-5">
                <input class="form-control" type="date" name="from" id="">
            </div>
            <div class="col-md-5">
                <input class="form-control" type="date" name="to" id="">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info">Submit</button>
            </div>
        </div> --}}

        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">

                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                  <a href="{{url('/therapist/appointment/list')}}">
                    <div class="info-box mb-3">
                      <div class="info-box-content">
                          <span class="info-box-text">Total patient</span>
                          <span class="info-box-number">30</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </a>
                    
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total referred</span>
                            <span class="info-box-number">10</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total complete </span>
                            <span class="info-box-number">20</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Therapy</span>
                            <span class="info-box-number">25</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total canceled</span>
                            <span class="info-box-number">11</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total visit</span>
                            <span class="info-box-number">3000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total receive</span>
                            <span class="info-box-number">1600</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Due</span>
                            <span class="info-box-number">1400</span>
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
