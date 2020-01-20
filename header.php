<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>oefensite php</title>
</head>
<body>

<button class="<?php if($page=='home'){echo 'active';}?>"><a href="index.php">Home</a></button>
<button class="<?php if($page=='green'){echo 'active';}?>"><a href="green.php">Green</a></button>
<button class="<?php if($page=='blue'){echo 'active';}?>"><a href="blue.php">Blue</a></button>

  
</body>
</html>