<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <?= $this->Html->image('logo-bina_peq.png', ['alt' => 'Blanc i Negre animació']);?>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
<!--            <li class="active">--><?php //echo $this->Html->link('Indice', array('controller' => 'pages', 'action' => 'display', 'home')); ?><!--</li>-->
            <?php
            if(isset($admin_user) || isset($gestor_user_auth) || isset($gestorRRHH_user_auth)):
            ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admon
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php if(isset($admin_user)): ?>
                        <li><?php
                            echo $this->Html->link('Lista de roles', array(
                                'controller'=>'roles',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Añadir roles', array(
                                'controller'=>'roles',
                                'action'=>'add'));
                            ?>
                        </li>
                    <?php endif; ?>
                    <li><?php
                        echo $this->Html->link('Registro de Jornada', array(
                            'controller'=>'horarimonitors',
                            'action'=>'index'));
                        ?></li>

                    <li><?php
                        echo $this->Html->link('Añadir Jornada', array(
                            'controller'=>'horarimonitors',
                            'action'=>'add'));
                        ?>
                    </li>
                    <?php if(isset($admin_user)): ?>
                        <li><?php
                            echo $this->Html->link('Importar xml alumnos', array(
                                'controller'=>'alumnos_xml',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Lista de archivos de alumnos', array(
                                'controller'=>'alumnos_xml',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Variaciones horarios inicio-fin', array(
                                'controller'=>'jornadasgrups',
                                'action'=>'index'));
                            ?>
                        </li>
                    <?php endif; ?>
                    <?php if(isset($admin_user) || isset($gestor_user_auth)): ?>
                        <li><?php
                            echo $this->Html->link('Lista tablas PVP Variables', array(
                                'controller'=>'tablaspreciosvbles',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Añadir tabla PVP Variables', array(
                                'controller'=>'tablaspreciosvbles',
                                'action'=>'add'));
                            ?>
                        </li>
                    <?php endif; ?>
                    <li><?php
                        echo $this->Html->link('Gestión de cobro', array(
                            'controller'=>'alumnos',
                            'action'=>'gestioncobro'));
                        ?>
                    </li>
                    <?php if(isset($admin_user) || isset($gestorRRHH_user_auth)): ?>
                        <li><?php
                            echo $this->Html->link('Gestión Laboral', array(
                                'controller'=>'salarios',
                                'action'=>'index'));
                            ?>
                        </li>
                    <?php endif; ?>
                    <li><?php
                        echo $this->Html->link('Registro de sustituciones', array(
                            'controller'=>'sustitucions',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Registro de eventos', array(
                            'controller'=>'eventos',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Control de personal', array(
                            'controller'=>'personalcontrols',
                            'action'=>'index'));
                        ?>
                    </li>
                    <?php if(isset($admin_user) || isset($gestor_user_auth)): ?>
                        <li><?php
                            echo $this->Html->link('Mantenimiento', array(
                                'controller'=>'users',
                                'action'=>'mantenimiento'));
                            ?>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><?php
                        echo $this->Html->link('Lista de todos los usuarios', array(
                                'controller'=>'users',
                                'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Lista de usuarios no validados', array(
                                'controller'=>'users',
                                'action'=>'novalidados'));
                        ?>
                    </li>
                    <li><?php
                            echo $this->Html->link('Lista de usuarios validados', array(
                                'controller'=>'users',
                                'action'=>'validados'));
                        ?>
                    </li>
                    <li><?php
                            echo $this->Html->link('Añadir usuarios', array(
                                'controller'=>'users',
                                'action'=>'add'));
                         ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Añadir supervisor', array(
                            'controller'=>'users',
                            'action'=>'addcolegio'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Coordinadores', array(
                            'controller'=>'users',
                            'action'=>'indexcoordinadors'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Supervisores', array(
                            'controller'=>'users',
                            'action'=>'indexcolegios'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Monitores', array(
                            'controller'=>'users',
                            'action'=>'indexmonitores'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Plantilla Monitores ', array(
                            'controller'=>'users',
                            'action'=>'indexmonitoresvalid'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Bolsa Monitores ', array(
                            'controller'=>'users',
                            'action'=>'indexmonitoresbolsa'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Monitores Baja', array(
                            'controller'=>'users',
                            'action'=>'indexmonitoresnovalid'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Volantes ', array(
                            'controller'=>'volantes',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Madres-Padres', array(
                            'controller'=>'users',
                            'action'=>'indexpadres'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Madres-Padres Tutores', array(
                            'controller'=>'users',
                            'action'=>'indexpadrestutores'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Madres-Padres NO Tutores', array(
                            'controller'=>'users',
                            'action'=>'indexpadresnotutores'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Gestores', array(
                            'controller'=>'users',
                            'action'=>'indexgestores'));
                        ?>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Centros
                        <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><?php
                        echo $this->Html->link('Lista de centros en gestión', array(
                            'controller'=>'colegios',
                            'action'=>'indexcongrupo'));
                        ?>
                    </li>
                    <li><?php
                            echo $this->Html->link('Lista de centros', array(
                                'controller'=>'colegios',
                                'action'=>'index'));
                            ?>
                    </li>
                    <li><?php
                            echo $this->Html->link('Añadir centros', array(
                                'controller'=>'colegios',
                                'action'=>'add'));
                            ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Registro bajas', array(
                            'controller'=>'registrobajas',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Registro altas', array(
                            'controller'=>'registroaltas',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Registro devoluciones', array(
                            'controller'=>'devoluciones',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Comerciales', array(
                            'controller'=>'comercials',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Cobro matrícula/materiales', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupsmatricula'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Revisión matrícula/materiales', array(
                            'controller'=>'alumnos',
                            'action'=>'revisionmatricula'));
                        ?>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Actividades
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><?php
                        echo $this->Html->link('Lista de actividades', array(
                            'controller'=>'activitats',
                            'action'=>'index'));
                        ?></li>
                    <?php if(isset($admin_user)): ?>
                        <li><?php
                        echo $this->Html->link('Añadir actividades', array(
                            'controller'=>'activitats',
                            'action'=>'add'));
                        ?>
                        </li>
                    <?php endif; ?>
                    <li><?php
                        echo $this->Html->link('Lista de grupos', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Lista de asistencias', array(
                            'controller'=>'asistencias',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Grupos sin alumnos', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupssinalum'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Grupos sin monitor', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupssinmonit'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Grupos deficit', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupsdeficit'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Grupos llenos', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupsllenos'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Grupos sin salario', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupssinsala'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Grupos sin cuota', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupssincuota'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Grupos varios monitores', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupsvariosmonit'));
                        ?>
                    </li>
                    <li><?php
                        if(isset($admin_user) || isset($gestorRRHH_user_auth)):
                            echo $this->Html->link('Grupos jornada', array(
                                'controller'=>'activitatsgrups',
                                'action'=>'grupsjornada'));
                        endif; ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Grupos visible familias', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'grupsvisiblefamilias'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Añadir grupos', array(
                            'controller'=>'activitatsgrups',
                            'action'=>'add'));
                        ?>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alumnos
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                        <li><?php
                        echo $this->Html->link('Lista de alumnos', array(
                            'controller'=>'alumnos',
                            'action'=>'index'));
                        ?></li>

                        <li><?php
                            echo $this->Html->link('Añadir alumnos', array(
                                'controller'=>'alumnos',
                                'action'=>'add'));
                            ?>
                        </li>
                    <li><?php
                        echo $this->Html->link('Lista de alumnos activos', array(
                            'controller'=>'alumnos',
                            'action'=>'indexactivos'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Lista de alumnos inactivos', array(
                            'controller'=>'alumnos',
                            'action'=>'indexinactivos'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos activos sin tutor', array(
                            'controller'=>'alumnos',
                            'action'=>'indexsintutor'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos con comentarios privados', array(
                            'controller'=>'alumnos',
                            'action'=>'comentariosprivados'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos con comentarios publicos', array(
                            'controller'=>'alumnos',
                            'action'=>'comentariospublicos'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos con descuento fijo', array(
                            'controller'=>'alumnos',
                            'action'=>'condescuentofijo'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos con descuento %', array(
                            'controller'=>'alumnos',
                            'action'=>'condescuentovble'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos con descuento % hermanos', array(
                            'controller'=>'alumnos',
                            'action'=>'indexcondescuento'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos con descuento % resto', array(
                            'controller'=>'alumnos',
                            'action'=>'indexcondescuentoresto'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos con impago', array(
                            'controller'=>'alumnos',
                            'action'=>'indexconimpago'));
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link('Alumnos con suplemento', array(
                            'controller'=>'alumnos',
                            'action'=>'consuplemento'));
                        ?>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notificaciones
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                        <li><?php
                        echo $this->Html->link('Lista de notificaciones', array(
                            'controller'=>'notificacions',
                            'action'=>'index'));
                        ?>
                        </li>

                        <li><?php
                            echo $this->Html->link('Añadir notificación', array(
                                'controller'=>'notificacions',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Notificaciones vistas', array(
                                'controller'=>'notificacions-users',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Lista documentos notificaciones', array(
                                'controller'=>'notificacionpdfs',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Añadir documento a notificación', array(
                                'controller'=>'notificacionpdfs',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Lista de avisos a centros', array(
                                'controller'=>'notifcolegios',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Añadir avisos a centros', array(
                                'controller'=>'notifcolegios',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Avisos a centros vistos', array(
                                'controller'=>'notifcolegios-users',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Lista Boletines', array(
                                'controller'=>'notas',
                                'action'=>'index'));
                            ?></li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Lista Boletines NO validados', array(
                                'controller'=>'notas',
                                'action'=>'indexnovalid'));
                            ?></li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Añadir Boletin', array(
                                'controller'=>'notas',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Boletines visualizados', array(
                                'controller'=>'notas-users',
                                'action'=>'index'));
                            ?>
                        </li>
                    <li class="list-group-item-danger"><?php
                        echo $this->Html->link('Lista de avisos a monitores', array(
                            'controller'=>'notifmonitors',
                            'action'=>'index'));
                        ?>
                    </li>
                    <li class="list-group-item-danger"><?php
                        echo $this->Html->link('Añadir avisos a monitores', array(
                            'controller'=>'notifmonitors',
                            'action'=>'add'));
                        ?>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Documentos
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="list-group-item-success"><?php
                            echo $this->Html->link('Lista de documentos centros', array(
                                'controller'=>'colegiofiles',
                                'action'=>'index'));
                            ?></li>

                        <li class="list-group-item-success"><?php
                            echo $this->Html->link('Añadir documento a un centro', array(
                                'controller'=>'colegiofiles',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li class="list-group-item-success"><?php
                            echo $this->Html->link('Añadir documento a todos centros', array(
                                'controller'=>'colegiofiles',
                                'action'=>'addtodos'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Lista de documentos coordinadores', array(
                                'controller'=>'coordinadorsfiles',
                                'action'=>'index'));
                            ?></li>

                        <li><?php
                            echo $this->Html->link('Añadir documento a un coordinador', array(
                                'controller'=>'coordinadorsfiles',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Añadir documento a todos coordinadores', array(
                                'controller'=>'coordinadorsfiles',
                                'action'=>'addtodos'));
                            ?>
                        </li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Lista de documentos monitores', array(
                                'controller'=>'monitorsfiles',
                                'action'=>'index'));
                            ?></li>

                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Añadir documento a un monitor', array(
                                'controller'=>'monitorsfiles',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Añadir documento a todos monitores', array(
                                'controller'=>'monitorsfiles',
                                'action'=>'addtodos'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Lista de documentos familia centros', array(
                                'controller'=>'colegiofilesfamilias',
                                'action'=>'index'));
                            ?></li>

                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Añadir documento familia a un centro', array(
                                'controller'=>'colegiofilesfamilias',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Añadir documento familia a todos centros', array(
                                'controller'=>'colegiofilesfamilias',
                                'action'=>'addtodos'));
                            ?>
                        </li>
                    </ul>
            </li>
            <?php endif; ?>
            <?php
            if(isset($coord_user_auth)){
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notificaciones
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?php
                            echo $this->Html->link('Lista de notificaciones', array(
                                'controller'=>'notificacions',
                                'action'=>'indexxcoord', $coord_user_auth['id']));
                            ?></li>

                        <li><?php
                            echo $this->Html->link('Añadir notificación', array(
                                'controller'=>'notificacions',
                                'action'=>'addxcoord', $coord_user_auth['id']));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Notificaciones vistas', array(
                                'controller'=>'notificacions-users',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Añadir documento a notificación', array(
                                'controller'=>'notificacionpdfs',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Lista documentos notificaciones', array(
                                'controller'=>'notificacionpdfs',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Lista de avisos a centros', array(
                                'controller'=>'notifcolegios',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Añadir avisos a centros', array(
                                'controller'=>'notifcolegios',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Avisos vistos', array(
                                'controller'=>'notifcolegios-users',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Lista Boletines', array(
                                'controller'=>'notas',
                                'action'=>'indexxcoord', $coord_user_auth['id']));
                            ?></li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Lista Boletines NO validados', array(
                                'controller'=>'notas',
                                'action'=>'indexxcoordnovalid', $coord_user_auth['id']));
                            ?></li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Añadir Boletin', array(
                                'controller'=>'notas',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Boletines visualizados', array(
                                'controller'=>'notas-users',
                                'action'=>'index'));
                            ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php
                    echo $this->Html->link('Mis grupos', array(
                        'controller'=>'activitatsgrups',
                        'action'=>'indexxcoord', $coord_user_auth['id']));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link('Mis alumnos', array(
                            'controller'=>'alumnos',
                            'action'=>'indexxcoord', $coord_user_auth['id']));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link('Mis centros', array(
                        'controller'=>'colegios',
                        'action'=>'indexxcoord', $coord_user_auth['id']));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link('Mis documentos', array(
                        'controller'=>'coordinadorsfiles',
                        'action'=>'indexdocxcoord', $coord_user_auth['id']));
                    ?>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Intervenciones
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?php
                            echo $this->Html->link('Lista de mis intervenciones', array(
                                'controller'=>'coordinadordiaris',
                                'action'=>'indexxcoord', $coord_user_auth['id']));
                            ?></li>

                        <li><?php
                            echo $this->Html->link('Añadir intervención', array(
                                'controller'=>'coordinadordiaris',
                                'action'=>'add', $coord_user_auth['id']));
                            ?>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registros
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?php
                            echo $this->Html->link('Registro de sustituciones', array(
                                'controller'=>'sustitucions',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Registro de eventos', array(
                                'controller'=>'eventos',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Control de personal', array(
                                'controller'=>'personalcontrols',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Lista Trabajadores', array(
                                'controller'=>'monitors',
                                'action'=>'indexcoord'));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Registro bajas', array(
                                'controller'=>'registrobajas',
                                'action'=>'indexcoord', $coord_user_auth['id']));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Alumnos inactivos', array(
                                'controller'=>'alumnos',
                                'action'=>'indexinactivosxcoord', $coord_user_auth['id']));
                            ?>
                        </li>
                    </ul>
                </li>
                <li><?php
                    echo $this->Html->link('Comerciales', array(
                        'controller'=>'comercials',
                        'action'=>'index'));
                    ?>
                </li>
            <?php } ?>
            <?php
            if(isset($gestor_coord_user_auth)){
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi rol Coordinador
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?php
                            echo $this->Html->link('Lista de notificaciones', array(
                                'controller'=>'notificacions',
                                'action'=>'indexxcoord', $gestor_coord_user_auth['id']));
                            ?></li>

                        <li><?php
                            echo $this->Html->link('Añadir notificación', array(
                                'controller'=>'notificacions',
                                'action'=>'addxcoord', $gestor_coord_user_auth['id']));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Notificaciones vistas', array(
                                'controller'=>'notificacions-users',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Subir notificación PDF', array(
                                'controller'=>'notificacionpdfs',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Lista notificaciones PDF', array(
                                'controller'=>'notificacionpdfs',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Lista Boletines', array(
                                'controller'=>'notas',
                                'action'=>'indexxcoord', $gestor_coord_user_auth['id']));
                            ?></li>
                        <li class="list-group-item-info"><?php
                            echo $this->Html->link('Lista Boletines NO validados', array(
                                'controller'=>'notas',
                                'action'=>'indexxcoordnovalid', $gestor_coord_user_auth['id']));
                            ?></li>
                        <li><?php
                            echo $this->Html->link('Añadir Boletin', array(
                                'controller'=>'notas',
                                'action'=>'add'));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Boletines visualizados', array(
                                'controller'=>'notas-users',
                                'action'=>'index'));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Mis grupos', array(
                                'controller'=>'activitatsgrups',
                                'action'=>'indexxcoord', $gestor_coord_user_auth['id']));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Mis alumnos', array(
                                'controller'=>'alumnos',
                                'action'=>'indexxcoord', $gestor_coord_user_auth['id']));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Mis centros', array(
                                'controller'=>'colegios',
                                'action'=>'indexxcoord', $gestor_coord_user_auth['id']));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Mis documentos', array(
                                'controller'=>'coordinadorsfiles',
                                'action'=>'indexdocxcoord', $gestor_coord_user_auth['id']));
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link('Lista de mis intervenciones', array(
                                'controller'=>'coordinadordiaris',
                                'action'=>'indexxcoord', $gestor_coord_user_auth['id']));
                            ?></li>

                        <li><?php
                            echo $this->Html->link('Añadir intervención', array(
                                'controller'=>'coordinadordiaris',
                                'action'=>'add', $gestor_coord_user_auth['id']));
                            ?>
                        </li>

                    </ul>
                </li>

            <?php } ?>
            <?php
            if(isset($superv_user_auth)){
                ?>
                <li><?php
                    echo $this->Html->link('Inicio', array(
                        'controller'=>'users',
                        'action'=>'mantenimientosuperv'));
                    ?>
                </li>
                <li><?php
                    echo $this->Html->link('Actividades', array(
                        'controller'=>'activitats',
                        'action'=>'supervisoractxcolegio'));
                    ?>
                </li>
                <li><?php
                    echo $this->Html->link('Alumnos en actividades', array(
                        'controller'=>'alumnos',
                        'action'=>'supervindexxcolegio'));
                    ?>
                </li>
                <li><?php
                    echo $this->Html->link('Documentos para el centro', array(
                        'controller'=>'colegiofiles',
                        'action'=>'supervdocxcolegio'));
                    ?>
                </li>
                <li><?php
                    echo $this->Html->link('Documentos para las familias', array(
                        'controller'=>'colegiofilesfamilias',
                        'action'=>'supervdocxcolegio'));
                    ?>
                </li>
            <?php } ?>
            <?php
            if(isset($editor_act_auth) || isset($visor_act_auth)){
                ?>
                <li><?php
                    echo $this->Html->link('Mis grupos', array(
                        'controller'=>'activitatsgrups',
                        'action'=>'grupseditor'));
                    ?>
                </li>
                <li><?php
                    echo $this->Html->link('Mis alumnos', array(
                        'controller'=>'alumnos',
                        'action'=>'alumnosxvisoract'));
                    ?>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notificaciones
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?php
                            echo $this->Html->link('Lista de notificaciones', array(
                                'controller'=>'notificacions',
                                'action'=>'indexeditor'));
                            ?>
                        </li>
                        <li class="list-group-item-danger"><?php
                            echo $this->Html->link('Lista de avisos a centros', array(
                                'controller'=>'notifcolegios',
                                'action'=>'indexeditor'));
                            ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php
                    echo $this->Html->link('Lista Trabajadores', array(
                        'controller'=>'monitors',
                        'action'=>'indexeditor'));
                    ?>
                </li>
            <?php } ?>

        </ul>

        <ul class="nav navbar-nav navbar-right">
            <!--<li>
                <?php
/*                if(isset($current_user)) {
                    echo $this->Html->link($this->Html->image("32px_Esp.png", ["alt" => "Castellano"]), ['controller'=>'app','action' => 'changelang', 'es_ES'], array('escape' => false));
                }
                */?>
            </li>
            <li>
                <?php
/*                if(isset($current_user)) {
                    echo $this->Html->link($this->Html->image("32px_V_Val.png", ["alt" => "Valencià"]), ['controller'=>'app','action' => 'changelang', 'val_VAL'], array('escape' => false));
                }
                */?>
            </li>-->
            <li>
                <?php
                if(isset($current_user) && !isset($superv_user_auth)){
                    echo $this->Html->link(' PERFIL', array(
                        'controller'=>'users',
                        'action'=>'view', $current_user['id']), array('class'=>'glyphicon glyphicon-user'));
                }
                ?>
            </li>
            <li>
                <?php
                if(isset($current_user)){
                    echo $this->Html->link(' SALIR', array(
                        'controller'=>'users',
                        'action'=>'logout'), array('class'=>'glyphicon glyphicon-log-out'));
                }
                ?>

            </li>
            <!--<li>
                <?php
/*                    echo $this->Html->link(' LOGIN', array(
                        'controller'=>'users',
                        'action'=>'login'), array('class'=>'glyphicon glyphicon-log-in'));

                */?>
            </li>-->
        </ul>
        </div>
    </div>
</nav>