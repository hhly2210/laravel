<form method="post" action="/hoc_sinh/{{$hocSinh->id}}">
    @csrf
    @method('PUT')
    <label for="HoTen">Họ tên:</label>
    <input type="text" name="HoTen" value="{{ $hocSinh->HoTen }}" required>
    <button type="submit">Cập nhật</button>
</form>