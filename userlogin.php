<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 </head>
 <body>
  <div class="container">
   <form action="uservalid.php" method="POST">
    <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <img src="raw.png" alt="..." class="rounded-top" width=75 height=75>
  <span class="navbar-brand mb-0 h1"> USER LOGIN</span>
</nav>
</div>
<div class="container">
<div class="container">  
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="name" aria-describedby="userneed" placeholder="enter username like name with alpha-numeric">
     </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="enter password which consists of alpha-numeric even special characters">
  </div>
  <div class="form-group">
    <label >common code</label>
    <input type="text" class="form-control" name="cc" aria-describedby="userneed" placeholder="enter cc as alpha-numeric">
     </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

 </body>
</html>