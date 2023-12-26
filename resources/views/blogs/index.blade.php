@extends("base")
@section("content")
<div class="section">
    <div class="container">
        <h1 class="fw-light mb-3">Our {{ $category.'s' }}.</h1>
        <div class="row g-4">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <!-- Blog Post box 1 -->
                @forelse($blogs as $key => $item)
                <div class="mb-5">
                    <div class="img-link-box">
                        <a href="#">
                            <img src="{{ ($item->featured_image) ? asset($item->featured_image) : asset('/assets/images/aurega/minimalistic-business-desk-arrangement.webp') }}" alt="{{ $item->title }}">
                        </a>
                    </div>
                    <div class="mt-4">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-inline-flex">
                                <a class="font-family-tertiary font-small fw-medium uppercase" href="#">{{ $item->hashtags }}</a>
                            </div>
                            <div class="d-inline-flex">
                                <span class="font-small">{{ $item->created_at->format('d, M Y') }}</span>
                            </div>
                        </div>
                        <h4><a class="text-link-1" href="#">{{ $item->title }}</a></h4>
                        <p>{{ $item->description }}</p>
                        <div class="mt-3">
                            <a class="button-text-1" href="{{ route('resources.blog.one', ['slug' => $item->slug]) }}">Read More</a>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div><!-- end container -->
</div>
@endsection