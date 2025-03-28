<?php

/**
 * Returns a greeting message.
 * 
 * @param string|null $name Optional. The name to include in the greeting.
 * @return string The greeting message.
 */
function sayHello($name = null)
{
  if ($name) {
    return "Hello $name!";
  } else {
    return "Hello!";
  }
}

// Get the greeting message
$greeting = sayHello($_GET['name'] ?? null);

// Get system information
$phpVersion = phpversion();
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown';
$operatingSystem = PHP_OS;
$serverTime = date('Y-m-d H:i:s');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $greeting; ?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      line-height: 1.6;
    }

    .system-info {
      background-color: #f5f5f5;
      padding: 15px;
      border-radius: 5px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <h1><?php echo $greeting; ?></h1>

  <div class="system-info">
    <h2>System Information</h2>
    <ul>
      <li>PHP Version: <?php echo $phpVersion; ?></li>
      <li>Server Software: <?php echo $serverSoftware; ?></li>
      <li>Operating System: <?php echo $operatingSystem; ?></li>
      <li>Server Time: <?php echo $serverTime; ?></li>
    </ul>
  </div>
</body>

</html>