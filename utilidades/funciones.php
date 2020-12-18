<?php

   //Funcion para calcular área 
     function calcularArea($lado)
      {
        $area = $lado * $lado;
          return $area;
      }
     

    // función que muestra unmensaje
       
      function mostrarMensaje($mensaje)
      {
         echo "<p>$mensaje</p>";
         
      }
     /*
       * función que muestra una línea horizontal
       */
      function mostrarLineaHorizontal()
      {
         echo "<hr/>";
      }

?>