<form action="{{url('qlsach/luudulieu')}}" method = "post">
    id: <input type='text' name='id'><br>
    Ten the loai: <input type='text' name='ten_the_loai'><br>
<input type='submit' value='Them'>
{{ csrf_field() }}
</form>