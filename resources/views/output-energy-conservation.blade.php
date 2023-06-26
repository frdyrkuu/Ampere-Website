@extends('layouts.outputlayout')

@section('content')
    {{-- <div class="text-center mt-10">
        <p>Type of Duration: {{ $selectedTime }}</p>
        @foreach ($inputData as $data)
            <p>Appliance Name: {{ $data['applianceName'] }}</p>
            <p>Appliance Wattage: {{ $data['appWatts'] }}</p>
            <p>Number of Appliances: {{ $data['numberAppliance'] }}</p>
            <p>Number of Durations: {{ $data['numberDuration'] }}</p>
            <p>kWh: {{ $data['kWh'] }}</p>
            <br>
        @endforeach
        <p>Total kWh: {{ $totalkWh }}</p>
    </div> --}}

    <section class="max-w-7xl mx-auto">
        <h1 class="p-4 font-bold text-orange-500 text-2xl">Energy Conservation Results</h1>

        {{-- TABLE  --}}
        <p class="px-6 py-2 font-medium">Type of Duration: <span>
                {{ $selectedTime }}
            </span></p>
        <div class="relative overflow-x-hidden px-4 sm:px-2">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-yellow-300">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-l-lg">
                            Appliances - Watts
                        </th>

                        <th scope="col" class="px-6 py-3">
                            No. of Appliances
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Duration
                        </th>
                        <th scope="col" class="px-6 py-3 rounded-r-lg">
                            kWh
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inputData as $data)
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                {{ $data['applianceName'] }} - {{ $data['appWatts'] }} W
                            </th>

                            <td class="px-6 py-4">
                                {{ $data['numberAppliance'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data['numberDuration'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data['kWh'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="justify-between px-12 mt-4 float-right">
            <h1 class="font-semibold text-lg">Total: <span
                    class="text-orange-500 font-bold text-2xl underline">{{ $totalkWh }}
                    kWh</span></h1>
        </div>
    </section>

    {{-- TIPS AND TRICKS --}}
    <section class="max-w-7xl mx-auto mt-10">
        <div>
            <h1 class="p-4 font-bold text-orange-500 text-2xl">Tips and Tricks</h1>
            <div class="text-sm sm:text-lg px-4">
                <p class="font-bold mb-2">
                    Here are some tips and tricks for energy conservation that you can follow:
                </p>

                <div id="tipsContainer" class="mt-2">
                    <!-- Tips for specific appliances will be displayed here -->

                </div>

                {{-- THE DEAFULT TIPS  --}}
                <div class="text-base px-4 mb-10">

                    <h1 class="px-4 py-2 font-bold text-orange-500 text-2xl">Additional Tips</h1>
                    <p class="py-2">
                        <span class="font-semibold">Use energy-efficient lighting:</span> Replace traditional incandescent
                        bulbs with energy-saving LED or CFL
                        bulbs. They consume less electricity and last longer.
                    </p>
                    <p class="py-2"><span class="font-semibold">Unplug electronics when not in use:</span> Many devices
                        consume energy even when turned off
                        or in standby
                        mode.
                        Unplug chargers, appliances, and electronics when they're not actively being used.</p>

                    <p class="py-2"><span class="font-semibold">Efficient use of appliances:</span> Use energy-efficient
                        appliances and follow best
                        practices, such as
                        running
                        the dishwasher and laundry machine with full loads, using cold water for washing clothes, and
                        avoiding
                        over-drying clothes in the dryer.</p>

                    <p class="py-2"><span class="font-semibold">Turn off lights and fans:</span> Develop a habit of
                        switching off lights and fans when
                        leaving a room.
                        Encourage the use of natural ventilation or energy-efficient ceiling fans instead of air
                        conditioners
                        whenever possible.</p>

                    <p class="py-2"><span class="font-semibold">Educate and involve others:</span> Spread awareness about
                        energy conservation within your
                        community.
                        Encourage
                        others to adopt energy-saving habits and share tips and tricks for a greener lifestyle.</p>
                </div>
            </div>
        </div>
    </section>


    <script>
        @foreach ($inputData as $data)
            var applianceName = "{{ $data['applianceName'] }}";
            var tip = "";

            if (applianceName === "Air Condition Unit") {
                tip = `
                <div class="w-full overflow-x-auto mt-4">
                    <h1 class="px-4 py-2 font-bold text-orange-500 text-2xl">Air Condition Unit</h1>
                    <img src="/image/DifferenceAC.jpg" alt="inverter&non-inverter difference" class="w-full sm:w-1/2 sm:h-1/2 mx-auto my-2 rounded-2xl shadow-sm">
                    <table class="min-w-full bg-white border border-gray-200">
                            <thead class="bg-yellow-300 text-sm">
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200">NON-INVERTER</th>
                                <th class="py-2 px-4 border-b border-gray-200">INVERTER</th>
                            </tr>
                            </thead>
                            <tbody class="text-sm">
                            <tr>
                                <td class="px-4 py-2">Non-inverter air conditioners waste energy since their conventional types continuously run the compressor at the same speed. Non-inverter ACs utilize a lot of electricity as a result, which results in expensive electricity bills.</td>
                                <td class="px-4 py-2">Energy Efficient. Devices for inverter air conditioners are energy-efficient since they were designed to use less electricity while yet producing the same amount of cooling. Because of these, inverter air conditioners can be used by homes for longer periods of time while incurring lesser operating costs. They may cost 30% more than a typical air conditioner, but their operating costs are reduced by 30% to 80%.</td>
                            </tr>

                            <tr>
                                <td class="px-4 py-2">Prone to exhaustion and breakdown. Non-inverters could tend to overwork the compressor, which can be a concern for cheap brands and components. Reputable manufacturers guarantee the lifetime of their products, although non-inverters can overheat, overwork, or break down more quickly after prolonged operation due of the compressor motor's continuous rotation speed.</td>
                                <td class="px-4 py-2">Inverter units often require little maintenance. Many intelligent devices that employ inverter technology may include self-diagnostics and troubleshooting capabilities, which simplify and ease maintenance.</td>
                            </tr>
                            </tbody>
                        </table>
                     </div>
                        `;
            } else if (applianceName === "Refrigerator") {
                tip = `
                <div class="w-full overflow-x-auto mt-4">
                    <h1 class="px-4 py-2 font-bold text-orange-500 text-2xl">Refrigerator</h1>
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead class="bg-yellow-300 text-sm">
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200">NON-INVERTER</th>
                                <th class="py-2 px-4 border-b border-gray-200">INVERTER</th>
                            </tr>
                            </thead>
                            <tbody class="text-sm">
                            <tr>
                                <td class="px-4 py-2">Non-inverter type of refrigerator turns on and off at a constant speed.</td>
                                <td class="px-4 py-2">Inverter refrigerator can operate at different speeds. DC inverter refrigerators don't constantly turn on and off; instead, they maintain the ideal temperature within the refrigerator without consuming a lot of electricity.</td>
                            </tr>

                            <tr>
                                <td class="px-4 py-2">Traditional refrigerators use a lot of electrical energy and are aggressive energy consumers, especially when the compressor kicks back on.</td>
                                <td class="px-4 py-2">Inverter refrigerators save a significant amount of energy. </td>
                            </tr>
                            </tbody>
                        </table>
                     </div>
                        `;
            } else if (applianceName === "Washing Machine") {
                tip = `<div class="w-full overflow-x-auto mt-4">
                    <h1 class="px-4 py-2 font-bold text-orange-500 text-2xl">Washing Machine</h1>
                    <img src="/image/WMDifference.png" alt="inverter&non-inverter difference" class="w-full sm:w-1/2 h-44 mx-auto my-2 rounded-2xl shadow-sm">
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead class="bg-yellow-300 text-sm">
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200">NON-INVERTER</th>
                                <th class="py-2 px-4 border-b border-gray-200">INVERTER</th>
                            </tr>
                            </thead>
                            <tbody class="text-sm">
                            <tr>
                                <td class="px-4 py-2">These appliances have motors with fixed speeds. This means that the washing machine will operate at its highest operational speed regardless of how small or large your laundry load is. Regardless matter whether the washing machine is front- or top-loading.</td>
                                <td class="px-4 py-2">An inverter washing machine's brushless motor powers it. As a result, friction will be reduced significantly more as a result. This ultimately results in a longer operating lifespan for your appliance. </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-2">Electric current enters the rotor of a non-inverter washing machine through the brushes. As a result, the magnetic field is produced and the motor windings start to function.</td>
                                <td class="px-4 py-2">The Brush is the part that is missing from an inverter washing machine. This offers a silent operation by minimizing friction to the bare minimum. Inverter technology is, technically speaking, all about converting AC to DC. The 'desired' frequency of AC is once more produced as a result.</td>
                            </tr>
                            </tbody>
                        </table>
                     </div>
                        `;
            } else if (applianceName === "Microwave") {
                tip = `<div class="w-full overflow-x-auto mt-4">
                    <h1 class="px-4 py-2 font-bold text-orange-500 text-2xl">Microwave</h1>
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead class="bg-yellow-300 text-sm">
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200">NON-INVERTER</th>
                                <th class="py-2 px-4 border-b border-gray-200">INVERTER</th>
                            </tr>
                            </thead>
                            <tbody class="text-sm">
                            <tr>
                                <td class="px-4 py-2">Non-inverter microwaves employ power surges through a transformer; they include built-in fans that circulate hot air over your food to give it a baked appearance. </td>
                                <td class="px-4 py-2">Reliable power output is provided by microwaves with an inverter power supply. It also targets the precise voltage needed to cook your meal using an energy-efficient power source.</td>
                            </tr>
                            </tbody>
                        </table>
                     </div>
                        `;

            } else if (applianceName === "Television") {
                tip = `
                <div class="w-full mt-4">
                    <h1 class="px-4 py-2 font-bold text-orange-500 text-2xl">Television</h1>
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="bg-yellow-300 text-sm">
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200">TELEVISION</th>
                            <th class="py-2 px-4 border-b border-gray-200">DESCRIPTION</th>
                        </tr>
                        </thead>
                        <tbody class="text-sm">
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">LED</td>
                            <td class="py-2 px-4 border-b border-gray-200">The technology used by LCD and LED is the same, but LED TVs employ light-emitting diodes as its display. Consequently, the power consumption is quite efficient. A 40-inch LED TV even uses less than 50 watts.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">OLED</td>
                            <td class="py-2 px-4 border-b border-gray-200">Organic light-emitting diodes, the newest advancement in TV technology, provide excellent contrast and image clarity. A 60-inch TV requires about 100 watts of power, whereas an LED TV of the same size uses only 88 watts. OLEDs, however, use more power than LEDs.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">LCD</td>
                            <td class="py-2 px-4 border-b border-gray-200">LCD technology offers excellent picture quality and minimal power usage. Cold-cathode fluorescent bulbs are used in this TV technology as the backlight. An LCD TV typically consumes between 70 and 200 watts of power.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">CRT TV</td>
                            <td class="py-2 px-4 border-b border-gray-200">CRT TVs are highly pricey and can use up to 120 Watts of power, which can raise your electricity bill.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">Plasma TV</td>
                            <td class="py-2 px-4 border-b border-gray-200">A high voltage is supplied to the plasma TV, which is made of small gas pockets that light up. For larger scales, the cost of power usage can reach 500 Watts. It is no longer common due to this excessive power usage.</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>

                `;
            } else if (applianceName === "Light Bulb") {
                tip = "Tip for Light Bulb: Switch to energy-efficient LED bulbs to save electricity.";
            }
            // Append the tip to the tipsContainer
            var tipsContainer = document.getElementById("tipsContainer");
            tipsContainer.innerHTML += "<p>" + tip + "</p>";
        @endforeach
    </script>
@endsection
