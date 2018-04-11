@extends('layouts.master')
@section('title')
    laravel Shoping Cart
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('images/a.jpg')}}" alt="image 1"
                     style="max-height:150px" class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="desc">bla bla bla bla bla bla</p>
                    <div class="clearfix"><div class="pull-left price">20$</div>
                        <a href="#" role="button" class="btn btn-success pull-right">
                            Add To Cart</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('images/b.jpg')}}" alt="image 1"
                     style="max-height:150px" class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="desc">bla bla bla bla bla bla</p>
                    <div class="clearfix"><div class="pull-left price">20$</div>
                        <a href="#" role="button" class="btn btn-success pull-right">
                            Add To Cart</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('images/c.jpg')}}" alt="image 1"
                     style="max-height:150px" class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="desc">bla bla bla bla bla bla</p>
                    <div class="clearfix"><div class="pull-left price">20$</div>
                        <a href="#" role="button" class="btn btn-success pull-right">
                            Add To Cart</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('images/d.jpg')}}" alt="image 1"
                     style="max-height:150px" class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="desc">bla bla bla bla bla bla</p>
                    <div class="clearfix"><div class="pull-left price">20$</div>
                        <a href="#" role="button" class="btn btn-success pull-right">
                            Add To Cart</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('images/e.jpg')}}" alt="image 1"
                     style="max-height:150px" class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="desc">bla bla bla bla bla bla</p>
                    <div class="clearfix"><div class="pull-left price">20$</div>
                        <a href="#" role="button" class="btn btn-success pull-right">
                            Add To Cart</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('images/f.jpg')}}" alt="image 1"
                     style="max-height:150px" class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="desc">bla bla bla bla bla bla</p>
                    <div class="clearfix"><div class="pull-left price">20$</div>
                        <a href="#" role="button" class="btn btn-success pull-right">
                            Add To Cart</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection