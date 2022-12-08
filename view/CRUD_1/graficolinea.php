<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sidebar.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Grafico de linea</title>
</head>

<body>


    <div class="page">

        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img class="logo-sidebar" src="../img/logo.png" />
                    </div>
                    <div class="brand-name-container">
                        <p class="brand-name">
                            Motel <br />
                            <span class="brand-subname">
                                Sol & Luna
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="graficobar.php">
                            <div class="row text-white">
                                <div class="col-2">
                                    <i class="bi bi-bar-chart-fill "></i>
                                </div>
                                <div class="col-9">
                                    Grafico de barras
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="graficolinea.php">
                            <div class="row text-white">
                                <div class="col-2">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <div class="col-9">
                                    Grafico de lineas
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item ">
                        <a class="navigation-link" href="graficohorizontal.php">
                            <div class="row text-white">
                                <div class="col-2">
                                    <i class="bi bi-distribute-vertical"></i>
                                </div>
                                <div class="col-9">
                                    Grafico horizontal
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item ">
                        <a class="navigation-link" href="graficocirculo.php">
                            <div class="row text-white">
                                <div class="col-2">
                                    <i class="bi bi-circle-half"></i>
                                </div>
                                <div class="col-9">
                                    Grafico circular
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="./reportpdf/index.php" target="_blank">
                            <div class="row text-white">
                                <div class="col-2">
                                    <i class="bi bi-filetype-pdf"></i>
                                </div>
                                <div class="col-9">
                                    Reporte/PDF
                                </div>
                            </div>
                        </a>
                    </li>
                    <br>
                    <hr>
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="./datatables/index.php">
                            <div class="row text-white">
                                <div class="col-2 ">
                                    <i class="bi bi-arrow-left-square-fill "></i>
                                </div>
                                <div class="col-9">
                                    Volver
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <hr style="color:rgb(255, 255, 255);margin-top:30px;">
            </div>
        </div>

        <div class="content">
            <div class="navigationBar">
                <button id="sidebarToggle" class="btn sidebarToggle">
                    <i class="fas fa-bars"></i>
                    </a>
            </div>
        </div>

    </div>



    <?php
    $con = new mysqli('localhost', 'root', '', 'motel_sol_y_luna');
    $query = $con->query("SELECT MonthName(fecha_ingreso) AS mes, count(*) AS cantidad FROM usuarios GROUP BY mes ORDER BY id_reserva ASC");

    foreach ($query as $data) {
        $mes[] = $data['mes'];
        $cantidad[]= $data[('cantidad')];
        // print_r($cantidad);
    }

    ?>

    <div class="casa w-100" style="padding:20px; position: absolute; left: 0px; z-index: -1;">
        <div class="col-lg-8 container">
            <div class="card" style="margin-left:3% ;">
                <div class="card-header text-white" style="background-color:#4682B4;">
                    <h6 class="text-center">GRAFICO LINEAL</h6>
                    <p class="text-center">Es necesario tener un grafico que nos muestre estadisticamente las reservas que fueron efectivas para el motel. <br> Este grafico muestra los meses y el numero de reservas que se hicieron en dicho mes</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <canvas id="myChart" width="200"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script>
        const labels = <?php echo json_encode($mes)?>;
        const data = {
            labels: labels,
            datasets: [{
                label: 'Reservas/mes',
                data: <?php echo json_encode($cantidad)?>,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.5
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options:{
                legend:{
                    display:true
                },
                scales: { 
                    yAxes: [{
                        ticks: {
                            beginAtZero: false,
                            suggestedMin: 0,
                            stepSiZe: 50,
                        }
                    }],
                }
            },
    
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        let sidebarToggle = document.querySelector(".sidebarToggle");
        sidebarToggle.addEventListener("click", function() {
            document.querySelector("body").classList.toggle("active");
            document.getElementById("sidebarToggle").classList.toggle("active");
        })
    </script>
</body>

</html>