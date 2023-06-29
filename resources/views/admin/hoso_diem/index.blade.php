@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Danh sách điểm</h5>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('hoso_diem.create') }}" class="btn btn-primary">Thêm mới</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>ID Học sinh</th>
                                <th>ID Môn học</th>
                                <th>Điểm</th>
                                <th>Thời gian cập nhật</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 0; ?>
                            @foreach ($hosoDiems as $hosoDiem)
                            <?php $index += 1; ?>
                                <tr>
                                    <td>{{ $index }}</td>
                                    <td>{{ $hosoDiem->HoTen }}</td>
                                    <td>{{ $hosoDiem->ThoiGianCapNhap }}</td>
                                    <td>
                                        <a href="{{ route('hoso_diem.edit', $hosoDiem->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                                        <form action="{{ route('hoso_diem.destroy', $hosoDiem->id) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xoá?')">Xoá</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
