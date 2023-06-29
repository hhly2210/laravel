<form method="post" action="/quyen/{{$quyen->id}}">
    @csrf
    @method('PUT')
    <label for="TenQuyen">Tên Quyền:</label>
    <input type="text" name="TenQuyen" value="{{ $quyen->TenQuyen }}" required>
    <button type="submit">Cập nhật</button>
</form>