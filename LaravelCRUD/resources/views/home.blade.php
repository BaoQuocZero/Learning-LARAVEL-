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
            <th scope="col">
                <form action="/create" method="GET">
                    <button class="btn btn-primary">Thêm</button>
                </form>
            </th>
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
                <form action="/edit/{{$user->ma_User}}" method="GET" style="display: inline;">
                    <button type="submit" class="btn btn-warning">Sửa</button>
                </form>

                <form action="/delete/{{$user->ma_User}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection