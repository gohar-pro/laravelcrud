@extends('laayout.app')
@section('main')
<form method ="POST" action="/products/store" enctype= multipart/form-data>
    @csrf
    <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" 
                class="form-control" 
                placeholder="Email"
                value="{{old('email')}}">
                @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email')}}</span>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="pass" name="pass" 
                class="form-control" 
                placeholder="Password"
                value="{{old('pass')}}">
                @if($errors->has('pass'))
                <span class="text-danger">{{ $errors->first('pass')}}</span>
                @endif
              </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="image" 
                class="form-control" 
                value="{{old('image')}}">
                @if($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image')}}</span>
                @endif
              </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
                
              </div>
        </div>
</form>
@endsection