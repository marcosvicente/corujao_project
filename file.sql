create database if not exists corujao; 
use corujao;

CREATE TABLE usuario(
  id INT NOT NULL,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE noticia(
  id INT NOT NULL,
  titulo VARCHAR(45) NOT NULL,
  texto TEXT NOT NULL,
  criado TIMESTAMP NOT NULL,
  atualizado TIMESTAMP NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE categoria(
  id INT NOT NULL,
  nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE comentario(
  id INT NOT NULL,
  texto TEXT NOT NULL,
  criado TIMESTAMP NOT NULL,
  atualizado TIMESTAMP NOT NULL,
  noticia_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (noticia_id)
		REFERENCES noticia(id));

CREATE TABLE redator(
  registro_profissional INT NOT NULL,
  usuario_id INT NOT NULL,
  PRIMARY KEY (registro_profissional),
  FOREIGN KEY (usuario_id)
		REFERENCES usuario(id));
    
CREATE TABLE revisor(
  registro_profissional INT NOT NULL,
  usuario_id INT NOT NULL,
  PRIMARY KEY (registro_profissional),
    FOREIGN KEY (usuario_id)
		REFERENCES usuario(id));
   
CREATE TABLE leitor(
  cpf INT NOT NULL,
  usuario_id INT NOT NULL,
  PRIMARY KEY (CPF),
    FOREIGN KEY (usuario_id)
		REFERENCES usuario(id));

CREATE TABLE noticias_categoria(
  noticias_id INT NOT NULL,
  categoria_id INT NOT NULL,
  PRIMARY KEY (noticias_id, categoria_id),
    FOREIGN KEY (noticias_id)
		REFERENCES noticia(id),
    FOREIGN KEY (categoria_id)
		REFERENCES categoria(id));
   
CREATE TABLE gerenciamento_noticia(
  redator_registro_profissional INT NOT NULL,
  noticias_id INT NOT NULL,
  revisor_registro_profissional INT NOT NULL,
  PRIMARY KEY (redator_registro_profissional, noticias_id, revisor_registro_profissional),
    FOREIGN KEY (redator_registro_profissional)
		REFERENCES redator(registro_profissional),
    FOREIGN KEY (noticias_id)
		REFERENCES noticia(id),
    FOREIGN KEY (revisor_registro_profissional)
		REFERENCES revisor(registro_profissional));
   
CREATE TABLE leitor_comentarios(
  leitor_CPF INT NOT NULL,
  comentarios_id INT NOT NULL,
  PRIMARY KEY (leitor_CPF, comentarios_id),
    FOREIGN KEY (leitor_CPF)
		REFERENCES leitor(cpf),
    FOREIGN KEY (comentarios_id)
		REFERENCES comentario(id));

