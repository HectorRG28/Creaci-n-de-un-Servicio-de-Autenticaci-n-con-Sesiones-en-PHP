# RA4. AEE: Servicio de Autenticación con Sesiones en PHP

##  Objetivo
Cumplo con la actividad de realizar un sistema básico en php

##  Requisitos Clave de la Implementación

1.  **Manejo de Sesiones:** Implementación de las funciones nativas de PHP (`session_start`, `$_SESSION`, `session_destroy`).
2.  **Redirecciones:** Uso de la función `header()` para gestionar el flujo de la aplicación.
3.  **Validación de Credenciales:** Los usuarios se validan contra un **array predefinido** en el servidor (sin base de datos).
4.  **Flujo de la Aplicación:** Se incluye `login`, `bienvenida` (restringida), `permisos` (acceso denegado), y `logout`.
5.  **Separación de Intereses:** El código separa la lógica PHP (`.php`) de la interfaz HTML (`.html`) para una mayor claridad y mantenimiento.

##  Credenciales de Prueba
El array de usuarios válidos está definido en el archivo `check.php`. Puedes usar estas credenciales para probar en el sistema
 `admin` =>  `1234` 
 `usuario`  `abcd` 

##  Estructura del Proyecto
El proyecto está organizado para separar la lógica de autenticación de la interfaz de usuario:

 **`login.php`**: Controla el flujo del login e incluye `login.html`.
**`check.php`** : Procesa el formulario, valida las credenciales y establece la sesión. 
 **`bienvenida.php`** : Verifica la sesión y prepara datos dinámicos antes de incluir `bienvenida.html`. 
 **`permisos.php`**: Página de error. Incluye `permisos.html`. Se accede aquí si no hay sesión activa. 
 **`logout.php`**:  Destruye la sesión (session_destroy) y redirige a `login.php`. 
`login.html` : Contiene el formulario HTML puro. 
 `bienvenida.html` : Contiene el marcado HTML para la página de bienvenida. 
 `permisos.html`: Contiene el marcado HTML para el mensaje de acceso denegado. 

## Cómo Ejecutar
1.  **Servidor:** Asegúrate de que un servidor web (como XAMPP o MAMP) esté corriendo y que PHP esté habilitado.
2.  **Ubicación:** Coloca la carpeta de este proyecto dentro del directorio raíz de tu servidor (ej. `htdocs`).
3.  **Acceso:** Abre tu navegador y navega a la URL de inicio: `http://localhost/[nombre_de_tu_carpeta]/login.php`

---
### Información de Entrega
**Alumno:** Héctor Reca García
**Módulo:** DWEC
**Profesor:** Carlos Basulto Pardo