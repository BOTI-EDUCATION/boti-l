<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>BOTI TBI</title>

  <base href="<?php echo URL::absolute(URL::base(), null, true) ?>tbi" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="http://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">
  <meta name="color-scheme" content="light dark" />
  <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <link rel="icon" type="image/png" href="assets/icon/favicon.png" />
  <!-- add to homescreen for ios -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <link rel="stylesheet" href="<?php echo assets('spa/tbi/styles.85fa2d3fac6875fa3a1b.css') ?>">
</head>

<body>
  <app-root></app-root>
  <script src="<?php echo assets('spa/tbi/runtime-es2015.30c88b979a4c1da98d02.js') ?>" type="module"></script>
  <script src="<?php echo assets('spa/tbi/runtime-es5.30c88b979a4c1da98d02.js') ?>" nomodule defer></script>
  <script src="<?php echo assets('spa/tbi/polyfills-es5.db25085463fe3fb913be.js') ?>" nomodule defer></script>
  <script src="<?php echo assets('spa/tbi/polyfills-es2015.5ecd91e98146285e6272.js') ?>" type="module"></script>
  <script src="<?php echo assets('spa/tbi/cordova.29dc09fa9fc3a7aeb58c.js') ?>" defer></script>
  <script src="<?php echo assets('spa/tbi/main-es2015.5e84aedd2c23e5f81aa0.js') ?>" type="module"></script>
  <script src="<?php echo assets('spa/tbi/main-es5.5e84aedd2c23e5f81aa0.js') ?>" nomodule defer></script>
</body>

</html>