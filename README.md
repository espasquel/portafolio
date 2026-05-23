# Portafolio Personal

https://espasquel.infinityfree.me/index.php

Sitio web personal con página de inicio e información del autor, y un formulario de contacto funcional con PHP y MySQL.

## Tecnologías usadas

- HTML5 (etiquetas semánticas)
- Tailwind CSS (via CDN)
- PHP 8+
- MySQL

## Estructura de archivos

```
/
├── index.php        → Página principal con biografía, foto y hobbies
├── contacto.php     → Formulario de contacto con validación
├── procesar.php     → Procesa el formulario y guarda en la base de datos
├── config.php       → Configuración de conexión a la base de datos
├── crear_db.sql     → Script SQL para crear la base de datos y la tabla
└── README.md        → Este archivo
```

## Instrucciones para usar en local (XAMPP)

1. Instalar XAMPP desde https://www.apachefriends.org
2. Copiar la carpeta del proyecto dentro de `C:/xampp/htdocs/`
3. Iniciar Apache y MySQL desde el panel de XAMPP
4. Abrir el navegador y entrar a `http://localhost/phpmyadmin`
5. Ir a la pestaña **SQL**, pegar el contenido de `crear_db.sql` y ejecutarlo
6. Abrir `http://localhost/nombre-de-la-carpeta` en el navegador

## Instrucciones para subir al hosting (InfinityFree / 000webhost)

1. Crear cuenta en el hosting gratuito elegido
2. Desde el panel crear una base de datos MySQL y apuntar el nombre, usuario y contraseña
3. Editar `config.php` con esos datos
4. Subir todos los archivos por FTP (usar FileZilla u otro cliente FTP)
5. Desde el phpMyAdmin del hosting, ejecutar el SQL de `crear_db.sql`
6. Acceder al dominio que te da el hosting y listo

## Personalización

- Cambiar el nombre, foto y texto en `index.php`
- La foto usa `ui-avatars.com` como placeholder; se puede reemplazar por una imagen real subida al servidor
