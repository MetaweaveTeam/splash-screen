<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metaweave</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="logo">
    <div id="subdomain">
      <?php echo CONFIG["name"]; ?>
    </div>
    <img src="assets/metaweave_dark-avatar.png" alt="metaweave logo">
    <div id="text">
      metaweave.xyz
    </div>
  </div>
  <script>
    setTimeout(() => {
      window.location.href = "<?php echo CONFIG["redirection_url"]; ?>?nocache=<?php echo time(); ?>"
    }, 2000);
  </script>
</body>
</html>