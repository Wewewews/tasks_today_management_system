<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($pageTitle) ?> | Tasks for Today</title>

    <style>
        body {
            margin: 0;
            background: #f4f6f8;
            color: #222;
            font-family: Arial, sans-serif;
        }

        nav {
            padding: 18px;
            background: #1f4e78;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            font-weight: bold;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 950px;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
        }

        h1 {
            color: #1f4e78;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #d9d9d9;
            text-align: left;
        }

        th {
            background: #1f4e78;
            color: white;
        }

        .completed {
            color: green;
            font-weight: bold;
        }

        .pending {
            color: #c26a00;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav>
        <a href="<?= site_url('/') ?>">Welcome</a>
        <a href="<?= site_url('tasks') ?>">Task List</a>
        <a href="<?= site_url('profile') ?>">Profile</a>
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <main class="container"></main>