symfonite-project
=================

A symfony project linked to the symfonite plugins

Installation
------------

git clone git://github.com/juanda/symfonite-project.git
git submodule init
git submodule update

That's all. Now you have an empty symfony-1.4 project with the symfonite extension
plugged. In order to know what you can do with this, you should follow the tutorial:

http://ntic.educacion.es/desarrollo/symfonite 

.. Important 
   
   If you use MySQL > 5.5.x, once de symfony1 submodule has been updated, you
   must change the file:

   lib/symfony/lib/plugins/sfPropelPlugin/lib/vendor/propel-generator/classes/propel/engine/builder/sql/mysql/MysqlDDLBuilder.php

   line 156, change it as follows:- $script .= “Engine=$mysqlTableType”;
