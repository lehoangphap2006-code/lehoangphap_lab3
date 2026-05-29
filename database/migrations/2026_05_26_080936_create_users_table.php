<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();                               // Khóa chính
        $table->string('fullname', 100);            // Họ tên
        $table->string('username', 30)->unique();   // Tên đăng nhập, không trùng
        $table->string('email', 50)->unique();      // Email, không trùng
        $table->string('password', 50);             // Mật khẩu
        $table->string('phone', 20)->unique();      // Số điện thoại, không trùng
        $table->string('address', 255)->nullable(); // Địa chỉ, cho phép NULL
        $table->tinyInteger('gender');              // Giới tính: 1:Nam, 2:Nữ, 0:Không
        $table->date('birthday')->nullable();       // Ngày sinh
        $table->unsignedTinyInteger('role');        // Quyền: 1:quản lý, 2:nhân viên
        $table->tinyInteger('status')->default(1);  // Trạng thái: 1:kích hoạt, 0:khóa
        $table->timestamps();                       // created_at, updated_at
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
