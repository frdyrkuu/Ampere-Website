
const data_PowerQuality = PFOutputData;

let width, height, gradient;

function getGradientpower(ctx, chartArea) {
    const chartWidth = chartArea.right - chartArea.left;
    const chartHeight = chartArea.bottom - chartArea.top;
    const gradient = ctx.createLinearGradient(0, chartArea.bottom, 0, chartArea.top);
    gradient.addColorStop(0.5, 'green');
    //    gradient.addColorStop(0, 'yellow');
    gradient.addColorStop(0, 'red');

    return gradient;
}

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

                    const value = ctx.p0.parsed.y;
                    if (value >= 0 && value <= 0.8499) {
                        return 'red';
                    } else if (value >= 0.85 && value <= 1) {
                        return 'green';
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


const lineChart4 = new Chart(document.getElementById('lineChart_PowerQuality'), powerQualityChart);

