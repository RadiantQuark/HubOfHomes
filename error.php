<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);

if (! $error) {
    $error = 'Oops! An unknown error happened.';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Error</title>
        <link rel="stylesheet" href="css/theme.css" />
    </head>
    <body>
        <h1>There was a problem</h1>
        <h3 class="error" style="font-weight:normal;color:red;"><?php echo $error; ?></h3>  
    </body>
</html>
