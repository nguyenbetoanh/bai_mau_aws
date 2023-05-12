<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
</head>

<body>
    <h1>HELLO WELCOM TO Catalog</h1>

    <input type="search" name="search" id="search">
    <button type="submit" onclick="search()">Tìm Kiếm</button><br><br>

    <a href="catalog/input">Thêm mới</a><br><br>

    @if (@empty($catalog))
        {{ 'Không có dữ liệu' }}
    @else
        <table border="1px">
            <thead>
                <tr>
                    <th>Mã sản phẩm </th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Trạng thái</th>
                    <th colspan="3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catalog as $item)
                    <tr>
                        <td>{{ $item->catalogId }}</td>
                        <td>{{ $item->catalogName }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->catalogStatus ? 'Đang mở' : 'Dừng hoạt động' }}</td>
                        <td><a href="catalog/delete/{{ $item->catalogId }}">Xóa</a></td>
                        <td><a href="catalog/update/{{ $item->catalogId }}">Chỉnh sửa</a></td>
                        <td><a href="">Xem Chi tiết</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endempty
    <script>
        function search() {
            var click = document.getElementById("search").value;
            if (click)
                window.location.href = "http://127.0.0.1:8000/catalog/search/" + click;
            else
                window.location.href = "http://127.0.0.1:8000/catalog";
        }
    </script>
</body>

</html>