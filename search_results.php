<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- Link to your external CSS file for styling -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Search Results</h1>

    <?php
    // Get the search criteria from the form
    $area = isset($_GET['area']) ? $_GET['area'] : "";
    $project = isset($_GET['project']) ? $_GET['project'] : "";
    $property_type = isset($_GET['property_type']) ? $_GET['property_type'] : "";
    $posted_by = isset($_GET['posted_by']) ? $_GET['posted_by'] : "";
    $advance_amount = isset($_GET['advance_amount']) ? true : false;
    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : "";

    // Implement your search logic based on the criteria provided
    // You would typically query a database to fetch matching properties
    // and apply sorting as per the selected "Sort By" option

    // Example:
    // $results = performSearch($area, $project, $property_type, $posted_by, $advance_amount, $sort_by);

    // Display the search results
    // foreach ($results as $result) {
    //     // Display property information here
    // }
    ?>

</body>
</html>
