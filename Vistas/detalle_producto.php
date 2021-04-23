<!doctype html>
<html lang="en">
<?php require "Template/head.php"; ?>
<body>
	<!--================Header Menu Area =================-->
	<?php require "Template/header.php"; ?>
	<!--================Header Menu Area =================-->
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Detalles del producto</h2>
					<div class="page_link">
						<a href="index.html">Inicio</a>
						<a href="category.html">Categoria</a>
						<a href="single-product.html">Detalle del producto</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner"><?php
									require_once'../../Controladores/Familiar/detalle_ropa_f.php';
				foreach ($r1 as $valor) {
					?>
				<div class="col-lg-6">
					<div class="s_product_img">
						<div>
							<div class="">
								<div class="">
									
					
									<img class="d-block w-100" src="../../recursos/img/producto/familiar/<?=$valor['id']?>/<?=$valor['foto']?>" alt="">
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>Te ofrecemos</h3>
						<ul class="list">
							<li>
								<a  href="#">
									<span>Categoria</span> : <?=$valor['categoria']; ?></a>
									<!--<span>Categoria</span> : <?= $categoria; ?></a>-->
							</li>
							<li>
								<a href="#">
									<span>Tipo</span> :<?=$valor['tipo']; ?></a>
							</li>
						</ul>
						<p>En este espacio podemos agregar una pequeña descripcion del producto. Inspirado en que, con que tipo de tela se diseño u otra descripción.</p>
					</div>
				</div>
				<?php } ?> 
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================ start footer Area  =================-->
	<?php require "template/footer.php"; ?>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<script src="../../recursos/js/jquery-3.2.1.min.js"></script>
	<script src="../../recursos/js/bootstrap.min.js"></script>
	<script src="../../recursos/js/stellar.js"></script>
	<script src="../../recursos/js/jquery.ajaxchimp.min.js"></script>
	<script src="../../recursos/vendors/jquery-ui/jquery-ui.js"></script>
	<script src="../../recursos/js/theme.js"></script>
	
</body>

</html>