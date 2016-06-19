<html>
<head>
    <title>PDF</title>
</head>
<body>
    <b>Image</b>
    <br/><br/>
    <img src="{{ storage_path('passport/' . $driver->image) }}" />
    <br/><br/>
    <b>First Name:</b> {{ $driver->first }}<br/>
    <b>Last Name:</b> {{ $driver->last }}<br/>
    <b>License ID:</b> {{ $driver->license }}<br/>
</body>
</html>