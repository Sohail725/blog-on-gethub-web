
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
            max-width: 600px;
            width: 100%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
            display: block;
            max-width: 120px;
            margin: 0 auto 20px;
        }

        h1 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 15px;
        }

        p {
            font-size: 1em;
            color: #555;
            margin: 10px 0;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .unsubscribe {
            margin-top: 20px;
            font-size: 0.9em;
            color: #888;
        }

    </style>
</head>
<body>
    <div class="container">

        <!-- Website logo -->
        <img src="{{ asset('backend/image/logo.png') }}" alt="Website Logo" class="logo">

        <h1>{{ $post->post_name }}</h1>
        <p>{{ $post->post_summary }}</p>

        <!-- Trackable single link for both tracking and viewing post details -->
        <p><a href="{{ route('track.email.open', ['post_id' => $post->id, 'subscriber_id' => $subscriber->id]) }}">
            View Post Details
        </a></p>
        <!-- Unsubscribe link -->
        <p class="unsubscribe">
            <a href="{{ $unsubscribeUrl }}">Unsubscribe</a> if you no longer wish to receive updates.
        </p>
    </div>
</body>
</html>
