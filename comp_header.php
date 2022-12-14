<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="app.js"></script>
    <script src="validator.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>
        <?php echo $_title ?? 'Upppsss....' ?>
    </title>
</head>
<body>
    <nav>
        <div class="momondo_logo">
            <a href="/"><img src="images/momondo-logo-img.png" alt="Momondo">
            </a>
        </div>
        
        <div class="links">
            <?php
                ini_set('display_errors', 0);
                    session_start();
                    // Hvis brugeren er logget in viser den admin link
                    if( $_SESSION ){
                     echo '<a href="admin">Admin</a>';
                    }
                    // Denne funktion fjerner selve login
                    if( ! $_SESSION ){
                     echo '<a href="login">Login</a>';
                    }
            ?>
            <?php
                    if( ! $_SESSION){
                     echo '<a href="signup">Signup</a>';  
                    }
            ?>
            
            <?php
                    // Denne funktion henviser til billede uploads siden, når vi er på admin siden
                    if( $_SESSION ){
                     echo '<a href="view_upload.php">Gallery</a>';
                    }
            ?>

            <?php
                    // Denne funktion henviser tilbage til index siden, da man logger ud
                    if( $_SESSION ){
                     echo '<a href="view_logout.php">Signout</a>';
                    }
            ?>
            </div>
    </nav>
</body>