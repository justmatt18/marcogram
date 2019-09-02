@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-5">
            <img class="rounded-circle mx-5 pl-2" style="cursor: pointer" src="https://instagram.fcgy1-1.fna.fbcdn.net/vp/24467b846b0122d083ad798ec0bec263/5DDDBC3F/t51.2885-19/s150x150/59022956_586628681826452_2671865001261662208_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net"  alt="profile">
        </div>
        <div class="col-8 pt-5" id="profile-picture">
            <div class="d-flex justify-content-between align-items-baseline" id="profile-username">
                <h2>{{ $user->username }}</h2>
                <a href="{{ route('posts.create') }}" class="btn btn-secondary btn-sm">
                    <i class="material-icons">add_a_photo</i>
                </a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>58</strong> followers</div>
                <div class="pr-5"><strong>86</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"> {{$user->name}} </div>
            <div>{{ $user->profile->title }}</div>
            <div>{{$user->profile->bio}}</div>
            <div><a href="#">{{ $user->profile->website }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-md-4 col-sm-12 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
                
            </div>
        @endforeach
    </div>
</div>
@endsection

