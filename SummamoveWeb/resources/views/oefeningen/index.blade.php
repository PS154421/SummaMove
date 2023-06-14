<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hi</h1>
    <table>
        <thead>
            <tr>
                <th>
                    Oefeningen
                </th>
            </tr>
        </thead>
    @isset($oefeningen)
    @foreach ($oefeningen as $oefening)
    <tbody>
        <tr>
            <td>
                {{$oefening['naam']}}
            </td>
        </tr>
    </tbody>
    
    @endforeach
    @endisset
    </table>
</body>
</html>