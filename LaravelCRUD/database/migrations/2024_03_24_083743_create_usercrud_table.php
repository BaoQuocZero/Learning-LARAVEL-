<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//Thêm use này cho cái DB
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userCRUD', function (Blueprint $table) {
            $table->increments('ma_User');
            $table->string("ho_Ten");
            $table->string("email")->nullable();
            $table->string('hinh_User')->nullable();
            $table->dateTime('ngay_Tao')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userCRUD');
    }
};