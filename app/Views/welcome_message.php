<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
<body>
<h2>Hello, <?php echo $this->session->userdata('username'); ?></h2>

<h3>Clicks: <?php echo $count; ?></h3>

<form method="post" action="<?php echo site_url('projekt/click'); ?>">
 <button type="submit">Click me</button>
</form>

<a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
</body>
</html>
