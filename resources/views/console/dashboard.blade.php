<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-quiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js"></script>
    </head>  
    <body>
        <header class="w3-padding">
            <h1 class="w3-text-red">Project Dashboard</h1>

            <?php if(Auth::check()): ?>
                You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> | 
                <a href="/console/logout">Log Out</a> | 
                <a href="/console/dashboard">Dashboard</a> | 
                <a href="/">Website Home Page</a>
            <?php else: ?>
                <a href="/">Return to My Portfolio</a>
            <?php endif; ?>

        <header>
        <hr>
        <section class="w3-padding">
            <ul id="dashboard">
                <li><a href="/console/projects/list">Manage Projects</a></li>
                <li><a href="/console/types/list">Manage Types</a></li>
                <li><a href="/console/users/list">Manage Users</a></li>
            </ul>
        </section>
    </body>
</html>