<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 7.4 URL Server</title>
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $usedMethod='POST';
        }
        else
        {
            $usedMethod='GET';
        }
        $lastName=$_REQUEST['lastname'];
        $firstName=$_REQUEST['firstname'];
        ?>
        <p>The server script 
            <span style="font-weight:bold"> <?= __FILE__ ?></<span>
            <span style="font-weight:normal"> has received parameters with the</span>
            <span style="font-weight:bold"> <?= $usedMethod ?></span>
            <span style="font-weight:normal"> method</span>
        </p>
        <p>lastname=<?= $lastName ?></p>
        <p>firstname=<?= $firstName ?></p>
    </body>
</html>