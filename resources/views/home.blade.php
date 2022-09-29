<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

 <h1>Welcome, {{$name}}</h1>
    <h2>{{date('d-m-y')}}</h2>
<!-- 
    <h1>{{$sec_syntax}}</h1>
    {!! $sec_syntax !!} -->

    <!-- @if($name != "")
        {{"Name is not empty"}}
    @else
      {{"Name is empty"}}
    @endif -->

    <!-- @isset ($name)
      Hello {{$name}}
    @endisset -->
    

    @for ($i=0; $i<=10; $i++)

    <h3>
    {{$i}}
   </h3>

    @endfor

</body>
</html>