
<!DOCTYPE html>
<html lang="en">
@include('components.style')
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

</body>
</html>