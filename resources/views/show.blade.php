<!-- show.blade.php -->

@extends('layouts.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')
<div class="container body">
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-5 pt-2">
            <h2 class='text-center'>{{$post->title}} - {{$post->genre}} - {{$post->year}}</h2>
        </div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 offset-1  pb-4">
            <iframe class="col-sm-12" width="870" height="530" src="{{$post->trailer}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="col-md-12 ">

            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link  font-weight-bold active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                </li>
            </ul>
            <div class="tab-content text-white pt-3 col-md-12" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p class="text-white text">{{$post->body}}</p>
                    <p class="button btn btn-outline-danger col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 offset-3 ">read more</p>
                </div>
                    <hr style="background-color:white;">

                    <hr />
                        <h4>Add comment</h4>
                        <form method="post" action="{{ route('comment.add') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="comment_body" class="form-control" />
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-warning" value="Add Comment" />
                            </div>
                        </form>
                        <hr />
                        <h4>Display Comments</h4>
                        @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var defaultHeight = 150;
        var text = $(".text");
        var textHeight = text[0].scrollHeight;
        var button = $(".button");
        text.css({
            "max-height": defaultHeight,
            "overflow": "hidden"
        });

        button.on("click", function() {
            var newHeight = 0;
            if (text.hasClass("active")) {
                newHeight = defaultHeight;
                text.removeClass("active");
            } else {
                newHeight = textHeight;
                text.addClass("active");
            }
            text.animate({
                "max-height": newHeight
            }, 500);
            console.log(newHeight);
        });
    });
</script>
@endsection
