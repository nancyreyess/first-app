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

            <h2>Add Type</h2>

            <form method="post" action="/console/types/add" novalidate class="w3-margin-bottom">
            
                <?= csrf_field() ?>
                
                <div class="w3-margin-bottom">

                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title">

                    <?php if($errors->first('title')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('title') ?></span>
                    <?php endif; ?>

                </div>

                <button type="submit" class="w3-button w3-green">Add Type</button>

            </form>

            <a href="/console/types/list">Back to Types List</a>

        </section>

    </body>
</html>