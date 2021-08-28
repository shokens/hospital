<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
     <!-- Main Stylesheet File -->
  <link href="{{ asset ('/boot/css/style.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="{{ asset ('/boot/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


<style>
    body{
    background: #2382C4;
    color: #fff;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.card-header{
    color: #2382C4;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 30px;
}
.forget{
    color: #2382C4;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.btn-start {
    font-family: "Montserrat", sans-serif;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    font-family: Georgia, 'Times New Roman', Times, serif;
   
    display: inline-block;
    padding: 10px 32px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 0 20px 20px 0;
    color: #fff;
    background:#2382C4;
    border: 2px solid #2382C4;
  }
  
  
  .btn-start:hover {
    background: none;
    border-color: #fff;
    border: 2px solid #2382C4;
    color:#2382C4;
  } 
  .rem{
    color: #2382C4;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size:12px;
  }
</style>
<body>



        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
            <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="{{ url('/') }}" class="navbar-brand" style="color:#fff; font-size:25px;"><img src="./boot/img/svg/019-caduceus.svg" width="50px"  alt="" class="img-fluid">HMS</a>
      </div>
                
           

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    
                    </ul>
                   
                                    <a class="nav-link" style="color:#fff;" href="{{ url('/') }}">{{ __('Home') }}</a>
                              
                    <!-- Right Side Of Navbar -->
                   
                </div>
            </div>
        </nav>

<div class="container  p-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-header text-center">{{ __('Patient Login') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route ('user.check')}}" >
                    @if (Session::get('fail'))
                            <div class="alert alert-fail">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        @csrf

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                                <span class="text-danger" role="alert"> @error('email') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-12 ">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                <span class="text-danger" role="alert"> @error('password') {{ $message }} @enderror</span>
                               
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="form-control btn btn-start">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                      
                           
                        </div>
                 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>