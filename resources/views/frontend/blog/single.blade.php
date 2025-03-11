@extends('frontend.layout')

@section('content')
<style>
  .hero-inner {
    background: url('{{ asset('frontend/images/hero_1_a.jpg') }}') no-repeat center center/cover;
    color: rgb(245, 245, 245);
    padding: 150px 0; /* Menambahkan padding untuk menurunkan teks */
    position: relative;
    overflow: hidden;
  }
  .hero-inner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 0;
  }
  .hero-inner .container {
    position: relative;
    z-index: 1;
  }
  .hero-inner .intro h1 {
    color: #fff; /* Membuat teks putih */
  }
  .hero-inner .custom-breadcrumbs a, .hero-inner .custom-breadcrumbs strong {
    color: #fff;
  }
  .site-section.bg-light {
    background-color: rgb(250, 250, 250);
    color: rgb(50, 50, 50);
    padding: 60px 0;
  }
  .btn-orange {
    background-color: rgb(199, 148, 2);
    border-color: rgb(199, 148, 2);
    color: rgb(255, 255, 255);
    border-radius: 4px;
    padding: 10px 20px;
    transition: background-color 0.3s, border-color 0.3s, color 0.3s;
  }
  .btn-orange:hover {
    background-color: rgb(255, 215, 0);
    border-color: rgb(255, 215, 0);
    color: rgb(34, 34, 34);
  }
  .text-orange {
    color: rgb(199, 148, 2);
  }
  .post-entry-1 {
    background: rgb(255, 255, 255);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .post-entry-1:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  .post-entry-1 img {
    object-fit: cover;
    width: 100%;
    height: auto;
    transition: transform 0.3s;
  }
  .post-entry-1 img:hover {
    transform: scale(1.05);
  }
  .post-entry-1-contents {
    padding: 20px;
  }
  .post-entry-1-contents h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
  }
  .post-entry-1-contents .meta {
    color: rgb(141, 128, 127);
  }
  .sidebar-box .categories li {
    list-style: none;
    margin-bottom: 10px;
  }
  .sidebar-box .categories li a {
    color: rgb(50, 50, 50);
    text-decoration: none;
  }
  .sidebar-box .categories li a:hover {
    color: rgb(199, 148, 2);
  }
</style>

<div class="hero-inner">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-12">
        <div class="intro">
          <h1><strong>{{ $blog->title }}</strong></h1>
          <div class="pb-4">
            <strong class="text-black">{{ date('M d, Y', strtotime($blog->created_at)) }}</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 blog-content">
        <div class="card" style="border: none;">
          {!! $blog->description !!}
        </div>
        <div id="disqus_thread"></div>
      </div>
      <div class="col-md-4 sidebar">
        <div class="sidebar-box">
          <form action="{{ route('blog.index') }}" method="get" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" name="s" class="form-control" placeholder="Type a keyword and hit enter"/>
            </div>
          </form>
        </div>
        <div class="sidebar-box">
          <div class="categories">
            <h3>Tips & Trik</h3>
            @foreach($blogs as $blog)
              <li>
                <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
              </li>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script-alt')
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://https-ypdigital-site.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
@endpush
