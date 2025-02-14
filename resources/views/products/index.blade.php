<html>
    <head>
        <title>{{$title}}</title>
        <style>
            table{
                width: 100%;
                border-collapse: collapse;
            }
            table,tr,th,td{
                border: 1px solid black;
                text-align:left;
            }
            td,th{
                padding:5px;
            }
        </style>
    </head>
    <body>
        <h1>Products</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Unit</th>
                <th>Actions</th>
            </tr>
        @if(session('warning'))
            {{session('warning')}}
        @endif

        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->unit}}</td>
                <td>    
                <a href="{{route('products.show',['id'=>$product->id])}}">Show</a>    
                <a href="{{route('products.edit',['id'=>$product->id])}}">Edit</a>   
                <a href="{{route('products.destroy',['id'=>$product->id])}}">Delete</a>  
            </tr>
        @endforeach
            
        </table>
    </body>
</html>