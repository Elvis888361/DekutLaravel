<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            html, body {
               
               color:green;
                font-weight: 200;
                height: 100vh;
                margin: 0;
              
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color:white;
            }
            a:hover{
                color:black;
                background-color:blue;
                border-radius:20px;
                padding:20px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .elvis{
                    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('images/brayo2.jpg');
    background-size:cover;
    
         background-attachment: fixed;
        background-repeat: no-repet;
       background-position: center center;
        overflow: hidden;
            }
            .tree{
                background-color:black;
                  font-size:60px;

            }
            p{
          text-align: center;
          font-size:20px;
          padding-left:70px;
         }
                    h2{
            padding-left:650px;
            font-size:45px;
            color:cadetblue;
        }
        h3{
           color:cadetblue;
           font-size:40px; 
        }
        footer{
          padding: 0px;
          color: white;
          background: red;
          text-align: center;
        }
            
        </style>
    </head>
    <body>
        
        

                
            @if (Route::has('login'))
            <div class="tree">
                 <i class="fa fa-home" aria-hidden="true"></i>Dekut Mess Website.
               </div>
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
           
            @endif
        <div class="elvis">
            <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Dedan kimathi sites
                </div>

                <div class="links">
                    <a href="https://www.dkut.ac.ke/">Main view</a>
                    <a href="https://portal.dkut.ac.ke/">Student portal</a>
                    <a href="https://elearning.dkut.ac.ke/">Elerning site</a>
                    <a href="https://dekutca.dkut.ac.ke/">catholic action</a>
                    <a href="https://studentwelfare.dkut.ac.ke/index.php/85-clubs/124-dekutcu">cu action</a>
                   
                </div>
            </div>
        </div>
    </div>
    <h2><i class="fa fa-cogs" aria-hidden="true"></i> ABOUT US</h2>
<p> Dekut Mess Website is one of the fastest growing and most dynamic  websites in dedan kimathi. We provide a platform where students can purchase food and pay online ,dekut mess website has founded its growth and success on service excellence. Our highly experienced team of professionals have the flexibility of a smaller team combined with all the know- how required to expertly handle all  requirements in the cafeteria.
Managements with every level of the institution in intimately involved with every aspect of the payment of the food to ensure that our customers truly do enjoy peace of mind. Our aim is to give the best ,easiest ,cheapest and secure method of payment .
 </p>   
<br>
<br>
<br>
<footer>
     <div class="content-wrap">
        <h3>we assure safer and easier transaction of money</h3>      
        <!-- Social media and contact links. Add or remove any networks. -->
        <div class="contact-info">
            <a href="mailto:erobles@openuplanguages.com"><i class="fa fa-envelope-open" area-hidden="true" alt="mail icon"></i></a>
<a href="https://www.linkedin.com/in/erik-james-245067a8?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BDvm%2Feo5WSNSVPlQJ7mAlng%3D%3D" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" alt="LinkedIn"></i>
<span class="sr-only">Battery level: 50%</span></a>
          <a href="https://github.com/ErikRobles" target="_blank"><i class="fa fa-github" aria-hidden="true" alt="GitHub"></i>
<span class="sr-only">Battery level: 50%</span></a>
          <a href="https://codepen.io/ErikJamesRobles/" target="_blank"><i class="fa fa-codepen" aria-hidden="true" alt="CodePen"></i>
<span class="sr-only">Battery level: 50%</span></a>
        </div>
        @Copyright 2020 by brian and elvis
</footer>
    </body>
</html>
