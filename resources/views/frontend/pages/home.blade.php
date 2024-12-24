@extends('frontend.layouts.master')

@section('title', 'home')

@section('main')
    @if ($errors->any()){
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @else
        <div class="container my-4">
                <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <a href="{{route('single', $article->slug)}}" style="text-decoration: none">
                                <div class="card" style="width: 18rem;">
                                        <img src="{{$article->image}}" class="card-img-top" alt="alt">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">{{$article->title}}</h5>
                                            <p class="card-text">{{Str::limit($article->content ,50)}}</p>
                                            <br>
                                            <span class="text-secondary">{{$article->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                </a>
                        </div>
                    @endforeach
                </div>
        </div>
    }
    @endif
@endsection