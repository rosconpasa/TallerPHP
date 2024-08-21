<!DOCTYPE html>
<html>

<head>
    <title>Caribe Drive</title>

    <style>
        body {
            background-color: black;
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        table {
            margin: 0 auto;
        }

        pre {
            font-size: 200%;
        }


        img {
            border-style: groove;
            border-color: black;
            border-radius: 20px;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
            width: 400px;
            height: 235px;
        }

        #div1 {
            background-image: url(fondo.webp);
            background-position: right;
            background-repeat: no-repeat;
            color: white;
            background-color: black;
        }

        #div2 {
            background-color: white;
            padding-top: 50px;
        }

        #div3 {
            text-align: center;
            padding-top: 5px;
        }
    </style>
</head>

<body>

    <div id="div1">

        <div>

            <h1 style="text-align: left;">RESERVAS CARIBE DRIVE</h1>

            <h3>
                <pre>

Velocidad

Seguridad

Capacidad
            
   Lo que necesites...
        </pre>
            </h3>
        </div>

    </div>





    <br><br>

    <div id="div2">

        <table>
            <tr>
                <td>
                    <h3 style="text-align: right;">Gran variedad de autos</h3>
                </td>

                <td>
                    <img
                        src="https://autosdeprimera.com/wp-content/uploads/2023/07/top-20-autos-mas-vendidos-2023-colombia-enero-junio.jpg">
                </td>
            </tr>

            <tr>
                <td>
                    <img src="Imagenes/renta.jpg">

                </td>

                <td>
                    <h3 style="text-align: left;"> Renta uno cuando quieras</h3>
                </td>
            </tr>

        </table>

        <div id="div3">
            <h2 style="font-size: 300%;">
                ¡Reserva ya!
            </h2>

            <div style="background-color: black;
           font-size: 150%;">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

                    <table style="text-align: justify;
                color: white;
                margin: 0 auto;">

                        <tr>
                            <td>
                                Cédula:
                            </td>

                            <td>
                                <input type="text" name="cedula">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nombre
                            </td>

                            <td>
                                <input type="text" name="nombre">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                ciudad:
                            </td>

                            <td>
                                <select name="ciudad">
                                    <option>Barranquilla</option>
                                    <option>Cartagena</option>
                                    <option>Santa Marta</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Tipo de auto:
                            </td>

                            <td>
                                <select name="auto">
                                    <option>Economico</option>
                                    <option>Mediano</option>
                                    <option>Grande</option>
                                    <option>Camnioneta</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Fecha de llegada:
                            </td>

                            <td>
                                <input type="date" name="fecha">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Hora de llegada:
                            </td>

                            <td>
                                <input type="time" name="hora">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Número de días:
                            </td>

                            <td>
                                <input type="number" min="1" value="1" name="dias">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Cobertura por daño o robo
                            </td>

                            <td>
                                <input type="checkbox" name="cobertura">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Soy costeño
                            </td>

                            <td>
                                <input type="checkbox" name="costeno">
                            </td>
                        </tr>
                    </table>


                    <input style="background-color: white; font-size: 110%;" type="submit">
                </form>

                <?php 
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                       
                        $cedula = $_POST ["cedula"];
                        $nombre = $_POST ["nombre"];
                        $ciudad = $_POST ["ciudad"];
                        $auto = $_POST ["auto"];
                        $fecha = $_POST ["fecha"];
                        $hora = $_POST ["hora"];
                        $dias = $_POST ["dias"];
                        $cobertura = $_POST ["cobertura"];
                        $costeno = $_POST ["costeno"];    
                        $total=0;

                        if($auto == "Economico"){
                            $total = 150000 * $dias;
                        }
                            if($auto=="Mediano"){
                            $total = 200000 * $dias;
                        }
                        if($auto=="Grande"){
                            $total = 400000 * $dias;
                        }
                        if($auto=="Camioneta"){
                            $total = 350000 * $dias;
                        }    

                        if(isset($_POST["cobertura"])){
                            $total += 20000*$dias;
                        }
                        
                        if(isset($_POST["costeno"])){
                            
                            $total-=$total*0.1;

                        }
                        
                        
                    }
                ?>
            </div>

        </div>

    </div>

    <div id="div2">

    <?php 
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                             echo "El costo del alquiler es de ".$total." pesos";
                    }
                ?>
    </div>
    

</body>

</html>