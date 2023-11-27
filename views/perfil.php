<br>
<div class="container card text-center">
    <div class="mb-4 text-cian">
        <h3>Bienvenido a tu Home Banking</h3>
        <h2><?php echo $_SESSION['cliente']['nombre_completo'] ?></h2>
    </div>

    <div class="mb-3">
        <h3>Saldo: $ <?php echo $perfil[0]['saldo'] ?> </h3>
    </div>
    <u><h3>Movimientos</h3></u>

    <?php foreach ($movimientos as $movimiento) { ?>
        <div class="card" style="width: 30rem;">
            <div class="cad-body">
                <h4 class="card-title">
                    Sucursal: <?php echo $movimiento['localidad'] ?> , <?php echo strtoupper($movimiento['provincia']) ?>
                </h4>
                <h5 class="card-text">
                    <p class="card-text">
                        Tipo: <?php echo $movimiento['tipo_transacciones'] ?>
                    </p>
                    <p class="card-text">
                        Monto: $<?php echo $movimiento['monto'] ?>
                    </p>
                    <p class="card-text">
                        Estado: <?php echo $movimiento['estado'] ?>
                    </p>
                </h5>
                <p class="card-text">
                    <small class="text-body-secondary">
                        <?php echo $movimiento['fecha'] ?>
                    </small>
                </p>
            </div>
        </div>
    <?php } ?>
</div>