<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="container">

        {{-- {{print_r($data)}} --}}
        {{-- {{var_dump($data)}} --}}
<table class="table">
    <thead>
        <tr>
            <th>Serial</th>
            <th>blood_group</th>
            <th>name</th>
            <th>Facebook</th>
            <th >District</th>
            <th >city</th>
            {{-- <th >zone</th> --}}
        </tr>
    </thead>
    
    <tbody>
        @php($i=1)
        {{-- @foreach ($data as $value) --}}
        @foreach($data['users'] as $value)
        <tr>
            @if ($value['blood_group']==='O+')
            <td>{{$i++}}</td>
            <td>{{$value['blood_group']}}</td>
            <td>{{$value['name']}}</td>
            <td><a href="{{$value['contract_other_fb']}}">click</a></td>
            <td>{{$value['district']}}</td>
            <td>{{$value['city']}}</td>
            @endif
        </tr>
        @endforeach      
    </tbody>
</table>


    </body>
</html>
