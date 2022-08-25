@extends('layouts.user.master')
@section('title','detail blog')

@section('content')

@push('costum-css')
<style>
    body {
        background-color: #fff;
    }
</style>
@endpush
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on Agustus 22, 2022 </div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Wisata</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Sport</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('assets/frontend/images/header1.jpg') }}" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                    <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                    <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                    <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
                    <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                    <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                </section>
            </article>
            <!-- Comments section-->

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