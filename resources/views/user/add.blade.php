<form action="{{url('user')}}" method="post">
    @csrf
 Name:   <input type="text" name="name" placeholder="enter your name"><br/>
 Email:   <input type="text" name="email" placeholder="email"><br>
    <input type="submit" name="save" value="submit">
</form>