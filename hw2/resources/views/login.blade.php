


<html>
<head>
<title>Login</title>
<link rel="stylesheet" href='{{url("css/login.css")}}'/>
<script src='{{url("js/login.js")}}' defer='true'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<div class='log'>
    <div class='bord'>
<img class='utente' src='https://cdn.pixabay.com/photo/2017/07/18/23/23/user-2517433__340.png'/>
<form class='accesso' method="post" >

<label class='username'>Username <div class='alert'> <input type='text' name='user' value='{{$old}}'></div></label>
<label class='pass'>Password <div class='alert'> <input type='password' name='password'></div></label>
<input type='hidden' name='_token' value='{{$csrf_token}}'/>
<label><input type='checkbox' name='check' >Ricorda Utente</label>
<input type='submit' class='buttom' value='Login'>
</form>
</div>
<p>Non sei iscritto? <a href='singup.php' class='singupnow'>Iscriviti adesso</a></p>
</div>
@if(isset($old))
<div class='errordiv'>Credenziali non valide</div>
@endif
</section>
<footer>
    <div class='footer'>

        <p>Il Cinefilo 2021</p>
    <p>Sito web ideato da:Bonadonna Stefano O46002083</p>
        
    </div>
</footer>

</body>
</html>

