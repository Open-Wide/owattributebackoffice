=========================================
OWAttributeBackOffice for eZ Publish documentation
=========================================

.. image:: https://github.com/Open-Wide/OWNewsletter/raw/master/doc/images/Open-Wide_logo.png
    :align: center

:Extension: OWAttributeBackOffice v1.0
:Requires: eZ Publish 4.x.x (not tested on 3.X)
:Author: Open Wide http://www.openwide.fr

Presentation
============

This extension allows to add columns that display attributes of the objects in the content children back office for eZ Publish.

LICENCE
-------
This eZ Publish extension is provided *as is*, in GPL v2 (see LICENCE).

Installation
============

1. Clone the repository in the extension folder :

.. code-block:: sh

    $ git clone https://github.com/Open-Wide/owattributebackoffice.git extension/owattributebackoffice

2. Enable the extension in the site.ini.append.php :

.. code-block:: php

    ActiveExtensions[]=owattributebackoffice

3. Update the autoload arrays and clear cache :

.. code-block:: sh

    $ bin/php/ezpgenerateautoloads.php --extension
    $ bin/php/ezcache.php --clear-all

Usage
=====

1. Copy settings/owattributebackoffice.ini in your admin siteaccess

2. add the attributes to display.

Example : add reference and title

.. code-block:: ini

    [AttributeColumns]
    Attribute[]
    Attribute[]=reference
    Attribute[]=title
    
    [title]
    Label=Title
    
    [reference]
    Class=mon_classe
    Label=Réfèrence