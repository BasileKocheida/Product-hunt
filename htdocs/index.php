<?php session_start();
 include 'structure-page/head.php'; ?>
<body>

    <?php if (!empty($_GET["message"])) : ?>
            <div style="padding: 10px;background:gray;color:#fff;">
                <?=$_GET["message"]?>
            </div>
    <?php endif;?>


    <div id='result'></div>
    <div class='container'>
        <?php include 'recuperation-donnees/affichage.php'; ?>
        <?php include 'recuperation-donnees/up-verification.php'; ?>
    </div>
</body>


<?php include 'structure-page/footer.php'; ?>

</html>