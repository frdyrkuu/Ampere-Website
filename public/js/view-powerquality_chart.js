
const data_PowerQuality = PFOutputData;

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

// POWER QUALITY
const powerQualityChart = {
    type: 'line',
    data: {
        labels: data_PowerQuality.map((_, index) => `${index + 1}`),
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

const lineChart4 = new Chart(document.getElementById('lineChart_PowerQuality'), powerQualityChart);

