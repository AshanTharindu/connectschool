@extends('layouts.master')

@section('title')
    Events
@endsection

@section('heading')
    Add Event
@endsection


@section('content')

    <form action="{{route('createpost')}}" method="post">
        <div class="form-group">
            <textarea class="form-control" name="body" id="new-note" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Note</button>
        <input type="hidden" name="_token" value ="{{Session::token()}}">
    </form>


@endsection