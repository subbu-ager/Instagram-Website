<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <title>Instagram signup</title>
    
    <style>
        
        *{
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .instagram-container{
            
            width: 100%;
            max-width: 350px;
            margin: auto;
            border: 1px solid #ccc;
            margin-top: 15px;
        }
        .instagram-logo{
            
            width: 100%;
            max-width: 200px;
            margin: auto;
            margin-top: 10px;
        }
        .instagram-logo img{
            
            width: 100%;
        }
        .instagram-status{
            
            font-size: 18px;
            text-align: center;
            color: #aaa;
        }
        .instagram-container-inside{
            
            padding: 25px;
        }
        .instagram-container-inside button{
            
            width: 100%;
            padding: 8px;
            margin: 8px;
            border: none;
            font-size: 12px;
            color: white;
            background-color: #3897f0;
            border-radius: 5px;
            cursor: pointer;
        }
        .instagram-container-inside h5{
            
            color: #C0C0C0;
            text-align: center;
        }
        .instagram-container-inside input[type=email],input[type=text], input[type=password]{
        
            width: 100%;
            padding: 8px;
            margin:6px;
            display: inline-block;
            box-sizing: border-box;
            border: 1px solid #e9e9e9;
            background-color: #F0F0F0;
            font-size: 12px;
            border-radius: 4px;
        }
        .instagram-container-inside p{
            
            font-size: 16px;
            text-align: center;
            color: #aaa;
        }
        .instagram-bottom-container{
            
            width: 100%;
            max-width: 350px;
            margin: auto;
            border: 1px solid #ccc;
            margin-top: 15px;
        }
        .instagram-bottom-container h4{
            
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
   
   <div class="instagram-container">
      
      <div class="instagram-logo">
          
          <img src="icon/instagram_name.png" alt="">
          
      </div>
      
      <div class="instagram-status">
         
         <p>Sign up to see photos and videos </p>
			   
         <p>from your friends. </p>
          
      </div>
      
      <div class="instagram-container-inside">
         
         <button><i class="fab fa-facebook-square"></i>Log in with facebook</button>
          
          <h5>OR</h5>
          
          <input type="email" placeholder="Mobile Number or Email">
          
          <input type="text" placeholder="Full Name">
          
          <input type="text" placeholder="Username">
          
          <input type="password" placeholder="Password">
          
          <button>Sign Up</button>
          
          <p>By signing up, you agree to our</p>
					 
          <p>Terms, Data policy and Cookies</p>
					   
          <p>Policy.</p> 
          
      </div>
       
   </div>
     
    <div class="instagram-bottom-container">
          
          <h4>Have an account? <a href="signin.php" style="text-decoration:none; color:#3897f0;">Log In</a></h4>
          
     </div>
      
    
</body>
</html>










