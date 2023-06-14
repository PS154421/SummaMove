<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>SummaMove</title>
</head>
<body class ="bg-indigo-300">
    <h1 class="text-center">SummaMove overview</h1>
    <table class="w-full text-sm text-left text-gray-400">
        <thead class="text-xs uppercase bg=gray-700 text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6 text-black">
                    Oefeningen
                </th>
            </tr>
        </thead>
    @isset($oefeningen)
    @foreach ($oefeningen as $oefening)
    <tbody>
        <tr class="border-b bg-gray-800 border-gray-700">
            <td class="py-4 px-6">
                {{$oefening['naam']}}
            </td>
        </tr>
    </tbody>
    
    @endforeach
    @endisset
    </table>
</body>
</html>