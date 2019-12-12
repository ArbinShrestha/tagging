@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-8">
                <table class="table table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Contents</th>
                        <th>Tags</th>
                    </tr>

                        @foreach($posts  as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->contents}}</td>
                            <td>@foreach($post->tags as $tags)
                            {{$tags}} |
                            @endforeach</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

@endsection
