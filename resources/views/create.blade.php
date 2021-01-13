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
<h1>Thêm đai lý</h1>
<form action="{{route('agencys.store')}}" method="post">
    @csrf
<div class="input-group mb-3">
    <label class="input-group-text" id="basic-addon1">Tên đại lý</label>
    <input type="text" name="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1">

</div>
    @if($errors->any())
        <div class=" alert-danger">
            {{$errors->first('name')}}
        </div>
    @endif


    <div class="input-group mb-3">
    <label class="input-group-text" id="basic-addon1">Địa chỉ</label>
    <input name="address" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2">

</div>
    @if($errors->any())
        <div class=" alert-danger">
            {{$errors->first('address')}}
        </div>
    @endif

<div class="input-group mb-3">
    <label class="input-group-text" id="basic-addon1">Email</label>
    <input type="email" name="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">


</div>
    @if($errors->any())
        <div class=" alert-danger">
            {{$errors->first('email')}}
        </div>
    @endif

<div class="input-group mb-3">
    <label class="input-group-text" id="basic-addon1">Số điện thoại</label>
    <input type="text" name="phone" class="form-control" aria-label="Username" aria-describedby="basic-addon1">

</div>
    @if($errors->any())
        <div class=" alert-danger">
            {{$errors->first('phone')}}
        </div>
    @endif

<div class="input-group mb-3">
    <label class="input-group-text" id="basic-addon1">Tên người quản lý</label>

    <input type="text" class="form-control" name="userName" aria-label="Username">
    @if($errors->any())
        <div class=" alert-danger">
            {{$errors->first('userName')}}
        </div>
    @endif
    <span class="input-group-text">Trạng thái</span>
    <select name="static"  class="form-control" aria-label="Server">
        <option value="Đang hoạt động">Đang hoạt động</option>
        <option value="Không hoạt động">Không hoạt động</option>
    </select>
</div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
