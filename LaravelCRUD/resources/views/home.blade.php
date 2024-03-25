@extends ('layouts.base')

@section('title', "Home")

@section("main")
<table class="table">
    <thead>

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Email</th>
            <th scope="col">Ngày tạo</th>
            <th scope="col">Hình</th>
            <th scope="col"></th>
        </tr>

    </thead>
    <tbody>

        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->ma_User}}</th>
            <td>{{$user->ho_Ten}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->ngay_Tao}}</td>
            <td>
                <img src="{{$user->hinh_User}}" alt="" width="50" height="50">
            </td>
            <td>
                <a class="btn btn-warning" href="{{route('UserController.edit', $user->ma_User)}}">Sửa</a>
                <button class="btn btn-danger">Xóa</button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection