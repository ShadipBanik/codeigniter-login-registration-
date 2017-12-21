<html>
    <head>
        <title>registration page</title>
        <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/bootstrap/style.css">

    </head>
    <body>
        <div class="col-md-4 col-md-offset-4 col-vertical-4">
       <div class="panel panel-default">
        <div class="panel-heading">Register</div>
            <div class="panel-body">
                <div id="messages"></div>
                <form action="users/register" method="post" id="registerForm">
        <div class="form-group">
       <label for="username">Username</label>
       <input type="text" class="form-control" id="username" name="username" placeholder="Username">
       </div>
       <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
        <div class="form-group">
      <label for="passwordAgain">password Again</label>
      <input type="password" class="form-control" id="passwordAgain" name="passwordAgain" placeholder="Password Again">
      </div> 
      <div class="form-group">
      <label for="fullName">Name</label>
      <input type="text" class="form-control" id="fullName" name="fullName" placeholder="jhon doe">
      </div>
      <div class="form-group">
      <label for="contact">Contact</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
      </div>
     
     <button type="submit" class="btn btn-default">Submit</button>
</form>
                
                
          </div>
        <div class="panel-body">
          Have account <a href="../">Log in</a>
            
        </div>
        </div>
    </div>
        
        
        <script type="text/javascript" src="../assets/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/bootstrap/bootstrap.min.js"></script>
        <script  type="text/javascript" src="../coustom/js/register.js"></script>

    </body>
</html>