<?php header( 'Location: /index.html' ) ;  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Page</title>
</head>
<body>
    <script>
        // Function to check if the app is installed
        function isAppInstalled() {
            // Replace 'mycloudwallet://' with your app's scheme
            window.location.href = 'mycloudwallet://';

            // Timeout to handle when the app is not installed
            setTimeout(function() {
                // Redirect to the App Store
                window.location.href = 'https://google.com';
            }, 1000);
        }

        // Call the function when the page loads
        window.onload = isAppInstalled;
    </script>
</body>
</html>
