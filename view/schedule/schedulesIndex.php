<?php include 'view\head.php'; ?>
<?php include 'view\nav.php'; ?>


<section>
         <div class="container shadow ">
         <a href="index.php?action=add_scheduel"  class="btn btn-outline-light btn-success text-light mt-2">add</a>

       <table class="table-bordered w-100 mt-3 mb-3 ">
        <thead>
            <tr>
                <td> id</td>
                <td>date</td>
                <td>departuretime</td>
                <td>arrivaltime</td>
                <td>availableseats</td>
                <td>price</td>
                <td>bus_id</td>
                <td>startcity</td>
                <td>endcity</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($Schedule as $Schedul){ ?>
          <tr>
          <td><?= $Schedul->getId(); ?></td>
          <td><?= $Schedul->getDate(); ?></td>
          <td><?= $Schedul->getDepartureTime(); ?></td>
          <td><?= $Schedul->getArrivalTime(); ?></td>
          <td><?= $Schedul->getAvailableSeats(); ?></td>
          <td><?= $Schedul->getPrice(); ?></td>
          <td><?= $Schedul->getBusId(); ?></td>
          <td><?= $Schedul->getStartCity(); ?></td>
          <td><?= $Schedul->getEndCity(); ?></td>
          
       
          <td class="d-flex justify-content-center">
          
                <a href="index.php?action=modify_sched&id=<?= $Schedul->getId(); ?>"  class="btn btn-outline-light btn-success text-light ">modify</a>
                <a href="index.php?action=delet_sched&id=<?= $Schedul->getId(); ?>" class="btn btn-outline-light btn-danger text-light">Delete</a>
          </td>
                

          </tr>
            <?php  } ?>
        </tbody>
       </table>

       </div>
</section>