<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php  echo 'Policy App';  ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min') ?>

    <?= $this->Html->css('style') ?>
    <?= $this->Html->css('calendarstyle') ?>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <?= $this->Html->css('responsive') ?>
    <?= $this->Html->script(['jquery-3.3.1.min','bootstrap.min','bootstrap-multiselect','custom','jquery-ui','jquery.validate']); ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
 
   
	      <?= $this->Html->meta('icon') ?>

 

    <?= $this->fetch('meta') ?>
   


</head><style>

<?php if(isset($errorMsg)){
?>

div.message.error {
    background-color: #C3232D;
    color: #FFF;height:40px;padding:10px;
}


div.message.hidden {
    height: 0;
}
<?php 

	}
	?>

</style>
  <body class="loginBg">
<?php 
echo $this->element('header');//header.ctp
?>
    


 <section>
      <div class="container-fluid">
	  <?php 
	  if(isset($homepage) &&  $homepage=== true){}else{
	  echo $this->element('leftmenu');
	  }
	  ?>
	  
		 <?php echo $this->fetch('content') ;?>
      </div>
</section>
<?php 
echo $this->element('footer');//header.ctp
?>
	

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  </body>
</html>

