@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a Link</h1>
        </div>
        <div class="row">
            <form action="/links/public/submit" method="post">
                @csrf
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    Please fix follwing error
                </div>
            @endif    
                <div class="form-group">
                    <label>Title</label>
                    <input type="text"  class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title') }}"/>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Url</label>

                    <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" placeholder="URL" value="{{ old('url') }}"/>
                    @error('url')
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>

                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description...">{{ old('description')}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection