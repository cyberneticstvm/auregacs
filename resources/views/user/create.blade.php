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
    </div>
</x-app-layout>
