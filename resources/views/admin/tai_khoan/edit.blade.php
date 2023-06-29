<form method="post" action="/mon/{{$mon->id}}">
    @csrf
    @method('PUT')
    <label for="TenMon">Tên Môn:</label>
    <input type="text" name="TenMon" value="{{ $mon->TenMon }}" required>
    <button type="submit">Cập nhật</button>
</form>