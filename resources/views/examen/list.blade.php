<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Professional</title>
</head>
<body>
    <section>
        <table border="3">
            <tr>
                <td>NAME</td>
                <td>LASTNAME</td>
                <td>TYPE</td>
                <td>QUALIFICATION</td>
            </tr>
            @foreach($Professional as $prof)
            <tr>
                <th>{{$prof->name}}</th>
                <th>{{$prof->lastname}}</th>
                <th>{{$prof->type}}</th>
                <th>{{$prof->qualification}}</th>
            </tr>
            @endforeach
        </table>
    </section>
</body>
</html>