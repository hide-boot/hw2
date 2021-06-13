<!DOCTYPE html>
<html>
        <head>
                <title>MyAccount</title>
                <link rel='stylesheet' href='{{url("css/MyAccount.css")}}'>
                <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
                <script  src='{{url("js/MyAccount.js")}}' defer=true></script>
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
                </header>
                <section>
                       
                        <div class=article>
                                <img src='{{$image}}' class='profileimg'/>
                                <p>Benvenuto</p>
                                <h3 class='name'>{{$nome}}</h3>
                                <h2>Information</h2> 
                               
                                
                                <div class='information'>
                                        
                                        <div class='support'>
                                                 
                                                <div>Eta: 
                                                @if($eta==null) inserisci 
                                                @else {{$eta}}
                                                @endif</div>
                                                <div>Hobby: 
                                                @if($hobby==null) inserisci 
                                                @else {{$hobby}}
                                                @endif</div>
                                                <input type='button' name='alter' value='Modifica' class='pulsante'/>
                                        </div>
                                        
                                        <form class='form' method='post' enctype="multipart/form-data">
                                                <label>Eta: <input type='text' name='eta'/></label> 
                                                <label>Hobby: <textarea name='hobby'></textarea></label> 
                                                <input type='hidden' name='_token' value='{{$csrf_token}}'/>
                                                <label>Image: <textarea name='image'></textarea></label>
                                                <input type='submit' name='change' value='Conferma' class='pulsante'/> 
                                        <form>
                                        

                                </div>
                                <h2>Preferiti</h2>
                        </div>



                        <div class='prefer'></div>

                </section>
                <section class='no-w'></section>
                <footer>
                        <div class='footer'>
                                <div>Il Cinefilo 2021</div>
                                <div>Sito web ideato da:Bonadonna Stefano O46002083</div>
    
                        </div>
                </footer>

        </body>
</html>