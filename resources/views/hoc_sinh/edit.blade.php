<form method="post" action="/hoc_sinh/{{$hocSinh->id}}">
    @csrf
    @method('PUT')
    <label for="ho_ten">Họ tên:</label>
    <input type="text" name="ho_ten" value="{{ $hocsinh->ho_ten }}" required>
    <button type="submit">Cập nhật</button>
</form>