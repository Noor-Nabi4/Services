// Sample data (x and y coordinates)
const data = [
    { x: 0, y: 0 },
    { x: 1, y: 10 },
    { x: 3, y: 15 },
    { x: 4, y: 25 },
    { x: 6, y: 35 },
];

const canvas = document.getElementById("line-chart");
const ctx = canvas.getContext("2d");

// Set up the canvas dimensions
canvas.width = 600;
canvas.height = 300;

// Define chart properties
const chart = {
    padding: 20,
    minX: 0,
    maxX: 6,
    minY: 0,
    maxY: 35,
};

// Function to draw the chart
function drawChart() {
    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw the chart axes
    ctx.beginPath();
    ctx.moveTo(chart.padding, chart.padding);
    ctx.lineTo(chart.padding, canvas.height - chart.padding);
    ctx.lineTo(canvas.width - chart.padding, canvas.height - chart.padding);
    ctx.stroke();

    // Draw data points and lines
    ctx.beginPath();
    ctx.strokeStyle = "blue";
    ctx.lineWidth = 3;

    data.forEach((point) => {
        const x =
            (point.x / chart.maxX) * (canvas.width - 2 * chart.padding) +
            chart.padding;
        const y =
            canvas.height -
            ((point.y / chart.maxY) * (canvas.height - 2 * chart.padding) +
                chart.padding);

        ctx.lineTo(x, y);
        ctx.arc(x, y, 4, 0, Math.PI * 2, true);
    });

    ctx.stroke();
}

// Call the drawChart function to render the chart
drawChart();
