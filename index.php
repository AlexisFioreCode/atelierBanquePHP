<?php 
    require "model/accounts.php";
    include "layout/header.php";
    $accounts = get_accounts();
?>

<h2>Vos comptes en banque</h2>

<div class="row">
    <?php foreach ($accounts as $index => $account): ?>
        <div class="col-6 col-md-4">
            <ul class="list-group my-5">
                <?php foreach ($account as $key => $value): ?>
                    <li class="list-group-item"><?php echo "$key : $value "; ?></li>
               <?php endforeach ?>
               <li class="list-group-item text-center">
                   <a class="btn btn-dark text-white px-5" href="singleAccount.php?index=<?php echo $index;?>">Voir</a>
                </li>
            </ul>
        </div>
     <?php endforeach; ?>
</div>
    
<?php
    include "layout/footer.php";
?>