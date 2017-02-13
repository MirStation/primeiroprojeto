<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Olá</title>
    	</head>
     	<body>

	  @php
	  $nome = "Machadão";
	  @endphp

	  @for($i = 0; $i < 100; $i++)
		<h1>Olá {{$nome}}</h1>
	  @endfor
		
		
		
       	</body>
</html>
