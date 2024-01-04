<?php include 'view\head.php'; ?>
<?php include 'view\nav.php'; ?>
<div class="container   bg-success-subtle p-4">
    <h2 class="mb-4 fs-2 text-center"><strong>add your routes</strong> </h2>

    <form action="index.php?action=insert_rout" method="POST">
        

        <div class="mb-3">
            <label for="distance" class="form-label">distance:</label>
            <input type="number" class="form-control" id="distance" name="distance" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">duration:</label>
            <input type="time" class="form-control" id="duration" name="duration" required>
        </div>

        
        <div class="">
                              <label>start city</label>

                              <select class="form-control" name="departureCity">

                                 <?php foreach ($villes as $ville) { ?>

                                    <option>
                                       <?= $ville['cityname']; ?>
                                    </option>
                                 <?php } ?>
                              </select>
                           </div>
                           <div class="mb-3">
                              <label>end city</label>
                              <select class="form-control" name="arrivalCity">

                                 <?php foreach ($villes as $ville) { ?>

                                    <option>
                                       <?= $ville['cityname']; ?>
                                    </option>
                                 <?php } ?>
                              </select>
                           </div>
        
        

        
        <button type="submit" class="btn btn-primary">add rout</button>
    </form>
</div>