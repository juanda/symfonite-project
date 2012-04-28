symfonite-project
=================

A symfony project linked to the symfonite plugins

About *symfonite*
-----------------

*Symfonite* is a *symfony 1.4* (http://www.symfony-project.org/) extension intended to:

* make easier the management of users, roles and applications, allowing to organize them in
  a very complete and flexible way through a backend application from which all the system is
  configured and controlled.

* easily build scaffolded symfonite applications which are plugged in the overall system. These 
  applications are registered in the system and can be linked to the users trough  credentials.
  They also are provided with a common  menu from which the user can change the role,
  jump to another application, change its personal configuration and logout. A custom menu can 
  be added and builded by using the menu-builder tool of the backend application.

* Allow the *Federated Identity*. The *symfonite* applications can act as a service provider in 
  an application federation, and its identification system can also act as a identity provider.
  Build application federations and integrate *symfonite* in an existing one is an easy task.
  At this moment, SAML (http://simplesamlphp.org/) and PAPI (http://papi.rediris.es/) protocols
  are implemented.   

The extension consits in a combination of *symfony* plugins. Some of them have been developed 
at the *Departamento de Telemática y Desarrollo del Instituto de Tecnologías Educativas* 
(http://www.ite.educacion.es/), and some others are well-known symfony plugins.


Installation
------------

Inside a directory within the *DocumentRoot* of your web server:

* git clone git://github.com/juanda/symfonite-project.git .
* git submodule init
* git submodule update

That's all. Now you have an empty symfony-1.4 project with the symfonite extension
plugged. In order to know what you can do with this, you should follow the tutorial:

http://ntic.educacion.es/desarrollo/docs/sft/tutoriales/tutorial-1.html

from the 3th point (the precedents say how to deploy the framework from a tgz file)

However in order to know something more about *symfonite* we recommend to take a look at
the *symfonite* site:

http://ntic.educacion.es/desarrollo/symfonite/

Note: At this moment the documentation is available only in spanish :-(.
The tutorial source (in *rst* format) is available in ``docs`` directory
of this project.

