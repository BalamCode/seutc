<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	@include('layouts.bootstrap')
</head>
<body>
	<div class="container">

		<div class="row">
			<h1>Grupos <small>Listado general</small></h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>Grupo</th>
							<th>Periodo</th>
							<th>Carrera</th>
							<th>Cuatrimestre</th>
							<th>Grupo</th>

						</tr>

					</thead>

					<tbody>
						@foreach($grupos as $grupo)
						<tr>
							<td>{{$grupo->idgrupo}}</td>
							<td>{{$grupo->periodo}}</td>
							<td>{{$grupo->idcarrera}}</td>
							<td>{{$grupo->cuatrimestre}}</td>
							<td>{{$grupo->grupo}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>