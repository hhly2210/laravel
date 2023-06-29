<form method="post" action="/hoc_sinh">
    @csrf
    <label for="HoTen">Họ tên:</label>
    <input type="text" name="HoTen" required>
    <button type="submit">Thêm mới</button>
</form>