@foreach ($users as $user)
    Name: {{$user->name}} <br>
    Email: {{$user->email}}
@endforeach