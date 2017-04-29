<!DOCTYPE html>
<html>
<header>
	<?php 
		include_once "header.php"
	 ?>
	 <br>
	 <br>
</header>
<body>
	<div id="carousel-example-generic" class="carousel slide" data-rise="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to"0" class="active">				
			</li>
			<li data-target="#carousel-example-generic" data-slide-to"1" class="active">				
			</li>
			<li data-target="#carousel-example-generic" data-slide-to"2" class="active">				
			</li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="img-responsive center-block" alt="First slide [1000x400]" src="assets/img/slide/img0.jpg" data-holder-rendered="true">
			</div>
			<div class="item">
				<img class="img-responsive center-block" alt="Second slide [1000x400]" src="assets/img/slide/img1.jpg" data-holder-rendered="true">
			</div>
			<div class="item">
				<img class="img-responsive center-block" alt="Third slide [1000x400]" src="assets/img/slide/img2.jpg" data-holder-rendered="true">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon-chevron-left" aria-hidden="true">
				
			</span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon-chevron-left" aria-hidden="true">
			</span>
			<span class="sr-only">Próximo</span>
		</a>
		</div>


<?php 
	include_once "produtos.php";
 ?>

<!-- Latest compiled and minified JavaScript -->

<!--- Colocar o script por último, dessa maneira a página carrega mais rápido -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <footer>
    	<?php 
    		include_once "footer.php"
    	 ?>
    </footer>
</body>
</html>