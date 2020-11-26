  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
    <link rel="stylesheet" href="public/crud/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/crud/asset/css/custom.css">
    <link rel="stylesheet" href="public/crud/asset/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="public/crud/asset/css/responsive.css">

 <style>
       .tb_content img{
         height:100px;
         width:100px;
         border: 2px solid #000;
         border-radius: 50%;
       }  
 </style>

  </head>
  <body>


          <div class="row" style="min-height:500px;">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">

                <div class="form-group">
                          <div class="btn btn-small btn-success"><a style="color:white;" href="{{ url ('crud-app') }}">  Add New </a></div>
                  </div>

                      <h2>All Students Information</h2>
                      <hr>
                      
    

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Cell</th>
                                <th>photo</th>
                                <th>Action</th>
                            </tr>
                         </thead>

                <tbody>
                   @foreach ( $users as $user)
                      <tr class="tb_content">
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->uname }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->cell }}</td>
                          <td><img src="{{ URL::to( 'public/img') . '/' . $user -> photo }}" alt=""></td>
                          <td>
                          <a href="{{ route('single.data.show', $user->id ) }}" class="btn btn-info">view</a>
                          <a href="{{ route('single.data.edit', $user->id ) }}" class="btn btn-warning">Edit</a>
                          <a href="{{ route('single.data.remove', $user->id ) }}" class="btn btn-danger">Delete</a>
                          </td>
                      </tr>
                  @endforeach

              </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>


   <script src="public/crud/asset/js/vendor/jquery-3.2.1.slim.min.js"></script>
   <script src="public/crud/asset/js/vendor/modernizr-3.5.0.min.js"></script>
   <script src="public/crud/asset/js/bootstrap.min.js"></script>
   <script src="public/crud/asset/js/main.js"></script>
   
  </body>
</html>

