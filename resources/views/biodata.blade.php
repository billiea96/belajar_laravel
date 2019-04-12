<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
	<h3>{{$nama}}</h3> 
	<br>
	<h2>Mata Kuliah</h2>	
	<ul style="list-style-type: none;">
		@foreach($matkul as $key=>$value)
		<li>{{$key+1}}.{{$value}}</li>
		@endforeach
	</ul>
</body>
</html>