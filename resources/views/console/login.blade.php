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
        <form method="post" action="/console/login" novalidation>
            
            <?= csrf_field() ?> <!--making sure submitted data is coming from this website, not external source-->
            
            <div class="w3-maring-bottom">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="<?= old('email') ?>">

                <?php if($errors->first('email')): ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                <?php endif; ?>

            </div>

            <div class="w3-maring-bottom">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">

                <?php if($errors->first('password')): ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                <?php endif; ?>

            </div>

            <button type="submit">Log In</button>

        </form>
    </section>
</body>
</html>