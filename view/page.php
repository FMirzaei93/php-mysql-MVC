<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div id="page">
        <main>
            <nav>
                <ul>
                    <li><a href="index.php?page=articles">Accueil</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                </ul>
            </nav>
            <?php include SITE_PATH . '/view/articles/articles.php'; ?>
        </main>
    </div>
</body>

</html>