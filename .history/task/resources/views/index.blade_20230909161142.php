<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <style>
    
    </style>
    <body>

     <td>
        <tr>
            Id
        </tr>
        <tr>
            Name
        </tr>
        <tr>
            Price
        </tr>
        <tr>
            Status
        </tr>
     </td>
     <td>
        <tr>@foreach($items as $item)
    {{ $item->column_name }}
    <!-- Display other item properties here -->
@endforeach
</tr>
     </td>
        
    </body>
</html>