<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .success-message {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            margin-bottom: 10px;
        }

        .create-button {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .create-button:hover {
            background-color: #0056b3;
        }
        #submit2{
            background-color: #53af57;
            border-radius: 5px;
            color: white;
        }
        #submit{
            background-color: #53af57;
            color: white;
            padding: 14px 20px;
            margin: 8px 25%;
            border: none;
            cursor: pointer;
            width: 50%;
        }
        input[type=submit]:hover {
            background-color: white;
            color: #53af57;
            border: 1px solid #53af57;
        }
</style>
<body>
<h1>product</h1>
<div>
    @if(session()->has('success'))
    <div>
         {{session('success')}}
    </div>
    @endif

</div>
<div>
   
       <table border="1">

              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              @foreach($products as $product )
               <tr>
               <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                    <a href="{{route('product.edit',['product'=> $product])}}">Edit</a> 
                    </td>
                    <td>
                    <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" id='submit2' value="Delete" />
                        </form>
                        <!-- <from method="post" action="{{route('product.destroy',['product'=> $product])}}"> 
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </from>-->
                    </td>
               </tr> 
               @endforeach
       </table>
       <div>
        <!-- <input href="{{route('product.create')}}" type="submit" value="Create a new product "> -->
       <input type="submit" id='submit'value="Create a new Product" onclick="window.location.href='{{ route('product.create', ['product' => $product]) }}';">

    </div>

</div>
    
</body>
</html>