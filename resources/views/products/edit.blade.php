<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        *{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}
body{
 background: #67BE4B;
}
#container{
 width:400px;
 margin:0 auto;
 margin-top:10%;
}
/* Bordered form */
form {
 width:100%;
 padding: 30px;
 border: 1px solid #f1f1f1;
 background: #fff;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
 width: 38%;
 margin: 0 auto;
 padding-bottom: 10px;
 text-align: center;
}

/* Full-width inputs */
input[type=text], input[type=name] {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
 background-color: #53af57;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}
input[type=submit]:hover {
 background-color: white;
 color: #53af57;
 border: 1px solid #53af57;
}
</style>
</head>
<body>  <div id="container">

  <h1> Edit a Product  </h1>
  
  <div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach  
    </ul>
    @endif
</div>

  <!-- <form method="post" action="{{route('product.store')}}"> -->
  <form method="post" action="{{ route('product.update', ['product'=> $product]) }}">
    @csrf
    @method('put')
        <div>
            <lable>Name </lable>
            <input type="name" name="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <lable>Qty </lable>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>
        <div>
            <lable>Price </lable>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <lable>Description</lable>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" id='submit' value='Update' >
        </div>
  </from></div>
</body>
</html>