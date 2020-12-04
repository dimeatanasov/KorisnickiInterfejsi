@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white">
            <div class="text-center"><h2>Create Movie</h2></div>
            
            <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label class="label">Movie Title: </label>
                            <input type="text" name="title" class="form-control" required />
                        </div>
                        <!-- Logo -->
                        <div class="form-group row">
                            <div class="col-md-12 ">
                                <label for="photo" class="pr-3">Movie Photo:</label>
                            </div>

                            <span class="input-group-btn col-xl-6 col-lg-6 col-md-6 ">
                                <span class="btn btn-lg text-muted pt-5 pb-5 mb-3" onclick="$(this).parent().find('input[type=file]').click();"> +</span>
                                <input name="photo" multiple onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none; width: 20%;" type="file">
                                <span class="form-control shadow-sm  col-md-12 bg-light text-center" style="border: none; font-size: 12px;"></span>
                            </span>
                        </div>
                        <!-- End Logo -->
                        <!-- Trailer -->
                        <div class="form-group ">
                            <label for="trailer">Movie Trailer:</label>
                            <input type="text" id='trailer' class='form-control shadow-sm' placeholder="www.schatze.mk" name="trailer" required>
                        </div>
                        <!-- End Trailer -->
                        <div class="form-group">
                            <label class="label">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="label">Movie Year: </label>
                                <input type="number" name="year" class="form-control" required />
                            </div>

                            <div class="col-md-6">
                                <label class="label">Movie Genre: </label>
                                <input type="text" name="genre" class="form-control" required />
                            </div>

                        </div>

                        <div class="form-group">
                            <input type="submit" class=" btn btn-success mt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 offset-3" />
                        </div>
                    </form>

        </div>
    </div>
</div>
@endsection