<html>
	
	<body>
		<table>
			<tr>
				<td colspan="4">Elenco clienti</td>
			</tr>
			<tr>
				<td>id</td>
				<td>nome</td>
				<td>cognome</td>
				<td>codice fiscale</td>
			</tr>
		@foreach($clienti as $cliente)
			<tr>
				<td>{{$cliente->idcliente}}</td>
				<td>{{$cliente->nome}}</td>
				<td>{{$cliente->cognome}}</td>
				<td>{{$cliente->codicefiscale}}</td>
			</tr>
		@endforeach
		</table>
	</body>
</html>