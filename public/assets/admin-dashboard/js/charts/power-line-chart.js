var power_value = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var created_at = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

function getPower() {
    $.ajax({
        url: 'api/getpower',
        success: function (data) {
            power_value[9] = data[0].power_value;
            power_value[8] = data[1].power_value;
            power_value[7] = data[2].power_value;
            power_value[6] = data[3].power_value;
            power_value[5] = data[4].power_value;
            power_value[4] = data[5].power_value;
            power_value[3] = data[6].power_value;
            power_value[2] = data[7].power_value;
            power_value[1] = data[8].power_value;
            power_value[0] = data[9].power_value;

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

getPower();

function renderChart() {
    const lineConfig = {
        type: 'line',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            datasets: [{
                label: 'Power Value',
                backgroundColor: '#7e3af2',
                borderColor: '#7e3af2',
                data: power_value,
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
                        labelString: 'Power Value',
                    },
                },
            },
        },
    }

    // change this to the id of your chart element in HMTL
    const lineCtx = document.getElementById('PowerChart')
    window.myLine = new Chart(lineCtx, lineConfig)
}
