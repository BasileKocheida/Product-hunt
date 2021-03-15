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

</body>


<?php include 'structure-page/footer.php'; ?>

</html>