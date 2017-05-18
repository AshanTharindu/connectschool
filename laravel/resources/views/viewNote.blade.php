@extends('layouts.master')

@section('title')
    view notes
@endsection

@section('heading')
    View Notes
@endsection



@section('content')

    <script >

        function viewmessage(mid){

            console.log(mid);
            console.log(mid['id']);
            document.getElementById("name").innerHTML =mid['sender_name'];
            document.getElementById("body").innerHTML = mid['body'];
            document.getElementById("time").innerHTML = mid['updated_at'];


        }

    </script>




    <div class="row">
        <div class="col-md-8">
            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <span class="username" id="name"></span>
                        <span class="description" id="time"></span>
                    </div>
                    <!-- /.user-block -->

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- post text -->
                    <p id="body"></p>


                </div>


            </div>


        </div>

    </div>



    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Received Notes</h3>


                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">

                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tbody>


                        @foreach($messages as $message)
                            <form>
                                <tr>
                                    <td>
                                        <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false"
                                             style="position: relative;"><input type="checkbox"
                                                                                style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </td>
                                    <td class="mailbox-name"><a href="read-mail.html">{{$message->sender_name}}</a></td>
                                    <td class="mailbox-subject"><b>{{$message->subject}}</b>
                                    </td>
                                    <td class="mailbox-attachment">{{$message->updated_at}}</td>
                                    <input type="hidden"  name="{{$message->id}}" value="">
                                    <td class="mailbox-date">
                                        <button type="button" class="btn btn-block btn-primary"
                                                onclick='viewmessage({!! json_encode($message) !!})'> View
                                        </button>
                                    </td>
                                </tr>


                            </form>
                                                    @endforeach

                        </tbody>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->





        </div>
    </div>


@endsection