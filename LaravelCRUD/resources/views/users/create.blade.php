<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Create Users
    </title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <div class="container">
        <form method="POST" action="/store">
            @csrf
            @method('POST')

            <div class="form-group pt-3 pb-3">
                <label class="pb-1" for="url">Url ảnh</label>
                <input type="url" class="form-control" id="url" placeholder="Hình ảnh" name="hinh_User">
            </div>

            <div class="form-group pt-3 pb-3">
                <label class="pb-1" for="Hoten">Họ tên</label>
                <input type="text" class="form-control" id="Hoten" placeholder="Họ tên" name="ho_Ten">
            </div>

            <div class="form-group pt-3 pb-3">
                <label class="pb-1" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group pt-3 pb-3">
                <label class="pb-1" for="ngayTao">Ngày tạo</label>
                <input type="datetime-local" class="form-control" id="ngayTao" name="ngay_Tao">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>

</html>