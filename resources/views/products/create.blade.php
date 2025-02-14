<html>
    <head>
        <title>Create Product</title>
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

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <lable>Product Name</lable>
        <input type="text" name="product_name" value="{{ old('product_name') }}" />

        <lable>Product Price</lable>
        <input type="text" name="product_price" value="{{ old('product_price') }}"  />

        <lable>Product Unit</lable>
        <input type="text" name="product_unit" value="{{ old('product_unit') }}"  />


        <input type="submit" value="Save" />
    </form>

    </body>
</html>