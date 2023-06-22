@extends('layouts.inputlayout')

@section('content')
    {{-- ADD CONTENT HERE FOR USER INPUT --}}
    <section class="xl:mt-20">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-4xl xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-orange-500 flex items-center mb-6 text-2xl font-bold">
                        <img class="w-24 mx-auto" src="image/energy-saving.png" alt="logo">
                    </h1>
                    <h1 class="text-orange-500 text-xl font-bold leading-tight tracking-tight md:text-2xl">
                        Energy Conservation
                    </h1>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Velit, iure.
                    </p>

                    <hr>
                    {{-- FORM HERE --}}
                    <form method="POST" class="space-y-4 md:space-y-6" action="/energy-conservation/results">
                        @csrf
                        {{-- ENERGY CONSERVATION --}}

                        <label for="appliance"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white truncate">Select
                            Time Duration</label>
                        <select id="appliance" name="selectedTime"
                            class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full sm:w-1/4 p-2.5"
                            required>
                            <option value="hours">Dailies</option>
                            <option value="monthly">Monthly</option>
                        </select>

                        <div id="inputContainer" class="mt-2">
                            <div class="inputRow flex gap-1 sm:gap-4 mt-4">
                                {{-- select --}}
                                <div class="w-1/4 sm:1/3">
                                    <label for="appliance"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white truncate">Select
                                        Appliances</label>
                                    <select id="appliance" name="applianceName[]"
                                        class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                        required>
                                        <option value="" disabled selected required>Appliance</option>
                                        <option value="Refrigerator">Refrigerator</option>
                                        <option value="Stove">Stove</option>
                                        <option value="Television">Television</option>
                                        <option value="Microwave">Microwave</option>
                                        <option value="Oven">Oven</option>
                                        <option value="Air Conditioner">Air Conditioner</option>
                                        <option value="Water Heater">Water Heater</option>
                                        <option value="Dryer">Dryer</option>
                                        <option value="Ceiling Fans">Ceiling Fans</option>
                                        <option value="Vacuum Cleaner">Vacuum Cleaner</option>
                                        <option value="Toaster Oven">Toaster Oven</option>
                                        <option value="Blender">Blender</option>
                                        <option value="Iron">Iron</option>
                                        <option value="Coffee Maker">Coffee Maker</option>
                                        <option value="Hair Dryer">Hair Dryer</option>
                                        <option value="Stand Mixer">Stand Mixer</option>
                                        <option value="Rice Cooker">Rice Cooker</option>
                                        <option value="Kettle">Kettle</option>
                                    </select>
                                </div>

                                {{-- INPUT WATTS --}}
                                <div class="mt-4 relative h-11 w-1/3 min-w-[50px]">
                                    <input name="appWatts[]"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="number" required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 truncate">Wattage</label>
                                </div>
                                {{-- INPUT NUMBER OF APPLIANCE --}}

                                <div class="mt-4 relative h-11 w-1/3 min-w-[50px]">
                                    <input name="numberAppliance[]"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="number" required />
                                    <label
                                        class="text-gray-500 after:content[' '] truncate pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">No.
                                        of Appliance</label>
                                </div>

                                {{-- NUMBER OF HOURS INPUT --}}
                                <div class="mt-4 relative h-11 w-1/3 min-w-[50px]">
                                    <input name="numberDuration[]"
                                        class="peer h-full p-2 w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-yellow-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                        placeholder=" " type="number" required />
                                    <label
                                        class="text-gray-500 after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-yellow-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:after:scale-x-100 peer-focus:after:border-yellow-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">Duration</label>
                                </div>
                                <button type="button" class="removeRow text-red-500 mt-4 font-extrabold">&#x2715</button>
                            </div>
                        </div>

                        <button type="button" id="addRowButton"
                            class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-400 font-medium rounded-full text-sm px-3 py-2.5 text-center">&#43;</button>

                        {{-- BUTTON PROCEED TO RESULTS --}}

                        <button type="submit"
                            class="w-full text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">&#8594
                            Proceed to Results</button>


                    </form>
                    {{-- END FORM --}}
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            var maxRows = 10; // Maximum number of rows

            // Add Row button click event
            $('#addRowButton').click(function() {
                var rowCount = $('#inputContainer .inputRow').length;

                // Check if maximum number of rows reached
                if (rowCount < maxRows) {
                    var newRow = $('.inputRow:first').clone(); // Clone the first row
                    newRow.find('input[type="text"]').val(''); // Clear the input values
                    $('#inputContainer').append(newRow); // Append the new row to the container
                }
            });

            // Remove Row button click event
            $('#inputContainer').on('click', '.removeRow', function() {
                var rowCount = $('#inputContainer .inputRow').length;

                // Check if there's more than one row before removing
                if (rowCount > 1) {
                    $(this).closest('.inputRow').remove(); // Remove the clicked row
                }
            });

            // Submit button click event
            $('#submitButton').click(function() {
                var inputData = [];

                $('.inputRow').each(function() {
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
                    success: function(response) {
                        // Handle the response if needed
                        console.log(response);
                    },
                    error: function(error) {
                        // Handle the error if needed
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
