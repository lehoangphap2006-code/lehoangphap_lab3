<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Danh sách bài viết';
    }

    public function create()
    {
        return 'Form thêm bài viết';
    }

    public function store(Request $request)
    {
        return 'Lưu bài viết mới';
    }

    public function show(string $id)
    {
        return 'Chi tiết bài viết: ' . $id;
    }

    public function edit(string $id)
    {
        return 'Form sửa bài viết: ' . $id;
    }

    public function update(Request $request, string $id)
    {
        return 'Cập nhật bài viết: ' . $id;
    }

    public function destroy(string $id)
    {
        return 'Xóa bài viết: ' . $id;
    }
}