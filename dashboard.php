<?php
// Ejecución de comandos del sistema requeridos
$uptime = shell_exec('uptime');
$memoria = shell_exec('free -h');
$disco = shell_exec('df -h /');
$procesos = shell_exec('ps aux --sort=-%cpu | head -n 11');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SysOS - Dashboard de Diagnóstico</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <a href="index.php">Portal Educativo</a> | 
        <a href="dashboard.php">Dashboard del Servidor</a>
    </nav>
    
    <h1>Dashboard de Diagnóstico del Servidor Anfitrión</h1>
    
    <div class="metric-card">
        <h3>Carga y Uptime del Sistema</h3>
        <pre><?php echo htmlspecialchars($uptime); ?></pre>
    </div>

    <div class="metric-card">
        <h3>Monitoreo de Memoria RAM</h3>
        <pre><?php echo htmlspecialchars($memoria); ?></pre>
    </div>

    <div class="metric-card">
        <h3>Almacenamiento de Disco (Raíz /)</h3>
        <pre><?php echo htmlspecialchars($disco); ?></pre>
    </div>

    <div class="metric-card">
        <h3>Top 10 Procesos (Consumo CPU)</h3>
        <pre><?php echo htmlspecialchars($procesos); ?></pre>
    </div>
</body>
</html>