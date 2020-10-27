<?php
  if(!empty($results)){
      foreach($results as $result){ ?>
        <tr>
            <td><?php echo $result['name'];?></td>
            <td><?php echo $result['city'];?></td>
            <td><?php echo $result['state'];?></td>
        </tr>
<?php }

   }else{ ?>
        <tr>
            <td>No se encontraron resultados</td>
        </tr>
<?php   } ?>