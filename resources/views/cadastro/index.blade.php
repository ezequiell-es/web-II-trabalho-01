<html>
	<body>
		<form method="POST" action="/cadastro">
			<div>
				<label>Marca e Modelo:</label>
				<input type="text" name="marca" value=""/>
			</div>
			<br>
			<div>
				<label>Placa:</label>
                <input type="text" name="placa" value=""/>
			</div>
			<br>
			<div>
				<label>Cor:</label>
				<input type="text" name="cor" value=""/>
			</div>
			<br>
            <div>
				<label>Ano de Fabricaçãos:</label>
				<input type="text" name="ano" value=""/>
			</div>
			<br>
			<div>
				@csrf
			<input type="hidden" name="id" value=""/>
				<button type="submit">Salvar</button>
			</div>
		</form>
<br>
		<table border="1">
			<thead>
				<tr>
					<th>Marca e modelo</th>
					<th>Placa</th>
					<th>Cor</th>
                    <th>Ano</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($cadastros as $cadastro)
					<tr>
						<td>{{ $cadastro->marca }}</td>
						<td>{{ $cadastro->placa }}</td>
						<td>{{ $cadastro->cor }}</td>
						<td>{{ $cadastro->ano }}</td>
						<td>
						<a href="/cadastro/excluir/{{$cadastro->id}}">
							EXCLUIR
						</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>