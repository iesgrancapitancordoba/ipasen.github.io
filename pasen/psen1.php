
<!doctype html>
<html lang="es-ES" class="d-print-block">
<head>
<!-- Required meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Gestión de los centros dependientes de la Junta de Andalucía.">
<!-- Favicon -->
<link rel="icon"  type="image/x-icon"  href="../images/temas/seneca/favicons/favicon.ico">
<link rel="shortcut icon" href="../images/temas/seneca/favicons/favicon.ico" type="image/x-icon" />

<link rel="apple-touch-icon" sizes="57x57" href="../images/temas/seneca/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="57x57" href="../images/temas/seneca/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../images/temas/seneca/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/temas/seneca/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../images/temas/seneca/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/temas/seneca/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../images/temas/seneca/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../images/temas/seneca/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../images/temas/seneca/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../images/temas/seneca/favicons/apple-icon-180x180.png">

<link rel="icon" type="image/png" sizes="192x192" href="../images/temas/seneca/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/temas/seneca/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../images/temas/seneca/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/temas/seneca/favicons/favicon-16x16.png">

<link rel="manifest" href="../images/temas/seneca/favicons/manifest.json">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../images/temas/seneca/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<title>:: SENECA.CED.JUNTA DE ANDALUCÍA ::</title>
<!-- dependencias CSS -->
<link href="../include/v2/comun/general/main.css" rel="stylesheet"  type="text/css" data-cssinit >
<link href="../include/v2/paginas/pantalla-inicio.css" rel="stylesheet"  type="text/css" data-cssremovable >
<link href="../scripts/lib/fullcalendar-v4/core/main.min.css" rel="stylesheet"  type="text/css" data-cssremovable >
<link href="../scripts/lib/fullcalendar-v4/bootstrap/main.min.css" rel="stylesheet"  type="text/css" data-cssremovable >
<link href="../scripts/lib/fullcalendar-v4/timegrid/main.min.css" rel="stylesheet"  type="text/css" data-cssremovable >
<link href="../scripts/lib/fullcalendar-v4/daygrid/main.min.css" rel="stylesheet"  type="text/css" data-cssremovable >
<link href="../scripts/lib/fullcalendar-v4/list/main.min.css" rel="stylesheet"  type="text/css" data-cssremovable >
<link href="../include/pasen/inicioPasen.css" rel="stylesheet"  type="text/css" data-cssremovable >
<link href="../include/v2/temas/pasen/espec.css" rel="stylesheet"  type="text/css" data-cssend >
<script>
var interfazPresentacion = (function(){
	var codigoInterfaz="PASEN";
	var dirImagen="../images/temas/pasen";
	var pagInicio="../acciones/oaYm2wdwqhuIZf_c9bwS-Q";
	function _getCodigoInterfaz() {
		return codigoInterfaz;
	}
	function _getDirectorioImagenes() {
		return dirImagen;
	}
	function _getPaginaInicio() {
		return pagInicio;
	}
	return {
	  getCodigoInterfaz:_getCodigoInterfaz,
	  getDirectorioImagenes:_getDirectorioImagenes,
	  getPaginaInicio:_getPaginaInicio
	};
})();
</script>
<script>window.ID_COD_PAGINAS = '6nHxv39w-wKtyj05Qi_pZaR6VNbyhO0r5BfjY8QwSnb3jdUnA9UTOhG0bM4TW4Wn'</script>
<!-- Carga en paralelo de js, con control de dependencias -->
<!--  //TODO: incluir parámetros para control de caché? data-nocache=\"${noChache}\"  -->
<script id="mainscript" data-main="../scripts/main" data-urlargs="20220408" src="../scripts/lib/requirejs/require.js"></script>
<!-- dependencias javascript -->
<script>
function _initDeps(){
GestorDependencias.setDependenciasComunes(["senecaresp", "botonProceso", "buscar-imprimir", "checksum", "Complementadores", "ControlCambio", "Fecha", "Generales", "hashtable", "md5", "menu_llamada", "ParamDeshabilitados", "FormateadorNumeroDecimal", "ObjetosDatos", "String", "ValidacionCampo", "ValidacionColumnaEditable", "validaciones", "VentanaEmergente"]);
GestorDependencias.setDependenciasPagina(["llamadaLayer", "@fullcalendar/core", "@fullcalendar/interaction", "@fullcalendar/bootstrap", "@fullcalendar/daygrid", "@fullcalendar/timegrid", "@fullcalendar/list", "@fullcalendar/es", "agenda", "AnosAcademicos", "navegacion"]);
GestorDependencias.setDependenciasEspecificas(["lib/componentes/v2/inicio"]);
}
</script>

<script>
function _initJs() {

	window.ns=true;
	//	GestorDependencias.setFuncionInicializacion(new function() {
	//	console.log('Ejecutando scripts de inicialización');
	window.valPan = new Hashtable();
	Navegacion.setContextoURL('componentes/v2/');
Navegacion.addEntradaNavegacion('93KKGgl5FLLJXiSZvAi3Zg', 0, 'C3-_pxRj0icx1m3x6JeUEg');

try {
window.ns= (document.layers)?true:false;
window.ie=(document.all)?true:false;
if(top.barraNavegacion) {
  top.barraNavegacion.inicioProcesadoPag= new Date();
}
} catch(e) {Navegacion.setError(e);}
try {
if(top.barraNavegacion && typeof (top.barraNavegacion.notificaError) == "function") {
  window.onerror = top.barraNavegacion.notificaError;
}
} catch(e) {Navegacion.setError(e);}

window.ayuda = function ayuda() { 
 window.open("../ayudas/sin_ayuda.html","Ayuda","location=0,menubar=0,scrollbars=2,toolbar=0,width=620,height=500,top=10") 
 }
window.datosAgenda = {"mapeador":"mapeadorAgendaUsuario","datos":{"identificador":"AGENDA","titulo":"Agenda","vista":"month","listaEventos":[{"titulo":"Votaciones Consejo Escolar Sector Padres, Madres y Tutores","descripcion":"La mesa estará en el Aula Polivalente, frente a la Sala de ...","ubicacion":"","fechaInicio":{"fechaPropia":"nov 17, 2021","separador":"/"},"fechaFin":{"fechaPropia":"nov 17, 2021","separador":"/"},"horaInicio":"15:00","horaFin":"20:00","esDiacompleto":false,"esFestivo":false,"urlEnlace":"javascript:detalleAgenda(\"2278842\",\"N\")","prioridad":3},{"titulo":"Día de la Hispanidad","descripcion":"Día de la Hispanidad","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"oct 12, 2021","separador":"/"},"fechaFin":{"fechaPropia":"oct 12, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Fiesta Local","descripcion":"Fiesta Local","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"oct 25, 2021","separador":"/"},"fechaFin":{"fechaPropia":"oct 25, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Día de Todos los Santos","descripcion":"Día de Todos los Santos","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"nov 1, 2021","separador":"/"},"fechaFin":{"fechaPropia":"nov 1, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Día de la Constitución","descripcion":"Día de la Constitución","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"dic 6, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 6, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Día no lectivo provincial","descripcion":"Día no lectivo provincial","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"dic 7, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 7, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Día de la Inmaculada Concepción","descripcion":"Día de la Inmaculada Concepción","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"dic 8, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 8, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"dic 23, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 23, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"dic 24, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 24, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"dic 27, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 27, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"dic 28, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 28, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"dic 29, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 29, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"dic 30, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 30, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"dic 31, 2021","separador":"/"},"fechaFin":{"fechaPropia":"dic 31, 2021","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"ene 3, 2022","separador":"/"},"fechaFin":{"fechaPropia":"ene 3, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"ene 4, 2022","separador":"/"},"fechaFin":{"fechaPropia":"ene 4, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"ene 5, 2022","separador":"/"},"fechaFin":{"fechaPropia":"ene 5, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Día de la Epifanía","descripcion":"Día de la Epifanía","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"ene 6, 2022","separador":"/"},"fechaFin":{"fechaPropia":"ene 6, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Navidad","descripcion":"Vacaciones de Navidad","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"ene 7, 2022","separador":"/"},"fechaFin":{"fechaPropia":"ene 7, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Día de la Comunidad Educativa","descripcion":"Día de la Comunidad Educativa","ubicacion":"Provincial","fechaInicio":{"fechaPropia":"feb 25, 2022","separador":"/"},"fechaFin":{"fechaPropia":"feb 25, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Día de Andalucía","descripcion":"Día de Andalucía","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"feb 28, 2022","separador":"/"},"fechaFin":{"fechaPropia":"feb 28, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Semana Santa","descripcion":"Vacaciones de Semana Santa","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"abr 11, 2022","separador":"/"},"fechaFin":{"fechaPropia":"abr 11, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Semana Santa","descripcion":"Vacaciones de Semana Santa","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"abr 12, 2022","separador":"/"},"fechaFin":{"fechaPropia":"abr 12, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Vacaciones de Semana Santa","descripcion":"Vacaciones de Semana Santa","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"abr 13, 2022","separador":"/"},"fechaFin":{"fechaPropia":"abr 13, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Jueves Santo","descripcion":"Jueves Santo","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"abr 14, 2022","separador":"/"},"fechaFin":{"fechaPropia":"abr 14, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Viernes Santo","descripcion":"Viernes Santo","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"abr 15, 2022","separador":"/"},"fechaFin":{"fechaPropia":"abr 15, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Día del Trabajo","descripcion":"Día del Trabajo","ubicacion":"Andalucia","fechaInicio":{"fechaPropia":"may 2, 2022","separador":"/"},"fechaFin":{"fechaPropia":"may 2, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Fiesta Escolar","descripcion":"Fiesta Escolar","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"may 26, 2022","separador":"/"},"fechaFin":{"fechaPropia":"may 26, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1},{"titulo":"Fiesta Escolar","descripcion":"Fiesta Escolar","ubicacion":"Localidad","fechaInicio":{"fechaPropia":"may 27, 2022","separador":"/"},"fechaFin":{"fechaPropia":"may 27, 2022","separador":"/"},"horaInicio":"00:01","horaFin":"23:59","esDiacompleto":true,"esFestivo":true,"prioridad":-1}]}};
window.identificador = 'AGENDA';
listaEventos =  initAgenda(datosAgenda,identificador,false,true);
try{
}catch(e){Navegacion.setError(e);}
try{
}catch(e){Navegacion.setError(e);}
try{
managerAnoAcademico = new AnosAcademicosManager();
managerAnoAcademico.add( 2027, '01/09/2027', '31/08/2028' );
managerAnoAcademico.add( 2026, '01/09/2026', '31/08/2027' );
managerAnoAcademico.add( 2025, '01/09/2025', '31/08/2026' );
managerAnoAcademico.add( 2024, '01/09/2024', '31/08/2025' );
managerAnoAcademico.add( 2023, '01/09/2023', '31/08/2024' );
managerAnoAcademico.add( 2022, '01/09/2022', '31/08/2023' );
managerAnoAcademico.add( 2021, '01/09/2021', '31/08/2022' );
managerAnoAcademico.add( 2020, '01/09/2020', '31/08/2021' );
managerAnoAcademico.add( 2019, '01/09/2019', '31/08/2020' );
managerAnoAcademico.add( 2018, '01/09/2018', '31/08/2019' );
managerAnoAcademico.add( 2017, '01/09/2017', '31/08/2018' );
managerAnoAcademico.add( 2016, '01/09/2016', '31/08/2017' );
managerAnoAcademico.add( 2015, '01/09/2015', '31/08/2016' );
managerAnoAcademico.add( 2014, '01/09/2014', '31/08/2015' );
managerAnoAcademico.add( 2013, '01/09/2013', '31/08/2014' );
managerAnoAcademico.add( 2012, '01/09/2012', '31/08/2013' );
managerAnoAcademico.add( 2011, '01/09/2011', '31/08/2012' );
managerAnoAcademico.add( 2010, '01/09/2010', '31/08/2011' );
managerAnoAcademico.add( 2009, '01/09/2009', '31/08/2010' );
managerAnoAcademico.add( 2008, '01/09/2008', '31/08/2009' );
managerAnoAcademico.add( 2007, '01/09/2007', '31/08/2008' );
managerAnoAcademico.add( 2006, '01/09/2006', '31/08/2007' );
managerAnoAcademico.add( 2005, '01/09/2005', '31/08/2006' );
managerAnoAcademico.add( 2004, '01/09/2004', '31/08/2005' );
managerAnoAcademico.add( 2003, '01/09/2003', '31/08/2004' );
managerAnoAcademico.add( 2002, '01/09/2002', '31/08/2003' );
managerAnoAcademico.add( 2001, '01/09/2001', '31/08/2002' );
managerAnoAcademico.add( 2000, '01/09/2000', '31/08/2001' );
managerAnoAcademico.add( 1999, '01/09/1999', '31/08/2000' );
managerAnoAcademico.add( 1998, '01/09/1998', '31/08/1999' );
managerAnoAcademico.add( 1997, '01/09/1997', '31/08/1998' );
managerAnoAcademico.add( 1996, '01/09/1996', '31/08/1997' );
managerAnoAcademico.add( 1995, '01/09/1995', '31/08/1996' );
managerAnoAcademico.add( 1994, '01/09/1994', '31/08/1995' );
managerAnoAcademico.add( 1993, '01/09/1993', '31/08/1994' );
managerAnoAcademico.add( 1992, '01/09/1992', '31/08/1993' );
managerAnoAcademico.add( 1991, '01/09/1991', '31/08/1992' );
managerAnoAcademico.add( 1990, '01/09/1990', '31/08/1991' );
managerAnoAcademico.add( 1989, '01/09/1989', '31/08/1990' );
}catch(e){Navegacion.setError(e);}
try{
  cambiaEstadoMensajeria(true);
}catch(e){Navegacion.setError(e);}
try{
Navegacion.setFuncionInicio(undefined);
Navegacion.setFuncionFinal(undefined);
top.mensajeVolver_ = 'Algún elemento de la pantalla ha cambiado; ¿descartar cambios?';
$(Navegacion.doFuncionInicio);
top.checkSumInicialFormulario_='';
  var existeFuncionChecksum = typeof (calculaCheckSum) == "function";
  if (existeFuncionChecksum) {
    $(calculaCheckSumDiferido);
  }else {
    checkSumInicialFormulario_='';
  }
if(top.inferior.menu) {
  var existeFuncionTiempo = typeof (top.inferior.menu.calculaTiempoUltimaLlamada) == "function";
  if(existeFuncionTiempo) {
    top.inferior.menu.calculaTiempoUltimaLlamada();
  }
}
  ///////// FUNCIÓN PARA INICIALIZAR EL TIEMPO DE SESIÓN ////////////
  window.inicializaTiempoSesion = function inicializaTiempoSesion() {
  		var tiempo = 2000000;
  		var t_aviso = (2 * 60 * 1000); // Mostraremos el reloj cuando queden 2 minutos
  		$.fn.clearAllTimeOuts(top.timeoutSesionIds); // Eliminamos todos los avisos anteriores si se han quedado activos
  		top.timeoutSesionIds.push(top.setTimeout(function () { $.fn.avisoCaducidadSesion({'counter':  2 }, Navegacion.mantenerSesion); }, (tiempo-t_aviso)));

  } 
  inicializaTiempoSesion(); 
  $('form').find(':visible:enabled:first').focus(); 
}catch(e){Navegacion.setError(e);}

	if (!window.volver) {
		window.volver = Navegacion.volver;
	}

}


</script>


</head>
<body class="snc-load-full d-print-block"> 
 <!-- CABECERA -->
 <header>
    <nav id="cabecera-SNC" class="navbar fixed-top d-print-none">

        <!-- LOGO -->
        <div class="d-block navbar-brand-block" style="max-width: 290px;">
            <button class="menuMovil"><i class="fa fa-bars"></i></button>
            <a class="navbar-brand" href="#" onclick="javascript:top.Navegacion.cargarTodo(interfazPresentacion.getPaginaInicio())" aria-label="inicio">
      			<img src="../images/temas/pasen/logo.png" alt="logo">
            </a>
        </div>
        <!-- .EOC LOGO -->

        <!-- BOTONERA SUPERIOR -->
        <div id="bonoteraSuperior-SNC" class="d-flex flex-row justify-content-center">

            <a class="btn" href="javascript:top.Navegacion.llamadaUrl(interfazPresentacion.getPaginaInicio())" data-toggle="tooltip" data-placement="bottom" title="Inicio" aria-label="Inicio">
                <i class="fa fa-home"></i>
            </a>
            
            <a id="menuComunicaciones-SNC" class="btn" href="javascript:top.Navegacion.llamada_desde_otro_nivel('RegMenEnt', 1, '&L_ARCHIVADOS=N', true)" data-toggle="tooltip" data-placement="bottom" title="Comunicaciones: Tiene Mensajes Pendientes" aria-label="Comunicaciones: Tiene Mensajes Pendientes">
                <i class="fas fa-envelope"></i>
                <span class="fas fa-exclamation badge badge-danger badge-comunicaciones text-center"></span>
            </a>                                    

            <a class="btn" href="javascript:top.Navegacion.llamada_desde_otro_nivel('ArbDocumentos', 1, null, true)" data-toggle="tooltip" data-placement="bottom" title="Documentos que se pueden Pedir" aria-label="Documentos que se pueden Pedir">
                <i class="fa fa-folder-open"></i>
            </a>

            <a class="btn" href="javascript:imprimir()" data-toggle="tooltip" data-placement="bottom" title="Imprimir" aria-label="Imprimir">
                <i class="fa fa-print"></i>
            </a>

            <a class="btn" href="javascript:top.Navegacion.llamada_desde_otro_nivel('RegDocSol', 1, null, true)" data-toggle="tooltip" data-placement="bottom" title="Documentos Solicitados" aria-label="Documentos Solicitados">
                <i class="fa fa-copy"></i>
            </a>            
            
            <a class="btn" href="https://www.juntadeandalucia.es/educacion/portals/web/ced/contacto/seneca" target="_blank" data-toggle="tooltip" data-placement="bottom" title="CAU" aria-label="CAU">
                <i class="fas fa-phone-volume"></i>
            </a>            
            
			<!-- MENÚ PERFIL USUARIO -->
			<div id="menuPerfil-SNC" class="btn right-dropdow-menu">
				
				<!-- DROPDOWN BOTON  -->
				<button class="btn btn-secondary dropdown-toggle float-left" type="button" data-placement="right" title="Liria Piqueras, Jesús Rafael
                           	(Tutor/a Legal)
                         I.E.S. - Gran Capitán (Córdoba - Córdoba)
                        Servidor: svr736" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="cambio de perfil" data-original-title="Liria Piqueras, Jesús Rafael
                           	(Tutor/a Legal)
                        , I.E.S. - Gran Capitán (Córdoba - Córdoba)
                        	Servidor: svr736">
					<span class="imagen-perfil" style="background-image: url('../images/temas/pasen/nouser.jpg')"></span>
					<!-- CAJA INFO USUARIO -->
					<span class="info-perfil">
						<span>
							<strong>Liria Piqueras, Jesús Rafael</strong><br>							
	                           	(Tutor/a Legal)
						</span>
						<br>
						<span>I.E.S. - Gran Capitán (Córdoba - Córdoba)</span>
					</span>
					<!-- .EOC CAJA INFO USUARIO -->
				</button>
				<!-- .EOC DROPDOWN BOTON -->

				<!-- DROPDOWN OPCIONES MENU  -->
				<div class="dropdown-menu">
					<div class="dropdown-header">Menú de Usuario
						<i class="fa fa-times"></i>
					</div>
					
					<div class="d-flex flex-row align-items-center">
                        <!-- CAJA INFO INTERNA  -->
                        <div class="infoUsuario-SNC">
                            <span>
                            	<span class="clipboard-copy" onclick="javascript:$.fn.copyToClipboard($(this).text(), $('.info-perfil'));">
                                	<strong>Liria Piqueras, Jesús Rafael</strong>
                                </span>
                                <br>                                
                                	<span class="clipboard-copy" onclick="javascript:$.fn.copyToClipboard($(this).text(), $('.info-perfil'));">(Tutor/a Legal)</span>
                                </span>
                            </span>
                            
                            <br>
                            
                            <span class="clipboard-copy" onclick="javascript:$.fn.copyToClipboard($(this).text(), $('.info-perfil'));">I.E.S. - Gran Capitán (Córdoba - Córdoba)</span>
                        </div>
                        <!-- .EOC CAJA INFO INTERNA  -->
					</div>
					
					<div class="dropdown-wrapper">
                    	<a class="dropdown-item" href="javascript:top.Navegacion.llamada_desde_otro_nivel('CambUsuClave', 1, null, true)">Mis Datos</a>
                    	<h6 class="dropdown-subheader">Cambio de Perfil</h6>
				 		<a  class="dropdown-item" href="javascript:Navegacion.llamadaUrl('cambiaPerfil.jsp?perfilSalto=LEk14txugfS_z-MOkRcZ9Q');">Tutor/a Legal</a>
					</div>
					<a class="dropdown-item" href="javascript:logout()"><i class="fa fa-power-off"></i> Salir</a>					
				</div>
				<!-- .EOC DROPDOWN OPCIONES MENU  -->

       		 </div>
       		 <!-- .EOC MENÚ PERFIL USUARIO -->
       		 
       		 <!-- MENÚ CONFIGURACIÓN USUARIO -->
			 <div id="menuConfiguracion-SNC" data-placement="bottom" title="Personalizar Interfaz" aria-label="personalizar interfaz" class="">
                <a href="#" class="btn spin-animation dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cog" aria-hidden="true"></i>
                </a>
             	<div class="dropdown-menu dropdown-menu-right">
                	<div class="dropdown-header">Configuración</div>
                    <div class="dropdown-wrapper px-4 pt-1">
                        <h6 class="text-center">Tamaño de Letra</h6>
                        <div class="interfaceFontSizeTool">
                            <a href="javascript:void(0)" class="btn ampliar-fuente" data-toggle="tooltip" data-placement="bottom" aria-label="ampliar fuente" data-original-title="Ampliar Fuente"><i class="fas fa-plus" style="font-size: 8px; position: absolute; top:9px; left:5px;"></i><i class="fas fa-font"></i></a><a href="javascript:void(0)" class="btn restaurar-fuente" data-toggle="tooltip" data-placement="bottom" aria-label="volver al tamañao inicial" data-original-title="Volver al Tamaño Inicial"><i class="fas fas fa-sync-alt"></i></a><a href="javascript:void(0)" class="btn reducir-fuente" data-toggle="tooltip" data-placement="bottom" aria-label="reducir fuente" data-original-title="Reducir Fuente"><i class="fas fa-minus" style="font-size: 8px; position: absolute; top:9px; left:5px;"></i><i class="fas fa-font"></i></a></div>
					</div>
					<div class="dropdown-wrapper px-4 pt-1">
                            <h6 class="text-center">Temas Disponibles</h6>
                            <div class="themesTool">
                                <div class="radio-group">
                                    <div class="form-check theme-link" data-theme="pasen">
                                        <input class="form-check-input" type="radio" name="" value="" checked="checked">
                                        <label class="form-check-label label-default" for="inputRef">
                                            Predeterminado
                                        <ul class="list-unstyled list-inline">
                                        	<li class="list-inline-item primario"></li>
                                            <li class="list-inline-item secundario"></li>
                                            <li class="list-inline-item terciario"></li>
                                            <li class="list-inline-item activo"></li>
                                        </ul>
                                        </label>
                                    </div>                                	
                                    <div class="form-check theme-link" data-theme="pasen-monocromo">
                                        <input class="form-check-input" type="radio" name="" value="" >
                                        <label class="form-check-label label-default" for="inputRef">
                                            Monocromo
                                        <ul class="list-unstyled list-inline">
                                        	<li class="list-inline-item primario"></li>
                                            <li class="list-inline-item secundario"></li>
                                            <li class="list-inline-item terciario"></li>
                                            <li class="list-inline-item activo"></li>
                                        </ul>
                                        </label>
                                    </div>                                	
                                    <div class="form-check theme-link" data-theme="pasen-protanopia">
                                        <input class="form-check-input" type="radio" name="" value="" >
                                        <label class="form-check-label label-default" for="inputRef">
                                            Daltonismo
                                        <ul class="list-unstyled list-inline">
                                        	<li class="list-inline-item primario"></li>
                                            <li class="list-inline-item secundario"></li>
                                            <li class="list-inline-item terciario"></li>
                                            <li class="list-inline-item activo"></li>
                                        </ul>
                                        </label>
                                    </div>                                	
                        		</div>
                    		</div>
					</div>
					<div class="dropdown-wrapper px-4 pt-1">                    		
						    <h6 class="text-center">Vista Compacta</h6>
							<div class="form-group ">
								<div id="vistacompacta_control" class="form-check-sliding">
									<span>No</span>
									<input id="vcompacta" name="vistacompacta" type="checkbox" value="true" >
									<label for="vcompacta" class="label-primary"></label>
									<span>Sí</span>
								</div>								
							</div>
                		</div>
                	</div>
		 	 	</div>
     		 </div>
       		 <!-- .EOC MENÚ CONFIGURACIÓN USUARIO -->		 

        </div>
        <!-- .EOC BOTONERA SUPERIOR -->
    </nav>
 </header>
 <!-- .EOC CABECERA -->   <!-- SIDEBAR MENU -->
    <div id="menuPrincipal-SNC" class="d-print-none sidebar sidebar-scroll menu-pasen">
        <div class="nav-container">
            <nav>
                <div class="nav nav-header">
                    <!-- NAV TITLE -->
                    <h4>
                        <a href="#" id="sidebar-collapse-btn" title="Minimizar Menú" aria-label="Minimizar Menú"></a>
                        <span>Menú Principal</span>
                    </h4>
                    <!-- .EOC NAV TITLE -->

		<!-- PERFILES PASEN VARIOS -->
		<div class="varios-perfiles w-100">
			<div id="perfiles-alumnos-btn" class="perfil-estudio d-flex align-items-center" aria-haspopup="true" aria-expanded="false" data-placement="top" data-original-title="Cambio de Alumno/a">
				<div class="imagen-alumno" style="background-image: url('alumnos/VerFotAlu.jsp?X_ALUMNO=HTTH7H_agrTDE7Olvr7mCA')"></div>
				<div class="datos-centro flex-fill">
						<strong>Aleksia David Terrones </strong>
					<br>
					4º de E.S.O.
					<br>
					I.E.S. - Gran Capitán
				</div>
					<i class="fas fa-bars"></i>
			</div>
		</div>
		<!-- .EOC PERFILES PASEN VARIOS -->
		<!-- NAV TABS -->
		<ul class="nav nav-tabs d-flex flex-row align-items-end" role="tablist">
        	<!-- TAB OCULTO CUANDO SIDEBAR EXPANDIDO / VISIBLE CUANDO SIDEBAR COLAPSADO -->
            <li class="nav-item tab-perfiles-alumnos">
                <a class="nav-link" data-toggle="tab" href="#menupasen" role="tab" data-placement="top" title="" aria-label="menu pasen" aria-hidden="true" data-original-title="Menú Pasen">
                </a>
            </li>
			<li class="nav-item tab-perfiles-alumnos">
                <a class="nav-link" data-toggle="tab" href="#perfilesalumnos" role="tab" data-placement="top" title="" aria-label="perfiles alumnos" aria-hidden="true" data-original-title="Perfiles Alumnos">
                </a>
            </li>
            <!-- .EOC TAB OCULTO CON EL SIDEBAR EXPANDIDO / VISIBLE CON EL SIDEBAR COLAPSADO -->
       </ul>
       <!-- .EOC NAV TABS -->

                    <!-- NAV TABS -->
                    <ul class="nav nav-tabs d-flex flex-row align-items-end" role="tablist">

					  		<li class="nav-item tab-perfiles-alumnos">
	                            <a 	class="nav-link "
	                            	data-toggle="tab" href="#m-1448725597"
	                            	role="tab"
	                            	data-placement="top" title="Seguimiento del curso" aria-label="Seguimiento del curso">
                                	<i class="fa fa-building"></i>
	                            </a>
                        	</li>
					  		<li class="nav-item tab-perfiles-alumnos">
	                            <a 	class="nav-link "
	                            	data-toggle="tab" href="#m-1599"
	                            	role="tab"
	                            	data-placement="top" title="Centro" aria-label="Centro">
                                	<i class="fa fa-building"></i>
	                            </a>
                        	</li>
					  		<li class="nav-item tab-perfiles-alumnos">
	                            <a 	class="nav-link "
	                            	data-toggle="tab" href="#m-1448702595"
	                            	role="tab"
	                            	data-placement="top" title="Comunicaciones" aria-label="Comunicaciones">
                                	<i class="fa fa-envelope comunicaciones"></i>
	                            </a>
                        	</li>
					  		<li class="nav-item tab-perfiles-alumnos">
	                            <a 	class="nav-link "
	                            	data-toggle="tab" href="#m-1448729372"
	                            	role="tab"
	                            	data-placement="top" title="Agenda personal" aria-label="Agenda personal">
                                	<i class="fa fa-building"></i>
	                            </a>
                        	</li>
					  		<li class="nav-item tab-perfiles-alumnos">
	                            <a 	class="nav-link "
	                            	data-toggle="tab" href="#m-1448729374"
	                            	role="tab"
	                            	data-placement="top" title="Mis datos" aria-label="Mis datos">
                                	<i class="fa fa-building"></i>
	                            </a>
                        	</li>
					  		<li class="nav-item tab-perfiles-alumnos">
	                            <a 	class="nav-link "
	                            	data-toggle="tab" href="#m--560865260"
	                            	role="tab"
	                            	data-placement="top" title="Biblioteca" aria-label="Biblioteca">
                                	<i class="snc-i-open-book-config"></i>
	                            </a>
                        	</li>
					  		<li class="nav-item tab-perfiles-alumnos">
	                            <a 	class="nav-link "
	                            	data-toggle="tab" href="#m-48882"
	                            	role="tab"
	                            	data-placement="top" title="Utilidades" aria-label="Utilidades">
                                	<i class="fa fa-cogs"></i>
	                            </a>
                        	</li>

                    </ul>
                    <!-- .EOC NAV TABS -->
                </div>

                <!-- TABS OPTIONS -->
                <div class="nav tab-content">

                	<!-- SIDEBAR MENU OPTION LIST-->
                		<div class="tab-pane active" id="menupasen" role="tabpanel">
       				 	 	<ul class="nav flex-column">
       				 	 			<!-- SIDEBAR SUBMENU 1 -->
           							<li class="submenu">
                        				<a class="nav-link" href="#m-1448725597" data-toggle="collapse" aria-expanded="true" id="h1448725597">Seguimiento del curso</a>
                        				<ul class="collapse show" id="m-1448725597">       				 	 			
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/yhugzyGVIFO3LtVeAXkLXA" href="#" id="h-560808685" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Punto de Recogida</a>
                           		</li>
           						<li class="submenu">
                        			<a class="nav-link" href="#m-1448727395" data-toggle="collapse" aria-expanded="false" id="h1448727395">Tutoría</a>
                        			<ul class="collapse" id="m-1448727395">
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/yQju_BY88ybtTSvbdLNUFg" href="#" id="h1448729379" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Datos del tutor/a</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/Dqy2SCEvK6riZ0JlR-6JWA" href="#" id="h1448729380" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Visitas programadas</a>
				                            	</li>
                                	</ul>
                       			</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/lP0o2TD-Yjv5BaIc0Ze5Kg" href="#" id="h1448729255" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Horario</a>
                           		</li>
           						<li class="submenu">
                        			<a class="nav-link" href="#m-1448729256" data-toggle="collapse" aria-expanded="false" id="h1448729256">Faltas de asistencia</a>
                        			<ul class="collapse" id="m-1448729256">
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/YA6q1Qu7ozgn73Sk-YNLOg" href="#" id="h1448725599" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Consulta</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/mSat9b9DD1Aei4OQQnDrcw" href="#" id="h1448726620" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Comunicación</a>
				                            	</li>
                                	</ul>
                       			</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/hcseE2PUk3DG9FxYanQ-lg" href="#" id="h1448758209" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Observaciones del alumno</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/lgMFoJB2PDW18BLp-P8n4Q" href="#" id="h-561732144" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Autorizaciones/Firmas</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/7SkI_EcyX9YxG6OQMhcqXQ" href="#" id="h1958016183" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Conductas Contrarias</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/-Xram-R6kT9Y1XPfsgtuFQ" href="#" id="h1448729317" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Actividades Evaluables</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/q8EXWHd8YMAl5UxD5c8TEA" href="#" id="h1448729318" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Trayectoria escolar</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/D9qHqITCAtqmt6MOyiyDhA" href="#" id="h1448728356" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Notas del curso actual</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/z3qjug9h9fZjpDi7007THQ" href="#" id="h1448762115" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Libros de texto</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/NWG8faVztsnosiM93Loa8g" href="#" id="h1449562590" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Ficha del alumno/a</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/tFTgVld1OysRCLA908hlEQ" href="#" id="h-561675631" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Autorización recogida alumno/a</a>
                           		</li>
                   						</ul>
                   					</li>
       				 	 			<!-- SIDEBAR SUBMENU 2 -->
           							<li class="submenu">
                        				<a class="nav-link" href="#m-1599" data-toggle="collapse" aria-expanded="false" id="h1599">Centro</a>
                        				<ul class="collapse " id="m-1599">       				 	 			
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/7Mx0ZR9_CWTolNsd5nqMPA" href="#" id="h1448724575" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Datos del centro</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/Ny-j2iaVyjFRpaOKn4mlHQ" href="#" id="h1448729343" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Calendario escolar</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/yxt3n2Uk-mjBSGxdn_4_SQ" href="#" id="h1448729341" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Ampa</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/vSAjJKwgQZJ6b9UiCcNebw" href="#" id="h1448729319" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Consejo escolar</a>
                           		</li>
           						<li class="submenu">
                        			<a class="nav-link" href="#m-1448817878" data-toggle="collapse" aria-expanded="false" id="h1448817878">Servicios</a>
                        			<ul class="collapse" id="m-1448817878">
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/5XMlN-pq6cwuSEKyr_N8-g" href="#" id="h1448817879" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Aula Matinal</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/D5YsfQHeuRaUDJYAjc1tcA" href="#" id="h1448818690" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Transporte Escolar</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/7YLnow_QyQTbotX2wclY7g" href="#" id="h1448818876" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Comedor</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/IJzTQTB-fZ18S99GQa2GxQ" href="#" id="h1448819589" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Actividades Extraescolares</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/g08e-ZQ8B3qKjMLK5WDn_g" href="#" id="h1448819651" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Apoyo Lingüístico para Inmigrantes</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/TJ6wB8TWKSmrA94rQgDP-Q" href="#" id="h1958016184" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Programa de Acompañamiento</a>
				                            	</li>
                                	</ul>
                       			</li>
                   						</ul>
                   					</li>
       				 	 			<!-- SIDEBAR SUBMENU 3 -->
           							<li class="submenu">
                        				<a class="nav-link" href="#m-1448702595" data-toggle="collapse" aria-expanded="false" id="h1448702595">Comunicaciones</a>
                        				<ul class="collapse " id="m-1448702595">       				 	 			
           						<li class="submenu">
                        			<a class="nav-link" href="#m-1448729342" data-toggle="collapse" aria-expanded="false" id="h1448729342">Mensajes</a>
                        			<ul class="collapse" id="m-1448729342">
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/liqpSYe8OCtv1YFOyMR2PQ" href="#" id="h1448729344" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Mensajes de entrada</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/Q4KFX6jKuMzkhdgAB4OMeg" href="#" id="h1448729345" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Mensajes de salida</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/NuzN1776mwo-cs1gsO0ATg" href="#" id="h-561913000" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Mensajes archivados</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/PvvS6oyV_uOQ7otXdQjt0A" href="#" id="h-561939905" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Papelera</a>
				                            	</li>
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/pdq_yGKvw_oPWqkz4taOMg" href="#" id="h-560805678" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Categorías</a>
				                            	</li>
                                	</ul>
                       			</li>
           						<li class="submenu">
                        			<a class="nav-link" href="#m-1448729346" data-toggle="collapse" aria-expanded="false" id="h1448729346">Avisos</a>
                        			<ul class="collapse" id="m-1448729346">
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/0ldfeH6uar79Mo_7fO9JZA" href="#" id="h1448754242" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Suscripciones</a>
				                            	</li>
                                	</ul>
                       			</li>
           						<li class="submenu">
                        			<a class="nav-link" href="#m-1448731363" data-toggle="collapse" aria-expanded="false" id="h1448731363">Tablón de anuncios</a>
                        			<ul class="collapse" id="m-1448731363">
		                       					<li class="nav-item">
				                            		<a class="nav-link" data-menulink="../menus/RUWKv9KcG7brZAg45-Zd0Q" href="#" id="h1448731365" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Consultar el tablón</a>
				                            	</li>
                                	</ul>
                       			</li>
                   						</ul>
                   					</li>
       				 	 			<!-- SIDEBAR SUBMENU 4 -->
           							<li class="submenu">
                        				<a class="nav-link" href="#m-1448729372" data-toggle="collapse" aria-expanded="false" id="h1448729372">Agenda personal</a>
                        				<ul class="collapse " id="m-1448729372">       				 	 			
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/W3aYwxDIivH6wwzAd8Y3Sg" href="#" id="h1448731239" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Agenda</a>
                           		</li>
                   						</ul>
                   					</li>
       				 	 			<!-- SIDEBAR SUBMENU 5 -->
           							<li class="submenu">
                        				<a class="nav-link" href="#m-1448729374" data-toggle="collapse" aria-expanded="false" id="h1448729374">Mis datos</a>
                        				<ul class="collapse " id="m-1448729374">       				 	 			
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/6DakEyXkvKln6sBg203Tjg" href="#" id="h1448729376" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Datos del usuario/a</a>
                           		</li>
                   						</ul>
                   					</li>
       				 	 			<!-- SIDEBAR SUBMENU 6 -->
           							<li class="submenu">
                        				<a class="nav-link" href="#m--560865260" data-toggle="collapse" aria-expanded="false" id="h-560865260">Biblioteca</a>
                        				<ul class="collapse " id="m--560865260">       				 	 			
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/a2wk0sx_SPTDJxh4SIaGcg" href="#" id="h-560844304" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Catálogo</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/LsF0m7vtUYw7tqHkU6IiCA" href="#" id="h-560843157" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Mis préstamos</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/0X0tJmuDGcaYDZDfOjx7RA" href="#" id="h-560842320" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Mis valoraciones</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/Fqja9C6pdOusD7CCnkkXgA" href="#" id="h-560842257" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Mis reservas</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/9GCY7ciAPiTEixuSJbeQ1A" href="#" id="h-560865259" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Mis desideratas</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/Q4vBsXPPbDvezOUeSE0SFw" href="#" id="h-560841359" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Actividad lectora del alumno/a</a>
                           		</li>
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/DG2vAm-ySe-WRhS4OLU_bg" href="#" id="h-560839436" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Uso de la biblioteca</a>
                           		</li>
                   						</ul>
                   					</li>
       				 	 			<!-- SIDEBAR SUBMENU 7 -->
           							<li class="submenu">
                        				<a class="nav-link" href="#m-48882" data-toggle="collapse" aria-expanded="false" id="h48882">Utilidades</a>
                        				<ul class="collapse " id="m-48882">       				 	 			
     							<li class="nav-item">
                           			<a class="nav-link" data-menulink="../menus/xYch6dHP3pJY8IjmZ4i0qw" href="#" id="h1448731177" onclick="Navegacion.llamadaMenu(this)" onmousedown="javascript:$.fn.copiarRutaMenu(this);" oncontextmenu="return false;">Documentos solicitados</a>
                           		</li>
                   						</ul>
                   					</li>
   							</ul>
           				</div>

                    <!-- SIDEBAR MENU SHORTCUT LIST-->
                    <div class="tab-pane menu-shortcut" id="accdirectos" role="tabpanel">
                        <h5 class="mb-0"></h5>
                    </div>

					<!-- SIDEBAR MENU PERFILES ALUMNOS -->
	<div class="tab-pane menu-perfilesalumnos show " id="perfilesalumnos" role="tabpanel">
		 <h5 class="mb-0">
                Cambio de Alumno/a
            </h5>
			<div class="perfiles-list">
					<a class="dropdown-item" href="javascript:cambiaAlumnoYMatricula(3689887, 45348362)">
						<div class="link-perfil d-flex align-items-center">
							<div class="imagen-alumno" style="background-image: url('alumnos/VerFotAlu.jsp?X_ALUMNO=HTTH7H_agrTDE7Olvr7mCA')"></div>
							<div class="datos-centro flex-fill">
								<strong>Aleksia David Terrones </strong>
							<br>
							4º de E.S.O.
							<br>
							I.E.S. - Gran Capitán
							</div>
						</div>
					</a>
					<a class="dropdown-item" href="javascript:cambiaAlumnoYMatricula(6543990, 44326043)">
						<div class="link-perfil d-flex align-items-center">
							<div class="imagen-alumno" style="background-image: url('alumnos/VerFotAlu.jsp?X_ALUMNO=eG5Lmu_vhwMGmPwQ-x-PFw')"></div>
							<div class="datos-centro flex-fill">
								<strong>Rebeca Liria Staykova</strong>
							<br>
							1º de Educ.Prima.
							<br>
							C.E.I.P. - Alcalde Pedro Barbudo
							</div>
						</div>
					</a>
			</div>
    </div>
					<!-- .EOC SIDEBAR MENU PERFILES ALUMNOS -->

                </div>
                <!-- .EOC TABS OPTIONS-->

            </nav>
        </div>
    </div>
    <!-- .EOC SIDEBAR MENU -->
<main class="container-fluid loading">

		<!-- CONTENEDOR PRINCIPAL -->
		<div id="contenedorPagina-SNC" class="col-md-12">
		<div id="cabeceraContenedorPagina-SNC" class="content-header">
        <div class="col-md-12">
            <div class="row">
                <h1 class="title-xl"></h1>
            </div>
        </div>
            <div class="col-md-12 content-header-botonera d-flex flex-row justify-content-between">

	        	<div id="blqBotones-left" class="senecaCabMenuFlex d-flex flex-row float-left">
	            </div>

            <h1 class="title-md"></h1>


            <div id="blqBotones-right" class="senecaCabMenuFlex d-flex flex-row float-right">

            </div>

        </div>
    </div>
		<!-- .EOC CABECERA CONTENEDOR PRINCIPAL -->
				<div id="contenedorCuerpo">

				<!-- div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div id="infoRequeridos-SNC">
									<span class="fas fa-asterisk required"></span> Campos Obligatorios
								</div>
							</div>
							<div class="col-md-6 text-right">
								<a class="btn-SNC btn btn-outline-secondary btn-sm float-right" id="collapseAllPanels">CONTRAER TODOS LOS PANELES <i class="fa fa-minus-circle"></i></a>
							</div>
						</div>
					</div>
				</div -->

				<form method="POST" name="FORMULARIO" >


<div id='paginaInicio-SNC'><div class='w-100'><div class='home-boxes-container'><div class='row'>

	<div class='home-boxes-col1 col-xl-4 col-lg-5 col-md-6'>
	<div class="home-box">
		<div class="row">
			<div class="col-md-12">
				<div class="seccionForm-SNC">
					<!-- TITULO -->
		               <h6 class="tituloSeccionForm-SNC">
						Novedades
					</h6>
					<!-- CUERPO -->
		               <div class="cuerpoSeccionForm-SNC">
		               	<div class="homeBoxContent">
		               		<table class="tablaPagInicio table  table-hover bg-white ">
		               			<tbody class="cursor-pointer">
			               				<tr class="table-row-hover-arrow">
			                               	<td class="align-middle pt-1 pb-1">
				                    	    		<span class="badge badge-info bagde-disabled">0</span>
											</td>
											<td class="align-middle pl-0 pt-1 pb-1">
												<a href="javascript:verTodasActividades()"><strong>Actividades hoy.</strong></a>
											</td>
											<td class="pt-1 pb-1">
												<span class="fas fa-angle-right"></span>
											</td>
										</tr>
										<tr class="table-row-hover-arrow no-event">
											<td class=" align-middle pt-1 pb-1">
													<span class="badge badge-info">3</span>
											</td>
											<td class="align-middle pl-0 pt-1 pb-1">
												<a href="javascript:verTodasFaltas()"><strong> Faltas de asistencia hoy.</strong></a>
											</td>
											<td class="pt-1 pb-1">
												<span class="fas fa-angle-right"></span>
											</td>
										</tr>
										<tr class="table-row-hover-arrow no-event">
                                        	<td class=" align-middle pt-1 pb-1">
													<span class="badge badge-info bagde-disabled">0</span>
											</td>
											<td class="align-middle pl-0 pt-1 pb-1">
												<a href="javascript:verTodasVisitas()"><strong> Visitas programadas.</strong></a>
											</td>
											<td class="pt-1 pb-1">
												<span class="fas fa-angle-right"></span>
											</td>
										</tr>
										<tr class="table-row-hover-arrow no-event">
                                        	<td class=" align-middle pt-1 pb-1">
													<span class="badge badge-info bagde-disabled">0</span>
											</td>
											<td class="align-middle pl-0 pt-1 pb-1">
												<a href="javascript:verTodasAutorizaciones()"><strong> Autorizaciones pendientes.</strong></a>
											</td>
											<td class="pt-1 pb-1">
												<span class="fas fa-angle-right"></span>
											</td>
										</tr>
									<tr class="table-row-hover-arrow no-event">
										<td class=" align-middle pt-1 pb-1">
												<span class="badge badge-info">25</span>
										</td>
										<td class=" align-middle pl-0 pt-1 pb-1">
											<a href="javascript:verTodosMensajes()"><strong> Mensajes pendientes.</strong></a></td>
										<td class="pt-1 pb-1">
											<span class="fas fa-angle-right"></span>
										</td>
									</tr>
									<tr class="table-row-hover-arrow no-event">
										<td class=" align-middle pt-1 pb-1">
												<span class="badge badge-info bagde-disabled">0</span>
										</td>
										<td class="align-middle pl-0 pt-1 pb-1">
											<a href="javascript:top.Navegacion.llamada_desde_otro_nivel('DetCalendario', 1, null, true)"><strong> Citas de prioridad media/alta en la agenda.</strong></a>
										</td>
										<td class="pt-1 pb-1">
											<span class="fas fa-angle-right"></span>
										</td>
									</tr>
		               			</tbody>
		               		</table>
		               	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			<div class='home-calendar'>
    <div class="seccionForm-SNC">
        <!-- TITULO -->
        <h6 class="tituloSeccionForm-SNC">
            Agenda Personal

            <a href="javascript:crearCita()"
                class="btn home-calendar-event-create-btn position-absolute"
                data-toggle="tooltip" data-placement="bottom" title=""
                aria-label="Crear Nuevo Evento"
                data-original-title="Crear Nuevo Evento">
                <i class="fas fa-plus"></i>
            </a>

            <a href="javascript:top.Navegacion.llamada_desde_otro_nivel('DetCalendario', 1, null, true)"
                class="btn home-calendar-view-diary-btn position-absolute"
                data-toggle="tooltip" data-placement="bottom" title=""
                aria-label="Ver Calendario Agenda"
                data-original-title="Ver Calendario Agenda">
                <i class="far fa-calendar-alt"></i>
            </a>

            <a href="javascript:void(0)"
                class="btn home-calendar-maximize-btn position-absolute"
                data-toggle="tooltip" data-placement="bottom" title=""
                aria-label="Maxímizar Ventana Agenda"
                data-original-title="Maxímizar Ventana Agenda">
                <i class="fas fa-expand"></i>
                <i class="fas  fa-compress"></i>
            </a>
        </h6>        
        
        <!-- CUERPO -->
        <div class="cuerpoSeccionForm-SNC">
            <!-- FULLCALENDAR AGENDA PERSONAL -->

            <div id="AGENDA"></div>

            <!-- /. end FULLCALENDAR AGENDA PERSONAL -->
        </div>
    </div>
			</div>	
	</div>
	<div class="home-boxes-col2 col pl-1 mt-md-0 mt-3">
		<div class="home-box">
           	<div class="seccionForm-SNC">
				<!-- TITULO -->
				<h6 class="tituloSeccionForm-SNC">
						<span class="badge badge-info">4</span> Tablón de Anuncios
						<a href="javascript:verTodosAnuncios()" class="btn home-view-all-btn position-absolute" data-toggle="tooltip" data-placement="bottom" title="" aria-label="Ver Todos los Anuncios" data-original-title="Ver Todos los Anuncios">
							<i class="fas fa-search"></i>
						</a>
				</h6>
					<div class="cuerpoSeccionForm-SNC">
						<div class="homeBoxContent row pl-3">
								<div class="m-auto">
									<div class="home-new position-relative">
										<a href="javascript:top.Navegacion.cargarPagina(top.inferior.menu.llamada('DetNotPub2', 'X_NOTSECTABANUCEN=166689', false ));">
											<div class="home-new-centro">
                                             	Actividades extraescolares                       
											</div>
											<div class="home-new-header" style="background-image:url(../imagespasen/portada/6_sin_imagen_335x200px.jpg)">
											</div>
											<div class="home-new-footer d-flex">
												<h6 class="home-new-title">
													Semana de la Orientación
												</h6>
												<div class="home-new-date">
													31 mar.
												</div>
											</div>	
										</a>
									</div>
								</div>
								<div class="m-auto">
									<div class="home-new position-relative">
										<a href="javascript:top.Navegacion.cargarPagina(top.inferior.menu.llamada('DetNotPub2', 'X_NOTSECTABANUCEN=166000', false ));">
											<div class="home-new-centro">
                                             	Noticias                       
											</div>
											<div class="home-new-header" style="background-image:url(../imagespasen/portada/5_sin_imagen_335x200px.jpg)">
											</div>
											<div class="home-new-footer d-flex">
												<h6 class="home-new-title">
													Calendario de Plazos PEVAU 21/22
												</h6>
												<div class="home-new-date">
													23 mar.
												</div>
											</div>	
										</a>
									</div>
								</div>
								<div class="m-auto">
									<div class="home-new position-relative">
										<a href="javascript:top.Navegacion.cargarPagina(top.inferior.menu.llamada('DetNotPub2', 'X_NOTSECTABANUCEN=165285', false ));">
											<div class="home-new-centro">
                                             	SECRETARÍA                       
											</div>
											<div class="home-new-header" style="background-image:url(../imagespasen/portada/4_sin_imagen_335x200px.jpg)">
											</div>
											<div class="home-new-footer d-flex">
												<h6 class="home-new-title">
													BECAS MEC CURSO 2022-23: AVISO IMPORTANTE
												</h6>
												<div class="home-new-date">
													17 mar.
												</div>
											</div>	
										</a>
									</div>
								</div>
								<div class="m-auto">
									<div class="home-new position-relative">
										<a href="javascript:top.Navegacion.cargarPagina(top.inferior.menu.llamada('DetNotPub2', 'X_NOTSECTABANUCEN=157535', false ));">
											<div class="home-new-centro">
                                             	Noticias                       
											</div>
											<div class="home-new-header" style="background-image:url(../imagespasen/portada/3_sin_imagen_335x200px.jpg)">
											</div>
											<div class="home-new-footer d-flex">
												<h6 class="home-new-title">
													Autorización uso de imagen con fines educativos
												</h6>
												<div class="home-new-date">
													31 ene.
												</div>
											</div>	
										</a>
									</div>
								</div>
						</div>
					</div>
			</div>
		</div>
	</div>

</div></div></div>	

	<hr class="separador">
    <div class="col">
        <div class="row">
	            <div class="col-xl-6">
	                <small>
	                    <p>
	                        <strong>Las retribuciones del Profesorado de este centro que imparte las
	                            enseñanzas
	                            detalladas
	                            a continuación son cofinanciadas a través del Programa Operativo Fondo
	                            Social
	                            Europeo
	                            2014-2020</strong>:
	                        <ul>
		                    	    <li>Apoyo escolar (PROA).</li>
		                    	    <li>Formación Profesional Básica.</li>
		                    	    <li>Nuevos itinerarios de ESO.</li>
		                    	    <li>Pedagogía Terapéutica</li>
		                    	    <li>Pedagogía Terapéutica.</li>
	                        </ul>
	                    </p>
	
	                </small>
	            </div>
	            <div class="col-xl-6">
	                <small>
	                    <p>
	                        <strong>Y a través del Programa Operativo Fondo Social Europeo 2007-2013
	                            han
	                            sido
	                            cofinanciadas las retribuciones del profesorado relacionados a
	                            continuación</strong>:
	                        <ul>
		                    	    <li>Maestros y Maestras especialistas en Pedagogía Terapéutica, Audición y Lenguaje y Profesorado de Secundaria de Lenguaje de Signos.</li>
		                    	    <li>Profesorado de Ciclos Formativos.</li>
		                    	    <li>Profesorado de Formación y Orientación Laboral y Orientadores.</li>
		                    	    <li>Profesorado de Programas de Cualificación Profesional.</li>
	                        </ul>
	                    </p>
	                </small>
	            </div>
            <div class="col-xl-12 text-center">
                <ul class="list-inline mt-2 ml-auto mr-auto">
                    <li class="list-inline-item pr-4"><a href="http://portals.ced.junta-andalucia.es/educacion/portals/web/ced"
                            target="_blank"><img src="../images/temas/seneca/logo_junta.png" alt="Junta Andalucía Consejería Educación"
                                width="90"></a></li>
	                    <li class="list-inline-item pr-4"><img src="../images/temas/seneca/andalucia_europa_logo.png"
	                            alt="Andalucía se mueve con Europa" width="120"></li>
	                    <li class="list-inline-item"><img src="../images/temas/seneca/fondo_social_logo.png" alt="Andalucía se mueve con Europa"
	                            width="90"></li>
                </ul>
            </div>
        </div>
    </div>
</div>




				</form>
			</div>
		</div>
		<!-- .EOC CONTENEDOR PRINCIPAL -->

	</main>

	<!-- BOTÓN SUBIR SCROLL -->
	<a id="toTop" data-toggle="tooltip" data-placement="left" title="Subir" class="roundFooter-bt">
		<i class="fa fa-chevron-up"></i>
	</a>
	<!-- .EOC BOTÓN SUBIR SCROLL -->

<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
</body>
</html>
