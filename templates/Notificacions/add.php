<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificacion $notificacion
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 */
?>
<!--<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>!-->
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.css" />
<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.2/"
        }
    }
</script>
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Alta de Notificación</h3>
        </div>
        <div class="panel-body">
            <?= $this->Form->create($notificacion, ['type'=>'file']) ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nombre notificación</label>
                    <?php
                    echo $this->Form->control('nombre', ['label'=>'']);
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Autor</label>
                    <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'class'=>'form-control', 'label'=>'', 'empty' => 'Selecciona autor notificación']);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Actividad</label>
                    <?php
                    echo $this->Form->control('activitat_id', ['options' => $activitats, 'label'=>'', 'empty' => 'Actividad a la que corresponde', 'id'=>'activ', 'class'=>'select_activ form-control']);
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Foto del evento <i><small>Tamaño max.1MB. Dimensión min 50x50. Dimensión max 800x800</small></i></label>
                    <?php
                    echo $this->Form->control('photo', ['type' => 'file',  'label'=>'', 'id'=>'foto', 'class'=>'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true', 'required'=>false]);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Notificación validada</label>
                    <?php
                    echo $this->Form->control('validado', ['label'=>'', 'style'=>'margin-left:30px;']);
                    ?>
                </div>
                
                <div class="form-group col-md-6">
                    <label id="msg_col">Si la notificación es para un centro sólo, puedes indicarlo aquí</label>
                    <?php
                    echo $this->Form->control('colegio_id', ['class'=>'coleg form-control', 'label'=>false, 'id'=>'colegios', 'empty'=>'Selecciona colegio']);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Descripción</label>
                    <?php
                    echo $this->Form->control('descripc',['type' => 'textarea', 'label'=>'']);
                    ?>
                    <!--<script>
                        CKEDITOR.replace( 'descripc' );
                    </script>!-->
                    <script type="module">
                        import {
                            ClassicEditor,
                            Essentials,
                            Bold,
                            Italic,
                            Font,
                            Paragraph
                        } from 'ckeditor5';

                        ClassicEditor
                            .create( document.querySelector( '#descripc' ), {
                                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                                toolbar: {
                                    items: [
                                        'undo', 'redo', '|', 'bold', 'italic', '|',
                                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                                    ]
                                }
                            } )
                            .then( /* ... */ )
                            .catch( /* ... */ );
                    </script>
                </div>
            </div>
            <?= $this->Form->button(__('Guardar'), ['class'=>'btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<script>
    var colPath = "<?php echo $this->Url->build([
        "controller" => "ActivitatsColegios",
        "action" => "colxactiv"]);
        ; ?>";
    $(function() {

        $('.select_activ').on('change', function(event){
            var id_activ = $('select[id=activ]').val();
            $.ajax({
                type: "POST",
                url: colPath,
                data:{
                    id_act:id_activ
                },
                dataType: "json",
                success: function(dataCol){
                    if(dataCol['error1']==='SI'){
                        $(".coleg").empty();
                        $('.coleg').css('display', 'none');
                        $('#msg_col').html('<div class="alert alert-danger flash-msg">No hay centros que hagan esta actividad</div>');
                    }else{
                        $('#msg_col').text('Centros con la actividad');
                        $(".coleg").empty();
                        $('.coleg').css('display', 'block');
                        var newOptionsCol = dataCol["listacol"];
                        $(".coleg").append('<option value="">Selecciona colegio</option>');
                        $.each(newOptionsCol, function(valCol, textCol) {
                            $(".coleg").append('<option value="'+valCol+'">'+textCol+'</option>');

                        });


                    }

                },
                error: function(){
                    alert('Tenemos problemas!!');
                }
            });
            return false;
        });

    });
</script>

