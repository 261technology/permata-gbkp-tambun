<!DOCTYPE html>

<html lang="en">
<head>
<base href="./">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Permata</title>

<!-- Icons-->
<link href="{{url('assets/template/coreui')}}/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
<link href="{{url('assets/template/coreui')}}/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet"> 
<link href="{{url('assets/template/coreui')}}/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="{{url('assets/template/coreui')}}/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<link href="{{url('assets/plugin/datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet">

<!-- Main styles for this application-->
<link href="{{url('assets/template/coreui')}}/src/css/style.css" rel="stylesheet">
<link href="{{url('assets/template/coreui')}}/src/vendors/pace-progress/css/pace.min.css" rel="stylesheet">

<script src="{{url('assets/template/coreui')}}/node_modules/jquery/dist/jquery.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/pace-progress/pace.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
<script src="{{url('assets/plugin/datepicker/js/bootstrap-datepicker.min.js')}}"></script>

</head>
<body class="app flex-row align-items-center">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card-group">
                  <div class="card p-4">
                      <div class="card-body">
                          <!-- <img src="{{url('/')}}/assets/img/logo_text_permata.png" alt="logo permata" style="width: 150px;margin-bottom: 10px;"> -->
                          <form method="post" action="{{url('/')}}/login_process">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      @
                                    </span>
                                </div>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email" required>
                            </div>
                          <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">
                                  <i class="icon-lock"></i>
                                  </span>
                              </div>
                              <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                          </div>
                          <div class="row">
                              @if(Session::has('notification'))
                                    <div class="alert alert-danger alert-block col-12">
                                        <strong>{{ Session::get('notification') }}</strong>
                                    </div>
                                @endif
                              <div class="col-6">
                                  <button class="btn btn-login px-4" type="submit">Login</button>
                              </div>
                          </div>
                          </form>
                      </div>
                  </div>
                  <div class="card py-5 d-md-down-none" style="width:44%;background-color: #dedede99;">
                      <div class="card-body text-center">
                          <div>
                              <h2>Halo, Permata!!!</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <style type="text/css">
    body{
      /*background: linear-gradient(to right bottom, #e1e1e1,#383e87,#dc3431,#fbed24,#dc3431, #e1e1e1);*/
      background: linear-gradient(to right bottom, #e1e1e1,#383e87,#dc3431,#e1e1e1);
    }

    .btn-login{
      background-color: #383e87;
      background-color: #514c93;
      color: #fff;
    }
  </style>

</body>
</html>