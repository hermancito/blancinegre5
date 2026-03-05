<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Edición de Actividad</h3>
        </div>
        <div class="col-md-12 well">
            <p>Es recomendable que los nombres de las actividades no contengan espacios en blanco</p>
        </div>
        <div class="panel-body">
            <?= $this->Form->create($activitat) ?>
            <div class="row">
                <div class="form-group col-md-8">
                    <label>Nombre de la actividad</label>
                    <?php
                    echo $this->Form->control('nombre', ['label'=>'']);
                    ?>
                </div>
                <div class="form-group col-md-4">
                    <label>Código de la actividad</label>
                    <?php
                    echo $this->Form->control('codigo', ['label'=>'']);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Centro/s donde se hace la actividad</label>
                    <?php
                    echo $this->Form->control('colegios._ids', ['options' => $colegios, 'multiple'=>true ,'class'=>'multiusers', 'label'=>'']);
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Monitores en la actividad</label>
                    <?php
                    echo $this->Form->control('monitors._ids', ['options' => $monitors, 'multiple'=>true ,'class'=>'multimonit', 'label'=>'']);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Editores de la actividad</label>
                    <?php
                    echo $this->Form->control('users._ids', ['options' => $editors, 'multiple'=>true ,'class'=>'multieditors', 'label'=>'']);
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Visores de la actividad (Visores de alta: <span><?php echo $mynomsvisors; ?>)</span></label>
                    <?php
                    echo $this->Form->control('visors', ['options' => $visors, 'multiple'=>true ,'class'=>'multivisors', 'label'=>'']);
                    ?>
                </div>
            </div>
            <input type="hidden" id="lista_visors" name="lista_visors" value="<?php echo $myvisors; ?>">

            <?= $this->Form->button('Guardar', ['class' => 'btn btn-success']); ?>
            <?= $this->Form->end() ?>

        </div>
    </div>
</div>
<script>
    var num_visores = "<?php echo $num_visores; ?>";
    $(function() {

        $('.multiusers').change(function() {
            //console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            placeholder: 'Selecciona el colegio/os deonde se realiza la actividad'
        });
        $('.multidias').change(function() {
            //console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            placeholder: 'Selecciona el dia o dias que se realiza la actividad'
        });
        $('.multialum').change(function() {
            //console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            placeholder: 'Selecciona los alumnos que realizan la actividad'
        });
        $('.multimonit').change(function() {
            //console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            placeholder: 'Selecciona monitores en la actividad'
        });
        $('.multieditors').change(function() {
            //console.log($(this).val());
        }).multipleSelect({
            width: '100%',
            placeholder: 'Selecciona editores en la actividad'
        });

        $('.multivisors').change(function() {

        }).multipleSelect({
            width: '100%',
            placeholder: 'Selecciona visores en la actividad',
        });
        /*if(num_visores !== '0'){
            var lista_visores = $('#lista_visors').val().split(',');
            $('.multivisors').change(function() {


            }).multipleSelect({
                width: '100%',
                onOpen:function () {
                    $('.multivisors').multipleSelect('setSelects', lista_visores);
                }
                //placeholder: 'Selecciona visores en la actividad',
            });

        }else{
            $('.multivisors').change(function() {

            }).multipleSelect({
                width: '100%',
                placeholder: 'Selecciona visores en la actividad',
            });
        }*/




        //
    });
</script>