<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cart</h1>
    <form action="{{ route('receipt.save') }}" method="POST">
        @csrf
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Checkbox</th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                <tr>
                    <td>
                        <input type="checkbox" name="selected_cart_ids[]" value="{{ $cart->id }}">
                    </td>
                    <td>{{ $cart->id }}</td>
                    <td><img src="{{ $cart->image }}" alt="{{ $cart->product_name }}" width="50"></td>
                    <td>{{ $cart->product_name }}</td>
                    <td>{{ $cart->price }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>{{ $cart->price * $cart->quantity }}</td>
                    <td>
                        <button type="submit" formaction="{{ route('cart.delete', ['cart_id' => $cart->id]) }}"
                            formmethod="POST">Remove</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit">Buy Now</button>
    </form>
</body>

</html>