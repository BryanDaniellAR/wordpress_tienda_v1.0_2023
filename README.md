# IMPLEMENTAR LOCALMENTE

## Requerimientos

Configuraciones Previas:

* Levantar Xampp Servicios "Apache y MySQL"

- Modificar "wp-config.php" según su Base de Datos Local

  - define( 'DB_NAME', '`<name_database>`' ); /**en mi caso era "bryanarr_wordpress_tienda"*/
  - define( 'DB_USER', '`<usuario>`' );/**en mi caso era "bryanweb"*/
  - define( 'DB_PASSWORD', '`<password>`' );/**en mi caso era "123456"*/
  - define( 'DB_HOST', '`<host>`' );/**en mi caso era "localhost"*/
- Subir base de datos de la ruta de este repositorio "backup/bryanarr_wordpress_tienda.sql" hacia su propia base de datos incluida con anterioridad `<name_database>`, en mi caso era en "bryanarr_wordpress_tienda".
- Directorio donde implementarlo en caso usar xampp, para otros usar su ruta publica

  - Ruta (Sin modificación): C:\xampp\htdocs\wordpress_tienda\
- Entrar a su proyecto de wordpress en su servidor local (Usuario)

  - Ir a la dirección http://localhost/wordpress_tienda
- Entrar a su proyecto de wordpress en su servidor local (Administrador)

  - Ir a la dirección http://localhost/wordpress_tienda/login
  - Usuario: bryanweb
  - Password: yd1zSHedz(s9yh*nO(

# IMPLEMENTAR EN PRODUCCIÓN

Una vez implementado localmente seguir pasos del video para migrarlo a producción.
