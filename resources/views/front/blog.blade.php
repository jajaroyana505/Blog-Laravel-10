@extends('front.template')


@section('content')
<main class="container my-5">
    <div class="row g-5">

        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                {{ $article->Category->name}}

            </h3>
            <h2 class="display-5 link-body-emphasis mb-1"> {{ $article->title}} </h2>
            <p class="blog-post-meta"> {{ \Carbon\Carbon::parse($article->publish_date)->format('F d, Y')}} <a href="#"> by {{ $article->User->name}} </a></p>

            {!! $article->body !!}
            <article class="blog-post">

            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
            </nav>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 5rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">.</p>
                </div>

                <div>
                    <h4 class="fst-italic">Recent posts</h4>
                    <ul class="list-unstyled">
                        @foreach ($posts as $post)
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="{{ url('blogs/'.$post->id)}}">
                                <img class="bd-placeholder-img" width="96" height="96" style="object-fit: cover" src="{{asset('storage/back/'. $post->img)}}" alt="" aria-hidden="true">
                                <div class="col-lg-8">
                                    <h6 class="mb-0">{{$post->title}}</h6>
                                    <small class="text-body-secondary">{{ \Carbon\Carbon::parse($post->publish_date)->format('F d, Y')}}</small>
                                </div>
                            </a>
                        </li>

                        @endforeach
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="false" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#777" />
                                </svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">This is another blog post title</h6>
                                    <small class="text-body-secondary">January 14, 2024</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>


            </div>
        </div>
    </div>

</main>
@endsection