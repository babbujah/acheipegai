<div class="masonry-loader masonry-loader-showing">
	<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">

		<?php 
			foreach ($produtos as $produto) {
				echo '
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">
								
							<a href="shop-product-sidebar-left.html" class="quick-view text-uppercase font-weight-semibold text-2" onclick="location.href=\'shop-product-sidebar-left.html\'">
								Pegai!
								</a>
								<a href="shop-product-sidebar-left.html">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="'.$produto->foto.'" style="width: 300px; height: 300px">										
									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">'.$produto->nome_loja.'</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">'.$produto->nome.'</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4">365 <i class="far fa-thumbs-up text-primary"></i></a>
							</div>
							<p style="margin-bottom: 0.4rem">
								<span>'.$produto->descricao.'</span>
							</p>
							<p class="price text-5 mb-3">
								<span class="amount text-primary">R$ '.number_format($produto->preco, 2, ',', '.').'</span>
							</p>
						</div>
					</div>
				';
			}		
		?>

	</div>
	
</div>