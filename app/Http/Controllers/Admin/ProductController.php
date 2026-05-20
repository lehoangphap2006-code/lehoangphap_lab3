<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return 'Danh sách sản phẩm';
    }

    public function create()
    {
        return 'Form thêm sản phẩm';
    }

    public function store(Request $request)
    {
        return 'Lưu sản phẩm mới';
    }

    public function show(string $id)
    {
        return 'Chi tiết sản phẩm: ' . $id;
    }

    public function edit(string $id)
    {
        return 'Form sửa sản phẩm: ' . $id;
    }

    public function update(Request $request, string $id)
    {
        return 'Cập nhật sản phẩm: ' . $id;
    }

    public function destroy(string $id)
    {
        return 'Xóa sản phẩm: ' . $id;
    }

    public function test1()
    {
    return redirect()->route('admin.home');
    }
    
    public function test2()
    {
    return redirect('/admin/dashboard');
    }
}