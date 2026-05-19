<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return 'Danh sách thương hiệu';
    }

    public function create()
    {
        return 'Form thêm thương hiệu';
    }

    public function store(Request $request)
    {
        return 'Lưu thương hiệu mới';
    }

    public function show(string $id)
    {
        return 'Chi tiết thương hiệu: ' . $id;
    }

    public function edit(string $id)
    {
        return 'Form sửa thương hiệu: ' . $id;
    }

    public function update(Request $request, string $id)
    {
        return 'Cập nhật thương hiệu: ' . $id;
    }

    public function destroy(string $id)
    {
        return 'Xóa thương hiệu: ' . $id;
    }
}