<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .home-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            padding: 50px 40px;
            text-align: center;
        }
        .home-header {
            margin-bottom: 40px;
        }
        .home-header h1 {
            color: #333;
            font-size: 32px;
            margin-bottom: 15px;
        }
        .home-header p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }
        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .btn {
            padding: 15px 30px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }
        .btn-outline {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
        }
        .btn-outline:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }
    </style>
</head>
<body>
    <div class="home-container">
        <div class="home-header">
            <h1>Welcome to Dashboard</h1>
            <p>Please sign in or create an account to access your personalized dashboard.</p>
        </div>

        <div class="btn-container">
            <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
            <a href="{{ route('signup') }}" class="btn btn-outline">Create Account</a>
        </div>
    </div>
</body>
</html>
