<div class="container mt-5">
    <form class="form-control" method="post">
        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="sucursal">
                        <?php foreach ($sucursales as $suc) { ?>
                            <option value="<?php echo $suc['id_sucursal'] ?>">
                                <?php echo $suc['localidad'] ?> , <?php echo $suc['provincia'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <label for="floatingSelect">Escoger una sucursal</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="tipo">
                        <option value="prestamo">
                            prestamo
                        </option>
                        <option value="deposito">
                            deposito
                        </option>
                    </select>
                    <label for="floatingSelect">Escoger el tipo de transaccion</label>
                </div>
            </div>
        </div>
        <div class="mt-3 row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="cajero">
                    <label for="floatingInputGrid">Numero de cajero</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="monto">
                    <label for="floatingInputGrid">Monto</label>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-cian" name="submit">
                Realizar
            </button>
            <a href="perfil.php" class="btn btn-danger">cancelar</a>
        </div>
    </form>
</div>