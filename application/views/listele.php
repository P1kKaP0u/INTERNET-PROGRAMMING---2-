<!DOCTYPE html>
<html lang="tr">


<?php $this->load->view("includes/header.php"); ?>

<body>


  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Adı Soyadı</th>
        <th scope="col">Email</th>
        <th scope="col">Hizmet</th>
        <th scope="col">Maaş</th>
      </tr>
    </thead>
    <tbody>

      <?php

      
      foreach ($items as $item) { ?>
        <tr>
          <th><?php echo $item->id; ?></th>
          <th><?php echo $item->name; ?></th>
          <th><?php echo $item->email; ?></th>
          <th><?php echo $item->service; ?></th>
          <th><?php echo $item->budget; ?></th>
       
        </tr>

      <?php  } ?>

    </tbody>
  </table>

  <?php $this->load->view("includes/footer.php"); ?>

</body>

</html>