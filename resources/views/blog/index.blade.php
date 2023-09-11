@extends("user.base")
@section("content")
<section class="content-main">
    <div class="content-header">
        <div class="col-10">
            <h2 class="content-title card-title">Blog Register</h2>
            <p>Hello {{ Auth::user()->name }}, You can manage your blogs here!</p>
        </div>
        <div class="col-2">
            <a href="{{ route('blog.create') }}" class="btn btn-submit btn-md btn-brand rounded w-100 font-sm mt-15">Create New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-primary">Blog Count: {{ count($blogs) }}</p>
        </div> 
        <div class="col-lg-12">
            <div class="card card-body mb-4 table-responsive">
                <table id="dataTable" class="table table-striped table-sm table-bordered"><thead><tr><th>SL No</th><th>Title</th><th>Status</th><th>Edit</th><th>Delete</th></tr></thead><tbody>
                    @forelse($blogs as $key => $blog)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->status() }}</td>
                            <td class="text-center"><a href="{{ route('blog.edit', encrypt($blog->id)) }}">Edit</a></td>
                            <td class="text-center"><a href="{{ route('blog.delete', encrypt($blog->id)) }}" onclick="return confirm('Are you sure want to delete this record?')">Delete</a></td>
                        </tr>
                    @empty
                    @endforelse
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
