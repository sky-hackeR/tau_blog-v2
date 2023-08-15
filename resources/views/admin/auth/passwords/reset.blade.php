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
                    <p class="text-muted mt-2 mb-4">{{ env('APP_NAME') }} Admin Dashboard</p>

                </div>
                <div class="card">
                    <div class="card-body p-4">
                        
                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Reset Password</h4>
                        </div>

                        <form role="form" method="POST" action="{{ url('/admin/password/reset') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

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

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}mb-3">
                                <label class="form-label" for="password-input">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" required="" name="password_confirmation">
                               
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>    

                            <br>

                            <div class="mb-3 d-grid text-center">
                                <button class="btn btn-primary" type="submit"> Reset Password </button>
                            </div>
                            

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
