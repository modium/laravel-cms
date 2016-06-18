@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>User</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>

        @if($posts)

            @foreach($posts as $post)
                <tbody>
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" /></td>
                        <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td> <!--Get post owner's name-->
                        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{str_limit($post->body, 20)}}</td>
                        <td>{{$post->created_at->diffForhumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                </tbody>
            @endforeach

        @endif

    </table>

@stop
