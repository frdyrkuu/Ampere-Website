const wireSizeSelect = document.getElementById('wire-size');
const wireTypeSelect = document.getElementById('wire-type');
const ambientTemperatureInput = document.getElementById('ambient-temperature');
const noCurrentInput = document.getElementById('no-current');

// Define the temperature and current values based on the selected options
const temperatureValues = {
    'TW': '60°C',
    'UF': '60°C',
    'RHW': '75°C',
    'THHW': '75°C',
    'THW': '75°C',
    'THWN': '75°C',
    'XHHW': '75°C',
    'USE': '75°C',
    'ZW': '75°C',
    'TBS': '90°C',
    'SA': '90°C',
    'SIS': '90°C',
    'FEP': '90°C',
    'FEPB': '90°C',
    'MI': '90°C',
    'RHH': '90°C',
    'RHW-2': '90°C',
    'THHN': '90°C',
    'THW-2': '90°C',
    'THWN-2': '90°C',
    'USE-2': '90°C',
    'XHH': '90°C',
    'XHHW': '90°C',
    'XHHW-2': '90°C',
    'ZW-2': '90°C',
    // Add more temperature values for other options
};

const currentValues60C = {
    '2.0': '15',
    '3.5': '20',
    '5.5': '30',
    '8.0': '40',
    '14': '55',
    '22': '70',
    '30': '85',
    '38': '100',
    '50': '115',
    '60': '130',
    '80': '155',
    '100': '185',
    '125': '210',
    '150': '240',
    '175': '260',
    '200': '275',
    '250': '315',
    '325': '370',
    '375': '395',
    '400': '400',
    '500': '445',
    // Add more temperature values for other options
};

const currentValues75C = {
    '2.0': '20',
    '3.5': '25',
    '5.5': '35',
    '8.0': '50',
    '14': '65',
    '22': '85',
    '30': '100',
    '38': '115',
    '50': '140',
    '60': '155',
    '80': '190',
    '100': '220',
    '125': '255',
    '150': '285',
    '175': '305',
    '200': '325',
    '250': '375',
    '325': '435',
    '375': '470',
    '400': '480',
    '500': '530',
    // Add more temperature values for other options
};

const currentValues90C = {
    '2.0': '25',
    '3.5': '30',
    '5.5': '40',
    '8.0': '55',
    '14': '75',
    '22': '95',
    '30': '115',
    '38': '130',
    '50': '150',
    '60': '170',
    '80': '205',
    '100': '240',
    '125': '285',
    '150': '320',
    '175': '345',
    '200': '360',
    '250': '425',
    '325': '490',
    '375': '530',
    '400': '535',
    '500': '595',
    // Add more temperature values for other options
};
// Event handler for the wire type select box
wireTypeSelect.addEventListener('change', () => {
    const selectedWireType = wireTypeSelect.value;
    ambientTemperatureInput.value = temperatureValues[selectedWireType] || '';

    updateNoCurrentInput();
});

// Event handler for the wire size select box
wireSizeSelect.addEventListener('change', () => {
    updateNoCurrentInput();
});

// Event handler for the ambient temperature input
ambientTemperatureInput.addEventListener('input', () => {
    updateNoCurrentInput();
});

// Function to update the No. of Current input based on the selected values
function updateNoCurrentInput() {
    const selectedWireSize = wireSizeSelect.value;
    const ambientTemperature = ambientTemperatureInput.value;

    if (ambientTemperature === '60°C') {
        noCurrentInput.value = currentValues60C[selectedWireSize] || '';
    } else if (ambientTemperature === '75°C') {
        noCurrentInput.value = currentValues75C[selectedWireSize] || '';
    } else if (ambientTemperature === '90°C') {
        noCurrentInput.value = currentValues90C[selectedWireSize] || '';
    } else {
        noCurrentInput.value = '';
    }
}

