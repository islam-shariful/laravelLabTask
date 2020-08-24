<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>Delete Page</h1>
    <form method="post">
        <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id" value="{{$id}}"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="{{$name}}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="{{$email}}"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="{{$password}}"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="delete"></td>
                </tr>
        </table>
    </form>

</body>
</html>