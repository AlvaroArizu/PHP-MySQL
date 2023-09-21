CREATE DATABASE productos;
USE productos;

CREATE TABLE `libros` (
  `nro_orden` int(100) unsigned NOT NULL auto_increment,
  `titulo` varchar(30) NOT NULL default '',
  `autor` varchar(20) NOT NULL default '',
  `editorial` varchar(20) NOT NULL default '',
  `edicion` varchar(10) NOT NULL default '',
  `precio` int(11) NOT NULL default '0',
  PRIMARY KEY  (`nro_orden`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('Maridos', 'Angeles_Mastreta', 'Seix_Barral', '1era', 35);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('El Enigma de Paris', 'Pablo de Santis', 'Planeta', '1era', 40);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('El Conquistador', 'Federico Andahazi', 'Planeta', '2era', 38);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('Cien a�os de soledad', 'Gabriel Garcia Marqu', 'Alfaguara', '1era', 35);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('Las Viudas de los jueves', 'Claudia Pi�eiro', 'Alfaguara', '2era', 38);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('Corazones desatados', 'Jorge Fernandez Diaz', 'Sudamericana', '2era', 38);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('Hombres que aman demasiado', 'Roberto Pettinato', 'Norma', '2era', 45);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('El cuarto Arcano', 'Florencia Bonelli', 'Suma de Letras', '1era', 32);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('El rey de la Milonga', 'Roberto Fontanarrosa', 'De la Flor', '1era', 46);
INSERT INTO libros (titulo, autor, editorial, edicion, precio) VALUES ('Muertos de amor', 'Jorge Lanata', 'Alfaguara', '1era', 52);