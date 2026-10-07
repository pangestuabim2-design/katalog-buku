<!DOCTYPE html>
<html>
<head><title>Perpus</title></head>
<body style="font-family:Arial;padding:20px">
    @if(session('success'))
        <div style="background:#d4edda;padding:10px;margin-bottom:10px">{{ session('success') }}</div>
    @endif
    @yield('content')
</body>
</html>