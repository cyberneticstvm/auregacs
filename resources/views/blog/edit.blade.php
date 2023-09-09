<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('blog.update', $blog->id) }}">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-12">
                                <label>Blog Title</label>
                                {{ html()->text($name='title', $value=$blog->title)->class('form-control')->placeholder('Blog Title')->required()}}
                            </div>
                            <div class="col-12 mt-3">
                                <label>Category</label><br>
                                {{ html()->select($name='category', $value=array('Blog'=>'Blog', 'Guide'=>'Guide'), $blog->category)->placeholder('Select Category')->required()}}
                            </div>
                            <div class="col-12 mt-3">
                                <label>Blog Content</label>
                                {!! html()->textarea($name='content', $value=$blog->content)->class('form-control')->rows(15)->placeholder('Blog Content')->attribute('id', 'txtArea') !!}
                                @error('content')
                                <small class="text-danger">{{ $errors->first('content') }}</small>
                                @enderror
                            </div>
                            <div class="col-12 mt-3">
                                <label>Status</label><br>
                                {{ html()->select($name='status', $value=array('0'=>'Draft', '1'=>'Publish'), $blog->status)->placeholder('Select Status')->required()}}
                            </div>
                            <div class="col-12 mt-3 text-end">
                                <button type="submit" class="btn btn-secondary bg-secondary text-white btn-submit">Update Blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
