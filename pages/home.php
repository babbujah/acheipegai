<?php

	class Home extends Page{
		
		public function loadContent(){
			$this->title.= ' | Home';
			
			if( !empty($this->params['categoria']) ){
				$this->content.= '
					<div class="row">
							<div class="col">
									<ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
											<li><a href="./" class="text-color-default text-color-hover-primary text-decoration-none">Principal</a></li>
											<li>Categorias</li>
											<li>'.$this->params['categoria'].'</li>
									</ul>
							</div>
					</div>
				';
			}
			else if( !empty($this->params['loja']) || !empty($this->params['q']) ){
				$item_loja = empty($this->params['loja']) ? 'Todas as lojas' : $this->params['loja'];
				$item_query = empty($this->params['q']) ? '' : '<li>(Busca= "'.$this->params['q'].'")</li>';

				$this->content.= '
					<div class="row">
							<div class="col">
									<ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
											<li><a href="./" class="text-color-default text-color-hover-primary text-decoration-none">Principal</a></li>
											<li>Lojas</li>
											<li>'.$item_loja.'</li>
											'.$item_query.'
									</ul>
							</div>
					</div>
				';
			}

			$this->content.= '
				<div class="masonry-loader masonry-loader-showing" style="min-height: 10rem;">
					<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{\'layoutMode\': \'fitRows\'}">
			';
			
			foreach ($this->api->getProdutos() as $produto) {
				if( !empty($this->params['categoria']) && $produto->nome_categoria != $this->params['categoria']){
					continue;	
				}
				else if( !empty($this->params['loja']) && $produto->nome_loja != $this->params['loja']){
					continue;	
				}
				if( !empty($this->params['q']) && stristr($produto->nome, $this->params['q']) === FALSE ){
					continue;	
				}
				
				$this->content.= '
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0" style="background: #fff; border-radius: 7px;">
							<div class="product-thumb-info border-0 mb-3">								
							<a href="'.$produto->link_afiliado.'" class="quick-view text-uppercase font-weight-semibold text-2" onclick="location.href=\''.$produto->link_afiliado.'\'">
								Pegai!
								</a>
								<a href="'.$produto->link_afiliado.'">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="'.$produto->foto.'" style="width: 100%; height: 250px" onerror="this.onerror=null;this.src=\'./img/produtos/noimage.png\';">										
									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div class="p-2">
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">'.$produto->nome_loja.'</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
									<a href="'.$produto->link_afiliado.'" class="text-color-dark text-color-hover-primary">'.$produto->nome.'</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4 p-2">
									<i class="fas fa-share text-primary d-none"></i>
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