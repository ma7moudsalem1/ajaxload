<?php 
require 'init.php'; 
require  LAYOUTS . 'header.php'; 
?>


<div class="cotainer">
	<div class="row">
		
            <div class="col-md-3">
                <p class="lead">Search</p>
                <div class="list-group">
                    <form method="post">
						<label for="keyword">keyword</label>
						<input type="text" name="keyword" class="form-control" />
						<br />
						<input type="submit" name="btn" class="btn btn-primary" value="Search" />
					</form>
                </div>
				<p class="lead">Categories</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
				<div class="row text-center">
				<h1>Welcome at our website</h1>
				<p>It's good to meet you at our website.</p><br />
					<span id="loading" class="alert alert-warning" style=""></span>
				</div>
                <div class="row set_data">
                    


                    
                </div>

            </div>

			
			
	</div>
</div>
<?php  require  LAYOUTS . 'footer.php';  ?>