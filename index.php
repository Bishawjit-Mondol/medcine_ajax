<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Selection</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>

<div style="text-align: center">
    <label for="medicineSelect">Medicine Name</label>
    <select class="mySelect" id="medicineSelect" name="state">
        <option value="">Select a option</option>

    </select>
</div>

<script>
    $(document).ready(function () {
        // Initialize Select2
        $('#medicineSelect').select2({
            placeholder: 'Select an option',
            ajax: {
                method: 'GET',
                url: 'get_medicine_names.php',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        input: params.term,  // Send the typed input to the server
                    };
                },
                // processResults: function (data) {
                //     return {
                //         results: data
                //     };
                // },
                cache: true
            }
        });
    });
</script>

</body>
</html>
