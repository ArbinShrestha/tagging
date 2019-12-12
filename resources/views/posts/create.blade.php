@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header">
            Create a post
        </div>

        <div class="card-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <label for="title"><b>Title</b></label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="card-body">
                    <div class="form-group ">
                        <label for="tags"><b>Select tags</b></label>
                        @foreach($tags as $tag)
                            <div class="form-check-label">
                                <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->name}}">{{$tag->name}}
                            </div>
                        @endforeach
                    </div>


                    <div class="form-group">
                        <label for="contents"><b>Content</b></label>
                        <textarea name="contents" id="contents" cols="10" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Create post
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
        </div>



    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Create a tag
            </div>

            <div class="card-body">
            @include('tags.create')
            </div></div></div></div>
</div>
@endsection