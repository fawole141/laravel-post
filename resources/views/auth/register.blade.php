<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>Register </title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->

<style type="text/css">
  html {
            overflow: scroll;
        }
</style>


    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="index.php" class="-intro-x flex items-center pt-5">
                      
                        <span class="text-white text-lg ml-3"> POSTY LARAVEL </span> 
                    </a>
                    <div class="my-auto">
                        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="download.png">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign up to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"></div>
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                         <a href="index.php">  <center><img src="download.png" height="100px" width="100px"></center></a>
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign Up
                        </h2>
                        <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more clicks to sign in to your account. </div>


                        <form method="post" action="{{ route('register') }}">
                            @csrf
                        <div class="intro-x mt-8">
                            <input type="text" value="{{ old('name') }}" name="name" class="intro-x login__input form-control py-3 px-4 block" placeholder="Full Name">
                            <br>
                            <span style="color:red;">
                            @error('name')
        {{ $message }}
        @enderror
    </span>
                             <input type="text" name="username" class="intro-x login__input form-control py-3 px-4 block" placeholder="Username" value="{{ old('username') }}">
                             <br>
                             <span style="color:red;">
                             @error('username')
{{ $message }}
        @enderror
    </span>
                              <input type="email" name="email" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email" value="{{ old('email') }}">
<br>
                     <span style="color:red;">
                             @error('email')
{{ $message }}
        @enderror
    </span>
                            

                               <input type="password" name="password" class="intro-x login__input form-control py-3 px-4 block" placeholder="Password">
<br>
<span style="color:red;">
@error('password')
{{ $message }}
        @enderror
</span>
        <input type="password" name="password_confirmation" class="intro-x login__input form-control py-3 px-4 block" placeholder="Password Again">
                             
                            <br>
                      
                    
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top btn-block">Register</button>
                         
                        </div>
                    </div>

                    </form>
                    <br>
                      <a href="{{ route('login')}}"> <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign in</button>
                           </a>

                </div>
            
                <!-- END: Register Form -->
            </div>
        </div>
        <br><br>
        <br>  <br><br>
        <br>
        <br><br>
        <br><br>
        <br>
        <br><br>
        <br>
        <br><br>
        <br>
        <br>
        <br>
        <br>
        <!-- BEGIN: Dark Mode Switcher-->
      
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
