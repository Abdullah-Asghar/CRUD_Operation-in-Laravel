<a style="font-size:25px" href="{{url('user/create')}}">Add New Record</a>
                
        <table border="1" cellspaceing="4" cellpadding="4">
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Action</th>
               {{-- show method call automatically --}}
                @foreach ($users as $user)
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td> <a href="{{url('user', $user->id)}}">View</a>/ <a href="{{url('user', [$user->id, 'edit'])}}"> Edit</a>/ <form method="post" action="{{url('user',$user->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="submit" value="Delete">
                @csrf   
                </form></td>  
                </tr>    
                @endforeach
        </table>