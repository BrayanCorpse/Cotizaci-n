




<?php
try {
    // Información de conexión para el primer servidor
    $dsn1 = "sqlsrv:server=ferport.myddns.me;Database=SAE80Empre01";
    $username1 = "sa";
    $password1 = "Portales02";
    $conn1 = new PDO($dsn1, $username1, $password1);
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Información de conexión para el segundo servidor
    $dsn2 = "sqlsrv:server=ferport.myddns.me;Database=SAE80Empre02";
    $username2 = "sa";
    $password2 = "Portales02";
    $conn2 = new PDO($dsn2, $username2, $password2);
    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Información de conexión para el tercer servidor
    $dsn3 = "sqlsrv:server=ferport.myddns.me;Database=SAE80Empre03";
    $username3 = "sa";
    $password3 = "Portales02";
    $conn3 = new PDO($dsn3, $username3, $password3);
    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexiones exitosas a las tres bases de datos.";

    // Aquí puedes ejecutar tus consultas en cada conexión

} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}

// Ce