<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<style> 
body {
  font-family: sans-serif;
  background-color: #333333;
  color: white;

}
button { 
       background-color: #1ac6ff; 
       width: 200px;
        height: 50px;
        color: orange; 
        padding: 15px 10px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer;
        display: inline-block; 
         } 

 input[type=text], input[type=password] { 
        width: 500px; 
        margin: 5px 5px;
        padding: 15px; 
        display: inline-block; 
        border: 2px solid orange; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: 200px; 
        height: 50px;
        padding: 15px 10px;
        margin: 15px;
        background-color: #ff751a;
    } 
      
   
 .container { 
        padding: 15px; 
        background-color:  #808080;
        width: 500px;
        display: inline-block;
        float: center;
    } 
    h1{
            text-align: center;
        }
</style> 
</head>  
<body style="margin:auto;padding: 3px;min-width: 320px;width: 500px">  
    <center> <h1>Online Pedicab Services Login Form </h1> </center> 
    <form>
        <div class="container"> 
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <button type="button" class="cancelbtn"> Cancel</button> 
            <!-- Forgot <a href="#"> password? </a> --> 
            <button type="submit">Login</button> 
            <!-- <input type="checkbox" checked="checked"> Remember me  -->
            
            
        </div> 
    </form>   
</body>   
</html>
