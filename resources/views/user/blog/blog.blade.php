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
                <a href="#!"><img class="card-img-top" src="{{ asset('assets/frontend/images/header1.jpg') }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">Agustus 22, 2022</div>
                    <h2 class="card-title">Featured Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a class="btn btn-primary" href="{{ url('blogDetail') }}">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('assets/frontend/images/header1.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Agustus 22, 2022</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <a class="btn btn-primary" href="#">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('assets/frontend/images/header1.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Agustus 22, 2022</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('assets/frontend/images/header1.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Agustus 22, 2022</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('assets/frontend/images/header1.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Agustus 22, 2022</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
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
