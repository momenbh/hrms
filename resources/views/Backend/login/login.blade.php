<!doctype html>
<html lang="en">
<div class="container">
<head>
    <title>HR Management system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-20/css/A.style.css.pagespeed.cf.eQk9-CoeFP.css">

</head>


<body class="" style="background-image:url(backend/assets/img/hrms.jpg); position:static;" >
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                  <h2 class="text-light">HR Management System</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        <form action="{{route('do.login')}}" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="password" type="password" class="form-control" placeholder="Password"
                                    required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">LogIn</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{route('form.registration')}}"  class="checkbox-wrap checkbox-primary">Registation</a>
                                </div>
                            </div>
                        </form>
                        {{-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
                                Twitter</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://preview.colorlib.com/theme/bootstrap/login-form-20/js/jquery.min.js"></script>
    <script src="https://preview.colorlib.com/theme/bootstrap/login-form-20/js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.9eD6_Mep8S.js"></script>
    <script>
        eval(mod_pagespeed_T07FyiNNgg);

    </script>
    <script>
        eval(mod_pagespeed_zB8NXha7lA);

    </script>
    <script>
        eval(mod_pagespeed_xfgCyuItiV);

    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"730c406a8a0f4c89","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</div>

</html>
