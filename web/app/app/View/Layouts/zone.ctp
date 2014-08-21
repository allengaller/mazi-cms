<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->fetch('zone');?>
    <meta charset="utf-8">
    <title>Zone</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="../../responsive-nav.css"><![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="styles.css">
    <!--<![endif]-->

    
    <?php echo $this->Html->css('responsive-nav'); ?>
    <?php echo $this->Html->css('styles-nav'); ?>
    <?php echo $this->Html->script('responsive-nav'); ?>
    <?php echo $this->Html->script('responsive-nav.min'); ?>
    <?php echo $this->fetch('zone'); ?>
    
  </head>
  <body>

    <div role="navigation" id="foo" class="nav-collapse">
      <ul>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Zone</a></li>
        <li><a href="#">Sale</a></li>
        <li><a href="#">Branding</a></li>
      </ul>
    </div>

    <div role="main" class="main">
      <a href="#nav" class="nav-toggle">Menu</a>
      <?php echo $this->fetch('content'); ?>
    </div>

    <script>
      var navigation = responsiveNav("foo", {customToggle: ".nav-toggle"});
    </script>
  </body>
</html>
