<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>This is LARAVEL home<h1>

    <form>
        <input name='search' placeholder="Search By Id"/>
        <input type='submit' id='submit' name='submit' value='submit'/>
    </form>
    
    <table  border='1px'>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Actions</td>
        </tr>

    @for($i=0; $i !=count($users);$i++)
        <tr>
            @if($users[$i]['id'] != null)
            <td>{{$users[$i]['id']}}</td>
            <td>{{$users[$i]['name']}}</td>
            <td>{{$users[$i]['email']}}</td>
            <td>{{$users[$i]['password']}}</td>
            <td>
                <a href="/home/edit/{{$users[$i]['id']}}">Edit</a> |
                <a href="/home/delete/{{$users[$i]['id']}}">Delete</a> |
                <a href="/home/details/{{$users[$i]['id']}}">Details</a> |
            </td>
            @endif
        </tr>
    @endfor
    </table>
</body>
</html>