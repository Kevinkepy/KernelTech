<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SysOS - Portal Educativo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <a href="index.php">Portal Educativo</a> | 
        <a href="dashboard.php">Dashboard del Servidor</a>
    </nav>

    <h1>Módulos de Sistemas Operativos</h1>
    
    <section>
        <h2>1. Gestión de Procesos y Concurrencia</h2>
        <p><strong>Conceptos Clave:</strong> Estados de procesos, hilos (POSIX Threads), planificación (Round Robin, SJF, Prioridades), sincronización (semáforos, mutex), condición de carrera.</p>
        <p><strong>Problema de los Filósofos Comensales:</strong> Es un caso clásico de sincronización. Simula el desafío de asignar recursos limitados (tenedores) entre múltiples procesos (filósofos). Un filósofo necesita dos tenedores para comer. Si todos toman el tenedor izquierdo al mismo tiempo, ocurre un <em>deadlock</em> (abrazo mortal). El uso de <strong>semáforos</strong> soluciona esto garantizando que un filósofo solo tome los tenedores si ambos están disponibles.</p>
        <p><strong>Diagrama de Estados:</strong> 
        Nuevo &rarr; Listo &harr; Ejecución &rarr; Terminado. <br>
        <em>*Si un proceso requiere E/S (como leer un disco), pasa al estado "Bloqueado".</em></p>
    </section>

    <section>
        <h2>2. Gestión de Memoria Virtual</h2>
        <p><strong>Conceptos Clave:</strong> Paginación, segmentación, memoria virtual, reemplazo de páginas (LRU, FIFO, Óptimo), fragmentación interna y externa.</p>
        <p><strong>Fallo de Página (Page Fault):</strong> Ocurre cuando un programa intenta acceder a una página de memoria que no está cargada actualmente en la memoria RAM física. El Sistema Operativo interrumpe el proceso, busca la página en el disco duro (espacio de Swap) y la carga en un marco libre de la RAM.</p>
        <p><strong>Conversión Lógica a Física:</strong> El procesador (MMU) usa la dirección lógica y la divide en un <em>Número de página</em> y un <em>Desplazamiento</em>. Busca ese número en la Tabla de Páginas para hallar el <em>Marco físico</em> y le suma el desplazamiento para obtener la ubicación real.</p>
    </section>

    <section>
        <h2>3. Sistemas de Archivos y E/S</h2>
        <p><strong>Conceptos Clave:</strong> Estructura de Inodos, VFS (Virtual File System), asignación de bloques en ext4, gestión de interrupciones y DMA.</p>
        <p><strong>Mapeo del Sistema de Archivos en Linux:</strong></p>
        <ul>
            <li><code>/etc</code>: Contiene los archivos de configuración estáticos del sistema.</li>
            <li><code>/var</code>: Almacena datos variables (como bases de datos y archivos de registro/logs).</li>
            <li><code>/proc</code>: Es un sistema de archivos virtual montado en la RAM. Provee información del Kernel y procesos en ejecución (de aquí saca la información nuestro Dashboard).</li>
            <li><code>/dev</code>: Archivos de dispositivos que permiten interactuar con el hardware (discos, puertos).</li>
        </ul>
    </section>

    <section>
        <h2>4. Virtualización y Contenedores</h2>
        <p><strong>Conceptos Clave:</strong> Hipervisores Tipo 1 vs Tipo 2, aislamiento a nivel de Kernel, Namespaces, CGroups.</p>
        <p><strong>KVM (Máquinas Virtuales) vs Docker (Contenedores):</strong></p>
        <table border="1" style="border-collapse: collapse; width: 100%; text-align: left; background-color: #fff;">
            <tr>
                <th style="padding: 10px;">Característica</th>
                <th style="padding: 10px;">Máquinas Virtuales (KVM)</th>
                <th style="padding: 10px;">Contenedores (Docker)</th>
            </tr>
            <tr>
                <td style="padding: 10px;">Aislamiento</td>
                <td style="padding: 10px;">Completo (Hipervisor virtualiza el hardware).</td>
                <td style="padding: 10px;">Comparte el Kernel del host mediante Namespaces.</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Consumo Recursos</td>
                <td style="padding: 10px;">Alto (Carga un SO invitado completo en RAM).</td>
                <td style="padding: 10px;">Muy bajo (Solo los procesos de la aplicación).</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Tiempo Arranque</td>
                <td style="padding: 10px;">Lento (Minutos, requiere proceso de boot).</td>
                <td style="padding: 10px;">Casi instantáneo (Segundos o milisegundos).</td>
            </tr>
        </table>
    </section>
</body>
</html>