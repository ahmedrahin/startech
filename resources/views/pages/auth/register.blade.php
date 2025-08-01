@extends('frontend.layout.app')

@section('page-title')
    Register
@endsection

@section('body-content')
<section class="pt-3 login-bg-img">
  <div class="container py-5 login-page">
    <div class="row justify-content-center mb-8">
      <div class="col-xxl-6 col-lg-8 col-md-10">
        <div class="card shadow border-0 rounded-4">
          <div class="card-body p-5">
            <div class="text-center mb-4">
              <h3 class="fw-bold text-primary mb-2">Create a New Account</h3>
              <p class="text-muted" style="font-weight: 600;">Welcome to {{ config('app.name') }}</p>
            </div>

            <form id="registerForm" method="POST" class="row g-4">
              @csrf

              <div class="mb-0">
                <label for="name" class="form-label mb-1">Your Name</label>
                <input type="text" id="name" name="name" class="form-control form-control-lg"
                  placeholder="John Doe">
                <div class="text-danger mt-2" id="nameError"></div>
              </div>

              <div class="mb-0">
                <label for="email" class="form-label mb-1">Your Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                  placeholder="you@example.com">
                <div class="text-danger mt-2" id="emailError"></div>
              </div>

              <div class="mb-0">
                <label for="password" class="form-label mb-1">Enter Your Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg"
                  placeholder="Password">
                <div class="text-danger mt-2" id="passwordError"></div>
              </div>

              <div class="mb-0">
                <label for="password_confirmation" class="form-label mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg"
                  placeholder="Confirm Password">
                <div class="text-danger mt-2" id="passwordConfirmationError"></div>
              </div>

              <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary btn-login rounded-pill shadow-sm" id="registerButton">
                  <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status"
                    aria-hidden="true"></span>
                  Sign Up
                </button>
              </div>
            </form>

            <div class="text-center border-top pt-4 mt-4">
              <p class="mb-0">Already have an account?</p>
              <a href="{{ route('user.login') }}" class="btn btn-link text-decoration-none text-primary fw-semibold">Log
                In</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('page-script')
    <script src="{{asset('frontend/js/jq.min.js')}}"></script>
    <script>
      $(document).ready(function () {
            $("#registerForm").on("submit", function (e) {
                e.preventDefault();

                // Clear previous errors
                $("#nameError").text("");
                $("#emailError").text("");
                $("#passwordError").text("");
                $("#passwordConfirmationError").text("");

                // Show spinner and disable button
                $("#spinner").removeClass("d-none");
                

                // Form data
                let formData = {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    password: $("#password").val(),
                    password_confirmation: $("#password_confirmation").val(),
                };

                $.ajax({
                    url: "{{ route('user.register') }}",
                    type: "POST",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        window.location.href = "{{ route('homepage') }}";
                    },
                    error: function (xhr) {
                        if (xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            if (errors.name) {
                                $("#nameError").text(errors.name[0]);
                            }
                            if (errors.email) {
                                $("#emailError").text(errors.email[0]);
                            }
                            if (errors.password) {
                                $("#passwordError").text(errors.password[0]);
                            }
                            if (errors.password_confirmation) {
                                $("#passwordConfirmationError").text(errors.password_confirmation[0]);
                            }
                        }
                    },
                    complete: function () {
                        // Hide spinner and enable button
                        $("#spinner").addClass("d-none");
                        $("#registerButton").prop("disabled", false);
                    },
                });
            });
        });

    </script>
@endsection
