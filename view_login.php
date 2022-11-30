<?php
$_title = "Login";
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json'); //Vi tager vores data fra vores dictionary.json fil
// Så konverterer vi det til et object
$data = json_decode($data, true); // Bruger [] 
?>

<div class="form_login">
  <h1> <?= $data['dk_nav_login']?> </h1>
  <p> <?= $data['dk_form_description']?></p>
  <img src="images/momondo-screenshot-login.png" alt="momondo">
  <form action="bridge-login.php" method="POST">
    <input name="email" type="text" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button> <?= $data['dk_nav_login']?> </button>
  </form>
</div>

<?php
require_once __DIR__.'/comp_footer.php';
?>
