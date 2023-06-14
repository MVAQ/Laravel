welcome.blade.php<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/form" method="post">
    @csrf
<input>
<input>


</form>

</body>
</html>

//Александр Лавыгин20:34
//cacls "C:\Example" /e /t /c /g John:F
//Александр Лавыгин21:18
//filter/type-in-new-or-biologichno-aktyvna-dobavka-and-brands-in-alan-jey-or-alterna/
//Александр Забара21:35
// Естественный
// /category-name/sub-category/sub-category
// /category/sub-category/sub-category1/product-name
// /category/sub-category/sub-category2/product-name
// /category/sub-category/sub-category3/product-name


// Смешаный
// /{category}/{sub-category?}/{sub-category1?}
// /category/sub-category/sub-category1/
// /category/sub-category/sub-category2/

// /{product-name}
// /product-name

// Плоский
// /category/{category-name}
// /category/category-name

// /product/{product-name}
// /p
