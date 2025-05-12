<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú DeTodoPollo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fdfdfd;
            padding: 20px;
            margin: 0;
        }

        h1, h2 {
            text-align: center;
            color: #d32f2f;
        }

        .seccion {
            margin-top: 40px;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .plato {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            width: 250px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            background: white;
        }

        .plato h3 {
            margin: 0;
            color: #333;
        }

        .plato p {
            margin: 5px 0;
            color: #666;
        }

        /* Estilos responsivos */
        @media (max-width: 600px) {
            .plato {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>🍗 Menú DeTodoPollo</h1>

    <!-- Menú de la Mañana -->
    <div class="seccion">
        <h2>🌅 Menú de la Mañana</h2>
        <div class="menu">
            <div class="plato">
                <h3>Chicharrones de cerdo</h3>
                <p>Por kilo</p>
                <p><strong>$320 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Pollo Rostizado</h3>
                <p>Complementos: Arroz, puré, salsa y tortillas.</p>
                <p><strong>Entero $170 MXN</strong></p>
                <p><strong>Medio $90 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Boneless</h3>
                <p>Por kilo</p>
                <p><strong>$280 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Burritos</h3>
                <p>Por pieza</p>
                <p><strong>$22 MXN</strong></p>
                <p><strong>ESPECIAL 3x$50 MXN</strong></p>
            </div>
        </div>
    </div>

    <!-- Menú de la Tarde -->
    <div class="seccion">
        <h2>🌇 Menú de la Tarde</h2>
        <div class="menu">
            <div class="plato">
                <h3>Salchiburger</h3>
                <p>Hamburguesa con salchicha para asar y verdura.</p>
                <p><strong>$60 MXN</strong></p>
                <p><strong>ESPECIAL 3x$120 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Salchiburger con papas</h3>
                <p>Hamburguesa con salchicha para asar y verdura + 1 orden de papas.</p>
                <p><strong>$70 MXN</strong></p>
                <p><strong>ESPECIAL 3x$150 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Pollo frito</h3>
                <p>Con papas.</p>
                <p><strong>$75 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Hot dogs 1</h3>
                <p>De salchicha para asar + verdura.</p>
                <p><strong>$30 MXN</strong></p>
                <p><strong>ESPECIAL 4x$100 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Hot dogs 2</h3>
                <p>De salchicha chica + verdura.</p>
                <p><strong>$30 MXN</strong></p>
                <p><strong>ESPECIAL 5x$100 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Tacos colorados</h3>
                <p>Docena de tacos + verdura y salsa.</p>
                <p><strong>$100 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Tacos dorados</h3>
                <p>Orden de 4 tacos</p>
                <p><strong>$50 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Panchos</h3>
                <p>Con carne molida, jalapeños, queso, etc.</p>
                <p><strong>$100 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Chilifries</h3>
                <p>Papas con chili.</p>
                <p><strong>$60 MXN</strong></p>
            </div>
            <div class="plato">
                <h3>Papas con queso</h3>
                <p>Orden de papas con queso</p>
                <p><strong>$55 MXN</strong></p>
            </div>
        </div>
    </div>
</body>
</html>
