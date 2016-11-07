Symfony Standard Edition
========================
Actualizaciones:
--------------
- Un commit se quedo por pushear en la ultima actualizacion.
- La instalacion no la tengo testeada, la tengo hecha al vuelo (Esta tarde la reviso).
- El RSS de el mundo a veces da problemas

Instalacion:
--------------
* Iniciamos mysql 
 * mysql.server start
* Creamos la Base de datos
 * php app/console doctrine:database:create
* Creamos las tablas a mano (Por tema la abstracion por herencia doctrine saca un fallo al intentar generarlas).
 * CREATE TABLE Feed (
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(250) NOT NULL,
     body VARCHAR(250) NOT NULL,
     image VARCHAR(250),
     source VARCHAR(250),
     publisher VARCHAR(250),
     date VARCHAR(250),
     active_at_frontpage BOOLEAN
   );
 * CREATE TABLE sources ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(250) NOT NULL, feed_url VARCHAR(1000) NOT NULL);
* Rellenamos la tabla SOURCE con los datos de los proveedores de RSS (Los 5), necesitamos habilitar fixtures.
 * composer require --dev doctrine/doctrine-fixtures-bundle
 * php app/console doctrine:fixtures:load
* Arrancamos el bicho
 * php app/console server:start
* En principio si con esto vas a la ruta principal ya se generaran los feeds ya que si no encuentra ningun feed en la base de datos activado los genera, en caso de que no fuese asi, la ruta: http://localhost:8000/runFeedService generara los feeds.



What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/2.8/book/installation.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/2.8/book/doctrine.html
[8]:  https://symfony.com/doc/2.8/book/templating.html
[9]:  https://symfony.com/doc/2.8/book/security.html
[10]: https://symfony.com/doc/2.8/cookbook/email.html
[11]: https://symfony.com/doc/2.8/cookbook/logging/monolog.html
[13]: https://symfony.com/doc/2.8/bundles/SensioGeneratorBundle/index.html
# feedInTime
mysql.server start
composer require --dev doctrine/doctrine-fixtures-bundle
php app/console doctrine:fixtures:load

CREATION OF DATABASE:
  CREATE TABLE Feed (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(250) NOT NULL,
    body VARCHAR(250) NOT NULL,
    image VARCHAR(250),
    source VARCHAR(250),
    publisher VARCHAR(250),
    date VARCHAR(250),
    activa_en_portada BOOLEAN
  );

  CREATE TABLE sources ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(250) NOT NULL, feed_url VARCHAR(1000) NOT NULL);
