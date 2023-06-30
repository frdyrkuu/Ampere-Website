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

// ampereTripChart
const ampereTripChart = {
    type: 'line',
    data: {
        labels: data_AmpereTrip.map((_, index) => `Input ${index + 1}`),
        datasets: [{
            label: 'Dataset Ampere Trip',
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
        }
    }
};

// ampacityChart
const ampacityChart = {
    type: 'line',
    data: {
        labels: data_Ampacity.map((_, index) => `Input ${index + 1}`),
        datasets: [{
            label: 'Dataset Ampacity of Conductors',
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
        }
    }
};


// voltageDropChart
const voltageDropChart = {
    type: 'line',
    data: {
        labels: data_VoltageDrop.map((_, index) => `Input ${index + 1}`),
        datasets: [{
            label: 'Dataset Voltage Drop Percentage',
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
        }
    }
};



// POWER QUALITY
const powerQualityChart = {
    type: 'line',
    data: {
        labels: data_PowerQuality.map((_, index) => `Input ${index + 1}`),
        datasets: [{
            label: 'Dataset Power Quality',
            data: data_PowerQuality,
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
        }
    }
};



// Energy Conservation
const energyConservationChart = {
    type: 'line',
    data: {
        labels: data_EnergyConservation.map((_, index) => `Input ${index + 1}`),
        datasets: [{
            label: 'Dataset Energy Conservation kwH',
            data: data_EnergyConservation,
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
        }
    }
};

const lineChart1 = new Chart(document.getElementById('lineChart_AmpereTrip'), ampereTripChart);
const lineChart2 = new Chart(document.getElementById('lineChart_AmpacityConductors'), ampacityChart);
const lineChart3 = new Chart(document.getElementById('lineChart_VoltageDrop'), voltageDropChart);
const lineChart4 = new Chart(document.getElementById('lineChart_PowerQuality'), powerQualityChart);
const lineChart5 = new Chart(document.getElementById('lineChart_EnergyConservation'), energyConservationChart);
