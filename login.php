<?php 
    include "layout/header.php";
    $id = "jean";
    $mdp = "michel"; 
    if(!empty($_POST)) {
        $login = $_POST;
        foreach ($login as $key => $value) {
            $login[$key] = htmlspecialchars($value);
        }
        if(($login['username'] === $id) && ($login['password'] === $mdp)) {
            session_start();
            $_SESSION["user"] = $value;
            header('Location: index.php');
            exit();
        }
    }
    
?>

<h2>Se connecter</h2>
<form action="login.php" method="post">
    <input name="username" class="form-control my-2" type="text">
    <input name="password" class="form-control my-2" type="password">
    <input hrefname="login" class="form-control btn btn-dark text-white my-2" type="submit" value="Login">  
    <?php if(!empty($login)): 
        if (($login['username'] !== $id) && ($login['password'] !== $mdp)): ?>
            <div class="alert alert-danger">
                <p> Identifiant ou mot de passe incorrects veuillez réessayer</p>
            </div>
       <?php endif ?>
  <?php  endif ?>
    
</form>



<?php
    include "layout/footer.php";
?>