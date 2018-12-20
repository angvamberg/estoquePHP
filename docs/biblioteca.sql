CREATE TABLE autor (
  id_autor INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_autor VARCHAR(255) NULL,
  PRIMARY KEY(id_autor)
);

CREATE TABLE categoria (
  id_categoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(40) NULL,
  PRIMARY KEY(id_categoria)
);

CREATE TABLE livro (
  id_livro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria_id_categoria INTEGER UNSIGNED NOT NULL,
  autor_id_autor INTEGER UNSIGNED NOT NULL,
  titulo_livro VARCHAR(255) NULL,
  editora_livro VARCHAR(40) NULL,
  local_livro VARCHAR(40) NULL,
  ano_livro YEAR NULL,
  PRIMARY KEY(id_livro),
  INDEX livro_FKIndex1(autor_id_autor),
  INDEX livro_FKIndex2(categoria_id_categoria)
);


