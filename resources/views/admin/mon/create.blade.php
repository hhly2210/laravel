<form method="post" action="/mon">
    @csrf
    <label for="TenMon">Tên Môn:</label>
    <input type="text" name="TenMon" required>
    <button type="submit">Thêm mới</button>
</form>