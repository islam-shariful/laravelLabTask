<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Create User Page</h1>
    <form method="post">
    @csrf
        <table>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username" placeholder="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="password"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><input type="text" name="type" placeholder="type"></td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="name" placeholder="name"></td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td><input type="text" name="department" placeholder="department"></td>
                </tr>
                <tr>
                    <td>CGPA:</td>
                    <td><input type="text" name="cgpa" placeholder="cgpa"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Create"></td>
                </tr>
        </table>
    </form>

</body>
</html>