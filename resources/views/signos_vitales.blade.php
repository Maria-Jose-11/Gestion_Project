<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
  <link href=<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Poppins:wght@300&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/img/style.img" rel="">

  <style>
    .text-on-pannel {
  background: #fff none repeat scroll 0 0;
  height: auto;
  margin-left: 20px;
  padding: 3px 5px;
  position: absolute;
  margin-top: -47px;
  border-radius: 8px;
}

.panel {
  /* for text on pannel */
  margin-top: 27px !important;
}

.panel-body {
  padding-top: 30px !important;
}
  </style>

  <!-- =======================================================
  * Template Name: Bell - v4.6.0
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<div class="container">

<form method="POST" action="{{ route('signos') }}" enctype="multipart/form-data"
                      class="grid grid-cols-6 gap-6">

@csrf

<div align="left">
  <img src="https://previews.dropbox.com/p/thumb/ABrK_q27HQc7fTj87ueX3uK95P-jMoR7w9RfHAB4NbOiAmipKeDzp83ILkgzz1C872XNpgMOW3viywd-ShLV5dwdQJo3RqKIKYZrqXSSP8sXXq9q2CX2y6CgqJPSSjPYhSUOHlADckxMM4QcWtyFRFNZDkAKqD_FkdK7jYCAw6NIjLsfJSMcBWN7KR6QV_-SwGGIlvi-4jo8QVGXLU5W_gvME77JcMZFxX8rJY6YIR53N_J2bxfSCwwBjAZWd45atyAynquLoSMtUOFirKM5z2UTieSOyoZnP5zugUig3HFH7k1LXcW0QW0HYWGdaIEEMdSVlVW7WJtPKhZfYOenlaCVhkRFTDkweKiTIFr7IcpQSfIXhvX2Hu2LKB38QP9JAEk/p.png"
   alt="logo" style="width : 95px; heigth : 95px"> <FONT SIZE=3>Poli - Emergencias</FONT>
  <legend ><FONT SIZE=5></FONT></legend>
</div>
<!-- <legend align="left"><FONT SIZE=5>Poli - Emergencias</FONT></legend> -->
<!-- <h1 align="center"><FONT SIZE=5>Formulario de inicio de atención en Emergencia</FONT></h1> -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<!-- <div class="container"> -->
  <div class="panel panel-success class">
    <div class="panel-body">
      <h3 class="text-on-pannel text-dark"> Signos vitales</h3>


      <div class="container"  align="center">
        <div class="row">

          <div class="col-4">
          <label for="name">Temperatura C: </label>
            <input id="nacionalidadp" type="text" class="form-control @error('nacionalidadp') is-invalid @enderror" name="name" value="{{ old('nacionalidadp') }}" 
            required autocomplete="nacionalidadp" autofocus placeholder="Nacionalidad" style="width : 150px; heigth : 20px"> 
            
            @error('nacionalidadp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

          <div class="col-4">
          <label for="nombrep">Freuencia cardiaca: </label>
            <input id="nombrep" type="text" class="form-control @error('nombrep') is-invalid @enderror" name="name" value="{{ old('nombrep') }}" 
            required autocomplete="nombrep" autofocus placeholder="Nombres" style="width : 150px; heigth : 20px"> 
            @error('nombrep')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <!-- <div class="col-4">
            <label for="genero" >Género:  </label>
              <input list="genero_p" id="generop" name="generop" placeholder="Género" style="width : 150px; heigth : 20px" 
              class="form-control @error('generop') is-invalid @enderror"/>
                <datalist id="genero_p">
                  <option value="Masculino">
                  <option value="Femenino">
                </datalist>
            </label>

            @error('generop')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div> -->

        </div>
      </div>

      <br>

      <div class="container"  align="center">
        <div class="row">

          <div class="col-4">
            <label for="cedulap">Presión arterial:  </label>
            <input id="cedulap" type="text" class="form-control @error('cedulap') is-invalid @enderror" name="cedulap" value="{{ old('cedulap') }}" 
            required autocomplete="cedulap" autofocus placeholder="Identificación" style="width : 150px; heigth : 20px"> 
            
            @error('cedulap')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

          <div class="col-4">
            <label for="apellidop">Frecuencia respiratoria:  </label>
            <input id="apellidop" type="text" class="form-control @error('apellidop') is-invalid @enderror" name="apellidop" value="{{ old('apellidop') }}"
             required autocomplete="apellidop" autofocus placeholder="Apellidos" style="width : 150px; heigth : 20px"> 
            
            @error('apellidop')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <!-- <div class="col-4">
            <label for="estado_civilp" >Estado civil:  </label>
              <input list="estado" id="estado_civilp" name="estado_civilp" placeholder=" Estado civil" 
              class="form-control @error('estado_civilp') is-invalid @enderror" style="width : 150px; heigth : 20px"/>
                <datalist id="estado">
                  <option value="Soltero">
                  <option value="Casado">
                  <option value="Divorciado">
                  <option value="Viudo">
                </datalist>
            </label>

            @error('estado_civilp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div> -->

        </div>
      </div>
        </div>
      </div>
<br>


<!-- <div class="container"> -->
  <div class="panel panel-success class">
    <div class="panel-body">
      <h3 class="text-on-pannel text-dark">Tipo de atención</h3>


      <div class="container" align="center">
        <div class="row">

        <div class="col-4">
            <label for="estado_civilp" >Prioridad:  </label>
              <input list="estado" id="estado_civilp" name="estado_civilp" placeholder=" Estado civil" 
              class="form-control @error('estado_civilp') is-invalid @enderror" style="width : 150px; heigth : 20px"/>
                <datalist id="estado">
                  <option value="A">
                  <option value="B">
                  <option value="C">
                </datalist>
            </label>

            @error('estado_civilp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-4">
            <label for="estado_civilp" >Especialidad:  </label>
              <input list="estado" id="estado_civilp" name="estado_civilp" placeholder=" Estado civil" 
              class="form-control @error('estado_civilp') is-invalid @enderror" style="width : 150px; heigth : 20px"/>
                <datalist id="estado">
                  <option value="Adulto">
                  <option value="Pediatria">
                  <option value="Genicobstétrica">
                </datalist>
            </label>

            @error('estado_civilp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

          <div class="col-4">
            <label for="telfp">Tiempo de espera:</label>
            <input id="telfp" type="time" class="form-control @error('telfp') is-invalid @enderror" name="telfp" value="{{ old('telfp') }}" 
            required autocomplete="telfp" autofocus placeholder="Número telefónico" style="width : 150px; heigth : 20px"> 
        
            @error('telfp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        </div>
      </div>

    </div>
  </div>
  <div class="container">
        <div class="row">
          <div align="center">
            <button type="submit" class="btn btn-success"><h2> Enviar a sala de espera</h2></button>
          </div>
        </div>
      </div>
  </form>


      
</div>
      

  <br>
  <br>
      

<br>
<br>
<br>
<br>
    
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 
</body>

</html>