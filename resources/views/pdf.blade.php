<html>
<head>
    <title>PDF</title>
</head>
<body>
    <b>Image</b>
    <br/><br/>
    <img src="{{ storage_path('passport/' . $driver->image) }}" />
    <br/><hr/><br/>
    <b>First Name:</b> {{ $driver->first }}<br/>
    <b>Last Name:</b> {{ $driver->last }}<br/>
    <b>Age:</b> {{ $driver->age }}<br/>
    <br/><hr/><br/>
    <b>Phone number:</b> {{ $driver->phone }}<br/>
    <b>Home address:</b> {{ $driver->address }}<br/>
    <b>Zip-code:</b> {{ $driver->zip }}<br/>
    <br/><hr/><br/>
    <b>Driver license number:</b> {{ $driver->license }}<br/>
    <b>Social security number:</b> {{ $driver->social }}<br/>
    <b>Bank account number:</b> {{ $driver->bank }}<br/>
</body>
</html>