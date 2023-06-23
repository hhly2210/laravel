<form method="post" action="/hoc_sinh">
    @csrf
    <label for="ho_ten">Họ tên:</label>
    <input type="text" name="ho_ten" required>
    <button type="submit">Thêm mới</button>
</form>