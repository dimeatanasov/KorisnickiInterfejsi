@extends('layouts.header')

@section('content-text')
<div class="container">
    <div class="row">
        <!-- FILTERS -->
        <!-- Search Button -->
        <div class="col-md-12 form-group mb-3 col-md-6">
            <input type="text" name="search" id="search-input" class="form-control search" placeholder="Search Deal Data" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <!-- End Search Button -->


        <!-- END FILTERS -->

    </div>
</div>

<!-- CARDS -->
<div class="container">
    <div class="row">
        <div class="card-group ">
            @foreach($posts as $post)
        <div class="col-md-6 col-xl-3 col-lg-3 col-sm-12 " style="padding:1% 0.5% !important;">

                <div class="card cards  {{$post->genre}}">
                    <img src="{{$post->photo}}" width="100" height="280" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class='row'>
                            
                            <div class='col-md-xl-5 col-lg-5 col-md-12 col-sm-12 col-12'>
                                <h5 class="card-title text-center">{{$post->title}}</h5>
                            </div>
                            <div class='col-md-xl-6 col-lg-6 col-md-12 col-sm-12 col-12'>
                                <p class="card-text text-center getGenre" style="border: 1px dashed; border-radius: 1.2rem;">{{$post->genre}}</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/post/show/{{$post->id}}" class="btn btn-block btn-outline-dark">Read More!</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- END CARDS -->

<!-- CREATE MOVIE -->
<div class="container">
    <div class="row pt-5">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
            <h2 class="text-white text-center"> If you think we have not some movie, pleas add!</h2>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 offset-xl-5 offset-lg-5 offset-md-3">
            <a href="post/create" class="btn btn-outline-danger btn-lg">Add Movie</a>
        </div>
    </div>
</div>
<!-- END CREATE -->
@endsection

