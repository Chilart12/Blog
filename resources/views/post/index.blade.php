@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="row justify-content-center">
              <div class="col-md-8">
                  <h3> Selamat Datang di Blog</h3>

                    @foreach ($posts as $post)
                    <div class="pb-4">
                    <div class="card">
                        <div class="card-header">
                              <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>

                              <div class="float-right">

                                  <form class="" action="{{ route('post.destroy', $post) }}" method="post">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                      <button type="submit" class="btn btn-danger btn-sm float-sm-right">Hapus</button>
                                      <a href="{{ route('post.edit', $post) }}" class="btn btn-default btn-sm float-sm-right" >Edit data</a>
                                  </form>
                              </div>
                          </div>

                          <div class="card-body">
                              <p>{{ str_limit($post->content, 248, ' ...') }}</p>
                          </div>
                          </div>
                      </div>
                   @endforeach

              </div>
          </div>
      </div>
@endsection
