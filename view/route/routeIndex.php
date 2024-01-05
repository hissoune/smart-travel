<?php include 'view\head.php'; ?>
<?php include 'view\nav.php'; ?>


<section>
         <div class="container shadow ">
         <a href="index.php?action=add_root"  class="btn btn-outline-light btn-success text-light mt-2">add</a>

       <table class="table-bordered w-100 mt-3 mb-3 ">
        <thead>
            <tr>
                <td> distance</td>
                <td>duration</td>
                <td>startcity</td>
                <td>endcity</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($routes as $route) : ?>
          <tr>
          <td><?= $route->getDistance(); ?></td>
          <td><?= $route->getDuration(); ?></td>
          <td><?= $route->getStartCity(); ?></td>
          <td><?= $route->getEndCity(); ?></td>
          
          
       
          <td class="d-flex justify-content-center">
          
                <a href="index.php?action=modify_rout&startcity=<?= $route->getStartCity()?>&endcity=<?=$route->getEndCity() ?>"  class="btn btn-outline-light btn-success text-light ">modify</a>
                <a href="index.php?action=delet_rout&startcity=<?= $route->getStartCity()?>&endcity=<?=$route->getEndCity() ?>" class="btn btn-outline-light btn-danger text-light">Delete</a>
          </td>
                

          </tr>
          <?php endforeach; ?>
        </tbody>
       </table>
       </div>
</section>