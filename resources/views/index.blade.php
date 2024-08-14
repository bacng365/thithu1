@extends('layouts.default')

@section('title')
    @parent
    | Danh sách người dùng
@endsection

@push('styles')

@endpush


@section('content')
<div class="p-4" style="min-height: 800px;">
    <h3 class="text-primary-emphasis mb-2 fw-bold ps-2">Quản lý người dùng</h3>
    <div class="text-end">
        <button class="btn btn-primary">Thêm mới</button>
    </div>
    <table class="table table-bordered align-middle text-center mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Email</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Nguyễn Văn A</td>
                <td>abc@gmail.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Nguyễn Văn A</td>
                <td>abc@gmail.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Nguyễn Văn A</td>
                <td>abc@gmail.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Nguyễn Văn A</td>
                <td>abc@gmail.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection


@push('scripts')

@endpush
