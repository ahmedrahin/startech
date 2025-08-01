@extends('frontend.layout.app')

@section('page-title')
Login
@endsection

@section('body-content')
<section class="pt-3 login-bg-img ">
  <div class="container py-5 login-page">
    <div class="row justify-content-center mb-8">
      <div class="col-xxl-6 col-lg-8 col-md-10">
        <div class="card shadow border-0 rounded-4">
          <div class="card-body p-5">
            <div class="text-center mb-4">
              <h3 class="fw-bold text-primary mb-10">Login to Your Account</h3>
            </div>

            <form id="loginForm" method="POST" class="row g-4">
              @csrf

              <div class="mb-3">
                <label for="email" class="form-label mb-1">Your Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                  placeholder="you@example.com">
                  <div class="text-danger mt-2" id="emailError"></div>
              </div>

              <div class="m-0">
                <label for="password" class="from-label mb-1">Enter Your Password</label>
                <input class="form-control " id="password" type="password" name="password" placeholder="Password">
                <div class="text-danger mt-2" id="passwordError"></div>
              </div>

              <div class="col-12 d-flex justify-content-between align-items-center">
                <div>
                  <input type="checkbox" id="remember" name="remember" class="form-check-input me-1">
                  <label for="remember" class="form-check-label">Remember Me</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">Forgot Password?</a>
              </div>

              <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary btn-login rounded-pill shadow-sm" id="registerButton">
                  <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status"
                    aria-hidden="true"></span>
                  Login...
                </button>
              </div>

            </form>

            <div class="text-center border-top pt-4 mt-4">
              <p class="mb-0">Don't have an account?</p>
              <a href="{{ route('register') }}" class="btn btn-link text-decoration-none text-primary fw-semibold">Sign
                Up</a>
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
            $("#loginForm").on("submit", function (e) {
                e.preventDefault();

                // Clear previous errors
                $("#emailError").text("");
                $("#passwordError").text("");

                // Show spinner and disable button
                $("#spinner").removeClass("d-none");


                // Form data
                let formData = {
                    email: $("#email").val(),
                    password: $("#password").val(),
                    remember: $("#remember").is(":checked"),
                };

                $.ajax({
                    url: "{{ route('user.login') }}",
                    type: "POST",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        // Redirect to homepage on successful login
                        if (response.redirect) {
                            window.location.href = response.redirect;
                        }
                    },
                    error: function (xhr) {
                        if (xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;

                            if (errors.email) {
                                $("#emailError").text(errors.email);
                            }

                            if (errors.password) {
                                $("#passwordError").text(errors.password[0]);
                            }
                        }
                    },

                    complete: function () {
                        // Hide spinner and enable button
                        $("#spinner").addClass("d-none");
                        $("#loginButton").prop("disabled", false);
                    },
                });
            });
        });


</script>

@if (session('info'))
<script>
  toastr.error("{{ session('info') }}");
</script>
@endif
@endsection