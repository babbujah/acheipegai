<?php

	class Home extends Page{
		
		public function loadContent(){
			$this->title.= ' | Home';
			
			$this->content = '
				<div class="masonry-loader masonry-loader-showing">
					<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{\'layoutMode\': \'fitRows\'}">
			';
			
			foreach ($this->api->getProdutos() as $produto) {
				$this->content.= '
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0" style="background: #fff; border-radius: 7px;">
							<div class="product-thumb-info border-0 mb-3">								
							<a href="'.$produto->link_afiliado.'" class="quick-view text-uppercase font-weight-semibold text-2" onclick="location.href=\'shop-product-sidebar-left.html\'">
								Pegai!
								</a>
								<a href="produto?id='.$produto->id.'">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="'.$produto->foto.'" style="width: 100%; height: 250px" onerror="this.onerror=null;this.src=\'./img/produtos/noimage.png\';">										
									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div class="p-2">
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">'.$produto->nome_loja.'</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
									<a href="produto?id='.$produto->id.'" class="text-color-dark text-color-hover-primary">'.$produto->nome.'</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4 p-2">
									<i class="fas fa-share text-primary"></i>
								</a>
							</div>
							<p class="p-2" style="margin-bottom: 0.4rem; font-size: 10pt; min-height: 6rem!important">
								<span>'.$produto->descricao.'</span>
							</p>
							<p class="price text-5 mb-3 p-2">
								<span class="amount text-primary">R$ '.number_format($produto->preco, 2, ',', '.').'</span>
							</p>
						</div>
					</div>
				';
			}

			$this->content.= '</div></div>';
		}

	}