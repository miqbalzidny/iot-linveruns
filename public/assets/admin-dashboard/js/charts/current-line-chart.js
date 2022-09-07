var current_value = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var created_at = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

function getCurrent() {
    $.ajax({
        url: 'api/getcurrent',
        success: function (data) {
            current_value[9] = data[0].current_value;
            current_value[8] = data[1].current_value;
            current_value[7] = data[2].current_value;
            current_value[6] = data[3].current_value;
            current_value[5] = data[4].current_value;
            current_value[4] = data[5].current_value;
            current_value[3] = data[6].current_value;
            current_value[2] = data[7].current_value;
            current_value[1] = data[8].current_value;
            current_value[0] = data[9].current_value;

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

getCurrent();

function renderChart() {
    const lineConfig = {
        type: 'line',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            datasets: [{
                label: 'Current Value',
                backgroundColor: '#7e3af2',
                borderColor: '#7e3af2',
                data: current_value,
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
                        labelString: 'Current Value',
                    },
                },
            },
        },
    }

    // change this to the id of your chart element in HMTL
    const lineCtx = document.getElementById('CurrentChart')
    window.myLine = new Chart(lineCtx, lineConfig)
}
