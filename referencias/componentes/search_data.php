<?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
                $RUT = $_POST["Cedula"];
             
                // Codigo para buscar en tu base de datos acá
                $conexion=mysqli_connect('localhost',
                'root',
                '',
                'prueba_bips');

                $sqlsi = "SELECT * FROM pacientes WHERE Cedula = '$RUT'";
                $result=mysqli_query($conexion,$sqlsi);
                if(mysqli_num_rows($result)>0){
			$dato=mysqli_fetch_row($result);
                          
                    $Nombres = $dato[2];
                echo $Nombres;
             
            } else {
                $Nombres = "Paciente no registrado";
                echo $Nombres;
            }}

 ?>
