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
                            POSTY LARAVEL<br>
                            Posting made easy.
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
                            Create Post

                        </h2>
                        <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more clicks to create post </div>


                        <form action="{{ route('post') }}" method="post">
	
	@csrf
                        <div class="intro-x mt-8">
                            <textarea name="body" class="intro-x login__input form-control py-3 px-4 block" placeholder="Full Name">
                            	</textarea>
<span style="color: red;">
                            @error('body')
{{ $message }}
	@enderror
                            
   </span>                   
                     
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top btn-block">Create Post</button>
                         
                        </div>
                    </div>

                    </form>

                    <br>

                    

                                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                        <table class="table table-report sm:mt-2">
                                            <thead>
                                                <tr>
                                                    <th class="whitespace-nowrap">IMAGES</th>
                                                      <th class="whitespace-nowrap">Username</th>
                                                      <th class="whitespace-nowrap">Date</th>
                                                    <th class="whitespace-nowrap">Description</th>
                                                    
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if($posts->count())   
@foreach($posts as $post)




                       

                                                <tr class="intro-x">
                                                    <td class="w-40">
                                                        <div class="flex">
                                                        

                                                            

                                                              <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img class="tooltip rounded-full" src="download.png" title="">
                                                            </div>
                                                           
                                                        </div>
                                                    </td>
                                                     <td>
                                                        <a href="../index.php" class="font-medium whitespace-nowrap">
                                                            {{ $post->user->name}}
                                                        </a> 
                                                     
                                                    </td>
                                                      <td>
                                                        <a href="../index.php" class="font-medium whitespace-nowrap">
                                                            {{ $post->created_at->diffForHumans()}}
                                                        </a> 
                                                     
                                                    </td>
                                                    <td>
                                                        <a href="../index.php" class="font-medium whitespace-nowrap">{{ $post->body}}</a> 
                                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">This leads to where you will read articles and get bonus.</div>
                                                    </td>
                                                    
                                                   
                                                   
                                                </tr>
                                        
  @endforeach
                       @endif   
                                            </tbody>
                                        </table>
                                    </div>



                    <br>
                    

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
