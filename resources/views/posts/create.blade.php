@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Add New Post</div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                                @csrf
        
                                <div class="form-group row py-2">
                                    <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>
        
                                    <div class="col-md-6">
                                        <input id="caption" type="text" 
                                                class="form-control @error('caption') is-invalid @enderror" 
                                                caption="caption" value="{{ old('caption') }}" required 
                                                autocomplete="caption" autofocus
                                                id="caption" name="caption">
        
                                        @error('caption')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row py-2">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">Post Image</label>
                                    <div class="col-md-6">
                                        <input type="file" name="image" id="image" class="form-control-file">
                                    </div>
                                    
                                    @error('image')
                                        <div class="col-md-6 offset-4">
                                            <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                            </div>
                                            {{-- <p class="alert"> {{ $message }} </p>
                                            <strong>{{ $message }}</strong> --}}
                                            {{-- </span> --}}
                                        </div>
                                    @enderror
                                </div>
                                
        
                                <div class="form-group row mb-0 pt-2">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary float-right btn-sm">
                                            Add New Post
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>

@endsection