@extends('frontend.layout.app')

@section('page-title')
Forgot Password
@endsection

@section('body-content')

<section class="section-b-space login-bg-img pt-2">
    <div class="container py-5 login-page">
        <div class="row justify-content-center mb-8">
            <div class="col-xxl-6 col-lg-8 col-md-10">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-primary mb-0">Reset Your Password</h3>
                            <p class="text-muted">We’ll send you a link to reset your password</p>
                        </div>

                        <form id="otpForm" action="{{ route('password.email') }}" method="POST" class="row g-4">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label mb-1">Your Email</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                    placeholder="you@example.com">
                                <div class="text-danger mt-2" id="emailError"></div>
                            </div>

                            <div class="d-flex justify-content-center mt-0">
                                <button type="submit" class="btn btn-primary btn-login rounded-pill shadow-sm"
                                    id="registerButton">
                                    <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                    Send Reset Link
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

@section('page-script')

<script>
    $(document).ready(function () {
                $("#otpForm").on("submit", function (e) {
                    e.preventDefault();

                    // Clear previous errors
                    $("#emailError").text("");

                    // Show spinner and disable button
                    $("#spinner").removeClass("d-none");


                    let formData = {
                        email: $("#email").val(),
                    };

                    $.ajax({
                        url: "{{ route('password.email') }}",
                        type: "POST",
                        data: formData,
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        },
                        success: function (response) {
                            message('success', 'Password reset link sent to your email!');
                            $("#spinner").addClass("d-none");
                        },
                        error: function (xhr) {
                            let errors = xhr.responseJSON.errors;
                                if (errors.email) {
                                    $("#emailError").text(errors.email);
                                }
                        },
                        complete: function () {
                            $("#spinner").addClass("d-none");
                            $("#otpButton").prop("disabled", false);
                        },
                    });
                });
            });

</script>
@endsection