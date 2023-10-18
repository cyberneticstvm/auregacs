@extends("base")
@section("content")
<div class="section">
    <div class="container blog">
        <h1 class="fw-light mb-3">{{ $blog->title }}</h1>
        {!! $blog->content !!}
    </div><!-- end container -->
</div>
@endsection