## AIVO Challenge in Laravel 8

Instalación:

- Descargar el repositorio.
- Posicionado en la carpeta del proyecto, ejecutar los comandos:
- Instalar dependiencias de NPM: npm install
- Instalar dependencias de composer: composer install
- Crear archivo .env: copy .env.example .env
- Ejecutar el proyecto: php artisan serve



## Endpoint
- Buscar 10 videos según termino: GET /api/youtube?search=termino

Ejemplo: /api/youtube?search=maroonfive
Respuesta: Arreglo de Objetos

''
[
{
published_at: "2021-03-11T17:00:14Z",
id: "BSzSn-PRdtI",
title: "Maroon 5 - Beautiful Mistakes ft. Megan Thee Stallion (Official Music Video)",
description: "// LYRICS It's beautiful it's bittersweet You're like a broken home to me I take a shot of memories and black out like an empty street I fill my days with the way you ...",
thumbnail: "https://i.ytimg.com/vi/BSzSn-PRdtI/hqdefault.jpg",
extra: {
published by: "Maroon5VEVO"
}
}]
''
