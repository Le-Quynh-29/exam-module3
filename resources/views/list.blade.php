<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<form action="{{route('agencys.search')}}" method="post">
    @csrf
<h3>Tìm kiếm</h3>
<input style="width: 200px" type="search" name="search" class="form-control ds-input"  placeholder="Search docs..." >
</form>
<h1>Danh sách đại lý</h1>
<a class="btn btn-primary" href="{{route('agencys.create')}}">Thêm mới</a>


<table class="table">
    <thead class="table-dark">
    <tr>
        <th>#</th>
        <th>Mã đại lý</th>
        <th>Tên đại lý</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tên người quản lý</th>
        <th>Trạng thái</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($agencys as $key => $agency)
        <tr>
            <td>{{ $key + $agencys ->firstItem() }}</td>
            <td>{{$agency->id}}</td>
            <td>{{$agency->name}}</td>
            <td>{{$agency->address}}</td>
            <td>{{$agency->email}}</td>
            <td>{{$agency->phone}}</td>
            <td>{{$agency->userName}}</td>
            <td>{{$agency->static}}</td>
            <td>
                <a href="{{route('agencys.edit',$agency->id)}}" class="btn btn-warning">sửa</a>
                <a href="{{route('agencys.delete',$agency->id)}}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa {{$agency->name}}?')">xóa</a>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
<div style="float: right;">{{ $agencys->links( "pagination::bootstrap-4") }}</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
