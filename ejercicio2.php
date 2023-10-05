<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precioActual = $_POST["precio"];
        $unidadesAdquiridas = $_POST["unidades"];
        $nuevoPrecio = $precioActual * 0.95;
        //importe de la compra
        $importeCompra = $nuevoPrecio * $unidadesAdquiridas;
        //importe del descuento (7% del importe de la compra)
        $importeDescuento = $importeCompra * 0.07;
        //Importe a pagar (importe de la compra - importe del descuento)
        $importeAPagar = $importeCompra - $importeDescuento;
        //caramelos regalados (2 por cada gaseosa adquirida)
        $numeroCaramelos = $unidadesAdquiridas * 2;
        //Resultados
        echo "<h2>Resultados:</h2>";
        echo "Nuevo precio de la gaseosa: S/. " . $nuevoPrecio . "<br>";
        echo "Importe de la compra: S/. " . $importeCompra . "<br>";
        echo "Importe del descuento: S/. " . $importeDescuento . "<br>";
        echo "Importe a pagar: S/. " . $importeAPagar . "<br>";
        echo "Obsequio: " . $numeroCaramelos . " caramelos";
    }
    ?>