@extends('layouts.master')

@section('title')
    View
@endsection

@section('heading')
    View Marks
@endsection


@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="callout callout-info">
                <h4>Select Grade and Term</h4>
                <p>Then click done</p>
            </div>
        </div>
    </div>
    <form action="{{route('fetchmarks')}}" method="post">
        <div class="row">
            <div class="col-md-4">
                <h4>Grade</h4>
                <select class="form-control" id="grade" name="grade">
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                </select>
            </div>

            <div class="col-md-4">
                <h4>Term</h4>
                <select class="form-control" id="term" name="term">
                    <option>1st</option>
                    <option>2nd</option>
                    <option>3rd</option>

                </select>
            </div>


        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3">
                <button type="submit" class="btn btn-block btn-primary">Done</button>
                <input type="hidden" name = "_token" value = "{{Session::token()}}">
            </div>

        </div>

    </form>


    <br>
    <br>
    <br>
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Term Test Marks</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-md-4"></div><div class="col-md-4"></div></div><div class="row"><div class="col-md-10"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Subject</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Marks</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Rank</th>
                                </thead>
                                <tbody>
                                @foreach($marksheets as $marksheet)

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$marksheet->subject}}</td>
                                        <td>{{$marksheet->marks}}</td>
                                        <td>{{$marksheet->rank}}</td>

                                    </tr>

                                @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <div class="row">

                <div class="col-xs-6">


                    <div class="table-responsive">
                        <table class="table">
                            <tbody><tr>
                                <th style="width:50%">Total</th>
                                <td>@php
                                    $total = 0;
                                    $subjects = 1;
                                    foreach($marksheets as $marksheet){
                                        $total += $marksheet->marks;
                                        $subjects++;
                                    }
                                    echo $total
                                    @endphp</td>
                            </tr>
                            <tr>
                                <th>Average</th>
                                <td>{{$total/$subjects}}</td>
                            </tr>
                            <tr>
                                <th>class Average</th>
                                <td>41</td>
                            </tr>

                            </tbody></table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
@endsection