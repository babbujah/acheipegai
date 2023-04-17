                </div>

            </div>

            <footer id="footer" class="footer-texts-more-lighten">
				<div class="container">
					<div class="row py-4 my-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CONTATO</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
									<a href="mailto:contato@acheipegai.com.br">contato@acheipegai.com.br</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">HORÁRIO DE FUNCIONAMENTO</span>
									Estamos 24 horas no ar!
								</li>
							</ul>
							<ul class="social-icons social-icons-clean-with-border social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
                                <li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-telegram"></i></a>
								</li>
                                <li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-whatsapp"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">LOJAS PARCEIRAS</h5>
							<ul class="list list-unstyled list-inline mb-0">
								<?php
									foreach( $lojas as $loja ){
										echo '<li class="list-inline-item"><a href="'.$loja->link_afiliado.'" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">'.$loja->nome.'</a></li>';
									}
								?>
								
								<!-- 
								<li class="list-inline-item"><a href="https://amzn.to/3KYDhlN" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Amazon</a></li>
								<li class="list-inline-item"><a href="https://www.magazinevoce.com.br/magazineacheiPEGAi/" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Magazine Luíza</a></li>
								<li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Americanas</a></li>
								<li class="list-inline-item"><a href="https://shope.ee/9KBtMCWH69" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Shopee</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/414HFFb" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Casas Bahia</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3mvkUvc" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Aliexpress</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=43984&murl=https%3A%2F%2Fwww.netshoes.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Netshoes</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=43464&murl=https%3A%2F%2Fwww.boticario.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Boticário</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=45560&murl=https%3A%2F%2Fwww.eudora.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Eudora</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=43985&murl=https%3A%2F%2Fwww.zattini.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Zattini</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=41720&murl=https%3A%2F%2Fwww.iplace.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">loja iPlace</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3KWY3lx" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Extra</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3GIOPqN" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Nike</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/40Y3qXn" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Tricae</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=46154&murl=https%3A%2F%2Fwww.rihappy.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Ri Happy</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3zSSIFP" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Ponto Frio</a></li>
								<li class="list-inline-item"><a href="https://click.linksynergy.com/deeplink?id=wxiLV7pbyMs&mid=42158&murl=https%3A%2F%2Fwww.compracerta.com.br%2F" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Compra Certa</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3GHZEJL" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Dafiti</a></li>
								<li class="list-inline-item"><a href="https://tidd.ly/3MFzRWc" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">Kanui</a></li>
								-->
							</ul>
						</div>
						<div class="col-md-12 col-lg-6 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">Instagram</h5>
							<div data-mc-src="23819f2a-d593-4470-baec-a92b3732338b#instagram"></div>
							<div id='block-dark' style="height: 3rem; width: 100%; background: #212529; position: absolute; margin-top: -3rem;"></div>
							<script 
							src="https://cdn2.woxo.tech/a.js#612784704930140016ca99e5" 
							async data-usrc>
							</script>
						</div>
						
					</div>
				</div>
				<div class="container">
					<div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
						<div class="row align-items-center justify-content-md-between">
							<div class="col-12 col-md-auto text-center text-md-start mb-2 mb-md-0">
								<p class="mb-0">Achei Pegai © 2023. Todos os direitos reservados.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>
		<script src="vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
		<script src="vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
		<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.shop.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>