---
extends: _layouts.post
section: content
title: Como actualizar Laragon a PHP 8
date: 2020-11-04
description: Un resumen de los cambios en Composer 2 y ayuda para actualizar
image: https://source.unsplash.com/yGPxCYPS8H4/?fit=max&w=1350
image_thumb: https://source.unsplash.com/yGPxCYPS8H4/?fit=max&w=200&q=75
image_author: Clint Patterson
image_author_url: https://unsplash.com/@cbpsc1
image_unsplash: true
image_overlay_text:
---

> Basado en la documentación de Laragon [en el foro oficial](https://forum.laragon.org/topic/166/tutorial-how-to-add-another-php-version-php-7-4-updated).


Agregar PHP 8 como opción a Laragon es muy sencillo y podremos lograrlo en 5 pasos.

1. Ve a la [página oficial](https://windows.php.net/download) de PHP para Windows, y descarga la opción que mejor se adapte a tus necesidades.

    Las opciones que tienes disponibles son: 
    * Arquitectura, elige si tu sistema es de 32 o 64 bits
    * Thread Safety, el default de Laragon es usar NTS (Non Thread Safe), elige a menos que lo hayas cambiado.
    
    En mi caso utilizare la version `VS16 x64 Non Thread Safe`. Descargalo en cualquier directorio de tu equipo. 

1. Localiza la raíz de tu directorio de Laragon, e ingresa a `bin > php` 
1. Crea un nuevo directorio, no necesitas un nombre en especial, pero es el que aparecerá en Laragon, intenta usar un nombre descriptivo. Por ejemplo usare `php-8.0.0`.
1. Descomprime el archivo obtenido en el paso 1 en el directorio creado en el paso 3, en mi caso `C:\laragon\bin\php\php-8.0.0`
1. Abre laragon, y podras seleccionarlo como opción en `PHP > Version > php-8.0.0`

> Si tenías abierta una terminal de Cmder el cambio no se vera reflejado, lo más sencillo es reiniciar la terminal.

<img src="/assets/img/laragon-php8.png" class="mx-auto">
