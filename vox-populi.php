<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags, Favicons, Google Fonts, Bootstrap, etc. -->
    <?php require_once 'php/modules/all-pages/head.php'; ?>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/vox-populi.css">

    <!-- Document Title -->
    <title>Vox Populi</title>
</head>

<body>
    <!-- Header -->
    <?php include_once 'php/modules/vox-populi/top-portion.php'; ?>

    <!-- Photo Grid for Desktop -->
    <?php include_once 'php/modules/vox-populi/photo-grid.php'; ?>

    <!-- Footer -->
    <?php include_once 'php/modules/all-pages/footer.php'; ?>

    <!-- Scripts -->
    <?php require_once 'php/modules/all-pages/scripts.php'; ?>
    <script src="js/vox-populi.js"></script>
    <script>
        var typed = new Typed('#typed', {
            strings: ['Thoughts on a two-party system'],
            typeSpeed: 50,
            onComplete: function(self) {
                self.cursor.remove()
            }
        });
    </script>
</body>

</html>