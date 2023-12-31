<?php include 'view\head.php'; ?>
<?php include 'view\nav.php'; ?>


<section>
         <div class="container shadow ">
         <a href="index.php?action=add_company"  class="btn btn-outline-light btn-success text-light mt-2">add</a>

       <table class="table-bordered w-100 mt-3 mb-3 ">
        <thead>
            <tr>
                <td>company id</td>
                <td>company name</td>
                <td>short name</td>
                <td>company img</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($company as $comp){ ?>
          <tr>
          <td><?= $comp->getId(); ?></td>
          <td><?= $comp->getCompanyname(); ?></td>
          <td><?= $comp->getShortname(); ?></td>
          <td class="img-fluid">
    <img src="view\images\<?= $comp->getImg();?>" alt="company img">
</td>
          <td class="d-flex justify-content-center">
          
                <a href="index.php?action=modify_company&id=<?= $comp->getId(); ?>"  class="btn btn-outline-light btn-success text-light ">modify</a>
                <a href="index.php?action=delet_compe&id=<?= $comp->getId(); ?>" class="btn btn-outline-light btn-danger text-light">Delete</a>
          </td>
                

          </tr>
            <?php  } ?>
        </tbody>
       </table>
       </div>
</section>