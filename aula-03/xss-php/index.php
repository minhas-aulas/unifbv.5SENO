<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Website XSS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link type='text/css' rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
 <body>

    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        UniFBV Aula 03 - XSS
      </a>
    </nav>

    <div class="container">
      <h1> Meu Formulário </h1>

      <form action="/" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" name="pwd" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php
      if ( isset($_POST["content"]) )
      {
        echo $_POST["content"];
      }

      if ( isset($_POST["email"]) )
      {
        setcookie("email", $_POST["email"], time()+2*24*60*60);
      }

      if ( isset($_POST["pwd"]) )
      {
        setcookie("pwd", $_POST["pwd"], time()+2*24*60*60);
      }
    ?>

  </body>
</html>
