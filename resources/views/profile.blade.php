<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
    body{
        background-color:darkgrey;
    }
    table{
        font-family:sans-serif;
        border-collapse:collapse;
        width:100%;
    }
    td,th{
        border:1px solid;
        text-align:left;
        padding:8px;
    }
    tr:nth-child(even){
        background-color:#dddddd;
    }
    </style>
</head>

<body>
<table>
        <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
    </tr>
    @foreach($uprofile as $uprofiles)
    <tr>
        <td>{{$uprofiles->id}} </td>
        <td>{{$uprofiles->first_name}} </td>
        <td>{{$uprofiles->last_name}} </td>
        <td>{{$uprofiles->email}} </td>
    </tr>
    @endforeach
 </table>
</body>
</html>