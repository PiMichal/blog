<?php

require 'includes/init.php';


$user = new User();
$conn = require './includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST['password'] != $_POST['password2']){
        echo("Invalid password");
    }

    else{
        $user->username = $_POST['username'];
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user->createAnAccount($conn);
        Auth::login();
        Url::redirect('/');
    }
    

}

?>
<?php require 'includes/header.php'; ?>

<h2>Sign up</h2>

<?php if (! empty($error)) : ?>
    <p><?= $error ?></p>
<?php endif; ?>

<form method="post">

    <div class="form-group">
        <label for="username">Username</label>
        <input name="username" id="username" class="form-control" placeholder="Username" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
    </div>
    
    <div class="form-group">
        <label for="password">Repeat password</label>
        <input type="password" name="password2" id="password" class="form-control" placeholder="Repeat password" required>
    </div>

    <button class="btn btn-success">Confirm</button>

</form>

<?php require 'includes/footer.php'; ?>
