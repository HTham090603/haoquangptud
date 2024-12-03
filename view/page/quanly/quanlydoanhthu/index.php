<html>

<head>
  <title>
    BurgerFun
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<div>

</div>
<body>


 <div style="text-align: center; margin-top: 40px;">
    <b style=" font-size: 30px;">XEM DOANH THU</b>
</div>

<canvas id="myChart" width="100" height="20" class="container"></canvas>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const data = {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
        datasets: [{
            label: 'Doanh thu',
            barPercentage: 0.5,
            barThickness: 6,
            maxBarThickness: 8,
            minBarLength: 2,
            data: [10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 70]
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>

</body>

