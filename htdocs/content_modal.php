
<?php 
if (isset($_POST['product_id'])) {
    require_once("connexion/bdd.php");
    $productStatement =  $pdo->prepare('SELECT * FROM product WHERE id = ?');
    $productStatement->execute([$_POST['product_id']]);
    $product = $productStatement->fetch();
 }

?>


    
    <div class="popup-header">
        <div class="card mb-3" >
            <div class="row no-gutters">
                <div class="col-md-1">
                    <img src="<?=$product['logo']?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">"<?=$product['name-product']?>"</h5>
                        <p class="card-text"><?=$product['descriptif']?> </p>
                        <p class="card-text"><?=$product['categories']?> </p>
                    </div>
                </div>
                <div class="title">fenêtre modale</div>
                <span class="btn-close" data-dismiss-popup> &times; </span>
            </div>
            <div class="popup-body">
                <h1>Lorem ipsum dolor sit amet!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nobis dolorem labore saepe iusto eius, cum placeat laboriosam minus. Facilis enim ratione nemo consectetur sunt fuga similique aliquid vel odio.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nobis dolorem labore saepe iusto eius, cum placeat laboriosam minus. Facilis enim ratione nemo consectetur sunt fuga similique aliquid vel odio.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nobis dolorem labore saepe iusto eius, cum placeat laboriosam minus. Facilis enim ratione nemo consectetur sunt fuga similique aliquid vel odio.</p>
            </div>
            <div class="popup-footer">
                <button class="btn-close" data-dismiss-popup>Fermer</button>
            </div>
        </div>
    </div>



