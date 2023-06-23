@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Danh sách học sinh</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Thời gian cập nhật</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hocSinhs as $hocSinh)
                                <tr>
                                    <td>{{ $hocSinh->id }}</td>
                                    <td>{{ $hocSinh->ho_ten }}</td>
                                    <td>{{ $hocSinh->thoi_gian_cap_nhap }}</td>
                                    <td>
                                        <a href="{{ route('hoc_sinh.edit', $hocSinh->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                                        {{-- <form action="{{ route('hoc_sinh.destroy', $hocSinh->id) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xoá?')">Xoá</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('hoc_sinh.create') }}" class="btn btn-primary">Thêm mới</a>
                </div>
            </div>
        </div>
    </div>
@endsection
