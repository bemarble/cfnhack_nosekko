<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

<?php
	echo $this->Html->meta('icon');


	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
?>

    <!-- Bootstrap -->
    <link href="http://getbootstrap.com/examples/blog/blog.css"rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<style>

</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php echo $this->Html->script('//code.jquery.com/jquery-1.11.1.min.js'); ?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="/">Top</a>
          <a class="blog-nav-item" href="/driver/">のせる</a>
          <a class="blog-nav-item" href="/ride/">のる</a>
          <a class="blog-nav-item" href="/fbconnect/showdata/">プロフ</a>
          <a class="blog-nav-item" href="/message/">メッセ</a>
        </nav>
      </div>
    </div>

    <div class="container">
<?php echo $this->Session->flash(); ?>

<?php echo $this->fetch('content'); ?>    
    </div>
</body>
</html>


