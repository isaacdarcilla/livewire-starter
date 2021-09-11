@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Register')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
          type="text/css">
@endsection
@section('body')

    <body>
    @endsection

    @section('content')

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden rounded-0">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Register</h5>
                                            <p>Get your free account now.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                             class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-3">
                                <div class="p-2">
                                    <form method="POST" class="form-horizontal" action="{{ route('register') }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email"
                                                   class="form-control rounded-0 @error('email') is-invalid @enderror"
                                                   id="useremail"
                                                   value="{{ old('email') }}" name="email" placeholder="Enter email"
                                                   autofocus required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror"
                                                   value="{{ old('name') }}" id="username" name="name" autofocus
                                                   required
                                                   placeholder="Enter username">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password"
                                                   class="form-control rounded-0 @error('password') is-invalid @enderror"
                                                   id="userpassword" name="password"
                                                   placeholder="Enter password" autofocus required>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                                            <input type="password"
                                                   class="form-control rounded-0 @error('password_confirmation') is-invalid @enderror"
                                                   id="confirmpassword" name="password_confirmation"
                                                   name="password_confirmation" placeholder="Enter Confirm password"
                                                   autofocus required>
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary rounded-0 waves-effect waves-light"
                                                    type="submit">Register
                                            </button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the <a href="#"
                                                                                                     class="text-primary">Terms
                                                    of Use</a></p>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>
                                <p>Already have an account ? <a href="{{ url('login') }}"
                                                                class="fw-medium text-primary">
                                        Login</a></p>
                                <p>©
                                    <script>
                                        document.write(new Date().getFullYear())

                                    </script>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endsection
