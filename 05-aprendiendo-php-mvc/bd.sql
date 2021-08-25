-- se utilizara la base de datos del proyecto de:
-- 03-proyecto-blog-php-mysql
-- /assets/db

CREATE TABLE usuarios2(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
fecha       date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE notas2(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
titulo          varchar(255) not null,
descripcion     MEDIUMTEXT,
fecha           date not null,
CONSTRAINT pk_notas PRIMARY KEY(id),
CONSTRAINT fk_nota_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios2(id)
)ENGINE=InnoDb;

INSERT INTO usuarios2 (id, nombre, apellidos, email, password, fecha) VALUES (NULL, 'admin', 'admin', 'admin@admin.com', '1234', '2021-08-25')

INSERT INTO notas2 (id, usuario_id, titulo, descripcion, fecha) VALUES (NULL, '1', 'Nota 1', 'prueba', '2021-08-24'), (NULL, '1', 'Nota 2', 'Lorem', '2021-08-24'), (NULL, '1', 'Nota 3', 'bla bla bla', '2021-08-25')

