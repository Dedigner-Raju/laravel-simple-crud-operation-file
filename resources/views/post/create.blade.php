<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add post </title>
    <link rel="stylesheet" href="{{ asset('public/crud/asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/crud/asset/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/crud/asset/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/crud/asset/css/responsive.css') }}">

  </head>
  <body>


      <div class="row" style="margin-top: 10px; margin-left:500px; width:500px;" >
            <div class=" shadow">
              
                <div class="card-body">
                         <div class="form-group">
                           <div class="btn btn-small btn-success"><a style="color:white;" href="{{ route('post.index') }}">  All Catagory </a></div>
                         </div>

                        <h4>Add new Post</h4>
                        <hr>

                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                          @csrf
                         

                          <div class="form-group">
                            <label for=""> Post title </label>
                            <input name="title" class="form-control" type="text">
                          </div>

                          <div class="form-group">
                            <label for=""> Post Category </label>
                           <select class="form-control" name="catagory"  id="">

                           @foreach( $all_cats as $cat )

                           <option value="{{ $cat -> id}}"> {{ $cat -> cat_name }} </option>

                           @endforeach


                           </select>
                          </div>

                          <div class="form-group">
                            <label for=""> post content </label>
                            <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group">
                            <input name="submit" class="btn btn-success" type="submit" value="Add catagory">
                          </div>

                        </form>

                     
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

