@extends('layouts.app')

@section('content')

    <a href="{{ route('post.index') }}" class="btn btn-primary btn-sm float-sm-left" >Kembali</a>
    <div class="container">

          <form class="" action={{ route('post.store') }} method="post">
            {{ csrf_field() }}
              <div class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Post title" value="{{ old('title' )}}">
                    @if ($errors->has('title'))
                        <span class="help-block">
                              <p>{{ $errors->first('title') }}</p>
                        </span>
                    @endif
              </div>

              <div class="form-group">
                    <label for="">Category</label>
                    <select class="form-control" name="category_id" id="">
                      @foreach ($categories as $Category)
                          <option value="{{ $Category->id }}"> {{ $Category->name }}</option>
                      @endforeach
                    </select>
              </div>

              <div class="form-group has-feedback{{ $errors->has('content') ? ' has-errors' : '' }}">
                    <label for="">Content</label>
                    <textarea name="content" rows="5" class="form-control" placeholder="Post content">{{ old('content') }}</textarea>
                    @if ($errors->has('content'))
                        <span class="help-block">
                              <p>{{ $errors->first('content') }}</p>
                        </span>
                    @endif
              </div>

              <div class="form-group ">
                    <input type="submit" class="btn btn-primary" value="Save">
              </div>
          </form
    </div>
@endsection
