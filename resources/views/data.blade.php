<!DOCTYPE html>
<html>
<head>
<title>Looping</title>
</head>
<body>
<center>
<br>
<br>
@foreach($buah as $data)
{{$data}}<hr>
@endforeach
<br>
<br>
@foreach($hewan as $badak)
{{$badak}}<hr>
@endforeach
<br>
<br>
@foreach($computer as $pop)
{{$pop}}<hr>
@endforeach

</center>
</body>
</html>