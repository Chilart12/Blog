@extends('layouts.app')

@section('content')
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">


                <div class="pb-4">
                <div class="card">
                      <div class="card-header">{{ $post->title }} | <small>{{ $post->category->name }}</small></div>

                      <div class="card-body">
                          <p>{{ $post->content }}</p>
                      </div>
                </div>
                </div>

                <div class="card">
                      <div class="card-header">Tambahkan Komentar</div>

                      @foreach ($post->comments()->get() as $comment)
                                <div class="card-body">
                                    <h4>{{ $comment->user->name }} - {{ $comment->created_at->diffForHumans() }}</h4>

                                    <p>{{ $comment->message }}</p>
                                </div>
                      @endforeach

                      <div class="card-body">
                          <form class="" action="{{ route('post.comment.store', $post) }}" method="post">
                              {{ csrf_field() }}
                                <textarea name="message" class="form-control" rows="5" cols="80" placeholder="Berikan Komentar"></textarea>

                                  <input type="submit" class="btn btn-primary" value="komentar">
                          </form>
                      </div>
                </div>

            </div>
          </div>
      </div>
@endsection
