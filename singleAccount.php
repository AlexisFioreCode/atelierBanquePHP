<?php 
    require "model/accounts.php";
    include "layout/header.php";
    $accounts = get_accounts();
    if(isset($_GET["index"]) && isset($accounts[$_GET['index']])) {
        $account = $accounts[$_GET['index']];
    } else {
        $error = "Nous ne parvenons pas à récupérer le compte, il n'existe peut être pas. ";        
    }   
?>

<?php if(isset($account)): ?>
    <h2> <?php echo $account["name"]; ?> </h2>
<?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
        <p>Pourquoi ne pas retourner a l'acceuil ?</p>
        <a href=index.php class="btn btn-dark text-white">Acceuil</a>

    </div>
<?php endif ?>

<?php
    include "layout/footer.php";
?>