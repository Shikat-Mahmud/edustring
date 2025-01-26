"use strict";

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        floatchart();
    }, 500);
});

function floatchart() {
    (function () {
        var map = new jsVectorMap({
            selector: "#world-map-markers",
            map: "world",
            markersSelectable: true,
            markers: [
                { coords: [35.8617, 104.1954] }, // China
                { coords: [20.5937, 78.9629] },  // India
                { coords: [55.3781, -3.4360] },  // United Kingdom
                { coords: [37.0902, -95.7129] }, // USA
                { coords: [56.1304, -106.3468] }, // Canada
                { coords: [-25.2744, 133.7751] }, // Australia
                { coords: [47.1625, 19.5033] }   // Hungary
            ],
            markerStyle: {
                initial: { fill: "#3f4d67" },
                hover: { fill: "#4099ff" },
            },
            markerLabelStyle: {
                initial: {
                    fontFamily: "'Inter', sans-serif",
                    fontSize: 13,
                    fontWeight: 500,
                    fill: "#3f4d67",
                },
            },
        });

        const today = new Date();
        const currentYear = today.getFullYear();
        const currentMonth = today.getMonth();

        // Calculate last 12 months in reverse order
        const months = [];
        const data = [];
        let year = currentYear;

        for (let i = 0; i < 12; i++) {
            const monthIndex = ((currentMonth - i) - 12) % 12; 
            const monthName = new Intl.DateTimeFormat('en-US', { month: 'short' }).format(new Date(year, monthIndex)); 
            months.unshift(monthName); // Add month to the beginning of the array

            const startDate = new Date(year, monthIndex, 1);
            const endDate = new Date(year, monthIndex + 1, 0);

            // Use a Promise to handle asynchronous data fetching
            const fetchDataPromise = fetch(`/application-data/${startDate.toISOString()}/${endDate.toISOString()}`)
                .then(response => response.json())
                .then(result => { 
                    return result.count; 
                });

            // Push the promise to the data array
            data.unshift(fetchDataPromise); // Add promise to the beginning of the array
        }

        // Define options outside the loop
        var options = {
            chart: { type: "line", height: 200, toolbar: { show: false } },
            colors: ["#0d6efd"],
            dataLabels: { enabled: false },
            markers: {
                size: 7,
                colors: "#0d6efd",
                strokeColors: "#fff",
                strokeWidth: 3,
                hover: { size: 4 },
            },
            stroke: { width: 1, curve: "smooth" },
            plotOptions: { bar: { columnWidth: "45%", borderRadius: 4 } },
            grid: { strokeDashArray: 4 },
            series: [{ data: [] }], // Initialize with an empty data array
            yaxis: { show: false },
            xaxis: {
                categories: months,
                labels: { hideOverlappingLabels: true },
                axisBorder: { show: false },
                axisTicks: { show: false },
            },
        };

        // Wait for all promises to resolve before rendering the chart
        Promise.all(data)
            .then(resolvedData => { 
                options.series[0].data = resolvedData; 

                var chart = new ApexCharts(
                    document.querySelector("#earnings-users-chart"),
                    options
                );
                chart.render();
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });

        const chartElement = document.getElementById('earnings-users-chart');
        chartElement.parentNode.insertBefore(chartElement, chartElement.nextSibling);
    })();
}