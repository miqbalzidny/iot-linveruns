var voltage_value = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var created_at = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

function getVoltage() {
    $.ajax({
        url: 'api/getvoltage',
        success: function (data) {
            voltage_value[9] = data[0].voltage_value;
            voltage_value[8] = data[1].voltage_value;
            voltage_value[7] = data[2].voltage_value;
            voltage_value[6] = data[3].voltage_value;
            voltage_value[5] = data[4].voltage_value;
            voltage_value[4] = data[5].voltage_value;
            voltage_value[3] = data[6].voltage_value;
            voltage_value[2] = data[7].voltage_value;
            voltage_value[1] = data[8].voltage_value;
            voltage_value[0] = data[9].voltage_value;

            created_at[9] = data[0].created_at;
            created_at[8] = data[1].created_at;
            created_at[7] = data[2].created_at;
            created_at[6] = data[3].created_at;
            created_at[5] = data[4].created_at;
            created_at[4] = data[5].created_at;
            created_at[3] = data[6].created_at;
            created_at[2] = data[7].created_at;
            created_at[1] = data[8].created_at;
            created_at[0] = data[9].created_at;

            renderChart();
        }
    })
}

getVoltage();

function renderChart() {
    const lineConfig = {
        type: 'line',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            datasets: [{
                label: 'Voltage Value',
                backgroundColor: '#7e3af2',
                borderColor: '#7e3af2',
                data: voltage_value,
                fill: false,
            }, ],
        },
        options: {
            responsive: true,
            legend: {
                display: true,
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true,
            },
            scales: {
                x: {
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Created At',
                    },
                },
                y: {
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Voltage Value',
                    },
                },
            },
        },
    }

    // change this to the id of your chart element in HMTL
    const lineCtx = document.getElementById('VoltageChart')
    window.myLine = new Chart(lineCtx, lineConfig)
}
