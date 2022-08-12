
<html>
 <head>
 <script type="text/javascript">
    function validateForm(){
      var x= document.forms["signinform"]["userEmail"].value;
      var y= document.forms["signinform"]["userPassword"].value;

      if(x== ""){
        alert("Please enter your user email address");
        return false;
      }

      if(y== ""){
        alert("Please enter your password");
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
          <a class="nav-link " href="homepage.php">Home</a>
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

<form name="signinform" method="POST" action="signininput.php"  onSubmit = "return validateForm()">
<div class= "wallpaper"> 
<div class= "card">
       <input type="checkbox" id="chk" aria-hidden="true" name="">
       <div class="content">
           <div class="front">
               <div class="inner">
                   <h2> Sign In </h2>
                   <p></p>
                   <input type= "text" name="userEmail" placeholder= "Email Address">
                   <input type= "password" name="userPassword" placeholder= "Password">
                   <div class= "slider-btn2">
                <a href="userhomepage.php"> <button class= "btn btn-2"  type= "submit" name="signin" >Sign In </button> </a>
                    </div> 
                 
                    <label>Admin Sign In?<a href="adminsignin.php">Sign In </a></label>
                    <label>Don't have an account?<a href="signup.php">Sign Up </a></label>
                 
                </div>
                
            </div>
            </form>

            

        </div>
    </div>
</div>
    
 </body>
</html>