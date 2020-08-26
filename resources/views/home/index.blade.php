<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
</head>
<body>
    <div>
        <h1>This is LARAVEL home<h1>
    </div>
    <!-- Search -->
    <!-- <form>
        <input name='search' placeholder="Search By Id"/>
        <button type="button" id='submit'  onclick="test()">Submit</button>
    </form> -->

    <!-- Result View -->
    <div>
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
                    <a href="/home/details/{{$users[$i]['id']}}">Details</a>
                </td>
                @endif
            </tr>
        @endfor
        </table>
    </div>
    <div>
        <a href="/logout">Logout</a>
    </div>

    <!-- JS Script -->

    <!-- <script>
        $(document).ready(function(){
        $("button").click(function(){
            $.ajax({url: "user.json", success: function(result){
            // $("#div1").html(result);
            console.log(result);
            }});
            // alert("this this jquery ajax");
        });
        });
    </script> -->

    <!-- <script>
        document.getElementById('submit').addEventListener('click', test());
        function test(){
            var xhttp = new XMLHttpRequest();
            xhttp.open('GET','user.json',true);

            xhttp.onload = function(){
                if(this.status == 200){
                    // var user = JSON.parse(this.responseText);
                    // console.log(user);
                    console.log("LALAA");
                }
            }
            xhttp.send();
        }
    </script> -->
</body>
</html>