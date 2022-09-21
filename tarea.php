<?php
$para  = array('Luis'=>'barqueromauricio@umes.edu.gt', 'Linda' => 'deleoningrid@umes.edu.gt','Juan Pablo' => 'chavezjuanpablo@umes.edu.gt', 'Josué' => 'martinezm@umes.edu.gt','Lucrecia'=>'stephaniejk.maldotizo@gmail.com', 'Stephanie'=>'maldonadostephanie@umes.edu.gt');

$título = 'Mensajes de emergencia por satélite';
$mensaje = '
<html>
<head>
  <title>Apple presenta el iPhone 14</title>
</head>
<body>
  <h1>Apple</h1>
  <p>La empresa Apple ha presentado sus nuevos modelos de teléfonos iPhone, relojes Apple Watch y auriculares AirPods.</p></br>
  <p>La gran novedad es el sistema de mensajes de emergencia por satélite del iPhone 14, que permitirá enviar mensajes vía satélite cuando no se tenga cobertura.</p></br>
  <p>Apple, además, ha presentado la nueva versión de reloj inteligente, el Apple Watch Series 8, que tendrá incorporado un sensor de temperatura para predecir los ciclos de ovulación en las mujeres y ayudar así a determinar los momentos de mayor fertilidad.</p></br>
  <p>El reloj también incorpora la función de detección de accidentes de tráfico. Mediante unos sensores el aparato electrónico detectará casos de accidentes graves y alertará automáticamente a los servicios y contactos de emergencia.</p></br>
</body>
</html>
';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cabeceras .= 'To: Stephanie <maldonadostephanie@umes.edu.gt>, Lucrecia <stephaniejk.maldotizo@gmail.com>, Linda <deleoningrid@umes.edu.gt>, Juan Pablo <chavezjuanpablo@umes.edu.gt>, Josué <martinezm@umes.edu.gt>'."\r\n";
$cabeceras .= 'From: Stephanie <maldonadostephanie@umes.edu.gt>'. "\r\n";
$cabeceras .= 'Cc: stephaniejk.maldotizo@gmail.com' . "\r\n";
$cabeceras .= 'Bcc: barqueromauricio@umes.edu.gt' . "\r\n";
$cabeceras .= 'Reply-to: Lucrecia <stephaniejk.maldotizo@gmail.com>' . "\r\n";

mail($para['Stephanie'], $título, $mensaje, $cabeceras);
