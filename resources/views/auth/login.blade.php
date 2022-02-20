@extends('layouts.app')

@section('content')
<div class="align-items-center container d-flex justify-content-center py-4" style="height: calc(100vh - 100px)">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header py-3">{{ __('MEMBER LOGIN') }}</div>

                <div class="card-body px-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <a class="text-main" href="/">{{ __('Go Back') }}</a>
                                </div>

                                <div class="">
                                    Forgotten password? <a class="text-main" href="/password/reset">{{ __('Reset') }}</a>
                                </div>
                            </div>
                        </div>

                        <div class=" text-center mt-4">
                            <button type="submit" class="btn btn-main px-4">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
