<html>

   <head>
      <title>person form Example</title>
   </head>

   <body>
      <form action = "/person" method = "post">
        <!--  <input type = "hidden" name = "_token" value = ""> -->
        @csrf
         <table>
            <tr>
               <td>Name</td>
               <td><input type = "text" name = "name" /></td>
            </tr>
            <tr>
               <td>Username</td>
               <td><input type = "text" name = "username" /></td>
            </tr>
            <tr>
               <td>Password</td>
               <td><input type = "text" name = "password" /></td>
            </tr>
               <!-- <td colspan = "2" align = "center">
                  <input type = "submit" value = "Add" />
               </td> -->
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Register" />
               </td>
          
         </table>
      
      </form>
   </body>
</html>