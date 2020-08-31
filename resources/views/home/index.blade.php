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
        <a href="home/createUser">Crate User</a>
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
                <td>User Name</td>
                <td>Password</td>
                <td>Type</td>
                <td>Full Name</td>
                <td>Department</td>
                <td>CGPA</td>
                <td>Actions</td>
            </tr>
        @for($i=0; $i !=count($data);$i++)
            <tr>
                @if($data[$i]['userid'] != null)
                <td>{{$data[$i]['userid']}}</td>
                <td>{{$data[$i]['username']}}</td>
                <td>{{$data[$i]['password']}}</td>
                <td>{{$data[$i]['type']}}</td>
                <td>{{$data[$i]['name']}}</td>
                <td>{{$data[$i]['department']}}</td>
                <td>{{$data[$i]['cgpa']}}</td>
                <td>
                    <a href="/home/edit/{{$data[$i]['userid']}}">Edit</a> |
                    <a href="/home/delete/{{$data[$i]['userid']}}">Delete</a> |
                    <a href="/home/details/{{$data[$i]['userid']}}">Details</a>
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