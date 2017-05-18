@extends('layouts.master')

@section('title')
    Enter
@endsection

@section('heading')
    Enter Marks
@endsection


@section('content')

    <form action="{{route('savemarks')}}" method="post">
        <div class="row">
            <div class="col-md-3">
                <h4>Year</h4>
                <select class="form-control" id="year" name="year">
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                </select>
            </div>

            <div class="col-md-3">
                <h4>Term</h4>
                <select class="form-control" id="term" name="term">
                    <option>1st</option>
                    <option>2nd</option>
                    <option>3rd</option>

                </select>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-3">
                <h4>Class</h4>
                <select class="form-control" id="classname" name="classname">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>T</option>
                </select>
            </div>

            <div class="col-md-3">
                <h4>Subject</h4>
                <select class="form-control" id="subject" name="subject">
                    <option>Maths</option>
                    <option>Science</option>
                    <option>History</option>
                    <option>Art</option>
                    <option>Commerce</option>
                    <option>Sinhala</option>
                    <option>English</option>
                    <option>Religion</option>
                    <option>Music</option>
                </select>
                <input type="hidden" id="msid" name="msid" value="">
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
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Student</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Marks</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Rank</th>
                                    </thead>
                                    <tbody>

                                    <?php for($i=0; $i<80; $i=$i+4){?>
                                    <tr  role="row" class="odd">

                                            <td> <select class="form-control" id="<?php echo $i; ?>" name="<?php echo $i; ?>">
                                                    <?php
                                                    $students = \App\Student::all();
                                                    foreach($students as $student){?>

                                                    <option><?php echo $student->id;?></option>
                                                    <?php }?>

                                                </select> </td>
                                            <td > <input type="text" class="sorting_1" id="<?php echo $i+1; ?>" name="<?php echo $i+1; ?>" /> </td>
                                            <td id="<?php echo $i+2; ?>"></td>
                                            <input type="hidden" id="<?php echo $i+3; ?>" name="<?php echo $i+3; ?>" value="">

                                    </tr><?php }?>




                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-6">

                        <td>
                            <button type="button" class="btn btn-block btn-primary" onclick="findRank()" >Rank</button>
                        </td>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody><tr>
                                    <th style="width:50%">No. of Students</th>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th>Subject Average</th>
                                    <td>59</td>
                                </tr>

                                </tbody></table>
                        </div>
                    </div>
                    <!-- /.col -->


                </div>
                <div class="row">
                    <div class="col-xs-3">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
                        <input type="hidden" name = "_token" value = "{{Session::token()}}">
                    </div>
                </div>
            </div>
        </div>




    </form>
    <script>
        function findRank(){

            var msid = $('#year').val()+$('#term').val()+$('#grade').val()+$('#classname').val()+$('#subject').val();
            console.log(msid);
            document.getElementById("msid").value = msid;



            //enterd marks will be added to the array
            var rawmarks =[];
            var dupmarks=[];

            for(var j= 1; j<81; j=j+4){
                rawmarks.push((document.getElementById(j.toString()).value));
                dupmarks.push((document.getElementById(j.toString()).value));
            }



            var ranklist=[];

            var markssorted= rawmarks.sort(function(a, b){return a-b});
            //processed data will added to the interface

            var rank=0;
            var count=0;
            var pre = -1;
            for(var i = dupmarks.length-1; i>-1;i--){
                if( pre==markssorted[i]){
                    ranklist[i]= rank;
                }else{
                    rank = markssorted.length-i;
                    ranklist[i]= rank;
                }
                pre = markssorted[i];
                //console.log(rank);
            }

            for(var i = 0; i<dupmarks.length;i++){

                    var value = markssorted.indexOf(dupmarks[i]);
                    //console.log(dupmarks[i]);
                    //console.log(ranklist[value]);
                    document.getElementById((i*4+2).toString()).innerHTML = ranklist[value].toString();
                    document.getElementById((i*4+3).toString()).value = ranklist[value].toString();


            }
        }
    </script>

@endsection


