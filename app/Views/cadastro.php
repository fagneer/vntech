<?= $this->include('header') ?>

        <main class="row m-0 mt-5 mb-5 p-0">

            <div class="alert  col-md-4">
                <?= $this->include('utilities/svg-validation') ?>
            </div>
            <div class="alert text-center col-md-8">
                <div class="text-danger mt-4">
                    <h2><strong>ERRO!</strong></h2>
                </div>
                <div class="alert alert-danger">
                <i class="text-danger"><small><?php echo isset($validation) ? display_error($validation, 'nome') : '' ?></small></i>
                <i class="text-danger"><small><?php echo isset($validation) ? display_error($validation, 'sobrenome') : '' ?></small></i>
                <i class="text-danger"><small><?php echo isset($validation) ? display_error($validation, 'cpf') : '' ?></small></i>
                <i class="text-danger"><small><?php echo isset($validation) ? display_error($validation, 'codigo') : '' ?></small></i>
                <i class="text-danger"><small><?php echo isset($validation) ? display_error($validation, 'senha') : '' ?></small></i>
                <i class="text-danger"><small><?php echo isset($validation) ? display_error($validation, 'confirmasenha') : '' ?></small></i>
                <br><br>
                <i class="text-danger"><small><?php echo session()->getFlashdata('falha'); ?></small></i>

                </div>
            </div>
            
        </main>

<?= $this->include('footer') ?>