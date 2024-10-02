<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .wrapper {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }
        .sidebar ul li a:hover {
            background-color: #34495e;
        }
        .content {
            flex: 1;
            padding: 20px;
            background-color: #ecf0f1;
        }
        .dashboard-cards {
            display: flex;
            gap: 20px;
        }
        .card-box {
            padding: 20px;
            border-radius: 5px;
            color: white;
            text-align: center;
            width: 150px;
        }
        .card-box h2 {
            margin: 0;
            font-size: 2rem;
        }
        .card-blue { background-color: #3498db; }
        .card-red { background-color: #e74c3c; }
        .card-green { background-color: #2ecc71; }
        .card-yellow { background-color: #f39c12; }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="profile">
            <img src="https://via.placeholder.com/50" alt="Profile" class="img-fluid rounded-circle mb-2">
            <p class="text-center">Admin</p>
            <p class="text-center text-success">Online</p>
        </div>
        <hr>
        <ul>
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('informasi.index') }}"><i class="bi bi-info-circle-fill"> </i>  Informasi</a></li>
            <li><a href="{{ route('agenda.index') }}"><i class="bi bi-calendar"></i> </i>  Agenda</a></li>
            <li><a href="{{ route('album.index') }}"><i class="bi bi-journal-album"></i> </i>  Album </a></li>
            <li><a href="{{ route('kategori.index') }}"><i class="bi bi-card-checklist"> </i>  Kategori </a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> Reports</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Users</a></li>
        </ul>
        <hr>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger w-100"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
    </div>

    <!-- Content -->
    <div class="content">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Dashboard</span>
            <div class="d-flex">
                <span class="me-3"><i class="fas fa-bell"></i> <span class="badge bg-danger">3</span></span>
                <span>Admin</span>
            </div>
        </nav>

        <div class="dashboard-cards mt-4">
            <div class="card-box card-blue">
            <i class="bi bi-info-circle-fill fa-2x mb-3"></i>
                <h2>11</h2>
                <p>Items</p>
            </div>
            <div class="card-box card-red">
                <i class="fas fa-truck fa-2x mb-3"></i>
                <h2>3</h2>
                <p>Suppliers</p>
            </div>
            <div class="card-box card-green">
                <i class="fas fa-users fa-2x mb-3"></i>
                <h2>11</h2>
                <p>Customers</p>
            </div>
            <div class="card-box card-yellow">
                <i class="fas fa-user-plus fa-2x mb-3"></i>
                <h2>4</h2>
                <p>Users</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
