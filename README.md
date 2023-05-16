# PHP_Imagenes

Este repositorio contiene un proyecto en PHP para la gestión de imágenes. Permite subir, visualizar y eliminar imágenes de forma sencilla.

## Versión

La versión actual del proyecto es 0.0.1. Este es un lanzamiento inicial y se encuentra en una etapa temprana de desarrollo. A medida que el proyecto evolucione, se agregarán nuevas características y mejoras.

## Características

- Subida de imágenes: los usuarios pueden subir imágenes desde su dispositivo al servidor.
- Visualización de imágenes: las imágenes cargadas se muestran en una galería para que los usuarios puedan verlas.
- Eliminación de imágenes: los usuarios pueden eliminar imágenes existentes del servidor.

## Próximas características

En futuras versiones del proyecto, se planea implementar las siguientes características:

- Login para usuarios: se agregará un sistema de autenticación que permitirá a los usuarios iniciar sesión y tener una experiencia personalizada.
- Login para programadores: los desarrolladores podrán acceder a una interfaz especializada con funciones adicionales para la gestión avanzada de imágenes.
- Link especial para hacer fetch: se proporcionará un enlace especial que permitirá a los desarrolladores obtener datos de imágenes a través de una solicitud HTTP (fetch).

## Requisitos del sistema

Para ejecutar este proyecto en su entorno local, asegúrese de tener los siguientes requisitos:

- Servidor web con soporte para PHP (por ejemplo, Apache o Nginx).
- PHP 7.0 o superior instalado.
- Extensión PHP GD habilitada (para el procesamiento de imágenes).

## Instalación

Siga estos pasos para configurar el proyecto en su entorno local:

1. Clone este repositorio en su máquina local: `git clone https://github.com/miusarname/PHP_Imagenes.git`.
2. Coloque los archivos clonados en el directorio raíz de su servidor web.
3. Asegúrese de que los permisos de escritura estén habilitados en el directorio `uploads/` para permitir la subida de imágenes.
4. Configure la conexión a la base de datos modificando el archivo `config.php` con los detalles de su servidor de base de datos.
5. Importe el archivo SQL `database.sql` en su base de datos para crear la estructura necesaria.
6. Acceda al proyecto a través de su navegador web.

## Uso

Una vez que el proyecto esté instalado y configurado correctamente, puede comenzar a utilizarlo:

1. Página principal: en esta página, los usuarios pueden cargar imágenes utilizando el formulario proporcionado. Las imágenes se mostrarán en la galería.
2. Galería: aquí se muestran todas las imágenes cargadas en orden cronológico inverso. Los usuarios pueden hacer clic en una imagen para verla en tamaño completo.
3. Eliminar imagen: los usuarios pueden eliminar una imagen haciendo clic en el botón "Eliminar" debajo de la imagen en la galería.

## Contribución

¡Se agradecen las contribuciones al proyecto! Si desea contribuir, siga estos pasos:

1. Fork este repositorio.
2. Cree una rama con el nombre de su función o corrección de errores: `git checkout -b nombre-de-la-rama`.
3. Realice los cambios deseados y realice los commits: `git commit -m "Descripción de los cambios"`.
4. Envíe