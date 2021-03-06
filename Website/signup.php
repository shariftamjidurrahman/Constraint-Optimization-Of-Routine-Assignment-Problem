<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Sign Up Page</title>
  </head>
  <header>
    <div class="container">
      <div  style="padding-bottom: 25px ;padding-top: 25px;">
        <img class="img-fluid " src="header-logo.jpg" alt="Responsive image" class="rounded float-left"> 
      </div>
    </div>
    <div style="background-color:Black;"><font color="Black">This is some text!</font></div>
  </header>
  <body>  
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <h1>Sign up</h1>
          <form role="form">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" name="name_id" id="name_id" class="form-control input-lg" placeholder="Name Id" tabindex="3">
            </div>
            <div class="form-group">
              <input type="text" name="department_name" id="department_name" class="form-control input-lg" placeholder="Department Name" tabindex="3">
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-light btn-block btn-lg button button4" tabindex="7"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>