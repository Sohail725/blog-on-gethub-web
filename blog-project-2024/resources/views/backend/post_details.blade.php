<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->post_name }}</title>
    <style>
        /* Resetting default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f9;
            padding: 20px;
            display: flex;
            justify-content: center;
            color: #333;
        }

        .container {
            max-width: 800px;
            width: 100%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: block;
            max-width: 150px;
            margin: 0 auto 20px;
        }

        h1 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin-bottom: 15px;
        }

        h2 {
            font-size: 1.5em;
            color: #444;
            margin-top: 20px;
            margin-bottom: 10px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }

        .summary {
            font-size: 1.2em;
            margin: 10px 0;
            color: #666;
            text-align: center;
        }

        .content img {
            display: block;
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .details {
            font-size: 1em;
            line-height: 1.6;
            margin: 20px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Website logo -->
        <img src="{{ asset('backend/image/logo.png') }}" alt="Website Logo" class="logo">

        <h1>{{ $post->post_name }}</h1>

        <!-- Post Summary Section -->
        <h2>Post Summary</h2>
        <p class="summary">{{ $post->post_summary }}</p>


        <!-- Post Details Section -->
        <h2>Post Details</h2>
        <div class="details">
            <p>{{ $post->post_details }}</p>
        </div>
    </div>
</body>
</html>
