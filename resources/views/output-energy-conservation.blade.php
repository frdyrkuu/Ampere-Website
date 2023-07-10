@extends('layouts.outputlayout')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h1 class="p-4 font-bold text-orange-500 text-2xl sm:text-4xl">Energy Conservation Results</h1>

        {{-- TABLE  --}}
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium bg-yellow-300">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Appliance-Watts</th>
                                    <th scope="col" class="px-6 py-4">No. Appliances</th>
                                    <th scope="col" class="px-6 py-4">Duration</th>
                                    <th scope="col" class="px-6 py-4">kWh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inputData as $data)
                                    <tr class="border-b">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $data['applianceName'] }} -
                                            {{ $data['appWatts'] }} W</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $data['numberAppliance'] }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $data['numberDuration'] }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $data['kWh'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="justify-between px-12 mt-4 text-center sm:float-right mb-10">
            <h1 class="font-semibold text-lg">Total: <span
                    class="text-orange-500 font-bold text-2xl underline">{{ $totalkWh }}
                    kWh / {{ $selectedTime }}</span></h1>
        </div>
    </section>

    {{-- TIPS AND TRICKS --}}
    <section class="max-w-7xl mx-auto mt-10">
        <div>
            <h1 class="p-4 font-bold text-orange-500 text-2xl">Tips and Tricks <span><i
                        class="fa fa-lightbulb-o text-orange-500" style="font-size:48px"></i></span></h1>
            <div class="text-sm sm:text-lg px-4">
                <p class="font-bold mb-2">
                    Here are some tips and tricks for energy conservation that you can follow:
                </p>

                <div id="tipsContainer" class="mt-2">
                    <!-- Tips for specific appliances will be displayed here -->

                </div>

                {{-- THE DEAFULT TIPS  --}}
                <div class="text-sm px-2 text-justify mb-10">

                    <h1 class="py-2 font-bold text-orange-500 text-2xl">Additional Tips <span><i
                                class="fa fa-lightbulb-o text-orange-500" style="font-size:48px"></i></span></h1>
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

        {{-- Check the Department of Energy’s E-POWER MO with ENERGY LABELS --}}
        <div class="p-4">
            <h1 class="text-orange-500 text-base font-bold">Check the Department of Energy’s E-POWER MO with ENERGY LABELS
            </h1>
            <p class="py-3">ENERGY LABELS, also known as Energy Guides, are the yellow labels that are frequently included
                with home
                electronics and lighting equipment. The energy efficiency of a product is indicated by the number on the
                energy label. <span><br><a href="https://members.wto.org/crnattachments/2021/TBT/PHL/21_3738_00_e.pdf"
                        class="italic">(Guide: https://members.wto.org/crnattachments
                        /2021/TBT/PHL/21_3738_00_e.pdf)
                    </a></span></p>
            <img src="/image/energy-guide.jpg" alt="energy-guide" class="w-full md:w-1/2 mx-auto shadow-md rounded-lg">

            <p class="py-4">
                Examples of Energy Labels by the Department of Energy:
            </p>

            <div class="flex flex-wrap justify-center gap-4">
                <img src="/image/energy-label.jpg" alt="energy-guide"
                    class="w-full sm:w-auto h-auto max-w-xs sm:max-w-none shadow-md rounded-lg">
                <img src="/image/energy-guide_2.jpg.png" alt="energy-guide"
                    class="w-full sm:w-auto h-auto max-w-xs sm:max-w-none shadow-md rounded-lg">
                <img src="/image/energy-label_2.jpg.png" alt="energy-guide"
                    class="w-full sm:w-auto h-auto max-w-xs sm:max-w-none shadow-md rounded-lg">
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

                <div class="w-full overflow-x-auto mb-10">
                    <hr class="mt-5 mb-3">
                    <h1 class="text-orange-500 font-bold text-xl">Types of TV to know <span><i class="fa fa-lightbulb-o text-orange-500" style="font-size:24px"></i></span></h1>
                    <h2 class="text-orange-500 py-2 text-center font-bold">Power Consumption-Watts</h2>
                    <table class="w-full table-auto">
                        <thead class="text-sm text-center">
                        <tr>
                            <th class="px-4 py-2">Screen size (in.)</th>
                            <th class="px-4 py-2">LED</th>
                            <th class="px-4 py-2">OLED</th>
                            <th class="px-4 py-2">LCD</th>
                            <th class="px-4 py-2">CRT</th>
                            <th class="px-4 py-2">Plasma</th>
                        </tr>
                        </thead>
                        <tbody class="text-center text-xs">
                        <tr>
                            <td class="px-4 py-2">15 inch TV</td>
                            <td class="px-4 py-2">15</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">18</td>
                            <td class="px-4 py-2">65</td>
                            <td class="px-4 py-2">N/A</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">17 inch TV</td>
                            <td class="px-4 py-2">18</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">20</td>
                            <td class="px-4 py-2">75</td>
                            <td class="px-4 py-2">N/A</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">19 inch TV</td>
                            <td class="px-4 py-2">20</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">22</td>
                            <td class="px-4 py-2">80</td>
                            <td class="px-4 py-2">N/A</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">20 inch TV</td>
                            <td class="px-4 py-2">24</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">26</td>
                            <td class="px-4 py-2">90</td>
                            <td class="px-4 py-2">N/A</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">21 inch TV</td>
                            <td class="px-4 py-2">26</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">30</td>
                            <td class="px-4 py-2">100</td>
                            <td class="px-4 py-2">N/A</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">22 inch TV</td>
                            <td class="px-4 py-2">30</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">40</td>
                            <td class="px-4 py-2">110</td>
                            <td class="px-4 py-2">N/A</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">24 inch TV</td>
                            <td class="px-4 py-2">35</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">50</td>
                            <td class="px-4 py-2">120</td>
                            <td class="px-4 py-2">N/A</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">30 inch TV</td>
                            <td class="px-4 py-2">38</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">60</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">150</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">32 inch TV</td>
                            <td class="px-4 py-2">41</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">70</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">160</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">37 inch TV</td>
                            <td class="px-4 py-2">44</td>
                            <td class="px-4 py-2">66</td>
                            <td class="px-4 py-2">80</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">180</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">40 inch TV</td>
                            <td class="px-4 py-2">50</td>
                            <td class="px-4 py-2">72</td>
                            <td class="px-4 py-2">100</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">200</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">42 inch TV</td>
                            <td class="px-4 py-2">57</td>
                            <td class="px-4 py-2">75</td>
                            <td class="px-4 py-2">120</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">220</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">50 inch TV</td>
                            <td class="px-4 py-2">72</td>
                            <td class="px-4 py-2">89</td>
                            <td class="px-4 py-2">150</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">300</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">55 inch TV</td>
                            <td class="px-4 py-2">80</td>
                            <td class="px-4 py-2">98</td>
                            <td class="px-4 py-2">180</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">370</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">60 inch TV</td>
                            <td class="px-4 py-2">88</td>
                            <td class="px-4 py-2">107</td>
                            <td class="px-4 py-2">200</td>
                            <td class="px-4 py-2">N/A</td>
                            <td class="px-4 py-2">500</td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                `;
            } else if (applianceName === "Light Bulb") {
                tip = `
                <div class="w-full overflow-x-auto">
                    <h1 class="px-4 py-2 font-bold text-orange-500 text-2xl">Light Bulb</h1>
                    <h2 class="text-orange-500 py-2 text-center font-bold">Power Consumption-Watts per Lumens</h2>
                    <table class="w-full table-auto">
                        <thead class="text-sm text-center">
                        <tr>
                            <th class="px-4 py-2">Type of Bulb</th>
                            <th class="px-4 py-2">200-300</th>
                            <th class="px-4 py-2">300-500</th>
                            <th class="px-4 py-2">500-700</th>
                            <th class="px-4 py-2">700-1000</th>
                            <th class="px-4 py-2">1000-1250</th>
                            <th class="px-4 py-2">1250-2000</th>
                        </tr>
                        </thead>
                        <tbody class="text-xs text-center">
                        <tr>
                            <td class="px-4 py-2">Incandescent</td>
                            <td class="px-4 py-2">25-30 W</td>
                            <td class="px-4 py-2">40 W</td>
                            <td class="px-4 py-2">60 W</td>
                            <td class="px-4 py-2">75 W</td>
                            <td class="px-4 py-2">120 W</td>
                            <td class="px-4 py-2">150-250 W</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">Halogen</td>
                            <td class="px-4 py-2">18-25 W</td>
                            <td class="px-4 py-2">35 W</td>
                            <td class="px-4 py-2">50 W</td>
                            <td class="px-4 py-2">65 W</td>
                            <td class="px-4 py-2">100 W</td>
                            <td class="px-4 py-2">125 W</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">CFL</td>
                            <td class="px-4 py-2">5-6 W</td>
                            <td class="px-4 py-2">8 W</td>
                            <td class="px-4 py-2">11 W</td>
                            <td class="px-4 py-2">15 W</td>
                            <td class="px-4 py-2">20 W</td>
                            <td class="px-4 py-2">20-33 W</td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">LED</td>
                            <td class="px-4 py-2">2-4 W</td>
                            <td class="px-4 py-2">3-5 W</td>
                            <td class="px-4 py-2">5-7 W</td>
                            <td class="px-4 py-2">8-10 W</td>
                            <td class="px-4 py-2">10-13 W</td>
                            <td class="px-4 py-2">13-20 W</td>
                        </tr>

                        </tbody>
                    </table>
                    </div>
                 `;
            }
            // Append the tip to the tipsContainer
            var tipsContainer = document.getElementById("tipsContainer");
            tipsContainer.innerHTML += "<p>" + tip + "</p>";
        @endforeach
    </script>
@endsection
