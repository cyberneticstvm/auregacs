@extends("user.base")
@section("content")
<section class="content-main">
    <div class="content-header">
        <div class="col-10">
            <h2 class="content-title card-title">Create New User</h2>
            <p>Hello {{ Auth::user()->name }}, You can create your user here!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body mb-4">
                <form method="post" action="{{ route('user.save') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label>Full Name</label>
                            {{ html()->text($name='name', $value=old('name'))->class('form-control')->placeholder('Full Name')->required()}}
                        </div>
                        <div class="col-12 mt-3">
                            <label>Email</label><br>
                            {{ html()->email($name='email', $value=old('email'))->placeholder('Email')->class('form-control')->required()}}
                        </div>
                        <div class="col-12 mt-3">
                            <label>Password</label><br>
                            {{ html()->password($name='password', $value=NULL)->placeholder('******')->class('form-control')->required()}}
                            @error('password')
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label>Confirm Password</label><br>
                            {{ html()->password($name='password_confirmation', $value=NULL)->class('form-control')->placeholder('******')->required()}}
                            @error('password_confirmation')
                            <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                            @enderror
                        </div>
                        <div class="col-12 mt-3 text-end">
                            <button type="submit" class="btn btn-secondary bg-secondary text-white btn-submit">Create User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

