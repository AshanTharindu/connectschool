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
            <h4>Year</h4>
            <select class="form-control">
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
            </select>
        </div>

        <div class="col-md-4">
            <h4>Term</h4>
            <select class="form-control">
                <option>1st</option>
                <option>2nd</option>
                <option>3rd</option>

            </select>
        </div>


    </div>

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
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Maths</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Religion</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">commerce</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Music</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Art</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">History</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Science</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">English</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Sinhala</td>
                                    <td>59</td>
                                    <td>17</td>

                                </tr></tbody>

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
                                <td>653</td>
                            </tr>
                            <tr>
                                <th>Average</th>
                                <td>59</td>
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