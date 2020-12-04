@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5 pb-5 mb-5">
    <div class="row justify-content-center pt-5 mt-5 pb-5 mb-5">
        <div class="col-md-8 pt-5 mt-5 pb-5 mb-5">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection