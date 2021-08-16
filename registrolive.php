<?php
include_once("header.php")

?>

<section class="s-about">
	<div class="container">
	
    <div class="container">

  <div class="row">
    <div class="col-md-6 ">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uz_tpvr3x0E" frameborder="0" allowfullscreen></iframe>
            <div class="content">
              <h1>Fat Picnic</h1>

            </div>
          </div>

        </div>
        <!-- card image -->

        <div class="card-content">
        <span class="card-title" style="color: #000; font-size: 20px; text-transform:uppercase; font-weight:600; " >TRANSMISION EN VIVO DEL PARTIDO</span>
        <br>
        </div>
        <!-- card content -->

      </div>
    </div>
    
    <div class="col-md-6 ">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/KAZ-U8vYqZg" frameborder="0" allowfullscreen></iframe>
            <div class="content">
              <h1>Jacob Diamond</h1>

            </div>
          </div>

        </div>
        <!-- card image -->

        <div class="card-content">
        <span class="card-title" style="color: #000; font-size: 20px; text-transform:uppercase; font-weight:600; " >TRANSMISION EN VIVO DEL PARTIDO</span>
        <br>
        </div>
        <!-- card content -->

      </div>
    </div>
  </div><!--end row-->

<div class="row">
    <div class="col-md-6 ">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="280" height="157" src="https://www.youtube.com/embed/ZRZW7zYnb4g" frameborder="0" allowfullscreen></iframe>
            <div class="content">
              <h1>Benji and SSS</h1>

            </div>
          </div>

        </div>
        <!-- card image -->

        <div class="card-content">
        <span class="card-title" style="color: #000; font-size: 20px; text-transform:uppercase; font-weight:600; " >TRANSMISION EN VIVO DEL PARTIDO</span>
        </div>
        <!-- card content -->

      </div>
    </div>
    <div class="col-md-6 ">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mLFOZRK5GDs" frameborder="0" allowfullscreen></iframe>
            <div class="content">
              <h1>Harrison</h1>

            </div>
          </div>

        </div>
        <!-- card image -->
        <div class="card-content">
        <span class="card-title" style="color: #000; font-size: 20px; text-transform:uppercase; font-weight:600; " >TRANSMISION EN VIVO DEL PARTIDO</span>
        </div>
        <!-- card content -->
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6 ">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/D4b_UAl8pDo" frameborder="0" allowfullscreen></iframe>
            <div class="content">
              <h1>Ray Smith and Kerryn Schofield</h1>

            </div>
          </div>

        </div>
        <!-- card image -->

        <div class="card-content">
          <span class="card-title" style="color: #000; font-size: 20px; text-transform:uppercase; font-weight:600; " >TRANSMISION EN VIVO DEL PARTIDO</span>
        

        </div>
        <!-- card content -->

      </div>
    </div>
    <div class="col-md-6 ">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/H56iR3188P0" frameborder="0" allowfullscreen></iframe>
            <div class="content">
              <h1>The Moonsets</h1>

            </div>
          </div>

        </div>
        <!-- card image -->

        <div class="card-content">
        <span class="card-title" style="color: #000; font-size: 20px; text-transform:uppercase; font-weight:600; " >TRANSMISION EN VIVO DEL PARTIDO</span>
        </div>
        <!-- card content -->

      </div>
    </div>
  </div><!--end row-->

</div><!--end container-->

	</div>
</section>

<br>
<br>
<br>

<form action="registrolive.php" method="POST">
<?php 
					if($_POST)
					{
						//echo"Formulario enviado!";
						/*Recibimos los datos desde el Form*/
						$Nombre = $_POST['Nombre'];
						$Email = $_POST['Email'];
						
						/*Validando los datos*/
						if(empty($Nombre))
						{
							echo"<h2>¡Porfavor digite el Nombre!</h2>";
						}
						if(empty($Email))
						{
							echo"<h2>¡Porfavor digite su Email!</h2>";
						}
						
						/*Verificamos de forma conjunto que no haya ningun campos 
						obligatorio vacio*/
						if( (!empty($Nombre)) && (!empty($Email))  )
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
								INSERT INTO news 
									(nombre, email)
								VALUES
									('$Nombre','$Email')
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
</form>

<br>


<?php
include_once("footer.php")

?>