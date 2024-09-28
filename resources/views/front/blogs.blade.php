@extends('front.template')

@push('css')
<!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"> -->
<link rel="stylesheet" href="{{asset('front')}}/css/blog.css">
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }
</style>


<!-- Custom styles for this template -->
<!-- <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet"> -->

@endpush

@push('titile')
Blogs
@endpush


@section('content')
<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col px-0">
            <h1 class="display-4 fst-italic">{{ $article->title }}</h1>
            <p>{{ \Carbon\Carbon::parse($article->publish_date)->format('F d, Y')}} <a href="#"> by {{ $article->User->name}} </a></p>
            <p class="lead my-3"> {{ Str::limit(strip_tags($article->body), 200 )}} </p>
            <p class="lead mb-0"><a href="{{ url('blogs/'.$article->id)}}" class="text-body-emphasis fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        @foreach ($categories as $category)
        @if ($category->articles->isNotEmpty())

        <div class="col-md-6">
            <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">{{$category->name}}</strong>
                    <h3 class=" mb-0">{{ $category->articles->first()->title }}</h3>
                    <div class="mb-1 text-body-secondary">{{ \Carbon\Carbon::parse($category->articles->first()->publish_date)->format('M Y')  }} </div>
                    <p class="card-text mb-auto">{{ Str::limit(strip_tags($category->articles->first()->body), 50)}} </p>
                    <a href="{{ url('blogs/'.$category->articles->first()->id)}}" class="icon-link gap-1 icon-link-hover">
                        Continue reading
                    </a>
                </div>

            </div>
        </div>
        @endif
        @endforeach
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                    <h3 class="mb-0">Post title</h3>
                    <div class="mb-1 text-body-secondary">Nov 11</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>


</main>

@endsection