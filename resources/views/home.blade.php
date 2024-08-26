<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project ABC</title>

    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <h3 style="margin-left: 10%;">Using CSS to style an HTML Form</h3>

    <div style="width: 80%; margin: auto;">
        <form action="{{url('/data/create')}}" method="POST" id="formId">
            @csrf
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your Email..">

            <input type="submit" value="Submit">
        </form>
    </div>

    <table id="customers" style="width: 80%; margin: 20px auto;">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>

        @foreach ($info as $i) 
        <tr>
            <td>{{$i->fname}}</td>
            <td>{{$i->email}}</td>
            <td><a type="button" href="{{url('/data/edit/view/' . $i->id)}}">Edit</a></td>
            <td><a type="button" href="{{url('/data/delete/' . $i->id)}}">Delete</a></td>
        </tr>         
        @endforeach
    </table>


</body>

</html>