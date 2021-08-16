<?php 
include_once("header.php")

?>


	<!-- ================ S-CONTACTS ================ -->
	<section class="s-contacts" ">
		<div class="container">
			<h2 class="title-decor" style="color: black;">CONTACTANOS<span>¡QUEREMOS HABLARTE!</span></h2>
			<p class="slogan" style="color: black;">Contactanos</p>
			<div class="row">
				<div class="col-md-5 col-lg-4">
					<div class="contact-item">
						<div class="contact-item-left">
							<h4 style="color: #fff;">need help</h4>
						</div>
						<div class="contact-item-right">
							<ul class="contact-item-list">
								<li><a href="tel:18004886040">1-800-488-6040</a></li>
								<li><a href="tel:18005784090">1-800-578-4090</a></li>
							</ul>
						</div>
					</div>
					<div class="contact-item">
						<div class="contact-item-left">

							<h4 style="color: #fff;"> questions</h4>
						</div>
						<div class="contact-item-right">
							<ul class="contact-item-list">
								<li><a href="mailto:team@gmail.com">envivo@nba.com</a></li>
								<li><a href="mailto:help@gmail.com">envivo@nba.com</a></li>
							</ul>
						</div>
					</div>
					<div class="contact-item">
						<div class="contact-item-left">
							<h4 style="color: #fff;">address</h4>
						</div>
						<div class="contact-item-right">
							<ul class="contact-item-list">
								<li>8500, Lorem Street, Santo Domingo, 55030</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-8">
					<form  action="registroc.php" method="POST">
						<ul class="form-cover">
							<li class="inp-name">

								<input id="name"   type="text" name="Nombre" placeholder="Nombre">
							</li>
							<li class="inp-email">

								<input  type="text" name="Email" placeholder="Email">
							</li>

                            <li class="inp-email">

								<input type="text" name="Telefono" placeholder="Telefono">
							</li>

                            <li class="inp-email">

								<input type="text" name="Asunto" placeholder="Asunto">
							</li>
							<li class="inp-text">
								<textarea id="comments" name="Mensaje" placeholder="Mensaje" ></textarea>
							</li>
						</ul>

						<div class="btn-form-cover">
							<input type="submit" class="btn" placeholder="Enviar" name="enviar"></input>
						</div>
					</form>
					<div id="message"></div>
				</div>
			</div>
		</div>
        </div>
	</section>


<?php 
include_once("footer.php")

?>