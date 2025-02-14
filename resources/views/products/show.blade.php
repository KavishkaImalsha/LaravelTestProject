<html>
    <head>
        <title>Product</title>
    </head>
<body>

<a href="{{route('products.index')}}">
    Back 
</a>

<h4>Product Name</h4>
<p>{{$product->name}}</p>

<h4>Product Price</h4>
<p>
    {{$product->price}}
    /{{$product->unit}} 
</p>

</body>
</html>