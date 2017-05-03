@extends('layouts.master')

@section('title')
    Home

@endsection

@section('content')

    <div class="box-body">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img src="http://placehold.it/1200x600/39CCCC/ffffff&amp;text=Welcome to ConnecTSchool" alt="">

                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x600/3c8dbc/ffffff&amp;text=Stay connected" alt="">


                </div>
                <div class="item active">
                    <img src="http://placehold.it/1200x600/f39c12/ffffff&amp;text=Welcome to ConnecTSchool" alt="">


                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
            </a>
        </div>
    </div>

@endsection


