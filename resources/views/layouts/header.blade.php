@extends('layouts.app')

@section('content')
    <!-- VIDEO AND TEXT -->

    <div class="container-fluid mt-5">
        <div class="row ">
            <div class="img-shadow col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 offset-xl-1 offset-lg-1 offset-md-1">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/97ZF_i5S5MQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                <h1 class="text-center pt-5">
                    Save films you want to watch.<br>
                    Track what you’ve seen.<br>
                    Tell your friends what’s good.
                </h1>

                <div class="row">
                    <a href="/login" type="button" class="col-xl-6 col-lg-6 col-md-10 col-sm-10 col-10 offset-sm-1 offset-1 offset-lg-3 offset-md-1 btn btn-success text-white mt-4 pl-5">GET STARTED - IT'S FREE!</a>
                </div>

            </div>
        </div>
    </div>
    <!-- END VIDEO AND TEXT -->

    <main class="py-4">
        @yield('content-text')
    </main>
@endsection
