<?php
$_title = "Sign up";
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json'); //Vi tager vores data fra vores dictionary.json fil
// Så konverterer vi det til et object
$data = json_decode($data, true); // Bruger [] 
?>

<form id="signup_form" onsubmit="validate(created_user); return false">
<label for="email"></label>
    <input id="email_signup"
      name="email" 
      type="text" 
      placeholder="Email"
      onblur="is_email_available()"
      onfocus="clean_input()"
    >
    <p id="p_email" style="display: none">
      Email already in use
    </p>
    
    <label for="password"></label>
    <input name="psw" type="password" placeholder="Password">
    <button>Opret bruger</button>
  </form>

  <?php
//Her henter vi vores html fra footer filen, ind på vores index, det samme med footer senere
require_once __DIR__.'/comp_footer.php';