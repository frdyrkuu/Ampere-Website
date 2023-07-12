const data_AmpereTrip = ampereTripOutputData;
const data_Ampacity = ampacityOutputData;
const data_VoltageDrop = VDOutputData;
const data_PowerQuality = PFOutputData;
const data_EnergyConservation = ECOutputData;


let width, height, gradient;

function getGradient(ctx, chartArea) {
    const chartWidth = chartArea.right - chartArea.left;
    const chartHeight = chartArea.bottom - chartArea.top;
    if (!gradient || width !== chartWidth || height !== chartHeight) {
        // Create the gradient because this is either the first render
        // or the size of the chart has changed
        width = chartWidth;
        height = chartHeight;
        gradient = ctx.createLinearGradient(0, chartArea.bottom, 0, chartArea.top);
        gradient.addColorStop(0, 'green');
        gradient.addColorStop(0.5, 'yellow');
        gradient.addColorStop(1, 'red');
    }

    return gradient;
}


function getGradientpower(ctx, chartArea) {
    const chartWidth = chartArea.right - chartArea.left;
    const chartHeight = chartArea.bottom - chartArea.top;
    const gradient = ctx.createLinearGradient(0, chartArea.bottom, 0, chartArea.top);
    gradient.addColorStop(0, 'green');
    //    gradient.addColorStop(0, 'yellow');
    gradient.addColorStop(0.5, 'red');

    return gradient;
}

// ampereTripChart
const ampereTripChart = {
    type: 'line',
    data: {
        labels: data_AmpereTrip.map((_, index) => `Day ${index + 1}`),
        datasets: [{
            label: 'Ampere Trip',
            data: data_AmpereTrip,
            borderColor: function (context) {
                const chart = context.chart;
                const { ctx, chartArea } = chart;

                if (!chartArea) {
                    // This case happens on initial chart load
                    return;
                }

                return getGradient(ctx, chartArea);
            },
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        },
        scales: {
            y: {
                min: 0,
                max: 100,
                ticks: {
                    stepSize: 10,
                },
            },
        },
    }
};

// ampereTripChart
const ampacityChart = {
    type: 'line',
    data: {
        labels: data_Ampacity.map((_, index) => `Day ${index + 1}`),
        datasets: [{
            label: 'Ampacity of Conductors',
            data: data_Ampacity,
            borderColor: function (context) {
                const chart = context.chart;
                const { ctx, chartArea } = chart;

                if (!chartArea) {
                    // This case happens on initial chart load
                    return;
                }

                return getGradient(ctx, chartArea);
            },
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        },
        scales: {
            y: {
                min: 0,
                max: 100,
                ticks: {
                    stepSize: 10,
                },
            },
        },
    }
};



// voltageDropChart
const voltageDropChart = {
    type: 'line',
    data: {
        labels: data_VoltageDrop.map((_, index) => `Day ${index + 1}`),
        datasets: [{
            label: 'Voltage Drop Percentage',
            data: data_VoltageDrop,
            borderColor: function (context) {
                const chart = context.chart;
                const { ctx, chartArea } = chart;

                if (!chartArea) {
                    // This case happens on initial chart load
                    return;
                }

                return getGradient(ctx, chartArea);
            },
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        },
        scales: {
            y: {
                min: 0,
                max: 100,
                ticks: {
                    stepSize: 10,
                },
                color: function (context) {
                    const value = context.tick.value;
                    return value <= 3 ? 'green' : 'red';
                },
            },
        },
    }
};


// POWER QUALITY
const powerQualityChart = {
    type: 'line',
    data: {
        labels: data_PowerQuality.map((_, index) => `Day ${index + 1}`),
        datasets: [{
            label: 'Power Quality',
            data: data_PowerQuality,
            segment: {
                borderColor: (ctx) => {
                    const currentY = ctx.p0.parsed.y;
                    const previousY = ctx.p1.parsed.y;

                    const value = ctx.p1.parsed.y;
                    if (value >= 0 && value <= 0.8499) {
                        return 'red';
                    } else if (value >= 0.85 && value <= 1) {
                        return 'green';
                    }
                    else if (value >= 1.010 && value <= 1.990) {
                        return 'red';
                    }
                }
            }
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        },
    }
};


// energyConservationChart
const energyConservationChart = {
    type: 'line',
    data: {
        labels: data_EnergyConservation.map((_, index) => `Day ${index + 1}`),
        datasets: [{
            label: 'Energy Conservation kwH',
            data: data_EnergyConservation,
            borderColor: 'green',
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        }
    }
};


const lineChart1 = new Chart(document.getElementById('lineChart_AmpereTrip'), ampereTripChart);
const lineChart2 = new Chart(document.getElementById('lineChart_AmpacityConductors'), ampacityChart);
const lineChart3 = new Chart(document.getElementById('lineChart_VoltageDrop'), voltageDropChart);
const lineChart4 = new Chart(document.getElementById('lineChart_PowerQuality'), powerQualityChart);
const lineChart5 = new Chart(document.getElementById('lineChart_EnergyConservation'), energyConservationChart);
