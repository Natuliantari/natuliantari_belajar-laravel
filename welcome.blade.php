
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Tagihan PDAM</title>
</head>
<body>
    <h1>Hitung Tagihan PDAM</h1>

    <form action="{{ route('hitung') }}" method="post">
        @csrf

        <label for="pemakaian">Masukkan pemakaian air (m3): </label>
        <input type="number" name="pemakaian" id="pemakaian" required>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>