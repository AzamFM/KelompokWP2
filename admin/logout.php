<html>
    <head>
        <title>Anda Yakin Ingin Logout?</title>
    </head>
    <body>
    <script>
        var yakin = confirm("Apakah kamu yakin akan Logout?");

        if (yakin) {
            window.location = "../logout.php";
        } else {
            window.location = "index.php";
        }
    </script>
    </body>
</html>