<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Table</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
        }

        .btn {
            padding: 6px 10px;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 12px;
        }

        .view {
            background-color: #17a2b8;
        }

        .edit {
            background-color: #007bff;
        }

        .delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Posted By</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>
                    {{$post['id']}}
                </td>
                <td>
                    {{$post['title']}}
                </td>
                <td>
                    {{$post['posted_by']}}
                </td>
                <td>2018-04-10</td>
                <td>
                    <a href="/posts/{{$post['id']}}" class="btn view">View</a>
                    <a href="#" class="btn edit">Edit</a>
                    <a href="#" class="btn delete">Delete</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>