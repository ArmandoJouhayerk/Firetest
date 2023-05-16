<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new product</title>
</head>
<body>
    <h1>Add new Product</h1>

    <form>
        @csrf

        <label for="name">Product</label>
        <br><br>
        <input type="text" name="product">
        <br><br>

        <label for="price">Price</label>
        <br><br>
        <input type="number" name="price">
        <br><br>

        <label for="description">Description</label>
        <br><br>
        <textarea name="description" cols="50" rows="5"></textarea>
        <br><br>


    </form>
    
</body>
</html>