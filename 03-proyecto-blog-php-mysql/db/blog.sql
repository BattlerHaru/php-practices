CREATE TABLE usuarios(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
fecha       date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
id      int(255) auto_increment not null,
nombre  varchar(100),
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
categoria_id    int(255) not null,
titulo          varchar(255) not null,
descripcion     MEDIUMTEXT,
fecha           date not null,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE NO ACTION
)ENGINE=InnoDb;

-- INSERT usuarios 
-- password for all it's: 1234
INSERT INTO usuarios(id, nombre, apellidos, email, password, fecha) VALUES (null,'Peter','Parker','vecinoamigable@spiderman','$2y$04$DfqhRLaQxT9elnwhnipQj.am1YnURVL4rApbcLVvpZms4LrZYDgoO',CURDATE());
INSERT INTO usuarios(id, nombre, apellidos, email, password, fecha) VALUES (null,'Felicia','Hardy','kitty12@blackcat.com','$2y$04$CbRdPYTnKQr7dvAjcRk.YuSbnrNWKkapa72IcmLZkiXjfEit/H5W2',CURDATE());
INSERT INTO usuarios(id, nombre, apellidos, email, password, fecha) VALUES (null,'Gwen','Stacy','Gwendolyne@spidergwen.com','$2y$04$XQM6C1LxgilSRyLR./7Bi.tywWHloI6Q/9AJ5cRkY0v4p/x/rWIEG',CURDATE());

-- INSERT categorias
INSERT INTO categorias(id, nombre) VALUES (null,'Accion');
INSERT INTO categorias(id, nombre) VALUES (null,'Aventura');
INSERT INTO categorias(id, nombre) VALUES (null,'RPG');
INSERT INTO categorias(id, nombre) VALUES (null,'Ritmico');
INSERT INTO categorias(id, nombre) VALUES (null,'Suspenso');
INSERT INTO categorias(id, nombre) VALUES (null,'Terror');

-- INSERT entradas
-- info by wikipedia
INSERT INTO entradas(id, usuario_id, categoria_id, titulo, descripcion, fecha) VALUES (null, 1, 1,'MARVEL SPIDER-MAN','El juego narra una historia completamente original de El Hombre Ara??a que no est?? ligada a pel??culas o c??mics anteriores.??? Cubre ambos aspectos del personaje, tanto de Peter Parker como el hombre ara??a, adem??s de presentarlo en una faceta m??s experimentada.??? Durante el transcurso de la historia, Spider-Man debe hacerle frente a una gran variedad de famosos enemigos, tales como Mr. Negativo, Electro, Buitre, Rhino y Escorpi??n.??? Otro famoso personaje de los c??mics que aparece en el juego es Miles Morales, un joven que porta el traje de El Hombre Ara??a en uno de los universos donde Peter Parker fallece. Sin embargo, Insomniac confirm?? que Morales no personificar??a al superh??roe y que la historia del juego se centrar??a por completo en Peter Parker.', CURDATE());

INSERT INTO entradas(id, usuario_id, categoria_id, titulo, descripcion, fecha) VALUES (null, 2, 4,'JUST DANCE 2021','Just Dance 2021 es el duod??cimo juego de la serie Just Dance, desarrollada por Ubisoft. Su lanzamiento inicial para las consolas en las que est?? disponible fue el 12 de noviembre de 2020. Fue anunciado oficialmente en una conferencia de Nintendo Direct el 26 de agosto de 2020. Es el octavo juego en la serie que tiene un a??o en el t??tulo en lugar de un n??mero, el primero fue Just Dance 2014.', CURDATE());

INSERT INTO entradas(id, usuario_id, categoria_id, titulo, descripcion, fecha) VALUES (null, 3, 2,'POKEMON GO','Pok??mon GO es un videojuego de realidad aumentada basado en la localizaci??n desarrollado por Niantic??? para dispositivos iOS y Android. Es un videojuego gratuito pero contiene microtransacciones.??? El juego consiste en buscar y capturar personajes de la saga Pok??mon escondidos en ubicaciones del mundo real y luchar con ellos, lo que implica desplazarse f??sicamente por las calles de la ciudad para progresar. La aplicaci??n comporta un elemento de interacci??n social, ya que promueve reuniones f??sicas de los usuarios en distintas ubicaciones de sus poblaciones y bosques entre otros.', CURDATE());

INSERT INTO entradas(id, usuario_id, categoria_id, titulo, descripcion, fecha) VALUES (null, 2, 6,'BLAIR WITCH','El juego se desarrolla en el a??o 1996, dos a??os despu??s de los eventos de la pel??cula original. Ellis, un expolic??a y veterano de guerra, viaja al bosque de Black Hills, en Burkittsville (Maryland) para unirse al grupo de b??squeda de un ni??o desaparecido, Peter Shannon, de nueve a??os. Trae con ??l, su perro mascota, Bullet. Mientras conduce hacia el bosque, llama a su exnovia, Jess. Cuando llega al bosque, en un descampado tomado como base de misiones por la polic??a, con varios coches aparcados, toma su linterna, adquiere un walkie-talkie y comienza la b??squeda, en paralelo con la actuaci??n de la polic??a, que lidera el sheriff Lanning.', CURDATE());

INSERT INTO entradas(id, usuario_id, categoria_id, titulo, descripcion, fecha) VALUES (null, 3, 3,'GHOST OF TSUSHIMA','Ambientada en 1274 en la isla ep??nima de Tsushima, el juego gira en torno al samur??i Jin Sakai (Daisuke Tsuji), uno de los pocos supervivientes de la primera invasi??n mongola a Jap??n. Jin tendr?? que dominar un nuevo estilo de lucha, el camino del Fantasma, para derrotar a las fuerzas mongolas y luchar por la libertad de su pueblo y de la isla. Jin se ve envuelto en un conflicto moral, ya que seg??n el estricto c??digo samur??i (Bushido) luchar sigilosamente es deshonroso. Tampoco recibe la aprobaci??n de su t??o, el se??or de la isla de Tsushima, que es una figura paterna para ??l', CURDATE());

INSERT INTO entradas(id, usuario_id, categoria_id, titulo, descripcion, fecha) VALUES (null, 3, 2,'CATHERINE FULL BODY','Catherine: Full Body es un videojuego de plataformas y puzles desarrollado por Studio Zero y publicado por Atlus, para las consolas PlayStation 4, PlayStation Vita y Nintendo Switch.??? Es una versi??n extendida del videojuego Catherine lanzado en 2011 en PlayStation 3 y Xbox 360. Entre las novedades que presenta este juego se encuentran la inclusi??n de un nuevo personaje femenino llamado Rin, tramas adicionales y nuevos desenlaces para Catherine y Katherine, las protagonistas principales de la primera entrega, nuevas mec??nicas para los rompecabezas, nuevas escenas animadas y m??s niveles de dificultad.', CURDATE());