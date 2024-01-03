<style>

    .formfilter{
        background-color: rgba(255, 230, 200, 0.3);
     }
</style>






<form action="index.php?action=filter" class="formfilter mt-3 " id="filterform" method="GET">
                <div class="col-xl-1 col-lg-2 col-md-2 col-sm-3 col-4">
                    <label for="by_price"><strong>Filter by price</strong> </label>
                    <input type="checkbox" id="by_price" class="form-checkbox " name="by_price" required>
                </div>
        
                
                <div class="Col-xl-1 col-lg-2 col-md-2 col-sm-3 col-4">
                <label for="companyname"><strong>company name</strong> </label>
                 <select name="company_name" id="companyname" class="col-12 p-2 rounded">
                 <?php foreach ($comp_bus_slct as $comp) { ?>
                    
                 <option value="<?= $comp['companyname']; ?>"><?= $comp['companyname']; ?></option>
                 <?php } ?>
                  </select>
                </div>
                <div class="Col-xl-1 col-lg-2 col-md-2 col-sm-3 col-4">
                    <button type="submit" class="btn btn-warning rounded text-white mt-2">Apply Filters</button>
                </div>
            </form>
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
        