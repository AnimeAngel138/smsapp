@extends('layout.app')

@section('content')
<body class="bg-gradient-primary" style="background: #0d1b28;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Welcome Back!</h4>
                            </div>
                            <form class="user">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-xxl-12"><form class="form-inline">
  <div class="form-group">
    <label >Login as</label>
     <select  class="form-control" >
         <option>Principal</option>
         <option>Teacher</option>
      </select>
  </div>
</form></div>
                                    </div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail-1" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password"></div>
                                <div class="mb-3">
                                    <div class="custom-control custom-checkbox small">
                                        <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                    </div>
                                </div>
                                <a href="/dashboard">
                                    <button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: #0d1b28;">Login</button>  
                                </a>
                                <hr>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="/register">Create an Account!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Button-modal-ecommerce.js"></script>
    <script src="assets/js/theme.js"></script>
@endsection