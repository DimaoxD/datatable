<?php 
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienaventuranza IPS</title>
	<?php require_once "scripts.php";  ?>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="plugins/animate.css">
  	<link rel="stylesheet" href="plugins/slick/slick.css">
 	 <link rel="stylesheet" href="plugins/slick/slick-theme.css">
	  <link rel="icon" type="image/jpg" href="../extras/images/Favicon.jpg"/>
</head>

<style>
	@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
font-size: 3em;
}
.fa1 {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size:10px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}

.main-menu {
background:#2596BE;
border-right:2px solid black;
position:fixed;
top:0;
bottom:0;
height:100%;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:white;
font-family: open sans;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:16px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:0;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#000;
background-color:#eff6fb;
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}
		input[readonly]
		{
			background-color:#ccc;
		}
		select[readonly]
		{
			background-color:#ccc;
		}	
		.lista {
			list-style-type: none;
			width: 300px;
			height: auto;
			position: absolute;
			margin-top: 10px;
			margin-left: 10px;
		}

		.lista1 {
			padding: 10px;
            cursor: pointer;
            background-color: #009fa5; 
            border-bottom: 1px solid #d4d4d4; 
		}
		.lista2 {
			list-style-type: none;
			width: 300px;
			height: auto;
			position: absolute;
			margin-top: 10px;
			margin-left: 10px;
		}
		.lista3 {
			padding: 10px;
            cursor: pointer;
            background-color: #009fa5; 
            border-bottom: 1px solid #d4d4d4; 
		}

	
    </style>
</head>
<body>
<div class="preloader">
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
  </div>
  <main class="site-wrapper">
	<div class="container">
	<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="http://justinfarrow.com">
                        <i class="fa fa-home fa1 fa-2x"></i>
                        <span class="nav-text">
                            Inicio
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="http://localhost/datatable%20-%20copia/camas">
                        <i class="fa-regular fa-bed fa1 fa-2x"></i>
                        <span class="nav-text">
                            Camas
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="http://localhost/datatable%20-%20copia/referencias">
                       <i class="fa fa-book fa1 fa-2x"></i>
                        <span class="nav-text">
                            Bitacora
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="http://localhost/datatable%20-%20copia/solicitud">
                       <i class="fa fa-certificate fa1 fa-2x"></i>
                        <span class="nav-text">
                            Solicitudes o interconsulta
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="http://localhost/datatable%20-%20copia/defuncion">
                        <i class="fa fa-address-card fa1 fa-2x"></i>
                        <span class="nav-text">
                            Certificados de defuncion
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/datatable%20-%20copia/oxigeno">
                        <i class="fa fa-stethoscope fa1 fa-2x"></i>
                        <span class="nav-text">
                           Oxigeno
                        </span>
                    </a>
                </li>
                <li>
                   <a href="http://localhost/datatable%20-%20copia/phd">
                        <i class="fa fa-map-marker fa1 fa-2x"></i>
                        <span class="nav-text">
                            PHD
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/datatable%20-%20copia/imagenes">
                       <i class="fa fa-camera fa1 fa-2x"></i>
                        <span class="nav-text">
                            Imagenologia 
                        </span>
                    </a>
                </li>
				<li>
                    <a href="http://localhost/datatable%20-%20copia/dietas">
                       <i class="fa fa-cutlery fa1 fa-2x"></i>
                        <span class="nav-text">
                            Dietas 
                        </span>
                    </a>
                </li> 
				<li>
                    <a href="http://localhost/datatable%20-%20copia/Contrareferencia">
                       <i class="fa fa-refresh fa1 fa-2x"></i>
                        <span class="nav-text">
                            Contrareferencia 
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
<p>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left border-primary mb-3 " >
					<div class="card-header ">
Solicitudes de imagenologia</div>
					<div class="card-body">
						<span class="btn btn-dark" style="background-color: #009fa5;color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal">
							Crear nueva solicitud <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Crear nueva solicitud</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="frmnuevo" autocomplete="off">
						<label class="form-label">Cedula del paciente:</label>
						<input type="text" class="form-control input-sm" id="Cedula" name="Cedula" required>
						<label class="form-label">Nombre del paciente:</label>
						<input type="text" class="form-control input-sm" id="Nombre" name="Nombre" disabled>
						<label class="form-label">Numero de cama:</label>
						<input type="text" class="form-control input-sm" id="Cama" name="Cama" readonly>
						<label class="form-label">Fecha de solicitud:</label>
						<input type="date" class="form-control input-sm" id="Fecha" name="Fecha"  required>
						<label class="form-label">Orden:</label>
						<select class="form-select" id="Orden" name="Orden">
						<option selected>Selecciona una opcion</option>
						<option value="1">Ecografia</option>
						<option value="2">Radiografia</option>
						<option value="3">Radiologia intervencionista</option>
						<option value="4">Tomografia</option>
						<option value="5">Resonancia</option>
						<option value="6">Gamagrafia</option>
						<option value="7">Angiotac</option>
						<option value="8">Colangioresonancia</option>
						<option value="9">Fibrobroncoscopia</option>
						<option value="10">Doppler</option>
						</select>
						<label class="form-label">Detalle de la solicitud:</label>
						<input type="text" class="form-control input-sm" id="Detalle" name="Detalle">
						<hr>
						<label class="form-label" >Contraste</label>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="Contraste" id="Contraste" value="1">
  						<label class="form-check-label" for="Contraste">
    					Si
  						</label>
						</div>
						  <div class="form-check">
						<input class="form-check-input" type="radio" name="Contraste" id="Contraste" value="2">
  						<label class="form-check-label" for="Contraste">
    					No
  						</label>
						</div>
						<hr>
						<label class="form-label">¿Requiere ambulancia?</label>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="Ambulancia" id="Ambulancia" value="1">
  						<label class="form-check-label" for="Ambulancia">
    					Si
  						</label>
						</div>
						  <div class="form-check">
						<input class="form-check-input" type="radio" name="Ambulancia" id="Ambulancia" value="2">
  						<label class="form-check-label" for="Ambulancia">
    					No
  						</label>
						</div>
						<hr>
						<label class="form-label" for="file">Datos adjuntos</label>
						<input type="file" class="form-control input-sm" id="file" name="file" accept=".pdf" required/><br><br>
				<br>
				<button type="submit" name="submit" id="btnAgregarnuevo" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
<!-- Modal -->
	<div class="modal" id="modalEditar" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar orden</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="frmnuevoU" autocomplete="off">
						<input type="hidden"  id="idImagenes" name="idImagenes">
						<label class="form-label">Cedula del paciente:</label>
						<input type="text" class="form-control input-sm" id="CedulaU" name="CedulaU" disabled>
						<label class="form-label">Nombre del paciente:</label>
						<input type="text" class="form-control input-sm" id="NombreU" name="NombreU" disabled>
						<label class="form-label">Numero de cama:</label>
						<input type="text" class="form-control input-sm" id="CamaU" name="CamaU" disabled>
						<label class="form-label">Fecha de solicitud:</label>
						<input type="text" class="form-control input-sm" id="FechaU" name="FechaU" disabled>
						<label class="form-label">Orden:</label>
						<select class="form-select" id="OrdenU" name="OrdenU" disabled>
						<option selected>Selecciona una opcion</option>
						<option value="1">Ecografia</option>
						<option value="2">Radiografia</option>
						<option value="3">Radiologia intervencionista</option>
						<option value="4">Tomografia</option>
						<option value="5">Resonancia</option>
						<option value="6">Gamagrafia</option>
						<option value="7">Angiotac</option>
						<option value="8">Colangioresonancia</option>
						<option value="9">Fibrobroncoscopia</option>
						<option value="10">Doppler</option>
						</select>
						<label class="form-label">Detalle de la solicitud:</label>
						<input type="text" class="form-control input-sm" id="DetalleU" name="DetalleU" >
						<hr>
						<label class="form-label" >Contraste</label>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="ContrasteU" id="ContrasteU1" disabled>
  						<label class="form-check-label" for="ContrasteU">
    					Si
  						</label>
						</div>
						  <div class="form-check">
						<input class="form-check-input" type="radio" name="ContrasteU" id="ContrasteU2" disabled>
  						<label class="form-check-label" for="ContrasteU">
    					No
  						</label>
						</div>
						<hr>
						<label class="form-label">¿Requiere ambulancia?</label>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="AmbulanciaU" id="AmbulanciaU1" disabled>
  						<label class="form-check-label" for="Ambulancia">
    					Si
  						</label>
						</div>
						  <div class="form-check">
						<input class="form-check-input" type="radio" name="AmbulanciaU" id="AmbulanciaU2" disabled>
  						<label class="form-check-label" for="Ambulancia">
    					No
  						</label>
						</div>
						<hr>
						<label>Estado:</label>
						<select class="form-select" id="EstadoU" name="EstadoU">
						<option value="2">Aplazado</option>
						<option value="3">En proceso de especialista</option>
						<option value="5">Activo</option>
  						</select>
						<label>Proveedor</label>
						<input type="text" class="form-control input-sm" id="Proveedor" name="Proveedor" disabled>
						<br>
				<button type="submit" name="submit" id="btnActualizar" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
				
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal" id="modalCargar" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cambiar estado</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="frmCargar" autocomplete="off">
						<input type="hidden"  id="idImagenesB" name="idImagenesB">
						<input type="hidden" id="CedulaB" name="CedulaB">
						<label class="form-label" for="file">Datos adjuntos</label>
						<input type="file" class="form-control input-sm" id="fileU" name="fileU" accept=".pdf" required/><br><br>	
						
				<button type="submit" name="submit" id="btnActualizar" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
				
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
	<!--Modal-->
	<div class="modal" id="modalMotivo" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cancelar orden</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="frmMotivo" autocomplete="off">
						<input type="hidden"  id="idImagenesD" name="idImagenesD">
						<input type="hidden" id="CedulaD" name="CedulaD">
						<label class="form-label">Selecciona el motivo de cancelacion:</label>
						<select class="form-select" id="MCancelancion" name="MCancelancion">
						<option selected>Selecciona una opcion</option>
						<option value="1">Orden Medica</option>
						<option value="2">Egreso</option>
						<option value="3">Fallecido</option>
						<option value="4">Cuenta con examen previo</option>
						<option value="5">Inestable hemodinamicamente</option>
						<option value="6">No tiene preparacion</option>
						<option value="7">No cuenta con familiar</option>
						</select>	
						<br><br>
				<button type="submit" name="submit" id="btnActualizar" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
				
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal" id="modalVer" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ver orden</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="frmnuevoC" autocomplete="off">
						<input type="hidden"  id="idImagenesC" name="idImagenesC">
						<label class="form-label">Fecha de realizacion:</label>
						<input type="text" class="form-control input-sm" id="FecharB" name="FecharB" disabled>
						<label class="form-label">Cedula del paciente:</label>
						<input type="text" class="form-control input-sm" id="CedulaC" name="CedulaC" disabled>
						<label class="form-label">Nombre del paciente:</label>
						<input type="text" class="form-control input-sm" id="NombreB" name="NombreB" disabled>
						<label class="form-label">Numero de cama:</label>
						<input type="text" class="form-control input-sm" id="CamaB" name="CamaB" disabled>
						<label class="form-label">Fecha de solicitud:</label>
						<input type="text" class="form-control input-sm" id="FechaB" name="FechaB" disabled>
						<label class="form-label">Orden:</label>
						<select class="form-select" id="OrdenB" name="OrdenB" disabled>
						<option selected>Selecciona una opcion</option>
						<option value="1">Ecografia</option>
						<option value="2">Radiografia</option>
						<option value="3">Radiologia intervencionista</option>
						<option value="4">Tomografia</option>
						<option value="5">Resonancia</option>
						<option value="6">Gamagrafia</option>
						<option value="7">Angiotac</option>
						<option value="8">Colangioresonancia</option>
						<option value="9">Fibrobroncoscopia</option>
						<option value="10">Doppler</option>
						</select>
						<label class="form-label">Detalle de la solicitud:</label>
						<input type="text" class="form-control input-sm" id="DetalleB" name="DetalleB" disabled>
						<hr>
						<label class="form-label" >Contraste</label>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="ContrasteB" id="ContrasteB1" disabled>
  						<label class="form-check-label" for="ContrasteB">
    					Si
  						</label>
						</div>
						  <div class="form-check">
						<input class="form-check-input" type="radio" name="ContrasteB" id="ContrasteB2" disabled>
  						<label class="form-check-label" for="ContrasteB">
    					No
  						</label>
						</div>
						<hr>
						<label class="form-label">¿Requiere ambulancia?</label>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="AmbulanciaB" id="AmbulanciaB1" disabled>
  						<label class="form-check-label" for="AmbulanciaB">
    					Si
  						</label>
						</div>
						  <div class="form-check">
						<input class="form-check-input" type="radio" name="AmbulanciaB" id="AmbulanciaB2" disabled>
  						<label class="form-check-label" for="AmbulanciaB">
    					No
  						</label>
						</div>
						<hr>
						<label>Estado:</label>
						<select class="form-select" id="EstadoB" name="EstadoB" disabled>
						<option value="1">Realizado</option>
  						</select>
						<label>Proveedor</label>
						<input type="text" class="form-control input-sm" id="ProveedorB" name="ProveedorB" disabled>
						<br>
				<button type="submit" name="submit" id="btnActualizar" style="background-color: #009fa5;color: white; font-weight: bold;" class="btn btn-primary submitBtn">Agregar</button>
					</form>
				</div>
				<div class="modal-footer">
				
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modalVer2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ver orden</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
				</div>
				<div class="modal-body">
				<form enctype="multipart/form-data" action="" method="POST" id="frmCancelado" autocomplete="off">
						<input type="hidden"  id="idImageness" name="idImageness">
						<label class="form-label">Cedula del paciente:</label>
						<input type="text" class="form-control input-sm" id="Cedulaa" name="Cedulaa" disabled>
						<label class="form-label">Nombre del paciente:</label>
						<input type="text" class="form-control input-sm" id="Nombree" name="Nombree" disabled>
						<label class="form-label">Numero de cama:</label>
						<input type="text" class="form-control input-sm" id="Camaa" name="Camaa" disabled>
						<label class="form-label">Fecha de solicitud:</label>
						<input type="text" class="form-control input-sm" id="Fechaa" name="Fechaa" disabled>
						<label class="form-label">Orden:</label>
						<select class="form-select" id="Ordenn" name="Ordenn" disabled>
						<option selected>Selecciona una opcion</option>
						<option value="1">Ecografia</option>
						<option value="2">Radiografia</option>
						<option value="3">Radiologia intervencionista</option>
						<option value="4">Tomografia</option>
						<option value="5">Resonancia</option>
						<option value="6">Gamagrafia</option>
						<option value="7">Angiotac</option>
						<option value="8">Colangioresonancia</option>
						<option value="9">Fibrobroncoscopia</option>
						<option value="10">Doppler</option>
						</select>
						<label class="form-label">Detalle de la solicitud:</label>
						<input type="text" class="form-control input-sm" id="Detallee" name="Detallee" disabled>
						<hr>
						<label class="form-label" >Contraste</label>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="Contrastee" id="Contrastee1" readonly>
  						<label class="form-check-label" for="ContrasteB">
    					Si
  						</label>
						</div>
						  <div class="form-check">
						<input class="form-check-input" type="radio" name="Contrastee" id="Contrastee2" readonly>
  						<label class="form-check-label" for="ContrasteB">
    					No
  						</label>
						</div>
						<hr>
						<label class="form-label">¿Requiere ambulancia?</label>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="Ambulanciaa" id="Ambulanciaa1" readonly>
  						<label class="form-check-label" for="AmbulanciaB">
    					Si
  						</label>
						</div>
						  <div class="form-check">
						<input class="form-check-input" type="radio" name="Ambulanciaa" id="Ambulanciaa2" readonly>
  						<label class="form-check-label" for="AmbulanciaB">
    					No
  						</label>
						</div>
						<hr>
						<label>Estado:</label>
						<select class="form-select" id="Estadoo" name="Estadoo" disabled>
						<option value="4">Cancelado</option>
  						</select>
						<label>Proveedor</label>
						<input type="text" class="form-control input-sm" id="Proveedorr" name="Proveedorr" disabled>
						<label>Motivo de cancelacion</label>
						<select class="form-select" id="MCancelacionn" name="MCancelacionn" disabled>
						<option value="1">Orden Medica</option>
						<option value="2">Egreso</option>
						<option value="3">Fallecido</option>
						<option value="4">Cuenta con examen previo</option>
						<option value="5">Inestable hemodinamicamente</option>
						<option value="6">No tiene preparacion</option>
						<option value="7">No cuenta con familiar</option>
						</select>	
						<br>
					</form>
				</div>
				<div class="modal-footer">
				
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>
	</main>
	<script src="js/script.js"></script>
	<script src="plugins/jquery.nicescroll.min.js"></script>
<script src="plugins/isotope/isotope.pkgd.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
</body>
</html>




<script type="text/javascript"> //GUARDAR Y EDITAR DATOS
	$(document).ready(function(e) {
    $("#frmnuevo").on('submit', function(e){
    e.preventDefault(); 
        $.ajax({
            type: 'POST',
            url: 'procesos/agregar.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.submitBtn').attr("disabled","disabled");
                $('#frmnuevo').css("opacity", ".5");
            },
            success: function(data) {
                if(data.status){
                    $('#frmnuevo')[0].reset();
                    $('#tablaDatatable').load('tabla.php');
                    alertify.success("Se agrego con exito :D");
                    return; // Detenemos el código
                
            
        }else{        //En caso de que exista un error lo mostramose
            alertify.error(data.message);
            
            
            }
                       $('#frmnuevo').css("opacity","");
                         $(".submitBtn").removeAttr("disabled");
            
        }
        });
    });

	$("#frmnuevoU").on('submit', function(e){
    e.preventDefault(); 
        $.ajax({
            type: 'POST',
            url: 'procesos/actualizar.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.submitBtn').attr("disabled","disabled");
                $('#frmnuevo').css("opacity", ".5");
            },
            success: function(data) {
                if(data.status){
                    $('#frmnuevoU')[0].reset();
                    $('#tablaDatatable').load('tabla.php');
                    alertify.success("Se agrego con exito :D");
                    return; // Detenemos el código
                
            
    	 	   }else{        //En caso de que exista un error lo mostramose
            		alertify.error(data.message);
            
            
            }
                       $('#frmnuevoU').css("opacity","");
                         $(".submitBtn").removeAttr("disabled");
            
        }
        });
    });
	$("#frmCargar").on('submit', function(e){
    e.preventDefault(); 
        $.ajax({
            type: 'POST',
            url: 'procesos/cargar.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.submitBtn').attr("disabled","disabled");
                $('#frmCargar').css("opacity", ".5");
            },
            success: function(data) {
                if(data.status){
                    $('#frmCargar')[0].reset();
                    $('#tablaDatatable').load('tabla.php');
                    alertify.success("Se agrego con exito :D");
                    return; // Detenemos el código
                
            
    	 	   }else{        //En caso de que exista un error lo mostramose
            		alertify.error(data.message);
            
            
            }
                       $('#frmCargar').css("opacity","");
                         $(".submitBtn").removeAttr("disabled");
            
        }
        });
    });
	
    $("#frmMotivo").on('submit', function(e){
    e.preventDefault(); 
        $.ajax({
            type: 'POST',
            url: 'procesos/motivo.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.submitBtn').attr("disabled","disabled");
                $('#frmMotivo').css("opacity", ".5");
            },
            success: function(data) {
                if(data.status){
                    $('#frmMotivo')[0].reset();
                    $('#tablaDatatable').load('tabla.php');
                    alertify.success("Se agrego con exito :D");
                    return; // Detenemos el código
                
            
        }else{        //En caso de que exista un error lo mostramose
            alertify.error(data.message);
            
            
            }
                       $('#frmMotivo').css("opacity","");
                         $(".submitBtn").removeAttr("disabled");
            
        }
        });
    });

	   
	});
</script>
<script type="text/javascript"> //CARGAR TABLA
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">   //OBTENER DATOS Y ELIMINARLOS
	function agregaFrmActualizar(idImagenes){
		$.ajax({
			type:"POST",
			data:"idImagenes=" + idImagenes,
			url:"procesos/obtenDatos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idImagenes').val(datos['idImagenes']);
				$('#CedulaU').val(datos['Cedula']);
				$('#NombreU').val(datos['Nombres']);
				$('#CamaU').val(datos['Cama']);
				$('#FechaU').val(datos['Fecha']);
				$('#OrdenU').val(datos['Orden']);
				$('#EstadoU').val(datos['Estado']);
				$('#DetalleU').val(datos['Detalle']);
				$('#Proveedor').val(datos['Proveedor']);		
				if (datos['Contraste'] == 1) {
     			$("#ContrasteU1").prop("checked", true);
				 $("#ContrasteU2").prop("checked", false);
   				} else {
				$("#ContrasteU1").prop("checked", false);
     			$("#ContrasteU2").prop("checked", true); }		
				 if (datos['Ambulancia'] == 1) {
     			$("#AmbulanciaU1").prop("checked", true);
				 $("#AmbulanciaU2").prop("checked", false);
   				} else {
				$("#AmbulanciaU1").prop("checked", false);
     			$("#AmbulanciaU2").prop("checked", true); }		
			}
		});

		
	}
	function adjuntoFrm(idImagenesB) {
		$.ajax({
			type: "POST",
			data: "idImagenesB=" + idImagenesB,
			url: "procesos/adjuntoDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idImagenesB').val(datos['idRadiologia']);
				$('#CedulaB').val(datos['Cedula']);
				}
		});
	}
	function verFrm(idImagenesC) {
		$.ajax({
			type: "POST",
			data: "idImagenesC=" + idImagenesC,
			url: "procesos/verDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idImagenesC').val(datos['idImagenes']);
				$('#CedulaC').val(datos['Cedula']);
				$('#NombreB').val(datos['Nombres']);
				$('#CamaB').val(datos['Cama']);
				$('#FechaB').val(datos['Fecha']);
				$('#OrdenB').val(datos['Orden']);
				$('#EstadoB').val(datos['Estado']);
				$('#DetalleB').val(datos['Detalle']);
				$('#ProveedorB').val(datos['Proveedor']);		
				$('#FecharB').val(datos['FRealizacion']);	
				if (datos['Contraste'] == 1) {
     			$("#ContrasteB1").prop("checked", true);
				 $("#ContrasteB2").prop("checked", false);
   				} else {
				$("#ContrasteB1").prop("checked", false);
     			$("#ContrasteB2").prop("checked", true); }		
				 if (datos['Ambulancia'] == 1) {
     			$("#AmbulanciaB1").prop("checked", true);
				 $("#AmbulanciaB2").prop("checked", false);
   				} else {
				$("#AmbulanciaB1").prop("checked", false);
     			$("#AmbulanciaB2").prop("checked", true); }	
				}
		});
	}
	function motivoFrm(idImagenesD) {
		$.ajax({
			type: "POST",
			data: "idImagenesD=" + idImagenesD,
			url: "procesos/motivoDatos.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idImagenesD').val(datos['idRadiologia']);
				}
		});
	}
	function verFrm2(idImageness) {
		$.ajax({
			type: "POST",
			data: "idImageness=" + idImageness,
			url: "procesos/verDatos2.php",
			success: function(r) {
				datos = jQuery.parseJSON(r);
				$('#idImageness').val(datos['idRadiologia']);
				$('#Cedulaa').val(datos['Cedula']);
				$('#Nombree').val(datos['Nombres']);
				$('#Camaa').val(datos['Cama']);
				$('#Fechaa').val(datos['Fecha']);
				$('#Ordenn').val(datos['Orden']);
				$('#Estadoo').val(datos['Estado']);
				$('#Detallee').val(datos['Detalle']);
				$('#Proveedorr').val(datos['Proveedor']);		
				$('#MCancelacionn').val(datos['Motivo_Cancelacion']);	
				if (datos['Contraste'] == 1) {
     			$("#Contrastee1").prop("checked", true);
				 $("#Contrastee2").prop("checked", false);
   				} else {
				$("#Contrastee1").prop("checked", false);
     			$("#Contrastee2").prop("checked", true); }		
				 if (datos['Ambulancia'] == 1) {
     			$("#Ambulanciaa1").prop("checked", true);
				 $("#Ambulanciaa2").prop("checked", false);
   				} else {
				$("#Ambulanciaa1").prop("checked", false);
     			$("#Ambulanciaa2").prop("checked", true); }	
				}
		});
	}
</script>

<script>
	//LLAMAR NOMBRE
	document.getElementById("Cedula").onchange = function() {
		alerta()
	};


	function alerta() {
		// Creando el objeto para hacer el request
		var request = new XMLHttpRequest();
		request.responseType = 'json';

		// Objeto PHP que consultaremos
		request.open("POST", "componentes/search_data.php");

		// Definiendo el listener
		request.onreadystatechange = function() {
			// Revision si fue completada la peticion y si fue exitosa
			if (this.readyState === 4 && this.status === 200) {
				// Ingresando la respuesta obtenida del PHP
				document.getElementById("Nombre").value = this.response.Nombre;
				document.getElementById("Cama").value = this.response.Cama;
			}
		};
		// Recogiendo la data del HTML
		var myForm = document.getElementById("frmnuevo");
		var formData = new FormData(myForm);

		// Enviando la data al PHP
		request.send(formData);
	}
</script>
<script>
	function negarSolicitud(idImagenes){
		alertify.confirm('¿Quieres cancelar la solicitud?', function(
		
){ 

			$.ajax({
				type:"POST",
				data:"idImagenes=" + idImagenes,
				url:"procesos/negarSolicitud.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Solicitud negada");
					}else{
						alertify.error("No se pudo aprobar...");
					}
				}
			});

		}
		, function(){

		});
	}
	function aprobarSolicitud(idImagenes){
		alertify.confirm('¿Quieres aceptar la solicitud?', function(
		
){ 

			$.ajax({
				type:"POST",
				data:"idImagenes=" + idImagenes,
				url:"procesos/aprobarSolicitud.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Solicitud realizada!");
					}else{
						alertify.error("No se pudo procesar...");
					}
				}
			});

		}
		, function(){

		});
	}
	</script>