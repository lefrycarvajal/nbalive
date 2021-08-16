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
				<?php 
					if($_POST)
					{
						//echo"Formulario enviado!";
						/*Recibimos los datos desde el Form*/
						$Nombre = $_POST['Nombre'];
						$Email = $_POST['Email'];
						$Telefono = $_POST['Telefono'];
                        $Asunto = $_POST['Asunto'];
						$Mensaje = $_POST['Mensaje'];
						
						/*Validando los datos*/
						if(empty($Nombre))
						{
							echo"<h2>¡Porfavor digite el Nombre!</h2>";
						}
						if(empty($Email))
						{
							echo"<h2>¡Porfavor digite su Email!</h2>";
						}
						if(empty($Telefono))
						{
							echo"<h2>¡Porfavor digite su Telefono!</h2>";
						}
						if(empty($Asunto))
						{
							echo"<h2>¡Porfavor Escriba un Asunto!</h2>";
						}

                        if(empty($Mensaje))
						{
							echo"<h2>¡Porfavor deje su mensaje!</h2>";
						}
						
						/*Verificamos de forma conjunto que no haya ningun campos 
						obligatorio vacio*/
						if( (!empty($Nombre)) && (!empty($Email)) && (!empty($Telefono)) && (!empty($Asunto)) && (!empty($Mensaje)) )
						{
							/* Conexion a la base de datos*/
							/*Datos del Servidor MySql*/ 
							$Servidor="localhost";
							$UsarioDB="root";
							$ClaveDB="";
							$DB="dbnbalive";
							
							/*Realizamos la conexion a la DB y verificamos si fue exitosa*/
							$Conectarme= mysqli_connect($Servidor,$UsarioDB,$ClaveDB,$DB) or die ("Error con la Base de Datos") ;
							
							/*Guardar (insertar) el registro, verificando si fue 
							exitoso o no*/
							$Guardar="
								INSERT INTO contacto 
									(nombre, email, telefono, asunto, mensaje)
								VALUES
									('$Nombre','$Email', '$Telefono', '$Asunto', '$Mensaje')
							";
							
							if(mysqli_query($Conectarme,$Guardar))
							{
								echo"<h2>¡Gracias! su mensaje ha sido enviado.</h2>";
								echo"<h3><h2><a href='contact.php'>Contactar de nuevo.</a></h2>";
							}else{
								echo"<h3>Los sentimos, ha fallado el Registro!.</h3>";
							}
							
							
						}else
						{
							echo"<h2>¡Faltan contactos por llenar!</h2>";
						}
						
						
					}
				?>     
		<div id="message"></div>
				</div>
			</div>
		</div>
        </div>
	</section>

<?php 
include_once("footer.php")

?>