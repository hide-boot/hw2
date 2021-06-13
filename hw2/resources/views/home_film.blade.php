<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel='stylesheet' href='{{url("css/Hmw_film.css")}}'>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
<script  src='{{url("js/Hmw_f.js")}}' defer=true></script>
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
        @if(isset($user))
        <a href='{{url("Myaccount")}}' class='login'>{{$nome}}</a>
        <a href='{{url("Logout")}}' class='singup'>Logout</a>
        @else
        <a href='{{url("Login")}}' class='login'>Login</a>
        <a href='{{url("Singup")}}' class='singup'>Singup</a>
        
@endif


        

        </div>
        </nav>
<header>
    <div class='overlay'></div>
    <h1 id='title'>Il Cinefilo</h1>
    <p class='subtitle'>Movie Comunity</p>
   </header>
<section>

    <div class='form'>
    <form >
    <input type='text'>
    <input type='submit' value='Search' class='search'>
    </form>
    <p class='pfilm'>Film</p>
    </div>
    <div class='article'>
    <input type='hidden' name='_token' value='{{csrf_token()}}'/>
    <div class='contents'></div>
    </div>


</section>
<section class='no-w'>
</section>
<footer>
    <div class='footer'>

        <p>Il Cinefilo 2021</p>
    <p>Sito web ideato da:Bonadonna Stefano O46002083</p>
        
    </div>
</footer>

</body>
</html>