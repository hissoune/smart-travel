<?php





    // Display the search results or handle them as needed
    if (!empty($schedueles)) { ?>
        <section>
         <div class="container shadow ">
         <form action="index.php?action=filter&starcity=<?= $schedules['startcity']; ?>&endcity=<?= $schedules['startcity']; ?>&date=<?= $schedule['date']; ?>&num_prpl=<?= $schedule['availableseats']; ?>&price=<?= $schedule['price']; ?>"  id="filterform" method="GET">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label for="by_price">Filter by price</label>
                    <input type="checkbox" id="by_price" name="by_price">
                </div>
                <?= $schedules['startcity']; ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label for="bus_name">Filter by bus name</label>
                    <input type="text" id="bus_name" name="bus_name">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <label for="company_name">Filter by company name</label>
                    <input type="text" id="company_name" name="company_name">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <button type="submit" class="btn btn-warning rounded text-white">Apply Filters</button>
                </div>
            </form>

       <table class="table-bordered w-100 mt-3 mb-3 ">
        <thead>
            <tr>
            
                <td>date</td>
                <td>departuretime</td>
                <td>arrivaltime</td>
                <td>availableseats</td>
                <td>price</td>
                <td>bus name</td>
                <td>company name</td>
                <td>startcity</td>
                <td>endcity</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
      <?php  foreach ($schedueles as $schedule) { ?>
        <tr>
        
          <td><?= $schedule['date']; ?></td>
          <td><?= $schedule['departuretime']; ?></td>
          <td><?= $schedule['arrivaltime']; ?></td>
          <td><?= $schedule['availableseats']; ?></td>
          <td><?= $schedule['price']; ?></td>
          <td><?= $schedule['licenseplate']; ?></td>
          <td><?= $schedule['companyname']; ?></td>
          <td><?= $schedule['startcity']; ?></td>
          <td><?= $schedule['endcity']; ?></td>
         
           
        <?php  }?>
        </tr>
           
           </tbody>
          </table>
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
          
       
          
                

         