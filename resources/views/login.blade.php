<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



    <title>Login form </title>
</head>
<style>
    * {
            font-family: inherit;
        }
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        padding: 8px;
        background-color: #dddddd;
        }
</style>

<body>
<div class="container">
<ul>
  <li><a href="/">Home</a></li>
  <li><a href="login">login</a></li>
  <li><a href="register">register</a></li>
  <li><a href="form">form</a></li>
</ul>
</div>
    
    <div class="card">
        <div class="card-header bg-primary text-white text-center">Login here</div>

        <form method="post" action="#">

            <hr>

            <div class="bg-default text-danger text-center" id="message"></div>
            <hr>
            <label for="email">Name:</label>
            <input type="text" name="name" placeholder="Enter name" class="form-control" id="myname">        
            <br>
            <label for="email" >Password:</label>
            <input type="password" name="pass" placeholder="Enter password" class="form-control" id="mypass">         
            <br>
            <br>
            <button class="btn btn-primary" type="submit">Login</button> <button
                class="btn btn-primary" type="reset">Cancel</button>

        </form>
        <hr>
        <center><span id="json"></span></center>    
        <hr>
    </div>
    <div class="card-footer bg-primary text-white text-center">
        <span id="demo"></span>
        <span id="demo1"></span>
    </div>
    </div>