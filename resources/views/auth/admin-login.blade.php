<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>

    <title>Bayt al-Ḥikmah - Login</title>
  
<style type="text/css">
    body,html{
    padding: 0px;
    margin: 0px;
}
.form-bg{
    background-image: url("{{asset('bgg.jpg')}}");
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    align-items: center;
}

.login-box{
    background: #EDEDED;
    padding: 15px 40px;
    width: 400px;
}

.login-box h4{
    color: #B4B4B4;
}

.login-box .form-box{
    background: #fff;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0px 10px 20px #00000012;
}

.form-box .form-control{
border:none;
padding: 0;
}

.form-box .form-control:focus{
    border: none;
    box-shadow: none;
}

.text{
    color: gray;
    font-weight: 600;
}

.btn-submit{
    background: #038EAF;
    box-shadow: 0px 10px 20px #00000012;
    color: #fff;
    padding: 10px 65px;
    border-radius: 15px;
}
</style>
  </head>
  <body>
<section class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-7">
                <div class="login-box">
                    <h4>Welcome!</h4>
                    <h5>Please login to your account</h5>
    
                    <form class="mt-4"  method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-box">
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" placeholder="name@company.com"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <hr/>
                              <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password" placeholder="enter your password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                        </div>
                        <div class="d-flex justify-content-between pt-4">
                          <div class=" text">
                              @if (Route::has('password.request'))
                                    <a class="text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                          </div>
                          <div><button type="submit" class="btn btn-submit">Login</button></div>
                        </div>
                        <p class="text-center pt-4 pb-2">Dont have an account? <a href="#" class="text">Sign up</a></p>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>