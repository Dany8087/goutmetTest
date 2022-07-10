
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta property="og:title" content="" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="http://vennplay.prometteur.in/admin" />
<meta property="og:image" content="" />
<meta property="og:description" content="" />
<meta property="og:site_name" content="Vennplay Admin Panel" />
<link rel="canonical" href="http://vennplay.prometteur.in/admin" />
<title>Gourmet Admin Panel</title>
<link rel="shortcut icon" href="images/favicon1.png">
<link rel="preload" href="fonts/flaticon.ttf" as="font" crossorigin>
<link rel="preload" href="fonts/la-solid-900.woff2" as="font" crossorigin>
<link rel="preload" href="fonts/la-brands-400.woff2" as="font" crossorigin>
<link rel="preload" href="css/main.css" as="style">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="css/datatables.css">
<link rel="stylesheet" href="css/fileinput.css">
<link rel="stylesheet" href="css/theme.css" media="all"/>
<link rel="stylesheet" href="css/ctrleditor.css">
<link rel="preload" href="css/style.css" as="style">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>

</style>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" data-gr-c-s-loaded="true">
<!-- loader -->
<div class="wrapper"> 
  <div class="login-contianer"> 
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-xl-4 col-lg-6 col-md-7 col-12">
          <div class="login-box">
            <div class="vennplay-logo text-center mb-5">
              <img src="images/logo-2" alt="vennplay logo" />
            </div>
            <div class="login-form border-secondary">
              <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-4 form-group">
                  <label for="exampleFormControlInput1" class="form-label">Username / Email</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-4 form-group">
                  <label for="exampleFormControlInput2" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="********">
                </div>
                  <!-- div for forgot password -->
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>               

                <!-- <div class="row">
                  
                  
                  <div class="col">
                   
                    <a href="#!">Forgot password?</a>
                  
                  </div>

                  <div class="col">
                  
                    <a href="changepassword.blade.php">Change Password</a>
                  </div>
                </div> -->
                <!-- <div class="col text-underline-hover">
                       <a href="changepassword.blade.php">Change Password</a>
                </div> -->
                
                <!-- <div class="col text-underline-hover">
                       <a href="changepassword.blade.php">Forgot Password?</a>
                </div> -->

                <!-- <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                <label class="btn btn-outline-primary" for="btn-check-outlined">Change Password</label><br> -->

                <div class="submit-btn-div mt-5 btn-small">
                  <button type="submit" class="grad-btn">Log In <img src="images/btn-arrow.svg" alt="arrow"/></button>
                </div>



              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center foot-p">
    <p>© gourmet 2022</p>
  </div>
</div>

<!-- jQuery -->

</body>
</html>