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
                    
                 <option value="<?= $comp['companyname']; ?>"><?= $comp['companyname']; ?></option>
                 <?php } ?>
                  </select>
                </div>
                <div class="Col-xl-1 col-lg-2 col-md-2 col-sm-3 col-4">
                    <button type="submit" class="btn btn-warning rounded text-white">Apply Filters</button>
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
        