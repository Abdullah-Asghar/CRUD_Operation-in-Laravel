<form method="post" action="{{url('user', $users->id)}}">
    <input type="hidden" name="_method" value="PUT">
    @csrf
Name: <input type="text" name="name" value="{{$users->name}}"><br>
Email: <input type="text"name="email" value="{{$users->email}}"><br>
<input type="submit" name="submit" value="Update Record">
</form>