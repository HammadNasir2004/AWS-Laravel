<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            background: #f5f7fa;
            min-height:  }
        .navbar {
            background:100vh;
        white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand {
            font-size: 20px;
            font-weight: 700;
            color: #667eea;
        }
        .navbar-user {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .user-name {
            color: #333;
            font-weight: 500;
        }
        .btn-logout {
            padding: 8px 20px;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn-logout:hover {
            background: #c82333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 30px;
        }
        .welcome-banner {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            padding: 40px;
            color: white;
            margin-bottom: 30px;
        }
        .welcome-banner h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }
        .welcome-banner p {
            font-size: 16px;
            opacity: 0.9;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .stat-card h3 {
            color: #666;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .stat-card .value {
            color: #333;
            font-size: 32px;
            font-weight: 700;
        }
        .content-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .content-card h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 20px;
        }
        .content-card p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">Dashboard</div>
        <div class="navbar-user">
            <span class="user-name">Welcome, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="welcome-banner">
            <h1>Welcome to Your Dashboard</h1>
            <p>You have successfully logged in to your account.</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Users</h3>
                <div class="value">1</div>
            </div>
            <div class="stat-card">
                <h3>Active Sessions</h3>
                <div class="value">1</div>
            </div>
            <div class="stat-card">
                <h3>Account Status</h3>
                <div class="value" style="font-size: 24px;">Active</div>
            </div>
            <div class="stat-card">
                <h3>Member Since</h3>
                <div class="value" style="font-size: 18px;">{{ Auth::user()->created_at->format('M Y') }}</div>
            </div>
        </div>

        <div class="content-card">
            <h2>Dashboard Overview</h2>
            <p>
                This is your one-page dashboard. Here you can see all your important statistics 
                and information at a glance. The dashboard is protected and only accessible to 
                authenticated users.
            </p>
            <br>
            <p>
                <strong>Your Account Details:</strong><br>
                Name: {{ Auth::user()->name }}<br>
                Email: {{ Auth::user()->email }}
            </p>
        </div>
    </div>
</body>
</html>
