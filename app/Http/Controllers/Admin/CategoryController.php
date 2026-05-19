<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index()
{
    return 'Danh sách danh mục';
}

public function create()
{
    return 'Form thêm danh mục';
}

public function show($id)
{
    return 'Chi tiết danh mục: ' . $id;
}

public function edit($id)
{
    return 'Form sửa danh mục: ' . $id;
}
}
