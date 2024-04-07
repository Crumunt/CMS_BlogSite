const DOUGNUT_CHART = document.getElementById('doughnut')
const BAR_GRAPH = document.getElementById('bar')

if (DOUGNUT_CHART !== null && BAR_GRAPH !== null) {

    loadGraph()
}


function loadGraph() {
    const data = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: '# of Signups',
            data: [],
            borderWidth: 1
        }]
    }

    new Chart(DOUGNUT_CHART, {
        type: 'doughnut',
        data: {
            labels: ['Music', 'Technology', 'Travel', 'Photography', 'Games', 'Other'],
            datasets: [{
                label: '# of Post',
                data: [12, 0, 0, 0, 0, 0],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


    new Chart(BAR_GRAPH, {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}