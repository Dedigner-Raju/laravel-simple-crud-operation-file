<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
    <link rel="stylesheet" href="{{ asset('public/crud/asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/crud/asset/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/crud/asset/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/crud/asset/css/responsive.css') }}">

    <style>
        img{
         height:100px;
         width:100px;
         border: 2px solid #000;
         border-radius: 50%;
       }  
 </style>

  </head>
  <body>
                   
         <div class="wrap">
               <a  href="{{ url ('student') }}"   class="btn btn-primary">All Data</a>
               <div class="card shadow">
                   <div class="card-body">
                     
                    <img src="" alt="">

                    <table class="table">
                       
                       <tr>
                          <td>SL</td>
                          <td>01</td>
                      </tr>
                       <tr>
                          <td>Name</td>
                          <td>Raju</td>
                      </tr>
                       <tr>
                          <td>UserName</td>
                          <td>ObujRaju</td>
                      </tr>
                       <tr>
                          <td>Email</td>
                          <td>obujraju420@gmail.com</td>
                      </tr>
                       <tr>
                          <td>Cell</td>
                          <td>+8801637813648</td>
                      </tr>
                    </table>
        
                  </div>
               </div>
         </div>
                        
                

         <script src="https://code.jquery.com/jquery-3.5.1.min.js"
         integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
         crossorigin="anonymous"></script>
        <script src="{{ asset  ('public/crud/asset/js/vendor/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset ('public/crud/asset/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset ('public/crud/asset/js/bootstrap.min.js')}} "></script>
        <script src="{{ asset ('public/crud/asset/js/main.js') }}"></script>
  </body>
  </html>

