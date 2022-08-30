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

<form method="POST" action="{{ route('nueva') }}">

@csrf

<div align="left">
  <img src="https://previews.dropbox.com/p/thumb/ABrK_q27HQc7fTj87ueX3uK95P-jMoR7w9RfHAB4NbOiAmipKeDzp83ILkgzz1C872XNpgMOW3viywd-ShLV5dwdQJo3RqKIKYZrqXSSP8sXXq9q2CX2y6CgqJPSSjPYhSUOHlADckxMM4QcWtyFRFNZDkAKqD_FkdK7jYCAw6NIjLsfJSMcBWN7KR6QV_-SwGGIlvi-4jo8QVGXLU5W_gvME77JcMZFxX8rJY6YIR53N_J2bxfSCwwBjAZWd45atyAynquLoSMtUOFirKM5z2UTieSOyoZnP5zugUig3HFH7k1LXcW0QW0HYWGdaIEEMdSVlVW7WJtPKhZfYOenlaCVhkRFTDkweKiTIFr7IcpQSfIXhvX2Hu2LKB38QP9JAEk/p.png"
   alt="logo" style="width : 95px; heigth : 95px"> <FONT SIZE=3>Poli - Emergencias</FONT>
  <legend ><FONT SIZE=5></FONT></legend>
</div>
<!-- <legend align="left"><FONT SIZE=5>Poli - Emergencias</FONT></legend> -->
<h1 align="center"><FONT SIZE=5>Formulario de inicio de atención en Emergencia</FONT></h1>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<!-- <div class="container"> -->
  <div class="panel panel-success class">
    <div class="panel-body">
      <h3 class="text-on-pannel text-dark"> Datos personales</h3>


      <div class="container">
        <div class="row">

          <div class="col-4">
          <label for="name">Nacionalidad: </label>
            <input id="nacionalidadp" type="text" class="form-control @error('nacionalidadp') is-invalid @enderror" name="name" value="{{ old('nacionalidadp') }}" 
            required autocomplete="nacionalidadp" autofocus placeholder="Nacionalidad" style="width : 150px; heigth : 20px"> 
            
            @error('nacionalidadp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

          <div class="col-4">
          <label for="nombrep">Nombres: </label>
            <input id="nombrep" type="text" class="form-control @error('nombrep') is-invalid @enderror" name="name" value="{{ old('nombrep') }}" 
            required autocomplete="nombrep" autofocus placeholder="Nombres" style="width : 150px; heigth : 20px"> 
            @error('nombrep')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-4">
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
          </div>

        </div>
      </div>

      <br>

      <div class="container">
        <div class="row">

          <div class="col-4">
            <label for="cedulap">Tipo de identificación:  </label>
            <input id="cedulap" type="text" class="form-control @error('cedulap') is-invalid @enderror" name="cedulap" value="{{ old('cedulap') }}" 
            required autocomplete="cedulap" autofocus placeholder="Identificación" style="width : 150px; heigth : 20px"> 
            
            @error('cedulap')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

          <div class="col-4">
            <label for="apellidop">Apellidos:  </label>
            <input id="apellidop" type="text" class="form-control @error('apellidop') is-invalid @enderror" name="apellidop" value="{{ old('apellidop') }}"
             required autocomplete="apellidop" autofocus placeholder="Apellidos" style="width : 150px; heigth : 20px"> 
            
            @error('apellidop')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-4">
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
          </div>

        </div>
      </div>

      <br>

      <div class="container">
        <div class="row">

          <div class="col-4">
          <label for="cedulap">Numero de identificación:  </label>
          <input id="cedulap" type="text" class="form-control @error('cedulap') is-invalid @enderror" name="cedulap" value="{{ old('cedulap') }}" 
          required autocomplete="cedulap" autofocus placeholder="Numero de identificación" style="width : 150px; heigth : 20px"> 
          </div>

          <div class="col-4">
          <label for="fecha_nacp"> Fecha de nacimiento:</label>
            <input id="fecha_nacp" type="date" class="form-control @error('fecha_nacp') is-invalid @enderror" name="fecha_nacp" value="{{ old('fecha_nacp') }}" 
            required autocomplete="fecha_nacp" autofocus placeholder="Fecha de nacimiento" style="width : 150px; heigth : 20px">

            @error('fecha_nacp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-4">
            <label for="telfp">Número telefónico:</label>
            <input id="telfp" type="text" class="form-control @error('telfp') is-invalid @enderror" name="telfp" value="{{ old('telfp') }}" 
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
<!-- <div> -->


<!-- <div class="container"> -->
  <div class="panel panel-success class">
    <div class="panel-body">
      <h3 class="text-on-pannel text-dark"> Datos generales</h3>


      <div class="container">
        <div class="row">

          <div class="col-4">
          <label for="lugar_nacp">Lugar de nacimiento:</label> 
          <input id="lugar_nacp" type="text" class="form-control @error('lugar_nacp') is-invalid @enderror" name="lugar_nacp" value="{{ old('lugar_nacp') }}" 
          required autocomplete="lugar_nacp" autofocus placeholder="Lugar de nacimiento" style="width : 150px; heigth : 20px"> 

          @error('lugar_nacp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-4">
            <label for="tipo_segurop" >Tipo de seguro:  </label>
              <input list="tipo_seguro" id="tipo_segurop" name="tipo_segurop" placeholder="Tipo de seguro" 
              class="form-control @error('tipo_segurop') is-invalid @enderror" style="width : 150px; heigth : 20px"/>
                <datalist id="tipo_seguro">
                  <option value="Publico">
                  <option value="Privado">
                </datalist>
            </label>

            @error('tipo_segurop')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

        </div>
      </div>

      <br>

      <div class="container">
        <div class="row">
        <div class="col-4">

            <label for="grupo_cultural" >Grupo cultural:  </label>
              <input list="grupo_c" id="grupo_cultural" name="estado" placeholder="Grupo cultural" 
              class="form-control @error('grupo_cultural') is-invalid @enderror" style="width : 150px; heigth : 20px"/>
                <datalist id="grupo_c">
                  <option value="Mestizo">
                  <option value="Indigena">
                  <option value="Afrodescendiente">
                  <option value="Negro">
                </datalist>
            </label>

            @error('grupo_cultural')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-4">
            <label for="direccionp">Dirección de domicilio:</label>
            <input id="direccionp" type="text" class="form-control @error('direccionp') is-invalid @enderror" name="name" value="{{ old('direccionp') }}" 
            required autocomplete="direccionp" autofocus placeholder="Dirección de domicilio" style="width : 150px; heigth : 20px"> 

            @error('direccionp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

        </div>
      </div>

      <br>

      <div class="container">
        <div class="row">

        <div class="col-4">
            <label for="niv_instruccionp" >Nivel de instrucción:  </label>
              <input list="nivel_i" id="niv_instruccionp" name="niv_instruccionp" placeholder="Nivel de instrucción" 
              class="form-control @error('niv_instruccionp') is-invalid @enderror" style="width : 150px; heigth : 20px"/>
                <datalist id="nivel_i">
                  <option value="Básica">
                  <option value="Primaria">
                  <option value="Bachillerato">
                  <option value="Superior">
                </datalist>
            </label>

            @error('niv_instruccionp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-4">
            <label for="direccionp">Parroquia de domicilio:</label>
            <input id="direccionp" type="text" class="form-control @error('direccionp') is-invalid @enderror" name="direccionp" value="{{ old('direccionp') }}" 
            required autocomplete="direccionp" autofocus placeholder="Parroquia de domicilio" style="width : 150px; heigth : 20px">

            @error('direccionp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          
        </div>
      </div>

    </div>
  </div>
<!-- <div> -->

<!-- <div class="container"> -->
  <div class="panel panel-success class">
    <div class="panel-body">
      <h3 class="text-on-pannel text-dark"> Datos del contacto</h3>


      <div class="container">
        <div class="row">

        <div class="col-4">
            <label for="nombrecompletof">Nombre y apellido:</label>
            <input id="nombrecompletof" type="text" class="form-control @error('nombrecompletof') is-invalid @enderror" name="nombrecompletof" value="{{ old('nombrecompletof') }}" 
            required autocomplete="nombrecompletof" autofocus placeholder="Nombre del familiar" style="width : 150px; heigth : 20px"> 

            @error('nombrecompletof')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-4">
            <label for="parroquiaf">Parroquia de domicilio:</label>
            <input id="parroquiaf" type="text" class="form-control @error('parroquiaf') is-invalid @enderror" name="name" value="{{ old('parroquiaf') }}" 
            required autocomplete="parroquiaf" autofocus placeholder="Parroquia de domicilio" style="width : 150px; heigth : 20px"> 
        
            @error('parroquiaf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        

          <div class="col-4">
            <label for="tipo_familiar" >Parentesco:  </label>
              <input list="p_tipo" id="tipo_familiar" name="p_tipo" placeholder=" Parentesco" 
              class="form-control @error('tipo_familiar') is-invalid @enderror" style="width : 150px; heigth : 20px"/>
                <datalist id="p_tipo">
                  <option value="Madre">
                  <option value="Padre">
                  <option value="Hermano/a">
                  <option value="Tio/a">
                </datalist>
            </label>

            @error('tipo_familiar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
      </div>

      <br>

      <div class="container">
        <div class="row">

          <div class="col-4">
            <label for="direccionf">Dirección de domicilio:</label>
            <input id="direccionf" type="text" class="form-control @error('direccionf') is-invalid @enderror" name="direccionf" value="{{ old('direccionf') }}" 
            required autocomplete="direccionf" autofocus placeholder="Dirección de domicilio" style="width : 150px; heigth : 20px"> 

            @error('direccionf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-4">
            <label for="telefonof">Número telefónico:</label>
            <input id="telefonof" type="text" class="form-control @error('telefonof') is-invalid @enderror" name="telefonof" value="{{ old('telefonof') }}" 
            required autocomplete="telefonof" autofocus placeholder="Número telefónico" style="width : 220px; heigth : 20px">
            
            @error('telefonof')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

        </div>
      </div>

      <div class="container">
        <div class="row">
          <div align="right">
            <button type="submit" class="btn btn-success">Guardar 💾</button>
            &nbsp;
            &nbsp;
            <button type="button" class="btn btn-success">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
      
<!-- </div> -->



</form>
</div>

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