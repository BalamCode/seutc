<html>
<head>
	<meta charset="UTF-8">
	<title>Alumnos</title>
	@include('layouts.bootstrap')

</head>
<body>
<div class="container">
	<h1>Cardex de alumno</h1>

	<ul class="nav nav-tabs">
    	<li class="active"><a href="#generales-tab" data-toggle="tab">Datos generales <i class="fa"></i></a></li>
    	<li><a href="#address-tab" data-toggle="tab">Familia <i class="fa"></i></a></li>
</ul>

<form id="accountForm" method="" class="form-horizontal">
    <div class="tab-content">
		<div class="tab-pane active" id="generales-tab">
        	@include('alumnos.generales')
		</div>

        <div class="tab-pane" id="address-tab">
        	<h1>Hola mundo</h1>
    	</div>

    <div class="form-group" style="margin-top: 15px;">
        <div class="col-xs-5 col-xs-offset-3">
            <button type="" class="btn btn-primary">Guardar</button>
        </div>
    </div>
    </div>
</form>
</div>
</body>
</html>