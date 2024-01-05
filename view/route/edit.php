<?php include 'view\head.php'; ?>
<?php include 'view\nav.php'; ?>
<div class="container   bg-success-subtle p-4">



<!-- $starcity 
$endcity -->
    <h2 class="mb-4 fs-2 text-center"><strong>add your routes</strong> </h2>

    <form action="index.php?action=modif_confimed" method="POST">
        
    <input type="text" hidden class="form-control" value="<?= $starcitylast;?>" id="" name="startcitylast" required>
    <input type="text" hidden class="form-control" value="<?= $endcitylast;?>" id="" name="endcitylast" required>


        <div class="mb-3">
            <label for="distance" class="form-label">distance:</label>
            <input type="number" class="form-control" value="<?= $distance;?>" id="distance" name="distance" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">duration:</label>
            <input type="time" class="form-control" value="<?= $duration;?>"  id="duration" name="duration" required>
        </div>

        
        <div class="">
                              <label>start city</label>

                              <select class="form-control" name="departureCity">

                                 <?php foreach ($villes as $ville) { ?>

                                    <option>
                                       <?= $ville->getCityname(); ?>
                                    </option>
                                 <?php } ?>
                              </select>
                           </div>
                           <div class="mb-3">
                              <label>end city</label>
                              <select class="form-control" name="arrivalCity">

                                 <?php foreach ($villes as $ville) { ?>

                                    <option>
                                       <?= $ville->getCityname(); ?>
                                    </option>
                                 <?php } ?>
                              </select>
                           </div>
        
        

        
        <button type="submit" class="btn btn-primary">modify rout</button>
    </form>
</div>