
<?php print_r($result); ?>
<html>
    <head>
        <title><?=$page_title?></title>
    </head>
    <body>
        <?php  if (is_array($result)) {   ?>
        <?php foreach($result as $row) { ?>
        <h3><?php echo  $row->title;   ?></h3>
        <p><?php   echo $row->text;  ?></p>
        <?php  } } ?>
    </body>
</html>