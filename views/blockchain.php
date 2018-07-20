<!DOCTYPE html>
<html lang="en">
<head>
    <title>BlockChain</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>All Blocks</h1>
</div>

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Pass</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($testCoin as $coin) { ?>

            <tr>
                <td><?php echo $coin->nonce ?></td>
                <td><?php echo $coin->index ?></td>
                <td><?php echo $coin->timestamp ?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>

</div>

</body>
</html>
