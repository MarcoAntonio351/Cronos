<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
</head>
<body>
    <div class=class="grid grid-cols-7 gap-4">
            <div>D</div>
            <div>S</div>
            <div>T</div>
            <div>Q</div>
            <div>Q</div>
            <div>S</div>
            <div>S</div>
        @php
        $hoje = \Carbon\Carbon::now();
        $first = $hoje->firstOfMonth();
        $last = $hoje->lastOfMonth();
        @endphp
        @for($i = 0; $i< $first->daysInMonth; $i++)
            <div>{{$i+1}}</div>
        @endfor
    </table>
</body>
</html>