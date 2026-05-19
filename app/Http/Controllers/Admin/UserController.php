<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Danh sách người dùng';
    }

    public function create()
    {
        return 'Form thêm người dùng';
    }

    public function store(Request $request)
    {
        return 'Lưu người dùng mới';
    }

    public function show(string $id)
    {
        return 'Chi tiết người dùng: ' . $id;
    }

    public function edit(string $id)
    {
        return 'Form sửa người dùng: ' . $id;
    }

    public function update(Request $request, string $id)
    {
        return 'Cập nhật người dùng: ' . $id;
    }

    public function destroy(string $id)
    {
        return 'Xóa người dùng: ' . $id;
    }
}