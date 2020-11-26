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
  
  <div class="row" style="min-height:500px;">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                <div class="form-group">
                          <div class="btn btn-small btn-success"><a style="color:white;" href="{{ url ('student/create') }}">  Add New </a></div>
                  </div>

                  <p class="card-title">All students</p>

                      <h2>All Students Information</h2>
                      <hr>
                      

                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Batch</th>
                            <th>Address</th>
                            <th>Cell</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>01</td>
                            <td>Raju</td>
                            <td>SM20</td>
                            <td>Dhaka</td>
                            <td>+8801953103206</td>
                            <td>
                              <a class="btn btn-success btn-sm" href="{{ url ('student/show') }}">View</a>
                              <a class="btn btn-primary btn-sm" href="#">Edit</a>
                              <a class="btn btn-danger btn-sm" href="#">Delete</a>

                            </td>
                          </tr>

                        </tbody>
                      </table>

                </div>
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


