@extends("user.base")
@section("content")
<section class="content-main">
    <div class="content-header">
        <div class="col-10">
            <h2 class="content-title card-title">Update User</h2>
            <p>Hello {{ Auth::user()->name }}, You can update your user here!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body mb-4">
                <form method="post" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-12">
                            <label>Full Name</label>
                            {{ html()->text($name='name', $value=$user->name)->class('form-control')->placeholder('Full Name')->required()}}
                        </div>
                        <div class="col-12 mt-3">
                            <label>Email</label><br>
                            {{ html()->email($name='email', $value=$user->email)->placeholder('Email')->class('form-control')->required()}}
                        </div>
                        <div class="col-12 mt-3">
                            <label>Password</label><br>
                            {{ html()->password($name='password', $value=NULL)->placeholder('******')->class('form-control')}}
                            @error('password')
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label>Confirm Password</label><br>
                            {{ html()->password($name='password_confirmation', $value=NULL)->class('form-control')->placeholder('******')}}
                        </div>
                        <div class="col-12 mt-3 text-end">
                            <button type="submit" class="btn btn-secondary bg-secondary text-white btn-submit">Update User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

