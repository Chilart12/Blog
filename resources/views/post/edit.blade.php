@extends('layouts.app')

@section('content')
      <div class="container">
          <a href="{{ route('post.index') }}" class="btn btn-primary btn-sm float-sm-left" >Kembali</a>
          <div class="row justify-content-center">
              <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Post</div>

                      <div class="card-body">
                        <form class="" action="{{ route('post.update', $post) }}" method="post">
                          {{ method_field('PATCH') }}
                          {{ csrf_field() }}
                            <div class="form-group">
                                  <label for="">Title</label>
                                  <input type="text" class="form-control" name="title" placeholder="Post title" value="{{ $post->title }}">
                            </div>

                            <div class="form-group">
                                  <label for="">Category</label>
                                  <select class="form-control" name="category_id" id="">
                                    @foreach ($categories as $Category)
                                        <option value= {{ $Category->id }}
                                                   @if ($Category->id == $post->category_id)
                                                     selected
                                                  @endif }}
                                                  >
                                                  {{ $Category->name }}
                                        </option>
                                    @endforeach
                                  </select>
                            </div>

                            <div class="form-group">
                                  <label for="">Content</label>
                                  <textarea name="content" rows="5" class="form-control" placeholder="Post content">{{ $post->content }}</textarea>
                            </div>

                            <div class="form-group">
                                  <input type="submit" class="btn btn-primary" value="Save">
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection
