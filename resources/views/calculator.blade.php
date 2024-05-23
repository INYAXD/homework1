<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>簡單計算</h1>

    <form action="" method="get">
        @csrf
        <label for="n1">請輸入第一個數字</label>
        <input type="text"name="n1">
        <label for="n2">請輸入第二個數字</label>
        <input type="text"name="n2">
        <input type="submit" value="送出">
    </form>

    <div class="content">
        @yield("content")
    </div>
</body>
</html>