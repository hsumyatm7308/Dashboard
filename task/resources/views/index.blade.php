<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<style>
    /* Add your CSS styles here */
</style>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->perfume_name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
