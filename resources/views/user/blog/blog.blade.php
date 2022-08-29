@extends('layouts.user.master')
@section('title','Blog')
@section('content')
<header class="py-5 mt-2 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Selamat datang di blog</h1>
            <p class="lead mb-0">Take your time</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="{{ asset('storage/'.$first->sampul) }}" alt="{{ $first->judul }}" /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $first->created_at->diffForHumans() }}</div>
                    <h2 class="card-title">{{ $first->juudl }}</h2>
                    <p class="card-text">
                        {{ $first->tajuk_utama }}
                    </p>
                    <a class="btn btn-primary" href="{{ route('blog.detail', ['slug' => $first->slug]) }}">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @foreach ($data as $item)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/'.$item->sampul) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $item->created_at->diffForHumans() }}</div>
                            <h2 class="card-title h4">{{ $item->judul }}</h2>
                            <p class="card-text">
                                {{ $item->tajuk_utama }}
                            </p>
                            <a class="btn btn-primary" href="{{ route('blog.detail', ['slug' => $item->slug]) }}">Read more →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                {{ $data->links('vendor.pagination.bootstrap-4') }}
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Pencarian</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Masukkan pencarian..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <!-- <div class="card mb-4">
                <div class="card-header">Kategori</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Wisata</a></li>
                                <li><a href="#!">Sport</a></li>
                                <li><a href="#!">Tutorial</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Wisata</a></li>
                                <li><a href="#!">Sport</a></li>
                                <li><a href="#!">Tutorial</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Side widget-->
            <!-- <div class="card mb-4">
                <div class="card-header">Penting</div>
                <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatum repellendus, aspernatur mollitia provident molestiae!</div>
            </div> -->
        </div>
    </div>
</div>

@endsection
