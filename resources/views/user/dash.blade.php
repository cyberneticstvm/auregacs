@extends("user.base")
@section("content")
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Dashboard </h2>
            <p>Hello {{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="row">
        
    </div>
</section> <!-- content-main end// -->
@endsection