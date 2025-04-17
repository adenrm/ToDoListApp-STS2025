<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            overflow: hidden;
        }
        .pinky {
            color: pink
        }
        .konten {
            display: flex;
            backdrop-filter: blur(10px) brightness(120%);
            margin:20px
        }
        .konten1 {
            width: 60vh;
            background-color: white
        }
        .konten2 {
            width: 40vh;
        }
        .kata {
            margin: 50px;
        }
        .katakecil {
            margin-top: -30px;
            padding-left: 20px;
            padding-right: 20px;
            text-align: justify
        }
        .copyright{
            margin-top: 278px;
            margin-left: 20px;
            user-select: none
        }
        .smartguy:hover {
            color: cyan;
            transition: 1s;
        }
        .form-control {
            scale: 0.9;
            width: 300px;
            height: 40px;
        }
        .form-control:focus {
            border-block-color: cyan;
            border: 10px;
            transition: 1s;
        }
        .form-control:hover {
            scale: 1;
            transition: 1s ease-in-out;
        }
        .button {
            padding: 5px;
            padding-left: 9px;
            padding-right: 9px;
        }
        .button:hover {
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: rgb(11, 174, 51);
            transition: 1s;
        }
        .form {
            margin: 200px;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            border-radius: 10px;
            box-shadow: 10 20 30 20;
        }
        body {
            background-image: url('{{asset('img/background.jpg')}}');
        }
        </style>
</head>
<body>
    <div class="konten">
        <div class="konten1">
            <h1 class="kata">ToDo List App by DEDEN</h1>
            <h4 class="katakecil">Ini adalah project super sederhana STS 2025, di website ini kamu bisa membuat daftar pekerjaan apapun dimanapun dan kapanpun!</h4>
            <div class="copyright">  
                <h6><br>All Right Deserved!.</br>
                    &copy; 2025, Made with love by 
                    <span onclick="smart()" class="smartguy"
                    style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    text-decoration: overline">
                        The Smart Guy!
                    </span></h6>
            </div>
            <script>
                function smart() {
                    document.getElementById('smartguy').classList.add('pinky')
                    document.getElementById('smartguy').innerText = 'COOL!!'
                }
            </script>
        </div>
        <div class="konten2">
            <form class="form" action="{{route('sigin')}}" method="POST">
                <h1>Login</h1>
                @csrf
                <table>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input class="form-control" type="email" name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input class="form-control" type="password" name="password" id="password">
                        </td>
                    </tr>
                </table>
                <input class="button" type="submit" value="login">
            </form>
        </div>
    </div>
</body>
</html>