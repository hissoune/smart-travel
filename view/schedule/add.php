<?php include 'view\head.php'; ?>
<?php include 'view\nav.php'; ?>
<div class="container   bg-success-subtle p-4">
    <h2 class="mb-4 fs-2 text-center"><strong>add your schedueles</strong> </h2>

    <form action="index.php?action=insert_schet" method="POST">
        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" class="form-control" id="date" name="date_schet" required>
        </div>

        <div class="mb-3">
            <label for="departuretime" class="form-label">Departure Time:</label>
            <input type="time" class="form-control" id="departuretime" name="departuretime" required>
        </div>

        <div class="mb-3">
            <label for="arrivaltime" class="form-label">Arrival Time:</label>
            <input type="time" class="form-control" id="arrivaltime" name="arrivaltime" required>
        </div>

        <div class="mb-3">
            <label for="availableseats" class="form-label">Available Seats:</label>
            <input type="number" class="form-control" id="availableseats" name="availableseats" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
    <label for="bus_id" class="form-label">Bus name:</label>
    <select class="form-select" id="bus_id" name="bus_id" required>
        
        <option value="" selected disabled>Select Bus</option>

        
        <?php
        foreach ($bus_name as $bus) {
            
            echo '<option value="' . $bus['id'] . '">' . $bus['licenseplate'] . '</option>';
        }
        ?>
    </select>
</div>


        <div class="mb-3">
            <label for="startcity" class="form-label">Start root:</label>
            <select class="form-select" id="bus_id" name="bus_id" required>
        
        <option value="" selected disabled>Select city</option>

        
        <?php
        foreach ($routes as $select) {
            echo '<option value="' . $select->getStartcity() . '-' . $select->getStartcity() . '">' . $select->getStartcity() . ' to ' . $select->getStartcity() . '</option>';
        }
        ?>
    </select>        </div>

       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>