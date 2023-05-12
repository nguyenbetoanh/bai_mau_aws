<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cập nhật catalog </h1>
    <form action="{{$editCat->catalogId}}" method="POST">
        @csrf
        <label for="id">Mã catalog</label> <br>
        <input type="text" name="catalogName" id="id" value="{{ $editCat->catalogId }}" readonly/> <br>
        <label for="name">Tên catalog</label> <br>
        <input type="text" name="catalogName" id="name" value="{{ $editCat->catalogName }}"/> <br>
        <label for="pri">Giá catalog</label> <br>
        <input type="text" name="price" id="pri" value="{{ $editCat->price }}"/><br>
        <label for="sta">Chọn trạng thái catalog</label><br>
        @if($editCat->catalogStatus)
        <input name="catalogStatus" type="radio" value="1" checked/>Đang bán <br>
        <input name="catalogStatus" type="radio" value="0"/>Dừng bán <br> <br>
        @else
        <input name="catalogStatus" type="radio" value="1" />Đang bán <br>
        <input name="catalogtatus" type="radio" value="0" checked/>Dừng bán <br> <br>
        @endIf
        <input type="submit" value="Thêm mới" name="submit"/>
    </form>
</body>
</html>