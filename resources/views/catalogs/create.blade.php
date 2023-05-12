<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Nhập thông tin để tạo mới catalog </h1>
    <form action="create" method="POST">
        @csrf
        <label for="name">Tên sản phẩm</label> <br>
        <input type="text" name="catalogName" id="name"/> <br>
        <label for="pri">Giá sản phẩm</label> <br>
        <input type="text" name="price" id="pri"/><br>
        <label for="sta">Chọn trạng thái sản phẩm</label><br>
        <input name="catalogStatus" type="radio" value="1" id="sta"/>Đang bán <br>
        <input name="catalogStatus" type="radio" value="0"/>Dừng bán<br> <br>
        <input type="submit" value="Thêm mới" name="submit"/>
    </form>
</body>

</html>