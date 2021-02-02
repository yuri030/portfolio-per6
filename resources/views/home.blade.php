@extends('layout.master')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Portfolio</h1>
          <span class="subheading">gemaakt door Yuri</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    @foreach($posts as $post)
      <div class="post-preview">
        <a href="/blog/{{ $post->slug }}">
          <h2 class="post-title">
            {{ $post->title}}
          </h2>
          <h3 class="post-subtitle">
            {{ $post->excerpt}}
          </h3>
        </a>
        <p class="post-meta">Posted on
          {{ $post->created_at}}
        </p>
      </div>
      <hr>
      @endforeach
      <div class="post-preview">
        <a href="/page9">
          <h2 class="post-title">SCSS</h2>
          <h3 class="post-subtitle">Leerjaar 1 - periode 2</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 15:39:22</p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="/page8">
          <h2 class="post-title">Super hang on</h2>
          <h3 class="post-subtitle">Leerjaar 2 - periode 1</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 15:32:58</p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="/page7">
          <h2 class="post-title">Remake</h2>
          <h3 class="post-subtitle">Leerjaar 1 - periode 4</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 14:21:12</p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="/page6">
          <h2 class="post-title">Dino</h2>
          <h3 class="post-subtitle">Leerjaar 1 - periode 3</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 14:33:42</p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="/page5">
          <h2 class="post-title">Webshop</h2>
          <h3 class="post-subtitle">Leerjaar 1 - periode 2</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 14:21:12</p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="/page4">
          <h2 class="post-title">Wireframe</h2>
          <h3 class="post-subtitle">Leerjaar 1 - periode 2</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 14:04:53</p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="/page3">
          <h2 class="post-title">Grid en Sprite</h2>
          <h3 class="post-subtitle">Leerjaar 1 - periode 2</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 12:46:12</p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="/page2">
          <h2 class="post-title">Rekenmachine</h2>
          <h3 class="post-subtitle">Leerjaar 1 - periode 1</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 12:31:34</p>
      </div>
      <hr>
      <div class="post-preview">
        <a href="/page1">
          <h2 class="post-title">Kleurenwebsite</h2>
          <h3 class="post-subtitle">Leerjaar 1 - periode 1</h3>
        </a>
        <p class="post-meta">Posted on 2021-02-01 12:28:41</p>
      </div>
      <hr>
      <!-- Pager -->
      <!-- <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div> -->
    </div>
  </div>
</div>
@endsection