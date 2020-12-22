---
extends: _layouts.post
section: content
title: Optimiza la configuración max_children de PHP-FPM
date: 2020-12-21
description: Aprovecha tu servidor y elimina el problema con server reached pm.max_children setting.
image: https://source.unsplash.com/-eMT4vEgjCk/?fit=max&w=1350
image_thumb: https://source.unsplash.com/-eMT4vEgjCk/?fit=max&w=200&q=75
image_author: Pang Yuhao
image_author_url: https://unsplash.com/@yuhao
image_unsplash: true
image_overlay_text:
---

Si utilizan php-fpm y tienen la configuracion por default puede ser que no esten aprovechando al máximo su servidor.

>Uso PHP 7.4 para este tutorial, cambia tu version en el código para que concuerde con la que utilizas

Esto pueden comprobarlo si en el log de php-fpm (en mi instalación se ubica en `/var/log/php7.4-fpm.log`) encuentran algo como esto:

```text
WARNING: [pool www] server reached pm.max_children setting (5), consider raising it
```

5 es el default, pero esta pensado para quien tiene un servidor modesto, al incrementarlo tendremos mas procesos para procesar los scripts a cambio de un mayor uso de memoria. 

Yo utilizo un cálculo basado en la RAM instalada en el sistema:

```text
pm.max_children = RAM dedicada al servidor web / Tamaño del proceso
Asumiendo:
RAM del servidor: 4GB (Pero solo dedicare 2GB a php)
Tamaño promedio de los procesos: 90MB
pm.max_children = 2000 / 90 = 22
```

[Leer más sobre el cálculo (En inglés)](https://gist.github.com/holmberd/44fa5c2555139a1a46e01434d3aaa512)

Cuando tenemos el valor lo actualizamos en la configuración de php-fpm

```sudo nano /etc/php/7.4/fpm/pool.d/www.conf```

```diff
- pm.max_children = 5
+ pm.max_children = 22
```

Ahora, solo hay que reiniciar el servicio

```sudo service php7.4-fpm restart```

Tu servidor web ahora utilizará mas memoria, pero estará mejor preparado para lidiar con las solicitudes concurrentes.
