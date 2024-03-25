<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userCRUD extends Model
{
    //Thêm phần này để không lỗi khi xóa updated_at
    public $timestamps = false;

    protected $table = 'userCRUD';

    // Tên cột chính của bảng
    protected $primaryKey = 'ma_User';

    use HasFactory;
}