<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <label for="">km_price</label>
        <input type="text" name="KM-price">
        <label for="">kg_price</label>
        <input type="text" name="KG-price">
        <label for="">air Fright</label>
        <input type="text" name="air_fright">
        <label for="">road Fright</label>
        <input type="text" name="road_fright">
        <label for="">ocean Fright</label>
        <input type="text" name="ocean_fright">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>