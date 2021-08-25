CREATE TABLE notas (
  id            int(255)      NOT NULL,
  titulo        varchar(255)  NOT NULL,
  descripcion   mediumtext    NOT NULL,
  color         varchar(255)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;