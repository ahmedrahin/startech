@extends('frontend.layout.app')

@section('page-title')
    Register
@endsection

@section('page-css')
    <link href="{{ asset('frontend/style/accounts.min.12.css') }}" type="text/css" rel="stylesheet" media="screen" />
@endsection

@section('body-content')

    <section class="after-header p-tb-10">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="material-icons" title="Home">home</i></a></li>
                <li><a href="{{ route('user.dashboard') }}">Account</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </div>
    </section>

     <div class="container ac-layout before-login">
        <div class="panel m-auto">
            <div class="p-head">
                <h2 class="text-center">Register Account</h2>
            </div>
            <div class="p-body">
                <form  method="post" id="registerForm" >
                    @csrf
                     <div class="required">
                        <label for="input-firstname">First Name</label>
                        <input type="text" name="firstname" placeholder="First Name" class="form-control" />
                        <div class="text-danger mt-2" id="nameError"></div>
                    </div>

                    {{-- <div class="form-group required">
                        <label for="input-email">E-Mail</label>
                        <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
                        <div class="text-danger">E-Mail Address does not appear to be valid!</div>
                    </div>
                    <div class="form-group required">
                        <label for="input-telephone">Telephone</label>
                        <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control" />
                        <div class="text-danger">Phone number does not appear to be valid!</div>
                    </div> --}}

                    <button type="submit" class="btn btn-primary g-recaptcha" >Continue</button>


                    <p class="no-account-text"><span>Already have an account?</span></p>
                    <p>If you already have an account with us, please login at the <a href="{{ route('user.login') }}">login page</a>.</p>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('page-script')

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
