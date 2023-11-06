<!-- 4 -->
<!DOCTYPE html>
<html>
<head>
  <title><?php require_once 'config.php'; echo $appName; ?></title>
</head>
<body>
  <h1>Welcome to <?php echo $appName; ?></h1>

  <p>Current version: <?php require_once 'config.php'; echo $version; ?></p>

  <p>Today's date: <?php require_once 'utils.php'; echo formatDate(date("Y-m-d")); ?></p>
</body>
</html>