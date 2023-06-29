<form method="post" action="/quyen">
    @csrf
    <label for="TenQuyen">Tên Quyền:</label>
    <input type="text" name="TenQuyen" required>
    <button type="submit">Thêm mới</button>
</form>