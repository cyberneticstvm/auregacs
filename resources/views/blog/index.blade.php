<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Blogs
        </h2>
    </x-slot>
    <div class="py-12">        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="text-end"><a href="{{ route('blog.create') }}" class="btn btn-secondary bg-secondary text-white">Create</a></div>
            @if(session()->has('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">
            {{ session()->get('error') }}
            </div>
            @endif
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-12xl table-responsive">
                    <table class="table table-striped table-sm table-bordered"><thead><tr><th>SL No</th><th>Title</th><th>Status</th><th>Edit</th><th>Delete</th></tr></thead><tbody>
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
</x-app-layout>
