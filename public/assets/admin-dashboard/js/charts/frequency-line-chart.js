var frequency_value = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var created_at = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

function getFrequency() {
    $.ajax({
        url: 'api/getfrequency',
        success: function (data) {
            frequency_value[9] = data[0].frequency_value;
            frequency_value[8] = data[1].frequency_value;
            frequency_value[7] = data[2].frequency_value;
            frequency_value[6] = data[3].frequency_value;
            frequency_value[5] = data[4].frequency_value;
            frequency_value[4] = data[5].frequency_value;
            frequency_value[3] = data[6].frequency_value;
            frequency_value[2] = data[7].frequency_value;
            frequency_value[1] = data[8].frequency_value;
            frequency_value[0] = data[9].frequency_value;

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

getFrequency();

function renderChart() {
    const lineConfig = {
        type: 'line',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            datasets: [{
                label: 'Frequency Value',
                backgroundColor: '#7e3af2',
                borderColor: '#7e3af2',
                data: frequency_value,
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
                        labelString: 'Frequency Value',
                    },
                },
            },
        },
    }

    // change this to the id of your chart element in HMTL
    const lineCtx = document.getElementById('FrequencyChart')
    window.myLine = new Chart(lineCtx, lineConfig)
}
