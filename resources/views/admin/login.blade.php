
<!DOCTYPE html>
<!--
Template Name: Stack - Stack - Bootstrap 4 Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/stack_admin
Renew Support: https://1.envato.market/stack_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/login-with-bg-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Oct 2021 16:33:47 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login with Background Image - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">


    

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/login-register.min.css')}}">
    <!-- END: Page CSS-->

<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.min.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/card-statistics.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/vertical-timeline.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/switch.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->




  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">

        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
            
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <img src="../../../app-assets/images/logo/stack-logo-dark.png" alt="branding logo">
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily
                            Using</span></h6>
                </div>
                <div class="card-content">
                    @include('admin.pages.flash_message')
                    <div class="text-center">
                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span
                                class="fa fa-facebook"></span></a>
                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span
                                class="fa fa-twitter"></span></a>
                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
                                class="fa fa-linkedin font-medium-4"></span></a>
                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
                                class="fa fa-github font-medium-4"></span></a>
                    </div>
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using
                            Account Details</span></p>
                    <div class="card-body">
                                        @if (count($errors) > 0)
                                           <div class = "alert alert-danger">
                                                <ul>
                                                   @foreach ($errors->all() as $error)
                                                      <li>{{ $error }}</li>
                                                   @endforeach
                                                </ul>
                                             </div>
                                        @endif 

                        <form class="form-horizontal" action="{{route('login')}}" method="post" novalidate>
                            @csrf
                                        <div class="form-group position-relative has-icon-left">
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required value="{{old('email')}}"
                                                            data-validation-required-message="Email is required"
                                                            placeholder="Write Email">
                                                <div class="form-control-position">
                                                    <i class="fa fa-envelope-square"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group position-relative has-icon-left">
                                            <div class="controls">
                                                <input type="password" name="password" class="form-control" required
                                                            data-validation-required-message="Password is required"
                                                            placeholder="Password">
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </div>
                                        </div>
                            <div class="form-group row">
                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                    <fieldset>
                                        <input type="checkbox" id="remember_me" class="chk-remember" name="remember">
                                        <label for="remember-me"> Remember Me</label>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right">
                                    @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="card-link">Forgot Password?</a>
                                    @endif
                                </div>

                                        
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block"><i
                                    class="fa fa-unlock"></i> Login</button>
                        </form>
                    </div>
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to
                            Stack ?</span></p>
                    <div class="card-body">
                        <a href="{{route('register.page')}}" class="btn btn-outline-danger btn-block"><i
                                class="fa fa-user"></i> Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
     <script src="{{asset('app-assets/js/scripts/customizer.min.js')}}"></script>

    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/forms/form-login-register.min.js')}}"></script>
     <script src="{{asset('app-assets/js/scripts/forms/validation/form-validation.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(document).on('click','.form-control',function() {
            $('.alert-danger').remove()

        })
    </script>
  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/login-with-bg-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Oct 2021 16:33:49 GMT -->
</html>