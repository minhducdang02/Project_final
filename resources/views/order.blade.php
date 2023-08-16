<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Details</title>
</head>

<body>
    <h1>Bill for Order #{{ $order->id }}</h1>

    <p>Date: {{ $order->date }}</p>
    <p>User: {{ $order->user->username }}</p>

    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->receipts as $receipt)
            <tr>
                <td>{{ $receipt->product_name }}</td>
                <td>{{ $receipt->quantity }}</td>
                <td>{{ $receipt->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total: {{ $order->receipts->sum('total') }}</p>

</body>

</html>