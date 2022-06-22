<h1> this is member file </h1>

<table border="1">
     <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>PASSWORD</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['password']}}</td>
    </tr>
    @endforeach
</table>

<span>
    {{$users->links()}}
</span>

<style>
    .w-5{
        display : none;
    }
</style>