<<<<<<< HEAD
<?php session_start();
 include 'structure-page/head.php'; ?>
<body>

<?php if (!empty($_GET["message"])) : ?>
        <div style="padding: 10px;background:gray;color:#fff;">
            <?=$_GET["message"]?>
        </div>
<?php endif;?>

<div class="like">
<button><ion-icon name="caret-up-outline"></ion-icon></button>
</div>

=======

<?php include 'structure-page/head.php'; ?>
<body>
<div id='result'></div>
<div class='container'>
<?php include 'recuperation-donnees/affichage.php'; ?>
<?php include 'recuperation-donnees/up-verification.php'; ?>
</div>
>>>>>>> 7cf00fd68717fe9b96f7d7539f1a33d2d5c4b4e5
</body>


<?php include 'structure-page/footer.php'; ?>

</html>