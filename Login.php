
       <?php include('logincode.php'); ?>
 <?php include('signin.php'); ?>
 <!DOCTYPE html>
<html>
    <head>
        <html lang="en">

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Login.css">
   
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
   
    <body>

        <header class="cd-header">
            <div class="header-wrapper">
                <div class="logo-wrap">
                    <a href="acceuil.html" class="hover-target"><span>Ven</span>Ta</a>
                </div>
                    </div>
            
                </div>


        </header>
        



        <div class="blur-overlay"></div>
        <div class="container" id="container" style="width:800px ; height:500px">
            <div class="form-container sign-up-container">
                <form  method="POST" enctype="multipart/form-data" action="logincode.php">
                    <?php if(isset($errorMsg)){echo'<p>'.$errorMsg.'<p>';}?>
                    <h1> Créer Un Compte</h1>
                    <div class="alert alert-danger" role="alert" style="display:none">
                        <?php echo'$errorMsg'?>
                    </div>
                    <input type="text"name="user_name" placeholder="Nom_utulisateur" />
                    <input type="text"name="name" placeholder="Nom" />
                    <input type="text"name="lastname" placeholder="Prenom" />
                    
                    <input type="email" name="email_user" placeholder="E-mail" />
                    <input type="password"name="mdp_user"  placeholder="Mot de passe" />
                    <input type="date" name="dna" placeholder="Date De Naissence"/>
                    
                    <button type="submit" name="inscription">S'inscrire</button>
                </form>
            </div>
     
            <div class="form-container sign-in-container">
                <form action="signin.php"  method="POST" enctype="multipart/form-data">
                <?php if(isset($errorMsg)){echo'<p>'.$errorMsg.'<p>';}?>
                    <h1>Se Connecter</h1>
                    <p></p>
                    <div class="email-error error" style="color: red; display: none;"></div>
                    <input type="email" name="email_user"  id ="email"placeholder="E-mail " />
                      <div class="password-error error" style="color: red; display: none;"></div>
                    <input type="password" name="mdp_user"id="password" placeholder="Mot de passe" />
                  
                    
                    <a href="#"></a>
                    <button  type="submit" name="connect" id="connect">Se connecter</button> 
                </form>
                
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bienvenue!</h1>
                        <p>faire votre inscription et profiter de nos offres ideals</p>
                        <button class="ghost" id="signIn" >Se Connecter</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Bienvenue, Chez Venta!</h1>
                        <p>Connectez-vous et profiter de nos offres ideal</p>
                        <button class="ghost" id="signUp" >S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>
       
      
     
        <script>
$(document).ready(function() {
    $('#connect').on('click', function() {
        $('.email-error').fadeOut('slow');
        $('.password-error').fadeOut('slow');

        var email = $('#email').val();
        var password = $('#password').val();

        if (email === "") {
            $('.email-error').text('Adresse email requise..!');
            $('.email-error').fadeIn('slow');
        } else if (!validateEmail(email)) {
            $('.email-error').text('Adresse email invalide...!');
            $('.email-error').fadeIn('slow');
        }

        if (password === "") {
            $('.password-error').text('Mot de passe requis..!');
            $('.password-error').fadeIn('slow');
        } else if (password.length < 6) {
            $('.password-error').text('Le mot de passe doit contenir au moins 6 caractères!');
            $('.password-error').fadeIn('slow');
        }
    });

    // Fonction de validation de l'email
    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
});


   const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");


    });
       </script>
    </body>
</html>