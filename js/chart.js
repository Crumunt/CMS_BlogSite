const DOUGNUT_CHART = document.getElementById('doughnut')
const BAR_GRAPH = document.getElementById('bar')


const data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datasets: [{
        label: '# of Signups',
        data: [0,100],
        borderWidth: 1
    }]
}

new Chart(DOUGNUT_CHART, {
    type: 'doughnut',
    data: {
        labels: ['Music', 'Technology', 'Travel', 'Photography', 'Games', 'Other'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
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