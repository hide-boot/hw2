<html>
<head>
<title>SingUp</title>

<script src='{{url("js/singup.js")}}' defer='true'></script>
<link rel="stylesheet" href='{{url("css/singup.css")}}'/>
</head>
<body>
<nav>
        <div class='link'>
        <a href='{{url("Home")}}' class='film'>Film</a>
        <a href='{{url("Serie")}}' class='tv'>Serie-TV</a>
        <a href='{{url("Anime")}}' class='anime'>Anime</a>
        </div>
        <div class='access'>
        <a href='{{url("Login")}}' class='login'>Login</a>
        <a href='{{url("Singup")}}' class='singup'>Singup</a>
           </div>
        </nav>
<header>
    <div class='overlay'></div>
    <h1 id='title'>Il Cinefilo</h1>
    <p class='subtitle'>Movie Comunity</p>
   </header>
<section>

<div class='table'>
<h3>Iscrizione</h3>
<form class='form' method='post'  >
<label >Nome <div class='alert'><input type='text' name='name'></div></label>
<label >Cognome <div class='alert'><input type='text' name='surname'></div></label>
<label >email <div class='alert'><input type='text' name='email'></div></label>
<label >Username<div class='alert'><input type='text' name='username'></div></label>
<label >Password<div class='alert'><input type='password' name='password'></div></label>
<label >Conferma Password<div class='alert'><input type='password' name='confpass'></div></label>
<div class='label'><input type='checkbox' class='confirm'>Confermo al trattamento dati personali</div>
<input type='hidden' name='_token' value='{{csrf_token()}}'/>
<input type='submit'class='sinbutton' value='Singup'>
</form>
<p>
    Sei già iscritto?<a href='login.php' class='loginnow'>Login now</a>
</p>
</div>


</section>
<footer>
    <div class='footer'>

        <p>Il Cinefilo 2021</p>
    <p>Sito web ideato da:Bonadonna Stefano O46002083</p>
        
    </div>
</footer>

</body>
</html>