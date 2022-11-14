<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: #EEE;
            margin-left: 400px;
            margin-top: 100px;

        }


    </style>
</head>
<body>
 <table border="5">
    <tr>
        <th>number chambr</th>
        <th>type chambr</th>
        <th> nombre champer</th>
        <th>number enfants</th>
        <th>setiation</th>
    </tr>
    <tr>
        <td>{{ $numch }}</td>
        <td>{{ $select }}</td>
        <td>{{ $nump }}</td>
        <td>{{ $nume }}</td>
        <td>{{ $set }}</td>
    </tr>
 </table>
</body>
</html>
