<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        /* Navbar */
        .navbar {
            background: #333;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar ul li a:hover {
            text-decoration: underline;
        }

        /* Content */
        .container {
            padding: 20px;
        }

        .card {
            width: 100%;
            min-height: 250px;
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #222;
        }

        .card-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="{{route('posts.index')}}" class="logo">All Posts</a>

        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/posts">Posts</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="card">
            <h1 class="card-title">
                {{$posts[$postId-1]['title']}}
            </h1>

            <p class="card-description">
                {{$posts[$postId-1]['description']}}
            </p>
        </div>
    </div>

</body>
</html>