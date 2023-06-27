$(document).ready(function () {
    var maxRows = 10; // Maximum number of rows

    // Add Row button click event
    $('#addRowButton').click(function () {
        var rowCount = $('#inputContainer .inputRow').length;

        // Check if maximum number of rows reached
        if (rowCount < maxRows) {
            var newRow = $('.inputRow:first').clone(); // Clone the first row
            newRow.find('input[type="text"]').val(''); // Clear the input values
            $('#inputContainer').append(newRow); // Append the new row to the container
        }
    });

    // Remove Row button click event
    $('#inputContainer').on('click', '.removeRow', function () {
        var rowCount = $('#inputContainer .inputRow').length;

        // Check if there's more than one row before removing
        if (rowCount > 1) {
            $(this).closest('.inputRow').remove(); // Remove the clicked row
        }
    });

    // Submit button click event
    $('#submitButton').click(function () {
        var inputData = [];

        $('.inputRow').each(function () {
            var applianceName = $(this).find('.applianceName').val();
            var applianceWatts = $(this).find('.appWatts').val();
            var numberAppliance = $(this).find('.numberAppliance').val();
            var numberDuration = $(this).find('.numberDuration').val();

            // Create an object with the row data
            var row = {
                applianceName: applianceName,
                applianceWatts: applianceWatts,
                numberAppliance: numberAppliance,
                numberDuration: numberDuration
            };

            inputData.push(row);
        });

        $.ajax({
            url: '/energy-conservation/results',
            method: 'POST',
            data: inputData, // Pass the inputData object directly
            success: function (response) {
                // Handle the response if needed
                console.log(response);
            },
            error: function (error) {
                // Handle the error if needed
                console.error(error);
            }
        });
    });
});
