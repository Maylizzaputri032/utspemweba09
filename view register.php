<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>E-learning Lentera Siswa</title>
        <!-- Bootstrap CSS -->
        <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="admin.css"> <!-- link untuk menghubungkan template-->
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.min.css">
        <link href="login.css" rel="stylesheet">
    </head>
    <body>
    	<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
          <a class="navbar-brand" href="#"><b> E-LEARNING LENTERA SISWA</b></a>
            <form class="form-inline my-2 my-lg-0 ml-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <body class="text-center">
        <form class="form-signin" method="POST" action="" >
            <h1 class="h3 mb-3 font-weight-normal">Register</h1>
            <label for="inputName" class="sr-only">Name</label>
            <input type="text" name="name" id="inputName" class="form-control" placeholder="Please insert your name" required autofocus>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <label for="inputPassword" class="sr-only">Password Confirmation</label>
            <input type="password" name="password_confirmation" id="inputPassword" class="form-control" placeholder="Password Confirmation" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="Register">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; May 2020</p>
        </form>
    </body>
</html>