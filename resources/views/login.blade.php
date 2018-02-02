!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="resources/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="resources/assets/css/util.css">
      <script src="resources/assets/js/jquery.min.js"></script>
      <script src="resources/assets/js/bootstrap.min.js"></script>
    </head>
    <body>
          @include('header')
          <div class = "container">
            <div class="wrapper">
              <form action="" method="post" name="Login_Form" class="form-signin">       
                  <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                  <hr class="colorgraph"><br>
                  
                  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
                  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>          
                 
                  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>        
              </form>     
            </div>
          </div>
    </body>
</html>
