<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Edit
    </title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('UserController.update', $user->ma_User) }}">
            @csrf
            @method('PUT')

            <div class="form-group pt-3 pb-3 text-center">
                <img src="{{ $user->hinh_User }}" alt="" width="50" height="50">
                <input type="url" class="form-control" id="url" placeholder="Hình ảnh" name="hinh_User"
                    value="{{ $user->hinh_User }}">
            </div>

            <div class="form-group pt-3 pb-3">
                <label class="pb-1" for="Hoten">Họ tên</label>
                <input type="text" class="form-control" id="Hoten" placeholder="Họ tên" name="ho_Ten"
                    value="{{ $user->ho_Ten }}">
            </div>

            <div class="form-group pt-3 pb-3">
                <label class="pb-1" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                    value="{{ $user->email }}">
            </div>

            <div class="form-group pt-3 pb-3">
                <label class="pb-1" for="ngayTao">Ngày tạo</label>
                <input type="datetime-local" class="form-control" id="ngayTao" name="ngay_Tao"
                    value="{{ date('Y-m-d\TH:i', strtotime($user->ngay_Tao)) }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>

</html>