@extends('admin.layout.auth')

@section('content')
<div class="account-pages my-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="text-center">   
                    <a href="{{ env('WEBSITE_URL')  }}">
                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22" class="mx-auto">
                    </a>
                    <p class="text-muted mt-2 mb-4">{{ env('APP_NAME') }}</p>

                </div>
                <div class="card">
                    <div class="card-body p-4">
                        
                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Sign In to  Admin Dashboard</h4>
                        </div>

                        <form method="POST" action="{{ url('/admin/login') }}">
                            @csrf
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <br>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}mb-3">
                                <label class="form-label" for="password-input">Password</label>
                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                               
                                @if ($errors->has('password'))
                                    <br>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>    

                            <br>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" value="" id="auth-remember-check">
                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                </div>
                            </div>

                            <div class="mb-3 d-grid text-center">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>
                                

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p> <a href="{{ url('/admin/password/reset') }}" class="text-muted ms-1"><i class="fa fa-lock me-1"></i>Forgot your password?</a></p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection