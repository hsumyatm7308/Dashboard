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
        @foreach($items as $item)
        <tr>
       {{ $item->perfume_name }}
        </tr>
      @endforeach
     </td>
        
    </body>
</html>