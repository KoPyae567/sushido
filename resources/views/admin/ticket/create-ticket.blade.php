@extends('layouts.admin.master')

@section('css')

@endsection


@section('content')




<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Advanced DataTable</h4>
                        <span>Advanced initialisation of DataTables</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Basic Initialization</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Advance Initialization</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <!-- DOM/Jquery table start -->
              <div class="card">
                                                <div class="card-header">
                                                    <h5>Basic Form Inputs</h5>
                                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>


                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>

                                                </div>
                                                <div class="card-block">
                                                    <h4 class="sub-title">Basic Inputs</h4>
                                                    <form>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Start City</label>
                                                            <div class="col-sm-10">
                                                                <select class="js-example-basic-multiple form-control">
                                                                    @foreach($cities as $data)
                                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                         <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">End City</label>
                                                            <div class="col-sm-10">
                                                                <select class="js-example-basic-multiple form-control">
                                                                    @foreach($cities as $data)
                                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                         <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Airline</label>
                                                            <div class="col-sm-10">
                                                                <select class="js-example-basic-multiple form-control">
                                                                    @foreach($airlines as $data)
                                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                         <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Distination Time</label>
                                                            <div class="col-sm-10">
                                                                <input type="datetime-local" name="distination_time" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-sm-2 col-form-label">Arrival Time</label>
                                                            <div class="col-sm-10">
                                                                <input type="datetime-local" name="arrival_time" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                           <label class="col-sm-2 col-form-label">Ticket Price</label>
                                                            <div class="col-sm-10">
                                                                 <div class="form-group row">
                                                                    <div class="col-sm-11">
                                                                        <div class="row">
                                                                            <div class="col-sm-3">
                                                                                <input type="number" class="form-control" placeholder="col-sm-1">
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <input type="number" class="form-control" placeholder="col-sm-1">
                                                                            </div>
                                                                              <div class="col-sm-3">
                                                                                <input type="number" class="form-control" placeholder="col-sm-1">
                                                                            </div>

                                                                              <div class="col-sm-3">
                                                                                <input type="number" class="form-control" placeholder="col-sm-1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-1">
                                                                        <button class="btn btn-round btn-success">+</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                            </div>

        </div>
        <!-- Page-body start -->
    </div>
</div>

















@endsection

@section('js')

@endsection
