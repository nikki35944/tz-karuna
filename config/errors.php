<?php
if (isset($errors))
{
  foreach($errors as $error)
  {
    ?>
    <p style="color:red;"><?php echo $error; ?></p>
    <?php
  }
} ?>
