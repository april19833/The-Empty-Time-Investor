// Example: Scroll animations using AOS.js
AOS.init({
    duration: 1000,
    once: true // Animation plays only once
});
// Create a chart using Chart.js
var ctx = document.getElementById('crypto-chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Bitcoin Price',
            data: [7000, 8000, 9000, 10000, 11000, 12000],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
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