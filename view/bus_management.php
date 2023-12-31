<?php include 'view\head.php'; ?>
<?php include 'view\nav.php'; ?>


<section>
         <div class="container shadow ">
         <a href="index.php?action=add_bus"  class="btn btn-outline-light btn-success text-light mt-2">add</a>

       <table class="table-bordered w-100 mt-3 mb-3 ">
        <thead>
            <tr>
                <td>busnumber</td>
                <td>licenseplate</td>
                <td>capacity</td>
                <td>companyname</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($buses as $buse){ ?>
          <tr>
          <td><?php echo $buse->getBusNumber(); ?></td>
          <td><?= $buse->getLicensePlate(); ?></td>
          <td><?= $buse->getCapacity(); ?></td>
          <td><?= $bus->get_companyname_byid($buse->getCompanyId()); ?></td>
          <td class="d-flex justify-content-center">
            <input type="hidden " hidden value="<?= $buse->getId(); ?>">
                <a href="index.php?action=modify_bus&id=<?= $buse->getId(); ?>"  class="btn btn-outline-light btn-success text-light ">modify</a>
                <a href="index.php?action=delete&id=<?= $buse->getId(); ?>" class="btn btn-outline-light btn-danger text-light">Delete</a>
          </td>
                

          </tr>
            <?php  } ?>
        </tbody>
       </table>
       </div>
</section>