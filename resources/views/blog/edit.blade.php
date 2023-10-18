@extends("user.base")
@section("content")
<section class="content-main">
    <div class="content-header">
        <div class="col-10">
            <h2 class="content-title card-title">Update Blog</h2>
            <p>Hello {{ Auth::user()->name }}, You can update your blog here!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body mb-4">
                <form method="post" action="{{ route('blog.update', $blog->id) }}">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-12">
                            <label>Blog Title (Meta Title)</label>
                            {{ html()->text($name='title', $value=$blog->title)->class('form-control')->placeholder('Blog Title')->required()}}
                        </div>
                        <div class="col-12">
                            <label>Slug</label>
                            {{ html()->text($name='slug', $value=$blog->slug)->class('form-control')->placeholder('Slug')->required()}}
                        </div>
                        <div class="col-12">
                            <label>Meta Description</label>
                            {{ html()->text($name='description', $value=$blog->description)->class('form-control')->placeholder('Meta Description')->required()}}
                        </div>
                        <div class="col-12">
                            <label>Meta Keywords</label>
                            {{ html()->text($name='keywords', $value=$blog->keywords)->class('form-control')->placeholder('Meta Keywords')->required()}}
                        </div>
                        <div class="col-12">
                            <label>Hashtags</label>
                            {{ html()->text($name='hashtags', $value=$blog->hashtags)->class('form-control')->placeholder('Hashtags')->required()}}
                        </div>
                        <div class="col-12 mt-3">
                            <label>Category</label><br>
                            {{ html()->select($name='category', $value=array('Blog'=>'Blog', 'Guide'=>'Guide'), $blog->category)->class('form-control')->placeholder('Select Category')->required()}}
                        </div>
                        <div class="col-12 mt-3">
                            <label>Blog Content</label>
                            {{ html()->textarea($name='content', $value=$blog->content)->class('form-control')->rows(15)->placeholder('Blog Content')->attribute('id', 'txtArea')}}
                            @error('content')
                            <small class="text-danger">{{ $errors->first('content') }}</small>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label>Status</label><br>
                            {{ html()->select($name='status', $value=array('0'=>'Draft', '1'=>'Publish'), $blog->status)->class('form-control')->placeholder('Select Status')->required()}}
                        </div>
                        <div class="col-12 mt-3 text-end">
                            <button type="submit" class="btn btn-secondary bg-secondary text-white btn-submit">Update Blog</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection