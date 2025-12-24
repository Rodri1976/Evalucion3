🔧 Funcionalidades del Sistema  " SISTEMA TALLER ARTISTICO "

El sistema fue desarrollado utilizando el framework Laravel, siguiendo el patrón de arquitectura MVC, e implementa las siguientes funcionalidades:

🔐 Autenticación y Gestión de Usuarios

Registro de usuarios mediante formularios validados.

Inicio de sesión con control de credenciales.

Manejo de sesiones utilizando el sistema de autenticación de Laravel.

Protección de rutas mediante middleware (auth).

Cierre de sesión seguro.

🗂️ Gestión de Información

Conexión a base de datos MySQL mediante Eloquent ORM.

Operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre las entidades del sistema.

Validación de datos en el backend antes de persistir información.

Uso de migraciones para la creación y modificación del esquema de base de datos.

🌐 Navegación y Rutas

Definición de rutas web utilizando el archivo routes/web.php.

Separación clara entre rutas públicas y rutas protegidas.

Controladores dedicados para cada módulo del sistema.

Redirecciones y manejo de errores básicos.

🎨 Interfaz de Usuario

Vistas desarrolladas con Blade.

Uso de plantillas reutilizables (layouts).

Integración de Bootstrap para diseño responsivo.

Formularios estilizados y adaptables a dispositivos móviles.

⚙️ Arquitectura y Buenas Prácticas

Implementación del patrón Modelo–Vista–Controlador (MVC).

Separación de lógica de negocio y presentación.

Uso de variables de entorno para credenciales sensibles (.env).

Estructura de carpetas estándar de Laravel.

Código organizado y mantenible.

🧪 Base para Escalabilidad

Estructura preparada para agregar nuevos módulos.

Posibilidad de integrar:

Roles y permisos

API REST

Validaciones avanzadas

Logs y manejo de errores

Tests automatizados

📌 Alcance del Proyecto

Proyecto académico orientado al desarrollo backend.

Enfoque en lógica, estructura y conexión a datos.

No orientado a producción, pero con bases sólidas para evolución.
