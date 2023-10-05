<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $importeVenta = $_POST["venta"];
        $hijosEnEdadEscolar = $_POST["hijos"];
        //Comisión
        $comision = $importeVenta * 0.075;
        //Bonificación
        $bonificacion = $hijosEnEdadEscolar * 50;
        //Sueldo bruto
        $sueldoBasico = 600;
        $sueldoBruto = $sueldoBasico + $comision + $bonificacion;
        //descuento
        $descuento = $sueldoBruto * 0.11;
        //sueldo neto
        $sueldoNeto = $sueldoBruto - $descuento;
        //Resultados
        echo "<h2>Resultados:</h2>";
        echo "Comisión: S/. " . $comision . "<br>";
        echo "Bonificación: S/. " . $bonificacion . "<br>";
        echo "Sueldo Bruto: S/. " . $sueldoBruto . "<br>";
        echo "Descuento: S/. " . $descuento . "<br>";
        echo "Sueldo Neto: S/. " . $sueldoNeto;
    }
    ?>