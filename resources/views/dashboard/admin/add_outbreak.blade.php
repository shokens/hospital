@extends('layouts.header')

@section('content')


 <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
            <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="{{ url('/') }}" class="navbar-brand" style="color:#fff; font-size:25px;"><img src="./boot/img/svg/019-caduceus.svg" width="50px"  alt="" class="img-fluid">HMS</a>
      </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                        @guest
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                            </li>
                          
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->
                                </li>
                            @endif
                        @else
                            <li class="nav-item ">
                                <a id="" class="nav-link " href="#" role="button"  v-pre>
                                {{Auth::guard('admin')->user()->name}}
                                </a>

                               
                            </li>
                            <li>
                            <div class="nav-item">
                                    <a class="btn btn-danger" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   <form action="{{ route ('admin.logout')}}" method="post" class="d-none" id="logout-form">@csrf</form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
     
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
       
   
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route ('admin.home')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route ('admin.profile')}}"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Patient Book </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.add_doctor')}}"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Add Doctors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.doctor_record')}}"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Doctors Record</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route ('admin.appointment_record')}}"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Appointment</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.add_outbreak')}}"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Add Outbreak</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.outbreak_record')}}"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Likely Outbreak</span>
                            </a>
                        </li>
                       
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
        
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
             
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Register Doctors</h3>
                            
                                
                            <div class="card-body">
                            <form method="Post" action="{{route('admin.create_outbreak')}}">
                            @if (Session::get('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                    @endif
                                    @if (Session::get('fail'))
                                        <div class="alert alert-fail">
                                            {{Session::get('fail')}}
                                        </div>
                                    @endif`
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('OutBreak') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('outbreak') is-invalid @enderror" name="outbreak"   autofocus>

                                            <span class="text-danger" role="alert"> @error('outbreak') {{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Comments') }}</label>

                                        <div class="col-md-6">
                                          
                                            <textarea class="form-control @error('comment') is-invalid @enderror" name="comment"   cols="30" rows="3"></textarea>
                                            <span class="text-danger" role="alert"> @error('comment') {{ $message }} @enderror</span>
                                        </div>
                                    </div>


                                   
                                  
                                    <div class="form-group row">
                                        <label for="docphone" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                        <div class="col-md-6">
                                            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location"  autofocus>
                                            <span class="text-danger" role="alert"> @error('location') {{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="docphone" class="col-md-4 col-form-label text-md-right">{{ __('Measures') }}</label>

                                        <div class="col-md-6">
                                           
                                            <textarea class="form-control @error('measure') is-invalid @enderror" name="measure"  cols="30" rows="3" ></textarea>
                                            <span class="text-danger" role="alert"> @error('measure') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Add OutBreak Patient') }}
                                </button>
                            </div>
                        </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
          
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 ?? Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
@endsection
