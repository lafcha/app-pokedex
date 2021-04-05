<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="<?=$baseUri?>/css/style.css" rel="stylesheet">
    <title>Super Pokédex</title>
</head>
<body>
    <header>
        <div id= "header-bar">
            <h1>Pokédex</h1>
            <nav>
                <ul id="nav-ul">
                    <li><a href="<?= $router->generate('home')?>">Liste</a></li>
                    <li><a href="<?= $router->generate('types')?>">Types</a></li>
                </ul>
            </nav>
        </div>
    </header>