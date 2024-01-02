<?php





    // Display the search results or handle them as needed
    if (!empty($schedueles)) { ?>
        <section>
         <div class="container shadow ">
         <form action="index.php?action=filter" class=" form d-flex" id="filterform" method="GET">
                <div class="col-xl-1 col-lg-2 col-md-2 col-sm-3 col-4">
                    <label for="by_price">Filter by price</label>
                    <input type="checkbox" id="by_price" name="by_price">
                </div>
        
                <div class="Col-xl-1 col-lg-2 col-md-2 col-sm-3 col-4">
                    <label for="bus_name">Filter by bus name</label>
                    <input type="text" id="bus_name" name="bus_name">
                </div>
                <div class="Col-xl-1 col-lg-2 col-md-2 col-sm-3 col-4">
                <label for="companyname">company name</label>
                 <select name="company_name" id="companyname" class="col-12 p-2 rounded">
                 <?php foreach ($comp_slct as $comp) { ?>
                 <option value="<?= $comp['id']; ?>"><?= $comp['companyname']; ?></option>
                 <?php } ?>
                  </select>
                </div>
                <div class="Col-xl-1 col-lg-2 col-md-2 col-sm-3 col-4">
                    <button type="submit" class="btn btn-warning rounded text-white">Apply Filters</button>
                </div>
            </form>

       <div class=" row mt-5 ">
      <?php  foreach ($schedueles as $schedule) { ?>
       
    
        <div class="card shadow col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mx-4 mt-4 mb-4" style="width: 20rem;">
    <img src="view/images/<?= $schedule['img']; ?>" class="card-img-top" alt="company img">
    <div class="card-body">
        <h5 class="card-title"><?= $schedule['companyname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $schedule['startcity']; ?> to <?= $schedule['endcity']; ?></h6>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Date:</strong> <?= $schedule['date']; ?></li>
            <li class="list-group-item"><strong>Departure Time:</strong> <?= $schedule['departuretime']; ?></li>
            <li class="list-group-item"><strong>Arrival Time:</strong> <?= $schedule['arrivaltime']; ?></li>
            <li class="list-group-item"><strong>Available Seats:</strong> <?= $schedule['availableseats']; ?></li>
            <li class="list-group-item"><strong>Price:</strong> <?= $schedule['price']; ?></li>
            <li class="list-group-item"><strong>License Plate:</strong> <?= $schedule['licenseplate']; ?></li>
        </ul>
    </div>
</div>



           
        <?php  }?>
        </div>
           
          
          </div>
   </section>

   <?php } else {
        echo "No schedules found for the specified criteria.";
    }


         ?>
         <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Intercept form submission
        $('#filterform').submit(function (e) {
            e.preventDefault(); // Prevent the form from submitting traditionally

            // Get form data
            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                type: 'GET',
                url: 'index.php?action=filter',
                data: formData,
                success: function (response) {
                    // Update the content of the searchResults div with the response
                    $('#searchResults').html(response);
                }
            });
        });
    });
</script>
          
       
          
                

         