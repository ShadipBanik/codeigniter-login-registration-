<html>
    <head>
        <title> login & registration page</title>
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/style.css">

    </head>
    <body>
        <div class="col-md-4 col-md-offset-4 col-vertical-4">
       <div class="panel panel-default">
        <div class="panel-heading">Login</div>
            <div class="panel-body">
               <div id="messages"></div>
                <form action="index.php/users/login" method="post" id="loginForm">
        <div class="form-group">
       <label for="username">Username</label>
       <input type="text" class="form-control" id="username" name="username" placeholder="Username">
       </div>
       <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
     
     <button type="submit" class="btn btn-default">Submit</button>
</form>
                
                
          </div>
        <div class="panel-body">
            no account <a href="index.php/register">sign up</a>
            
        </div>
        </div>
    </div>
        <script src="assets/jquery/jquery.min.js"></script>
         <script src="assets/bootstrap/bootstrap.min.js"></script>
         <script src="coustom/js/login.js"></script>

    </body>
</html>