<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notifcolegio $notifcolegio
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
            <h3 class="panel-title">Alta Aviso a centros</h3>
        </div>
        <div class="panel-body">
            <?= $this->Form->create($notifcolegio, ['type'=>'file']) ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nombre aviso</label>
                    <?php
                    echo $this->Form->control('nombre', ['label'=>'']);
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Autor</label>
                    <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'label'=>'', 'empty' => 'Selecciona autor notificación']);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label>Notificación validada</label>
                    <?php
                    echo $this->Form->control('validado', ['label'=>'']);
                    ?>
                </div>
                <div class="form-group col-md-4">
                    <label>Adjuntar archivo <i><sm>(pdf, jpg o png)</sm></i></label>
                    <?php
                    echo $this->Form->control('photo', ['type' => 'file',  'label'=>'', 'id'=>'foto', 'class'=>'file', 'data-show-upload'=>'false', 'data-show-caption'=>'true', 'required'=>false]);
                    ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Centros destinatarios</label>
                    <?php
                    echo $this->Form->control('colegios._ids', ['options' => $colegios, 'class'=>'coleg', 'label'=>'', 'id'=>'colegios']);
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
    $('.coleg').multipleSelect({
        filter: true,
        width: '100%',
        placeholder: 'Selecciona colegios'
    });
</script>