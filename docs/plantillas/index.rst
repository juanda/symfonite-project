Ejemplos de plantillas
======================

En este documento se muestran ejemplos de *templates* para generar pantallas de listados
y edición de elementos.


Acciones para ejecutar los ejemplos
-----------------------------------

``actions.class.php``

.. code-block:: php

    <?php

    /**
    * plantillas actions.
    *
    * @package    recursos
    * @subpackage plantillas
    * @author     Your name here
    * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
    */
    class plantillasActions extends sfActions
    {

        public function executeIndex(sfWebRequest $request)
        {

        }
        public function executeListaConBuscador(sfWebRequest $request)
        {
            $this -> tArray = array();
            $i=0;
            for($i=0 ; $i<=4 ; $i++)
            {
                $this -> tArray[$i]['campo1'] = 'campo 1';
                $this -> tArray[$i]['campo2'] = 'campo 2';
                $this -> tArray[$i]['campo3'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris';
                $this -> tArray[$i]['campo4'] = 'campo 4';
            }

            $this -> getUser() -> setFlash('notice','esto es una noticia');
            $this -> getUser() -> setFlash('error','esto es un error');

        }

        public function executeLista(sfWebRequest $request)
        {
            $this -> tArray = array();
            $i=0;
            for($i=0 ; $i<=4 ; $i++)
            {
                $this -> tArray[$i]['campo1'] = 'campo 1';
                $this -> tArray[$i]['campo2'] = 'campo 2';
                $this -> tArray[$i]['campo3'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris';
                $this -> tArray[$i]['campo4'] = 'campo 4';
            }
            $this -> getUser() -> setFlash('notice','esto es una noticia');
            $this -> getUser() -> setFlash('error','esto es un error');
        }

        public function executeFormEdicion(sfWebRequest $request)
        {

        }

    }


Mensajes de errores y notificaciones
------------------------------------

``templates/_flashes``

.. code-block:: php

    <?php if ($sf_user->hasFlash('notice')): ?>
    <div class="notice"><?php echo $sf_user->getFlash('notice') ?></div>
    <?php endif; ?>

    <?php if ($sf_user->hasFlash('error')): ?>
    <div class="error"><?php echo $sf_user->getFlash('error') ?></div>
    <?php endif; ?>

Listado simple de elementos
---------------------------

``templates/listaSuccess.php``

.. code-block:: php

    <div id="sf_admin_container">
        <!-- CABECERA DEL MODULO -->
        <div id="sf_admin_header">
            <h2>Listado de cosas</h2>
            <?php include_partial('plantillas/flashes') ?>
        </div>
        <!-- FIN CABECERA DEL MODULO -->

        <!-- CONTENIDO DEL MODULO -->
        <div id="sf_admin_content">
            <form name="" action="#" method="post">
                <!-- ACCIONES -->
                <ul class="sf_admin_actions">
                    <li class="sf_admin_action_new"><a href="#">nuevo</a> </li>
                    <li class="sf_admin_action_delete"><a href="#">eliminar</a></li>
                    <li class="sf_admin_action_list"><a href="#">listar</a></li>
                    <li class="sf_admin_action_edit"><a href="#">editar</a></li>
                </ul>
                <!-- FIN ACCIONES -->

                <!-- TABLA LISTADO -->
                <div class="sf_admin_list">
                    <table id="" border="0" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th>campo 1</th>
                                <th>campo 2</th>
                                <th>campo 3</th>
                                <th>campo 4</th>
                                <th>acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tArray as $v): ?>
                            <tr>
                                <td><?php echo $v['campo1'] ?></td>
                                <td class="nombre_archivo_td"><?php echo $v['campo2'] ?></td>
                                <td><?php echo $v['campo3'] ?></td>
                                <td><?php echo $v['campo4'] ?></td>
                                <td>
                                    <ul class="sf_admin_td_actions">
                                        <li class="sf_admin_action_delete"><a href="#">eliminar</a></li>
                                        <li class="sf_admin_action_list"><a href="#">listar</a></li>
                                        <li class="sf_admin_action_edit"><a href="#">editar</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">
                                    <div class="sf_admin_pagination">
                                        <?php echo link_to(image_tag('first.png'), 'css/index') ?>
                                        <?php echo link_to(image_tag('previous.png'), 'css/index') ?>
                                        <?php echo link_to("1", 'css/index') ?>-
                                        <?php echo link_to("2", 'css/index') ?>-
                                        <?php echo link_to("3", 'css/index') ?>
                                        <?php echo link_to(image_tag('next.png'), 'css/index') ?>
                                        <?php echo link_to(image_tag('last.png'), 'css/index') ?>
                                    </div>
                                    5 resultados (del 1 al 5)
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- FIN TABLA LISTADO -->
            </form>
        </div>
        <!-- FIN CONTENIDO DEL MODULO -->
    </div>

Listado con buscador
--------------------

``templates/listaConBuscador.php``

.. code-block:: php

    <div id="sf_admin_container">
        <h2>Listado de cosas</h2>

        <?php include_partial('plantillas/flashes') ?>
        <!-- CABECERA DEL MODULO -->
        <div id="sf_admin_header">
            <ul class="sf_admin_actions">
                <li class="sf_admin_action_new"><a href="#">nuevo</a> </li>
                <li class="sf_admin_action_delete"><a href="#">eliminar</a></li>
                <li class="sf_admin_action_list"><a href="#">listar</a></li>
                <li class="sf_admin_action_edit"><a href="#">editar</a></li>
            </ul>
        </div>
        <!-- FIN CABECERA DEL MODULO -->

        <!-- FORMULARIO PARA FILTROS DE BÚSQUEDA -->
        <div id="sf_admin_bar">
            <div class="sf_admin_filter">
                <form name="" action="#" method="post">                
                    <table>
                        <tr>
                            <td><label>Campo 1:</label></td>
                            <td><input name="terminoBusqueda" id="terminoBusqueda" type="text"></td>
                        </tr>
                        <tr>
                            <td><label>Campo 2:</label></td>
                            <td><input name="terminoBusqueda" id="terminoBusqueda" type="text"></td>
                        </tr>
                        <tr>
                            <td><label>Campo 3:</label></td>
                            <td><input name="terminoBusqueda" id="terminoBusqueda" type="text"></td>
                        </tr>
                    </table>
                    <input type="submit" value="buscar" />                
                </form>
            </div>
        </div>
        <!-- FIN FORMULARIO PARA FILTROS DE BÚSQUEDA -->

        <!-- CONTENIDO DEL Mdefault_index:
  url:   /:module
  param: { action: index }

default:
  url:   /:module/:action/*ODULO -->

        <div id="sf_admin_content">

            <form name="" action="#" method="post">
                <!-- ACCIONES -->

                <!-- FIN ACCIONES -->

                <!-- TABLA LISTADO -->
                <div class="sf_admin_list">
                    <table id="" border="0" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="sf_admin_text">campo 1</th>
                                <th class="sf_admin_text">campo 2</th>
                                <th class="sf_admin_text">campo 3</th>
                                <th class="sf_admin_text">campo 4</th>
                                <th class="sf_admin_list_th_actions">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tArray as $v): ?>
                            <tr>
                                <td><?php echo $v['campo1'] ?></td>
                                <td class="nombre_archivo_td"><?php echo $v['campo2'] ?></td>
                                <td><?php echo $v['campo3'] ?></td>
                                <td><?php echo $v['campo4'] ?></td>
                                <td>
                                    <ul class="sf_admin_td_actions">
                                        <li class="sf_admin_action_delete"><a href="#">eliminar</a></li>
                                        <li class="sf_admin_action_list"><a href="#">listar</a></li>
                                        <li class="sf_admin_action_edit"><a href="#">editar</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">
                                    <div class="sf_admin_pagination">
                                        <?php echo link_to(image_tag('first.png'), 'css/index') ?>
                                        <?php echo link_to(image_tag('previous.png'), 'css/index') ?>
                                        <?php echo link_to("1", 'css/index') ?>-
                                        <?php echo link_to("2", 'css/index') ?>-
                                        <?php echo link_to("3", 'css/index') ?>
                                        <?php echo link_to(image_tag('next.png'), 'css/index') ?>
                                        <?php echo link_to(image_tag('last.png'), 'css/index') ?>
                                    </div>
                                    5 resultados (del 1 al 5)
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- FIN TABLA LISTADO -->
            </form>
        </div>  
        <!-- FIN CONTENIDO DEL MODULO -->
    </div>

Formulario de edición
---------------------

``templates/formEdicionSuccess.php``

.. code-block:: php

    <div id="sf_admin_container">
        <h1>Formulario Nueva Cosa</h1>

        <div id="sf_admin_header">
        <?php include_partial('plantillas/flashes') ?>
        </div>

        <div id="sf_admin_content">
            <div class="sf_admin_form">
                <form name="form" action="#" method="post">


                    <fieldset id="sf_fieldset_1">
                        <h2>fieldset 1</h2>

                        <div class="sf_admin_form_row">
                            <div>
                                <label for="textedit2">campo 1:</label>
                                <input type="text" name="textedit1" value="" id="textedit1" />
                            </div>
                        </div>

                        <div class="sf_admin_form_row">
                            <div>
                                <label for="textarea2">campo 2:</label>
                                <textarea name="textarea1" rows="4" cols="20">
                                </textarea>
                            </div>
                        </div>

                        <div class="sf_admin_form_row">
                            <div>
                                <label for="combo1">campo 3:</label>
                                <select name="combo1">
                                    <option>opción 1</option>
                                    <option>opción 2</option>
                                    <option>opción 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="sf_admin_form_row">
                            <div>
                                <label for="radio1">campo 4:</label>
                                <div class="content">
                                <input type="radio" name="radio1" value="selección 1" checked="checked" /> selección 1<br/>
                                <input type="radio" name="radio1" value="selección 2" /> selección 2 <br/>
                                <input type="radio" name="radio1" value="selección 3" /> selección 3
                                </div>
                            </div>
                        </div>

                        <div class="sf_admin_form_row">
                            <div>
                                <label for="fileselect1">campo 5:</label>
                                <input type="file" name="fileselect1" value="" />
                            </div>
                        </div>

                        <div class="sf_admin_form_row">
                            <div>
                                <input type="submit" value="ok" name="ok" />
                                <input type="submit" value="cancelar" name="cancelar" />
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="sf_fieldset_2" class="collapsed">
                        <h2>fieldset 2 (este fieldset está collapsed)</h2>
                        <div class="sf_admin_form_row">
                            <div>
                                <label for="textedit2">Id profesor</label>
                                <input type="text" name="textedit2" value="" id="textedit2" />
                            </div>
                        </div>
                        <div class="sf_admin_form_row">

                            <div>
                                <label for="textarea2">Nombre</label>
                                <input type="text" name="textarea2" value="" id="textarea2" />
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="sf_fieldset_3">
                        <h2>fieldset 3</h2>
                        <div class="sf_admin_form_row">
                            <div>
                                <label for="textedit3">Id profesor</label>
                                <input type="text" name="textedit3" value="" id="textedit3" />
                            </div>
                        </div>
                        <div class="sf_admin_form_row">

                            <div>
                                <label for="textarea3">Nombre</label>
                                <input type="text" name="textarea3" value="" id="textarea3" />
                            </div>
                        </div>
                    </fieldset>
                    <ul class="sf_admin_actions">

                    </ul>
                </form>
            </div>
        </div>

        <div id="sf_admin_footer">
        </div>
    </div>
