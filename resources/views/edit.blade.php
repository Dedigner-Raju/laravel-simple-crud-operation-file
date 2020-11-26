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

  </head>
  <body>
      <div class="row" style="margin-top: 10px; margin-left:500px;" >
            <div class=" shadow">
              
                <div class="card-body">
                         <div class="form-group">
                          <div class="btn btn-small btn-success"><a style="color:white;" href="{{ url ('all') }}">  All Data </a></div>
                         </div>

                        <h4>Update student Data </h4>
                        <hr>

                        @include ('validation')

                        <form action="{{ url ('update/'. $single_data_edit->id ) }}" method="POST" enctype="multipart/form-data">

                          @csrf

                          <div class="form-group">
                            <label for=""> Name</label>
                            <input name="name" class="form-control" value="{{ $single_data_edit->name }}" type="text">
                          </div>

                          <div class="form-group">
                            <label for=""> UserName </label>
                            <input name="uname" class="form-control" value="{{ $single_data_edit->uname }}" type="text">
                          </div>

                          <div class="form-group">
                            <label for=""> Email </label>
                            <input name="email" class="form-control" value="{{ $single_data_edit->email }}" type="email">
                          </div>

                          <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" class="form-control" value="{{ $single_data_edit->cell }}" type="number">
                          </div>
                           
                           <div class="form-group">
                           <img style="width:100px;" src="{{ URL::to( 'public/img') . '/' . $single_data_edit -> photo }}" >
                           </div>

                          <div class="form-group">
                            <label for="">Photo</label>
                            <input name="new_photo" class="form-control" value="{{ $single_data_edit->photo }}" type="file">
                          </div>

                          <div class="form-group">
                            <input name="submit" class="btn btn-success" type="submit" value="Update Data">
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
