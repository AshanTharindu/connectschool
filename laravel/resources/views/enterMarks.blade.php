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
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Student</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Marks</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Rank</th>
                                    </thead>
                                    <tbody>

                                    <tr  role="row" class="odd">
                                        <td> <select class="form-control" id="0" name="0">
                                                <?php
                                                    $students = \App\Student::all();
                                                    foreach($students as $student){?>

                                                <option><?php echo $student->id;?></option>
                                                <?php }?>
                                            </select> </td>
                                        <td > <input type="text" class="sorting_1" id="1" name="1" /> </td>
                                        <td id="2" name="2" ></td>
                                        <input type="hidden" id="3" name="3" value="">

                                    </tr>
                                    <tr role="row" class="odd">
                                        <td> <select class="form-control" id="4" name="4">
                                                <?php
                                                $students = \App\Student::all();
                                                foreach($students as $student){?>

                                                <option><?php echo $student->id;?></option>
                                                <?php }?>
                                            </select> </td>
                                        <td > <input type="text" class="sorting_1" id="4" name="4" /> </td>
                                        <td id="4"> </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td> <select class="form-control">
                                                <?php
                                                $students = \App\Student::all();
                                                foreach($students as $student){?>

                                                <option><?php echo $student->id;?></option>
                                                <?php }?>
                                            </select> </td>
                                        <td> <input type="text" class="sorting_1" id="5" /> </td>
                                        <td id="6" ></td>

                                    </tr>
                                    <tr role="row" class="odd">
                                        <td> <select class="form-control">
                                                <?php
                                                $students = \App\Student::all();
                                                foreach($students as $student){?>

                                                <option><?php echo $student->id;?></option>
                                                <?php }?>
                                            </select> </td>
                                        <td> <input type="text" class="sorting_1" id="7" /> </td>
                                        <td id="8"> </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td> <select class="form-control">
                                                <?php
                                                $students = \App\Student::all();
                                                foreach($students as $student){?>

                                                <option><?php echo $student->id;?></option>
                                                <?php }?>
                                            </select> </td>
                                        <td> <input type="text" class="sorting_1" id="9" /> </td>
                                        <td id="10"> </td>
                                    </tr>


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

            var sname = document.getElementById("0");
            var sid = sname.options[sname.selectedIndex].value;
            console.log(sid);
            var inputmarks =[];
            for(var j= 1; j<11; j=j+2){
                if((document.getElementById(j).value) in inputmarks){
                    console.log("yes");

                }else{
                    inputmarks.push((document.getElementById(j).value));
                }

            }
            var rawmarks =[];
            for(var j= 1; j<11; j=j+2){
                rawmarks.push((document.getElementById(j).value));
            }



            var markssorted = inputmarks.sort(function(a, b){return a-b});



            for(var i = 1; i<=rawmarks.length;i++){
                console.log(rawmarks[i-1]);
                var rank = markssorted.length-markssorted.indexOf(rawmarks[i-1]);
                console.log(rank);
               // document.getElementById((i*2).toString()).innerHTML = rank.toString();
            }
            document.getElementById("2").innerHTML ="3";
            document.getElementById("3").value = "3";



        }


    </script>

@endsection