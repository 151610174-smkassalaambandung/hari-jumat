<!DOCTYPE html>
<html>
<head>
<title>data</title>
</head>
<body>
<table border="10">
<tr>
<th>id </th>
<th>nama </th>
<th> jenis kelamin </th>
<th> alamat </th>
</tr>

<?php
$no=1;
?>
@foreach($a as $data)
<tr>
<td>{{$no++}}</td>
<td>{{$data->nama}}</td>
<td>{{$data->jk}}</td>
<td>{{$data->alamat}}</td>
@endforeach

</center>
</table>
</body>
</html>
</tr>
