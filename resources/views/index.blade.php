<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(189, 135, 250);

        }
        form{
            margin-left: 500px;
        }
        h1{
            margin-left: 500px;
        }

        select{
            width: 177px;
            margin-left: 20px;
            background-color: rgb(3, 3, 3);
            color: white;
        }
        input{
            background-color: rgb(3, 3, 3);
            color: white;
        }
        button{
           margin-left: 50px;
           margin-top: 10px;
           background-color: rgb(3, 3, 3);
            color: white;
            width: 177px;
        }

    </style>
</head>
<body>
    <h1>gestion hotel</h1>
<form action="tab" method="post">

@csrf
<label for="numch">numero chambre</label>
<input type="text" name="numch"><br>
<label for="select">tybe chambre</label>
<select name="select" >
    <option value="simple">simple</option>
    <option value="double">double</option>
    <option value="start">start</option>
</select><br>
<label for="nump">numero chambre</label>
<input type="text" name="nump"><br>
<label for="nume">numero chambre</label>
<input type="text" name="nume"><br>
<label for="set">numero chambre</label>
<input type="radio" name="set" value="marie" >marie
<input type="radio" name="set" value="cele" >cele<br>
<button>reserve</button>



</form>
</body>
</html>
