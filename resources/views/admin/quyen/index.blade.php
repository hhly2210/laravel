@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Danh sách quyền</h5>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('quyen.create') }}" class="btn btn-primary">Thêm mới</a>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên quyền</th>
                                <th>Thời gian cập nhật</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 0; ?>
                            @foreach ($quyens as $quyen)
                            <?php $index += 1; ?>
                                <tr>
                                    <td>{{ $index }}</td>
                                    <td>{{ $quyen->TenQuyen }}</td>
                                    <td>{{ $quyen->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('quyen.edit', $quyen->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                                        <form action="{{ route('quyen.destroy', $quyen->id) }}" method="POST" style="display: inline-block">
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
