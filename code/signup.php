<html>
 <head>
  <script type="text/javascript">
    function validateForm(){
      var a= document.forms["signupform"]["userName"].value;
      var b= document.forms["signupform"]["userEmail"].value;
      var c= document.forms["signupform"]["userContactNumber"].value;
      var d= document.forms["signupform"]["userPassword"].value;

      if(a== ""){
        alert("Please enter your username");
        return false;
      }

      if(b== ""){
        alert("Please enter your email address");
        return false;
      }

      if(c== ""){
        alert("Please enter your contact number");
        return false;
      }
      if(!/^[0-9]+$/.test(c)){
    alert("Please only enter numeric characters only for your Contact Number! (Allowed input:0-9)")
      }

      if(d== ""){
        alert("Please enter your password");
        return false;
      }

      if(d.length <= 6){
        alert("Password must be longer than 6 characters");
        return false;
      }


    }

  </script>



 <title>MRT Ticketing System Homepage</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
    <li class="nav-item">
          <a class="nav-link" href="homepage.php">Home</a>
        </li>

        <li class="nav-item">
  <a class="nav-link active" href="signin.php">Signin</a>
</li>


</ul>
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<form name="signupform" method="POST" action="signupinput.php" onSubmit = "return validateForm()">  
<div class= "wallpaper"> 
<div class= "card2">
       <input type="checkbox" id="chk" aria-hidden="true" name="">
       <div class="content">
           <div class="front">
               <div class="inner">
                   <h2> Sign Up </h2>
                    <p>
                   <input type= "text" name="userName" placeholder= "Name">
                   <input type= "text" name="userEmail" placeholder= "Email Address">
                   <input type= "text" name="userContactNumber" placeholder= "Phone Number">
                   <input type= "password" name="userPassword" placeholder= "Password">
                   <div class= "slider-btn2">
                <a href=""> <button class= "btn btn-2" type= "submit">Sign Up </button> </a>
                    </div> 
                    <label>Already have an account?<a href="signin.php">Sign In </a></label>
                    </p>
                </div>
                
            </div>


        </div>
    </div>
</div>
</form>

 </body>
</html>