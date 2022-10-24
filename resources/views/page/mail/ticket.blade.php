<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong> Tên: </strong> {{$data['name']}} <br>
    <strong> Email: </strong> {{ $data['email'] }} <br>
    <strong> Số điện thoại: </strong> {{ $data['phone'] }} <br>
    <strong> Số lượng: </strong> {{ $data['qty'] }} <br>
    <strong> Tổng cộng: </strong> {{ number_format($data['total'] , 0, ',', '.') }} vnđ <br>
    <span style="color: blue;font-weight:bold;">Vé của trang <strong style="color: red;">{{ $data['numPage'] }}</strong> trên tổng số <strong style="color: red;">{{ $data['totalPage'] }}</strong> trang</span>
  
</body>
</html>