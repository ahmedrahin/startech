@extends('frontend.layout.app')

@section('page-title')
Reset Password | {{ config('app.name') }}
@endsection

@section('body-content')
<section class="section-b-space login-bg-img pt-10">
    <div class="container py-5 login-page">
        <div class="row justify-content-center mb-8">
            <div class="col-xxl-6 col-lg-8 col-md-10">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-primary mb-0">Set a New Password</h3>
                            <p class="text-muted">Enter and confirm your new password below</p>
                        </div>

                        <form action="{{ route('password.update') }}" method="POST" class="row g-4">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->token }}">
                            <input type="hidden" name="email" value="{{ old('email', $request->email) }}">

                            <div class="mb-0">
                                <label for="password" class="form-label mb-1">New Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg" placeholder="Enter new password">
                                @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label mb-1">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control form-control-lg" placeholder="Confirm new password">
                            </div>

                            <div class="d-flex justify-content-center mt-0">
                                <button type="submit" class="btn btn-primary btn-login rounded-pill shadow-sm">
                                    Reset Password
                                </button>
                            </div>
                        </form>

                        <div class="text-center border-top pt-1 mt-4">
                            <a href="{{ route('user.login') }}"
                                class="btn btn-link text-decoration-none text-primary fw-semibold">← Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection