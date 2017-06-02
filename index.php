<?php include_once("controladores/controladorClientes.php");
      include_once("controladores/enrutador.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina tasas </title>
    <!-- Versión compilada y comprimida del CSS de Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <!-- Tema opcional -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="recursos/iconos/fonts/style.css">
    <link rel="stylesheet" href="recursos/css/stilo1.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <script src=" http://code.jquery.com/jquery-latest.js"></script>
    </head>
  <body>
    <header>
      <div class="titlulo-cabecera">
        <h1> Convertidor de tasas</h1>
      </div>

      <nav>
          <ul class="menu-principal">
            <li><a href="#"><span class="icon-home"></span></a></li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Facturas</a></li>
          </ul>

      </nav>
    </header>

    
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <label>Valor de la taza a convertir</label><br>
          <input type="text" name="valortasaconvertir" id="valor-convertir" required clas="form-control">
        

         <br> <br> 
         </div>
         <div class="col-md-3">
           <fieldset class="form-group">

              <label>Seleccione el tipo de tasa</label>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="nominal" checked>Nominal
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="anual" checked>Efectivo
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>Periodico
                </label>
              </div>
      

          </fieldset>
          <div class="form-group">
            <label for="exampleSelect1">Seleccione el tipo de periodo que la tasa remunera</label>
            <select class="form-control" id="select-periodo">
              <option value="0">SELECCIONE</option>
              <option value="1">Días</option>
              <option value="2">Meses</option>
              <option value="3">Bimestres</option>
              <option value="4">Trimestres</option>
              <option value="5">Semestres</option>
              <option value="6">Años</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleSelect1">Seleccione la forma de pago de interes</label>
            <select class="form-control" id="select-forma-pago" >
              <option value="0">SELECCIONE</option>
              <option value="1">Anticipado</option>
              <option value="2">Vencido</option>
            </select>
          </div>


   
          <!-- Indica una acción exitosa o positiva -->
          <button type="button" class="btn btn-success" onclick="ValidarTasa()" >Calcular</button>

          <!-- Muestra el botón de forma destacada para descubrir fácilmente
               el botón principal dentro de un grupo de botones -->
          <button type="button" class="btn btn-primary" onclick="LimpiarCampos()" >Limpiar</button>
        </div>

          <div class="col-md-9">
            
        <?php include_once('vistas/convertidor/tabla.php'); ?>

      <div class="col-md-12">
        <label>Valor de la taza a convertir</label><br>
        <input type="text" name="valortasaconvertir" id="valor-convertir" required clas="form-control">
      </div>


      <div class="col-md-6">
         <fieldset class="form-group" >
            <legend>Seleccione el tipo de tasa</legend>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="nominal" value="1" >Nominal
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="efectivo" value="2" >Efectivo
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="periodico" value="3" >Periodico
              </label>
            </div>
    
        </fieldset>
        <div class="form-group">
          <label for="exampleSelect1">Seleccione el tipo de periodo que la tasa remunera</label>
          <select class="form-control" id="select-periodo">
            <option value="0">SELECCIONE</option>
            <option value="1">Días</option>
            <option value="2">Meses</option>
            <option value="3">Bimestres</option>
            <option value="4">Trimestres</option>
            <option value="5">Semestres</option>
            <option value="6">Años</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleSelect1">Seleccione la forma de pago de interes</label>
          <select class="form-control" id="select-forma-pago" >
            <option value="0">SELECCIONE</option>
            <option value="1">Anticipado</option>
            <option value="2">Vencido</option>
          </select>
        </div>



      </div>

        <div class="col-md-6">
          




        </div>
      </div>
    </div>

    <footer>

    </footer>

    <!-- Le javascript
    ================================================== -->
    <script src="./js/Convertidor.js"></script>

    <script src="./js/convertidor-v1.js"></script>

    <script src="js/jquery-3.2.1.js" type="text/javascript"></script>


  </body>
</html>
