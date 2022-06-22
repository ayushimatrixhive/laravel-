<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0px;
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
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: lightblue;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: black;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 30px; /* only for demonstration, should be removed */
  background: lightgray;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
 
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: lightgray;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: lightblue;
  padding: 10px;
  text-align: center;
  color: black;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
 
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>

</head>
<body>
<section>
  <ul>
  <li><a href="/">Home</a></li>
  <li><a href="login">login</a></li>
  <li><a href="register">register</a></li>
  <li><a href="form">form</a></li>
  </ul>
</section>

<header>
  <h3>welcome index page</h3>
  {{URL:: full ()}}
  <br>
  <a href="{{URL::to ('/test')}}">Test</a>
  <br>
  <a href="{{URL::to ('/update')}}">Update</a>
  
</header>

<div class="container">
<h2>colors type</h2>
<button class="button">Green</button>
<button class="button button2">Blue</button>
<button class="button button3">Red</button>
<button class="button button4">Gray</button>
<button class="button button5">Black</button>
</div>

<div class="container">
 
</div>

</body>
</html>


</body>
</html>