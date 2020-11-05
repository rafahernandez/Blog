---
extends: _layouts.post
section: content
title: Composer 2 ya esta disponible
date: 2020-11-04
description: Un resumen de los cambios en Composer 2 y ayuda para actualizar
image: https://source.unsplash.com/4TNd3hsW3PM/?fit=max&w=1350
image_thumb: https://source.unsplash.com/4TNd3hsW3PM/?fit=max&w=200&q=75
image_author: Esteban Lopez
image_author_url: https://unsplash.com/@exxteban
image_unsplash: true
image_overlay_text:
---

> Esta es una versión en español de [esta entrada original](https://blog.packagist.com/composer-2-0-is-now-available/) por Jordi Boggiano, el co-fundador de packagist / composer

> TLDR: Si eres un usuario final de composer, puede que solo necesites ejecutar `composer self-update --2`

## ¿Qué es lo nuevo?
### Mejoras de rendimiento
Notarás que en general todas las operaciones son más rápidas, esto se debe a las cambios en la comunicación de composer con packagist.org, ahora hay descargas en paralelo y mejoras en la evaluación de restricciones. El tiempo que te ahorrarás varia según el proyecto, pero se han reportado mejoras de más del 50%.

Las operaciones de `require`, `remove` y actualizaciones parciales se benefician de que ahora solo se lee los datos de los paquetes que se cambian.

### Determinismo en actualizaciones
La manera en que las actualizaciones se llevan a cabo internamente resulta en versiones mas deterministas, el estado del directorio `vendor` ya no afectara a las actualizaciones.

Después de que se realiza una actualización , el instalador correrá automáticamente, y primero, ejecutara todas las operaciones de red (en paralelo si es posible), con esto se evita dejar un directorio `vendor` a medio actualizar si la conexión con la red falla a mitad del proceso.

### Funciones en tiempo de ejecución
Se agrego un nuevo paso de revision de plataforma, cuando se cargue `vendor/autoload.php` se revisara que la versión y extensiones de PHP coincida con tus dependencias, y si no falla. Esta característica esta  **habilitada por default** y es mejor revisarla para no tener sorpresas.

Con la nueva clase `Composer\InstalledVersions` es posible revisar en nuestro código si un paquete esta instalado y en que versión.


```php
\Composer\InstalledVersions::isInstalled('vendor/package'); //regresa un bool

\Composer\InstalledVersions::getVersion('vendor/package'); //regresa un string con la version, null si fue reemplazado o un error si no esta instalado
```

[Revisa la documentación de esta nueva clase aquí](%5CComposer%5CInstalledVersions::getVersion%28%27vendor/package%27%29;).

Si tu código necesita estas funciones deberás asegurarte que quien quiera instalar tu paquete use Composer 2, esto se logra al incluir esta dependencia virtual en tu `composer.json`:
```
"composer-runtime-api": "^2.0"
```

### Mejoras en reporte de errores
En cualquier proyecto habrá cosas que no salgan según el plan, el equipo detrás de composer ha trabajado en los mensajes de error, y aunque no hay ejemplos concretos, prometen ser mas concisos.

### Actualizaciones parciales con restricciones temporales
En ocasiones quieres actualizar una dependencia para probar que funcione en tu proyecto, en Composer 2 puedes ejecutar `composer update vendor/package:1.0.*` esto solo actualizará el paquete de `vendor/package` a una version que con la nueva restricción y no cambiara tu archivo `composer.json` y tampoco no marcara `composer.lock` como desactualizado.

Si quieres añadir o modificar una restricción y aún así hacer una actualización completa, debes usar `composer update --with vendor/package:1.0.*`

## ¿Que tan fácil es actualizar?

El equipo hizo un trabajando excelente al trabajar para que la gran mayoría de los usuarios podamos actualizar sin muchos problemas.

 - Composer 2 (Al igual que V1) requiere una version de PHP 5.3 o superior. (Pero esto no es para siempre, revisa la ultima sección).
 - El archivo `composer.lock` puede ser leído por ambas versiones, puedes actualizar a V2 y regresar a V1 fácilmente si es necesario.
 - La mayoría de los comandos y sus argumentos son lo mismo, casi todo lo que sabias de V1 es igual en V2.
 
Para actualizar solo es es necesario ejecutar.
```bash
composer self-update --2
```

Verás el proceso ejecutarse y al final te dará la opción para regresar a la versión anterior.

```bash
composer self-update --rollback
```

Ten en cuenta que Composer 1 ya no sera activamente mantenido en el futuro próximo.

## Problemas con Retro-compatibilidad

Siempre que se actualiza algo existe detalles que puedes causar problemas al provenir de una versión anterior, en Composer 2 los dolores de cabeza pueden provenir de:

 - **Plugins**: Los plugins necesitan ser actualizados para ser compatibles con Composer 2 y algunos no están listos, si utilizas alguno de estos Composer se quejará al resolver dependencias.
 - La **revisión de plataforma** esta habilitada por default y revisa que la versión de PHP y sus extensiones coincidan con el proyecto, si no se lanzara un error y el instalador no continuara. En ambientes de producción puedes ejecutar `composer check-platform-reqs --no-dev` para revisar que todo este en orden.
 - **Prioridad de repositorios**: Si un paquete existe un repositorio de mayor prioridad será ignorado en los de menor prioridad. [Revisa los docs sobre prioridad de repositorios.](https://getcomposer.org/doc/articles/repository-priorities.md)
 - **Configuraciones inválidas de PSR-0 o PSR-4**: En Composer 1 se generaba una advertencia cuando las clases no con tenían una configuración válida, en Composer 2 ya no se cargaran en el autoloader.

[La guía oficial de actualización](https://getcomposer.org/upgrade/UPGRADE-2.0.md)  contiene secciones para usuarios, autores de paquetes e integradores de repositorios.

## Lo que sigue

Composer 2 puede usarse con PHP >= 5.3 pero esto solo es para que la gran mayoría puedan actualizar, el plan es que para la versión 2.2 sólo se soporte PHP >= 7.1.3.

Con este lanzamiento Composer 1 está en sus últimos días, el equipo lanzará fixes de error críticos, pero la meta es que todos se actualicen a Composer 2.

### Leer más

 - [Log de cambios completo](https://github.com/composer/composer/releases/tag/2.0.0)
 - [Guía oficial de actualización](https://github.com/composer/composer/blob/master/UPGRADE-2.0.md)

---
En la entrada original [Jordi Boggiano](https://blog.packagist.com/author/seldaek/) agradece a todos los colaboradores del proyecto, que hicieron más de 1100 commits de 28 personas, más de 150 issues de GitHub y a todos los que revisaron Pull Request y probaron el proyecto.

También agradece a todos los clientes de [Private Packagist](https://packagist.com/) que financiaron el esfuerzo.
