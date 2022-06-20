<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/mainStyle.css"/>
        <link rel="stylesheet" href="css/headerStyle.css"/>
        <link rel="stylesheet" href="css/footerStyle.css"/>
        <link rel="stylesheet" href="css/<?=$pageStyle?>.css"/>
        <title><?= $pageTitle;?></title>
    </head>
    <body>
        <?= $header;?>
        <div id="block_page">
            <?= $content;?>
        </div>
        <?= $footer;?>
    </body>
</html>