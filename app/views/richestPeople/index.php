<!DOCTYPE html>
<html lang="en">

<head>
    <!-- //* Standard meta-tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Richest People</title>
</head>

<body>
    <h1><?= $data['title']; ?></h1>
    <table>
        <thead>
            <th>Landnaam</th>
            <th>Hoofdstad</th>
            <th>Continent</th>
            <th>Bevolking</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody><?= $data['rows']; ?></tbody>
    </table>
    <a href="<?= URLROOT; ?>/landingpages/index">Terug</a>
</body>

</html>