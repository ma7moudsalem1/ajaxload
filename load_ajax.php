<?php
require 'init.php'; 
if(isset($_GET['offset']) && isset($_GET['limit'])){
	$limit  = $_GET['limit'];
	$offset = $_GET['offset'];
	$stmt = $conn->prepare("SELECT * FROM products ORDER BY id LIMIT $limit OFFSET $offset");
	$stmt->execute();
	$products = $stmt->fetchAll();
	foreach ($products as $pro) {
		?>

		<div class="col-sm-4 col-lg-4 col-md-4 lastId" data-id="<?= $pro['id'] ?>">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?= $pro['price'] ?></h4>
                                <h4><a href="#"><?= $pro['title'] ?></a>
                                </h4>
                                <p><?= $pro['descrp'] ?></p>
                            </div>
                        </div>
             </div>


		<?php
	}
}
?>