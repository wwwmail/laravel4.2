<html>
<head></head>
<body>
it is layout
<div class="header">
@section ('header')
    <h1>Header</h1>
@show
</div>

<div class="content">
@yield('content')
</div>

<div class="footer">
</div>
</body>
</html>
