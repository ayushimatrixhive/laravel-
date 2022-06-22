<html>
   <head>
      <title>person form Example</title>
   </head>
   <body>
      <form action = "loginform" method = "POST">
        <!--  <input type = "hidden" name = "_token" value = ""> -->
        @csrf
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = "text" name = "name" /><br>
                  <span style="color :red"> @error('name'){{$message}}@enderror</span>
            </td>
            </tr>
            <tr>
               <td>Username</td>
               <td>
                  <input type = "text" name = "username" /><br>
                  <span style="color :red"> @error('username'){{$message}}@enderror</span>
               </td>
            </tr>
            <tr>
               <td>Password</td>
               <td>
                  <input type = "text" name = "password" /><br>
                  <span style="color :red"> @error('password'){{$message}}@enderror</span>
            </td>
            </tr>
            <td>
               <button type="submit" >Login </button>
            </td>
         </table>
      </form>
   </body>
</html>