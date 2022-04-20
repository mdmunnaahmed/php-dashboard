var ctx = document.getElementById("pieChart");
var myChart = new Chart(ctx, {
    type: "pie",
    data: {
        labels: ["January", "February", "March", "April", "May", "Jun"],
        datasets: [
            {
                label: "# Monthly site visitors",
                data: [500, 750, 550, 850, 750, 1020],
                backgroundColor: [
                    "#7367f0",
                    "#ea5455",
                    "#2196F3",
                    "#35d0ba",
                    "#e43f5a",
                    "#5c2a9d",
                ],
                pointBackgroundColor: [
                    "rgba(231, 80, 90, 1)",
                    "rgba(231, 80, 90, 1)",
                    "rgba(231, 80, 90, 1)",
                    "rgba(231, 80, 90, 1)",
                    "rgba(231, 80, 90, 1)",
                    "rgba(231, 80, 90, 1)",
                ],
                pointBorderColor: [
                    "rgba(231, 80, 90, 0.75)",
                    "rgba(231, 80, 90, 0.75)",
                    "rgba(231, 80, 90, 0.75)",
                    "rgba(231, 80, 90, 0.75)",
                    "rgba(231, 80, 90, 0.75)",
                    "rgba(231, 80, 90, 0.75)",
                ],
                borderColor: ["rgba(231, 80, 90, 0.75)"],
                borderWidth: 0,
                pointBorderWidth: 0,
                pointRadius: 4,
                pointHoverRadius: 4,
            },
        ],
    },
    options: {
        elements: {
            line: {
                tension: 0, // disables bezier curves
            },
        },
        scales: {
            xAxes: [
                {
                    display: false,
                },
            ],
            yAxes: [
                {
                    display: false,
                },
            ],
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0,
            },
        },
        legend: {
            display: true,
        },
    },
});

// Donut chart
var ctx = document.getElementById("donutChart");
var myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["January", "February", "March", "April", "May", "Jun"],
        datasets: [
            {
                label: "# Monthly site visitors",
                data: [500, 750, 550, 850, 750, 1020],
                backgroundColor: [
                    "#FF4500",
                    "#e52d27",
                    "#fba540",
                    "#e7505a",
                    "#5050bf",
                    "#8E44AD",
                ],
                borderColor: ["rgba(231, 80, 90, 0.75)"],
                borderWidth: 3,
            },
        ],
    },
    options: {
        elements: {
            line: {
                tension: 0, // disables bezier curves
            },
        },
        scales: {
            xAxes: [
                {
                    display: false,
                },
            ],
            yAxes: [
                {
                    display: false,
                },
            ],
        },
    },
});
