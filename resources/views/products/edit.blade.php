<html>
    <head>
        <title>Update Product</title>
        <style>
           
        </style>
    </head>
    <body>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif

    <form action="{{ route('products.update',['id'=>$product->id]) }}" method="POST">
        @csrf
        <lable>Product Name</lable>
        <input type="text" name="product_name" value="{{ old('product_name')?old('product_name'):$product->name }}" />

        <lable>Product Price</lable>
        <input type="text" name="product_price" value="{{ $product->price }}"  />

        <lable>Product Unit</lable>
        <input type="text" name="product_unit" value="{{ $product->unit }}"  />


        <input type="submit" value="Update" />
    </form>

    </body>
</html>