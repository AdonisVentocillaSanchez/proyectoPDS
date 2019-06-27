-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-02-2013 a las 12:18:01
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `intratello`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `carrera`
-- 

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL,
  `nombreCarrera` varchar(50) default NULL,
  `vacantesCarrera` int(11) default NULL,
  `idTurno` int(11) default NULL,
  PRIMARY KEY  (`idCarrera`),
  UNIQUE KEY `XPKcarrera` (`idCarrera`),
  KEY `idTurno` (`idTurno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `carrera`
-- 

INSERT INTO `carrera` VALUES (1, 'administracion de empresas', 5, 1);
INSERT INTO `carrera` VALUES (2, 'administracion de empresas', 40, 2);
INSERT INTO `carrera` VALUES (3, 'contabilidad', 40, 1);
INSERT INTO `carrera` VALUES (4, 'contabilidad', 40, 2);
INSERT INTO `carrera` VALUES (5, 'computacion e informatica', 1, 1);
INSERT INTO `carrera` VALUES (6, 'computacion e informatica', 40, 2);
INSERT INTO `carrera` VALUES (7, 'mecanica automotriz', 40, 1);
INSERT INTO `carrera` VALUES (8, 'mecanica automotriz', 40, 2);
INSERT INTO `carrera` VALUES (9, 'mecanica de produccion', 1, 1);
INSERT INTO `carrera` VALUES (10, 'mecanica de produccion', 40, 2);
INSERT INTO `carrera` VALUES (11, 'electrotecnia indsutrial', 40, 1);
INSERT INTO `carrera` VALUES (12, 'electrotecnia indsutrial', 40, 2);
INSERT INTO `carrera` VALUES (13, 'secretariado ejecutivo', 40, 1);
INSERT INTO `carrera` VALUES (14, 'secretariado ejecutivo', 40, 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `code`
-- 

CREATE TABLE `code` (
  `codigo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `code`
-- 

INSERT INTO `code` VALUES (41);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `configuracion`
-- 

CREATE TABLE `configuracion` (
  `costoAdmision` double NOT NULL,
  `proceso` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `configuracion`
-- 

INSERT INTO `configuracion` VALUES (170, '20131');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalleprivilegio`
-- 

CREATE TABLE `detalleprivilegio` (
  `idPrivilegio` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  PRIMARY KEY  (`idPrivilegio`,`login`),
  UNIQUE KEY `XPKdetallePrivilegio` (`idPrivilegio`,`login`),
  KEY `login` (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `detalleprivilegio`
-- 

INSERT INTO `detalleprivilegio` VALUES (1, 'adelgado');
INSERT INTO `detalleprivilegio` VALUES (1, 'ecojal');
INSERT INTO `detalleprivilegio` VALUES (1, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (1, 'jreategui');
INSERT INTO `detalleprivilegio` VALUES (1, 'pbravo');
INSERT INTO `detalleprivilegio` VALUES (2, 'adelgado');
INSERT INTO `detalleprivilegio` VALUES (2, 'ecojal');
INSERT INTO `detalleprivilegio` VALUES (2, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (2, 'jreategui');
INSERT INTO `detalleprivilegio` VALUES (2, 'pbravo');
INSERT INTO `detalleprivilegio` VALUES (3, 'adelgado');
INSERT INTO `detalleprivilegio` VALUES (3, 'ecojal');
INSERT INTO `detalleprivilegio` VALUES (3, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (3, 'jreategui');
INSERT INTO `detalleprivilegio` VALUES (4, 'adelgado');
INSERT INTO `detalleprivilegio` VALUES (4, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (4, 'jreategui');
INSERT INTO `detalleprivilegio` VALUES (5, 'adelgado');
INSERT INTO `detalleprivilegio` VALUES (5, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (6, 'adelgado');
INSERT INTO `detalleprivilegio` VALUES (6, 'ecojal');
INSERT INTO `detalleprivilegio` VALUES (6, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (7, 'adelgado');
INSERT INTO `detalleprivilegio` VALUES (7, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (8, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (9, 'adelgado');
INSERT INTO `detalleprivilegio` VALUES (9, 'ecojal');
INSERT INTO `detalleprivilegio` VALUES (9, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (9, 'pbravo');
INSERT INTO `detalleprivilegio` VALUES (10, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (11, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (12, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (13, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (14, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (15, 'irubenv');
INSERT INTO `detalleprivilegio` VALUES (16, 'irubenv');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `distrito`
-- 

CREATE TABLE `distrito` (
  `idDistrito` varchar(20) NOT NULL,
  `nombreDistrito` varchar(50) default NULL,
  PRIMARY KEY  (`idDistrito`),
  UNIQUE KEY `XPKdistrito` (`idDistrito`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `distrito`
-- 

INSERT INTO `distrito` VALUES ('Lima 01', 'Cercado de Lima');
INSERT INTO `distrito` VALUES ('Lima 02', 'Ancon');
INSERT INTO `distrito` VALUES ('Lima 03', 'Ate');
INSERT INTO `distrito` VALUES ('Lima 04', 'Barranco');
INSERT INTO `distrito` VALUES ('Lima 05', 'Breña');
INSERT INTO `distrito` VALUES ('Lima 06', 'Carabayllo');
INSERT INTO `distrito` VALUES ('Lima 07', 'Comas');
INSERT INTO `distrito` VALUES ('Lima 08', 'Chaclacayo');
INSERT INTO `distrito` VALUES ('Lima 09', 'Chorrillos');
INSERT INTO `distrito` VALUES ('Lima 10', 'El Agustino');
INSERT INTO `distrito` VALUES ('Lima 11', 'Jesus Maria');
INSERT INTO `distrito` VALUES ('Lima 12', 'La Molina');
INSERT INTO `distrito` VALUES ('Lima 13', 'La Victoria');
INSERT INTO `distrito` VALUES ('Lima 14', 'Lince');
INSERT INTO `distrito` VALUES ('Lima 15', 'Lurigancho');
INSERT INTO `distrito` VALUES ('Lima 16', 'Lurin');
INSERT INTO `distrito` VALUES ('Lima 17', 'Magdalena');
INSERT INTO `distrito` VALUES ('Lima 18', 'Miraflores');
INSERT INTO `distrito` VALUES ('Lima 19', 'Pachacamac');
INSERT INTO `distrito` VALUES ('Lima 20', 'Pucusana');
INSERT INTO `distrito` VALUES ('Lima 21', 'Pueblo Libre');
INSERT INTO `distrito` VALUES ('Lima 22', 'Puente Piedra');
INSERT INTO `distrito` VALUES ('Lima 23', 'Punta Negra');
INSERT INTO `distrito` VALUES ('Lima 24', 'Punta Hermosa');
INSERT INTO `distrito` VALUES ('Lima 25', 'Rimac');
INSERT INTO `distrito` VALUES ('Lima 26', 'San Bartolo');
INSERT INTO `distrito` VALUES ('Lima 27', 'San Isidro');
INSERT INTO `distrito` VALUES ('Lima 28', 'Independencia');
INSERT INTO `distrito` VALUES ('Lima 29', 'San Juan De Miraflores');
INSERT INTO `distrito` VALUES ('Lima 30', 'San Luis');
INSERT INTO `distrito` VALUES ('Lima 31', 'San Martin De Porres');
INSERT INTO `distrito` VALUES ('Lima 32', 'San Miguel');
INSERT INTO `distrito` VALUES ('Lima 33', 'Santiago De Surco');
INSERT INTO `distrito` VALUES ('Lima 34', 'Surquillo');
INSERT INTO `distrito` VALUES ('Lima 35', 'Villa Maria Del Triunfo');
INSERT INTO `distrito` VALUES ('Lima 36', 'San Juan De Lurigancho');
INSERT INTO `distrito` VALUES ('Lima 37', 'Santa Maria Del Mar');
INSERT INTO `distrito` VALUES ('Lima 38', 'Santa Rosa');
INSERT INTO `distrito` VALUES ('Lima 39', 'Los Olivos');
INSERT INTO `distrito` VALUES ('Lima 40', 'Cieneguilla');
INSERT INTO `distrito` VALUES ('Lima 41', 'San Borja');
INSERT INTO `distrito` VALUES ('Lima 42', 'Villa El Salvador');
INSERT INTO `distrito` VALUES ('Lima 43', 'Santa Anita');
INSERT INTO `distrito` VALUES ('Callao 01', 'Callao');
INSERT INTO `distrito` VALUES ('Callao 02', 'Bellavista');
INSERT INTO `distrito` VALUES ('Callao 03', 'Carmen De La Legua');
INSERT INTO `distrito` VALUES ('Callao 04', 'La Perla');
INSERT INTO `distrito` VALUES ('Callao 05', 'La Punta');
INSERT INTO `distrito` VALUES ('Callao 06', 'Ventanilla');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `postulante`
-- 

CREATE TABLE `postulante` (
  `idpostulante` char(12) NOT NULL,
  `nombrePostulante` varchar(50) default NULL,
  `apellidoPaternoPostulante` varchar(50) default NULL,
  `apellidomaternoPostulante` varchar(50) default NULL,
  `direccionPostulante` varchar(150) default NULL,
  `dniPostulante` char(8) default NULL,
  `movilPostulante` varchar(10) default NULL,
  `fijoPostulante` varchar(10) default NULL,
  `mailPostulante` varchar(50) default NULL,
  `fecnacPostulante` varchar(50) default NULL,
  `fecinsPostulante` varchar(100) default NULL,
  `estadoCivilPostulante` varchar(20) default NULL,
  `sexoPostulante` varchar(20) default NULL,
  `estadoPostulante` varchar(20) default NULL,
  `idDistrito` varchar(20) default NULL,
  `idCarrera` int(11) default NULL,
  `login` varchar(20) default NULL,
  `voucherPostulante` varchar(50) default NULL,
  `condicionPostulante` varchar(20) default NULL,
  `observacionPostulante` varchar(20) NOT NULL,
  PRIMARY KEY  (`idpostulante`),
  UNIQUE KEY `XPKpostulante` (`idpostulante`),
  KEY `idDistrito` (`idDistrito`),
  KEY `idCarrera` (`idCarrera`),
  KEY `login` (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `postulante`
-- 

INSERT INTO `postulante` VALUES ('201310000006', 'maria laura ', 'tello', 'horna', 'calle alcanfores 1456 dpto 12', '4022356', '996521475', '4503265', 'maria_l@hotmail.es', '10/octubre/1984', 'Saturday, 09 de February de 2013 a horas: 11:19:41 am', 'conviviente', 'femenino', 'apto', 'Lima 13', 3, 'irubenv', '9846-23-56556', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000005', 'carmen esmeralda', 'toledo', 'valverde', 'jr. guadalupe huare 479 ', '10556498', '99256321', '2769045', 'carmen@gmail.com', '13/enero/1977', 'Saturday, 09 de February de 2013 a horas: 11:11:41 am', 'divorciado(a)', 'femenino', 'apto', 'Lima 29', 13, 'irubenv', '10-556569-32', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000004', 'pedro', 'bravo', 'pardo', 'calle los aires 25 interior 2', '45122653', '99562324', '2875632', 'pedro.bravo@gmail.com', '13/noviembre/1957', 'Saturday, 09 de February de 2013 a horas: 04:48:15 am', 'casado(a)', 'masculino', 'apto', 'Lima 35', 10, 'irubenv', '80-65212323', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000003', 'ignacio ruben', 'tacza', 'valverde', 'jr. guadalupe huare 481', '10559395', '992431427', '2769048', 'irubenv@hotmail.com', '17/junio/1976', 'Saturday, 09 de February de 2013 a horas: 04:44:58 am', 'soltero(a)', 'masculino', 'apto', 'Lima 29', 11, 'irubenv', '58959-6563', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000001', 'eloy humberto', 'cojal', 'torres', 'otro mz. d lote 4 barrio 4 sector 29', '02115369', '995236598', '2874596', 'ecojal@hotmail.com', '19/diciembre/1979', 'Friday, 08 de February de 2013 a horas: 09:48:27 am', 'soltero(a)', 'masculino', 'apto', 'Lima 42', 9, 'irubenv', '09-52525-1251', 'becado', '');
INSERT INTO `postulante` VALUES ('201310000002', 'sandra', 'delgado', 'portugal', 'av. maria reich mz n1 lote 6 urb pachacamac', '07852635', '993402486', '2769048', 'xandra_s15@hotmail.com', '2/septiembre/1985', 'Friday, 08 de February de 2013 a horas: 11:45:52 am', 'casado(a)', 'femenino', 'apto', 'Lima 01', 1, 'irubenv', '02-95632', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000007', 'carmen lizet', 'tacza', 'valverde', '   jr. los alamos 156', '45123669', '99523698', '4503019', 'car_lizet@hotmail.com', '16/septiembre/1990', 'Saturday, 09 de February de 2013 a horas: 11:53:10 am', 'casado(a)', 'femenino', 'apto', 'Lima 19', 1, 'irubenv', '1023565-45', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000008', 'maria luz', 'peña', 'guevara', 'calle  4 mz a lote 6', '5266352', '99632541', '2875693', 'maria@gmail.com', '5/mayo/1978', 'Saturday, 09 de February de 2013 a horas: 08:18:04 pm', 'separado(a)', 'femenino', 'apto', 'Lima 05', 14, 'irubenv', '99-99-999', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000009', 'cecilia', 'altamirano', 'guia', '  jr. los sauces 34', '56232625', '99526345', '2569352', 'cecil@yahoo.com', '18/octubre/1981', 'Saturday, 09 de February de 2013 a horas: 08:19:31 pm', 'soltero(a)', 'femenino', 'apto', 'Lima 42', 12, 'irubenv', '88-8888-999', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000010', 'jimmi christian', 'de la cruz', 'iñoñan', 'psj. los vicus 789', '85226342', '99562358', '2568965', 'jimmy@gmail.com', '23/noviembre/1973', 'Saturday, 09 de February de 2013 a horas: 08:20:58 pm', 'soltero(a)', 'masculino', 'apto', 'Lima 33', 1, 'irubenv', '99-88-656565', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000011', 'susana', 'livano', 'caceres', 'psj. los alcanfores 452', '42556365', '985623456', '2451236', 'susan@gmail.com', '6/enero/1983', 'Saturday, 09 de February de 2013 a horas: 08:23:29 pm', 'divorciado(a)', 'masculino', 'apto', 'Lima 42', 2, 'irubenv', '77-88-999999', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000012', 'manuel abelardo', 'alcantara', 'ramirez', 'av. los libertadores 450 dpto. 5', '10002536', '99526341', '4502635', 'manuel@gmail.com', '22/febrero/1979', 'Saturday, 09 de February de 2013 a horas: 08:24:56 pm', 'soltero(a)', 'masculino', 'apto', 'Lima 41', 1, 'irubenv', '66-559-5454', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000013', 'moises', 'cotacallapa', 'vilca', 'calle  3 mz z lote 24 urb los libertadores', '42336525', '994578548', '7601245', 'moises@hotmail.com', '18/marzo/1982', 'Saturday, 09 de February de 2013 a horas: 08:26:46 pm', 'casado(a)', 'masculino', 'apto', 'Lima 04', 4, 'irubenv', '55-562-45454', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000014', 'gladys esmeralda', 'valverde', 'ocaña', 'jr. guadalupe huare 479 pamplona baja', '09225154', '960215486', '2769532', 'gladys@yahoo.com', '17/julio/1956', 'Saturday, 09 de February de 2013 a horas: 08:29:13 pm', 'separado(a)', 'masculino', 'apto', 'Lima 29', 1, 'irubenv', '998-45454-45', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000015', 'ignacio felix', 'tacza', 'rojas', 'av. juan velzco alvarado mz a lote 37 a.a.h.h. 13 ', '10023568', '996325689', '4886232', 'ignacio@yahoo.com', '7/octubre/1954', 'Saturday, 09 de February de 2013 a horas: 08:30:59 pm', 'separado(a)', 'masculino', 'apto', 'Lima 29', 7, 'irubenv', '77-885-552', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000016', 'jose', 'perez', 'saenz', 'av. eucaliptus 456', '10225636', '996325689', '2874596', 'jose@mail.com', '1/diciembre/1980', 'Monday, 11 de February de 2013 a horas: 09:31:51 pm', 'soltero(a)', 'masculino', 'apto', 'Lima 19', 9, 'irubenv', '88-55-223', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000017', 'juana', 'lopez', 'ariana', 'av. carlos izaguirre 4512', '45125689', '996523323', '5623265', 'juanal@yahoo.com', '1/enero/1985', 'Monday, 11 de February de 2013 a horas: 09:33:19 pm', 'soltero(a)', 'femenino', 'apto', 'Lima 31', 8, 'irubenv', '2332242423234', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000018', 'liz', 'delgado', 'portugal', 'calle 5 sector 4 barrio 3 mz a lt 5', '10225632', '9956565111', '2875632', 'lizp@hotmail.com', '9/abril/1990', 'Monday, 11 de February de 2013 a horas: 09:35:00 pm', 'divorciado(a)', 'femenino', 'apto', 'Lima 42', 1, 'irubenv', '454541112', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000019', 'lina', 'lozada', 'perez', 'psj. los aviadores 45', '45112545', '99562365', '256985', 'lina_98@hotmail.com', '19/noviembre/1983', 'Monday, 11 de February de 2013 a horas: 09:36:51 pm', 'casado(a)', 'femenino', 'apto', 'Lima 33', 5, 'irubenv', '454545321', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000020', 'jesus', 'altamirano', 'velasquez', 'psj. los tirados 2323', '45125632', '99653214', '2589621', 'jal.ve12@yahoo.com', '18/septiembre/1982', 'Monday, 11 de February de 2013 a horas: 09:40:11 pm', 'casado(a)', 'masculino', 'apto', 'Lima 11', 6, 'irubenv', '78654454', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000021', 'lucrecia jacinta', 'vera', 'lucana', 'jr. los amigos 45', '12457845', '99852454', '2874521', 'lucre@yahoo.es', '19/abril/1990', 'Monday, 11 de February de 2013 a horas: 09:42:06 pm', 'soltero(a)', 'femenino', 'apto', 'Lima 28', 6, 'irubenv', '45645454', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000022', 'jose', 'puma', 'olaechea', 'av. los incas 412', '40115263', '9924314259', '2896532', 'jose@hotmail.com', '19/noviembre/1983', 'Saturday, 16 de February de 2013 a horas: 12:56:44 am', 'casado(a)', 'masculino', 'apto', 'Lima 05', 5, 'irubenv', '1502-9636-5', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000023', 'cuasimodo', 'huaman', 'chingay', 'av. los ficus 1410', '10559396', '99653214', '4521269', 'cuasi@yahoo.com', '10/octubre/1980', 'Monday, 18 de February de 2013 a horas: 12:44:05 am', 'soltero(a)', 'masculino', 'apto', 'Lima 26', 1, 'irubenv', '88-99-1232', 'becado', '');
INSERT INTO `postulante` VALUES ('201310000024', 'marita', 'alcazar', 'becerra', 'av. gran chimu 467', '78451125', '993402486', '2568965', 'marita@yahoo.com', '1/septiembre/1998', 'Monday, 18 de February de 2013 a horas: 01:42:03 pm', 'conviviente', 'femenino', 'apto', 'Lima 09', 1, 'irubenv', '99-63-5665', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000025', 'sandra', 'alvarado', 'jimenez', 'psj. los alacnfores 45', '12556936', '99563245', '4502636', 'sandraj@yahoo.com', '17/octubre/1983', 'Monday, 18 de February de 2013 a horas: 03:13:24 pm', 'casado(a)', 'femenino', 'apto', 'Lima 13', 2, 'irubenv', '996-666-6', 'becado', '');
INSERT INTO `postulante` VALUES ('201310000026', 'jacinto', 'perez', 'huaman', 'calle 25 sector 6 barrio 3 lote 56', '45223659', '99653247', '2875693', 'jacinto@yahoo.es', '20/diciembre/1979', 'Monday, 18 de February de 2013 a horas: 03:45:30 pm', 'conviviente', 'masculino', 'apto', 'Lima 42', 2, 'irubenv', '99-512-2512', 'becado', '');
INSERT INTO `postulante` VALUES ('201310000027', 'kirena', 'garcia', 'kewa', 'av. alcanfores 1456 dpto 12', '1055296', '99562358', '2875632', 'kgarcia@hotmail.com', '1/enero/1998', 'Thursday, 21 de February de 2013 a horas: 01:18:10 am', 'soltero(a)', 'femenino', 'apto', 'Lima 12', 1, 'irubenv', '9963-5511', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000028', 'jeronimo', 'garces', 'valdez', 'calle 4 lote 5 mz 3 urb los alamos', '45544145', '996525356', '2865232', 'je_garces@yahoo.es', '1/septiembre/1989', 'Thursday, 21 de February de 2013 a horas: 01:21:35 am', 'soltero(a)', 'masculino', 'apto', 'Lima 02', 1, 'irubenv', '99-6653-6', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000029', 'sofia maria', 'alamo', 'justo', 'psj. maria magdalena 234', '10556363', '992563256', '2875964', 'so_ma@hotmail.com', '1/enero/1998', 'Thursday, 21 de February de 2013 a horas: 01:24:26 am', 'soltero(a)', 'femenino', 'apto', 'Lima 12', 1, 'irubenv', '99-88-7774', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000030', 'maricarmen', 'felix', 'soriano', 'calle 25 los constructores', '40225969', '99874512', '2453698', 'maricarmen@yahoo.es', '12/julio/1992', 'Thursday, 21 de February de 2013 a horas: 01:29:20 am', 'soltero(a)', 'femenino', 'apto', 'Lima 12', 1, 'irubenv', '99-45-454545', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000031', 'anita fernanda', 'rojas', 'paz', 'av. los aviadores 567', '45112236', '99561248', '4523698', 'anifer@yahoo.com', '1/octubre/1982', 'Thursday, 21 de February de 2013 a horas: 01:39:03 am', 'casado(a)', 'femenino', 'apto', 'Lima 33', 1, 'irubenv', '1066-99-52', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000032', 'pedro', 'martin', 'suarez', 'av. aviacion 456', '10559656', '99854521', '6352145', 'pedro@latinmail.com', '1/enero/1998', 'Thursday, 21 de February de 2013 a horas: 01:50:28 am', 'soltero(a)', 'masculino', 'apto', 'Lima 41', 1, 'irubenv', '10-55-996', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000034', 'jimmi jesus', 'sandoval', 'caceres', 'av. los leones 456', '10023568', '995236598', '4886232', 'jjesus@hotmail.com', '1/diciembre/1982', 'Thursday, 21 de February de 2013 a horas: 01:36:15 pm', 'soltero(a)', 'masculino', 'apto', 'Lima 13', 1, 'irubenv', '100-99-86', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000033', 'sandra maria', 'salazar', 'vesti', 'av. neopomuceno vargas 2345', '10556633', '995302352', '42562358', 's_mari@yahoo.es', '6/mayo/1988', 'Thursday, 21 de February de 2013 a horas: 01:28:54 pm', 'soltero(a)', 'femenino', 'apto', 'Lima 29', 1, 'irubenv', '100-553-2', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000035', 'telesforo', 'paz', 'rojas', 'jr. francisco vallejos 456', '10023536', '99653214', '2684512', 'tele@yahoo.es', '5/enero/1944', 'Saturday, 23 de February de 2013 a horas: 03:25:48 am', 'soltero(a)', 'masculino', 'apto', 'Lima 29', 1, 'irubenv', '99-232-4', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000036', 'jesus alberto', 'casas', 'marin', 'jr. los alcanfores 567', '10002536', '993402486', '2769048', 'jalberto@yahoo.es', '16/octubre/1985', 'Sunday, 24 de February de 2013 a horas: 01:47:41 am', 'soltero(a)', 'masculino', 'apto', 'Lima 34', 5, 'irubenv', '100-99-885', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000037', 'pedro luis', 'gallo', 'urrutia', 'psj. los pinos 2050', '42051212', '993402486', '2569352', 'pluis@yahoo.es', '1/enero/1998', 'Monday, 25 de February de 2013 a horas: 11:27:42 pm', 'soltero(a)', 'masculino', 'apto', 'Lima 42', 1, 'irubenv', '99-45-5356', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000038', 'marita liz', 'vargas', 'rosas', 'av. los piuranos 1235', '10559636', '99526340', '2875964', 'ma_liz@yahoo.es', '1/enero/1998', 'Monday, 25 de February de 2013 a horas: 11:34:39 pm', 'conviviente', 'femenino', 'apto', 'Callao 06', 5, 'irubenv', '99-556-25', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000039', 'luz sandra', 'binuta', 'solorzano', 'psj. alcanfores 4578', '50223635', '99245632', '2896352', 'l_ma@yahoo.com', '1/enero/1998', 'Monday, 25 de February de 2013 a horas: 11:36:04 pm', 'separado(a)', 'femenino', 'apto', 'Lima 10', 14, 'irubenv', '99-85-896', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000040', 'eloy manuel', 'perez', 'vela', 'calle 212 mz n lote 56', '21445698', '995236598', '2875693', 'eloy@hayoo.es', '1/diciembre/1998', 'Monday, 25 de February de 2013 a horas: 11:37:14 pm', 'divorciado(a)', 'masculino', 'apto', 'Callao 05', 1, 'irubenv', '99-66-5521', 'ordinario', '');
INSERT INTO `postulante` VALUES ('201310000041', 'pedro miguel', 'alcazar', 'benites', 'av. wiesse 4562', '45112326', '99562358', '4503265', 'pmiguel@yahoo.es', '18/septiembre/1982', 'Monday, 25 de February de 2013 a horas: 11:38:24 pm', 'soltero(a)', 'masculino', 'apto', 'Lima 03', 9, 'irubenv', '99-565-45', 'ordinario', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `privilegios`
-- 

CREATE TABLE `privilegios` (
  `idPrivilegio` int(11) NOT NULL,
  `rutaPrivilegio` varchar(70) default NULL,
  `labelPrivilegio` varchar(70) default NULL,
  `categoriaPrivilegio` varchar(50) default NULL,
  `orden` int(11) NOT NULL,
  `nota` text NOT NULL,
  `imagen` varchar(80) NOT NULL,
  PRIMARY KEY  (`idPrivilegio`),
  UNIQUE KEY `XPKprivilegios` (`idPrivilegio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `privilegios`
-- 

INSERT INTO `privilegios` VALUES (1, '../admision/indexRegPostulante.php', 'Registrar Postulante', 'admision', 1, 'Registra datos de postulante a admision', '../img/registrarpostulante.png');
INSERT INTO `privilegios` VALUES (2, '../admision/indexEditPostulante.php', 'Editar Postulante', 'admision', 2, 'Permite cambiar los datos ingresados de un postulante e imprimir nuevamente la ficha de inscripcion', '../img/editar.png');
INSERT INTO `privilegios` VALUES (3, '../admision/indexInsertResultado.php', 'Registrar resultados', 'admision', 8, 'Registra los resultados por carrera', '../img/registrarResultado.png');
INSERT INTO `privilegios` VALUES (4, '../admision/indexReporteResultado.php', 'Reportar resultados', 'admision', 12, 'Genera el reporte final de ingresantes', '../img/reportarResultado.png');
INSERT INTO `privilegios` VALUES (5, '../admision/indexReporteInscripciones.php', 'Reporte Inscripciones', 'admision', 3, 'Genera un informe detallado de el avance por carrera de la cantidad de postulantes inscritos', '../img/reporteInscripcion.png');
INSERT INTO `privilegios` VALUES (6, '../user/indexRegUser.php', 'Registrar Usuario', 'usuario', 1, 'permite registrar los datos de un nuevo usuario del sistema y asignarle sus privilegios de acceso', '../img/registrarUser.png');
INSERT INTO `privilegios` VALUES (7, '../user/indexEditUser.php', 'Editar Usuario', 'usuario', 2, 'permite cambiar los datos y privilegios de algún usuario del sistema', '../img/editarUser.png');
INSERT INTO `privilegios` VALUES (9, '../user/indexCambiarClave.php', 'Cambiar Clave', 'seguridad', 2, 'permite al usuario cambiar su clave', '../img/changepassword.png');
INSERT INTO `privilegios` VALUES (8, '../seguridad/indexDesactivarUsuario.php', 'Desactivar Usuario', 'seguridad', 1, 'desactiva usuarios por seguridad', '../img/desactivarUser.png');
INSERT INTO `privilegios` VALUES (10, '../admision/indexVerEstadisticas.php', 'Ver Estadisticas', 'admision', 4, 'permite visualizar  graficos estadisticos de admision', '../img/estadistica.png');
INSERT INTO `privilegios` VALUES (11, '../admision/indexInsertResultadoTradicional.php', 'Registrar Resultados [Tradicional]', 'admision', 9, 'registra resultados codigo a codigo de cada postulante', '../img/registrarResultadoTradicional.png');
INSERT INTO `privilegios` VALUES (12, '../admision/indexGenerarAulas.php', 'Distribuir Postulantes en Aulas', 'admision', 5, 'Genera la distribucion aleatoria de postulantes en aulas', '../img/distribuirPostulantes.png');
INSERT INTO `privilegios` VALUES (14, '../admision/indexVerDistribucionAulas.php', 'Reporte de Distribucion de aulas ', 'admision', 7, 'permite visualizar e imprimir la distribucion de alumnos en aulas', '../img/ReporteDistribucionAulas.png');
INSERT INTO `privilegios` VALUES (13, '../admision/IndexInsertSedes.php', 'Administrar Sedes de Examen', 'admision', 6, 'permite gestionar las sedes en donde se realizará el examen de admision', '../img/VerSedes.png');
INSERT INTO `privilegios` VALUES (15, '../admision/indexCalificarPostulantes.php', 'Calificar Examen de Admison', 'admision', 10, 'Permite calificar el examen de admision y obtiene el estado del postulante, si ingreso o no', '../img/calificarExamen.png');
INSERT INTO `privilegios` VALUES (16, '../admision/indexControlCalidad.php	', 'Realizar Control de Calidad', 'admision', 11, 'permite cotejar los puntajes ingresados, colocando un codigo de postulante valido', '../img/controlCalidad.png');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `puntaje`
-- 

CREATE TABLE `puntaje` (
  `idpostulante` char(12) NOT NULL,
  `estadoIngresoPostulante` varchar(15) default NULL,
  `puntajePostulante` float default NULL,
  `idSede` int(11) default NULL,
  `aulaPostulante` varchar(15) default NULL,
  `observacionPostulante` varchar(50) NOT NULL,
  PRIMARY KEY  (`idpostulante`),
  UNIQUE KEY `XPKpuntaje` (`idpostulante`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `puntaje`
-- 

INSERT INTO `puntaje` VALUES ('201310000001', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000002', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000003', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000004', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000005', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000006', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000007', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000008', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000009', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000010', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000011', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000012', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000013', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000014', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000015', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000016', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000017', 'apto', 0, 1, '2', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000018', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000019', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000020', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000021', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000022', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000023', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000027', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000028', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000029', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000030', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000031', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000032', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000033', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000034', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000035', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000036', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000024', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000040', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000041', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000025', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000026', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000037', 'apto', 0, 1, '1', 'ingreso');
INSERT INTO `puntaje` VALUES ('201310000038', 'apto', 0, 1, '1', 'no ingreso');
INSERT INTO `puntaje` VALUES ('201310000039', 'apto', 0, 1, '1', 'ingreso');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `sede`
-- 

CREATE TABLE `sede` (
  `idSede` int(11) NOT NULL auto_increment,
  `nombreSede` varchar(70) NOT NULL,
  `direccionSede` text,
  `cantidadAulasSede` int(11) default NULL,
  `cantidadPostulantesAulaSede` int(11) default NULL,
  `estadoSede` int(11) default NULL,
  PRIMARY KEY  (`idSede`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `sede`
-- 

INSERT INTO `sede` VALUES (1, 'istp julio cesar tello', 'av. bolivar 100 villa el salvador', 20, 40, 1);
INSERT INTO `sede` VALUES (2, 'i.e. 6046 ''los libertadores lima''', 'av. alamos 2005 villa el salvador', 2, 2, 0);
INSERT INTO `sede` VALUES (3, 'i.e. 6423 ''republica de francia''', 'av. micaela bastidas 100, ruta b ves', 2, 3, 0);
INSERT INTO `sede` VALUES (4, 'i.e. 3562 inca pachacutec', 'av. los alamos 1235 ves', 4, 2, 0);
INSERT INTO `sede` VALUES (5, 'los  pericos', 'av brasil 4512 villa maria', 5, 2, 0);
INSERT INTO `sede` VALUES (6, 'i.e. 6232 virgen del buen paso', 'av. pasos perdidos 4512', 4, 5, 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `seguridad`
-- 

CREATE TABLE `seguridad` (
  `numeroSec` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `seguridad`
-- 

INSERT INTO `seguridad` VALUES ('634441041');
INSERT INTO `seguridad` VALUES ('101659057');
INSERT INTO `seguridad` VALUES ('217156990');
INSERT INTO `seguridad` VALUES ('629914620');
INSERT INTO `seguridad` VALUES ('998595301');
INSERT INTO `seguridad` VALUES ('44707780');
INSERT INTO `seguridad` VALUES ('286129254');
INSERT INTO `seguridad` VALUES ('644421428');
INSERT INTO `seguridad` VALUES ('542651164');
INSERT INTO `seguridad` VALUES ('308353238');
INSERT INTO `seguridad` VALUES ('312360233');
INSERT INTO `seguridad` VALUES ('502766719');
INSERT INTO `seguridad` VALUES ('430084275');
INSERT INTO `seguridad` VALUES ('563687890');
INSERT INTO `seguridad` VALUES ('1172380176');
INSERT INTO `seguridad` VALUES ('310282532');
INSERT INTO `seguridad` VALUES ('126146252');
INSERT INTO `seguridad` VALUES ('999782559');
INSERT INTO `seguridad` VALUES ('484698138');
INSERT INTO `seguridad` VALUES ('860799181');
INSERT INTO `seguridad` VALUES ('1023416411');
INSERT INTO `seguridad` VALUES ('805183568');
INSERT INTO `seguridad` VALUES ('135681417');
INSERT INTO `seguridad` VALUES ('136015333');
INSERT INTO `seguridad` VALUES ('656665025');
INSERT INTO `seguridad` VALUES ('31388230');
INSERT INTO `seguridad` VALUES ('877940216');
INSERT INTO `seguridad` VALUES ('704044036');
INSERT INTO `seguridad` VALUES ('887920603');
INSERT INTO `seguridad` VALUES ('665050034');
INSERT INTO `seguridad` VALUES ('60327642');
INSERT INTO `seguridad` VALUES ('765002309');
INSERT INTO `seguridad` VALUES ('1214305221');
INSERT INTO `seguridad` VALUES ('811194061');
INSERT INTO `seguridad` VALUES ('584168089');
INSERT INTO `seguridad` VALUES ('585244042');
INSERT INTO `seguridad` VALUES ('156681041');
INSERT INTO `seguridad` VALUES ('990618412');
INSERT INTO `seguridad` VALUES ('613404315');
INSERT INTO `seguridad` VALUES ('205766735');
INSERT INTO `seguridad` VALUES ('509148231');
INSERT INTO `seguridad` VALUES ('581459657');
INSERT INTO `seguridad` VALUES ('769973951');
INSERT INTO `seguridad` VALUES ('935188308');
INSERT INTO `seguridad` VALUES ('438320876');
INSERT INTO `seguridad` VALUES ('1010616287');
INSERT INTO `seguridad` VALUES ('912556205');
INSERT INTO `seguridad` VALUES ('462919376');
INSERT INTO `seguridad` VALUES ('156384226');
INSERT INTO `seguridad` VALUES ('1110234645');
INSERT INTO `seguridad` VALUES ('1038145830');
INSERT INTO `seguridad` VALUES ('63592601');
INSERT INTO `seguridad` VALUES ('664975830');
INSERT INTO `seguridad` VALUES ('1002045769');
INSERT INTO `seguridad` VALUES ('263311641');
INSERT INTO `seguridad` VALUES ('873747712');
INSERT INTO `seguridad` VALUES ('455981338');
INSERT INTO `seguridad` VALUES ('601902754');
INSERT INTO `seguridad` VALUES ('281825444');
INSERT INTO `seguridad` VALUES ('555228678');
INSERT INTO `seguridad` VALUES ('551258784');
INSERT INTO `seguridad` VALUES ('1087342829');
INSERT INTO `seguridad` VALUES ('580086890');
INSERT INTO `seguridad` VALUES ('993438149');
INSERT INTO `seguridad` VALUES ('1171230020');
INSERT INTO `seguridad` VALUES ('84926141');
INSERT INTO `seguridad` VALUES ('1033730714');
INSERT INTO `seguridad` VALUES ('563613687');
INSERT INTO `seguridad` VALUES ('1123294482');
INSERT INTO `seguridad` VALUES ('638039917');
INSERT INTO `seguridad` VALUES ('3636077');
INSERT INTO `seguridad` VALUES ('512413190');
INSERT INTO `seguridad` VALUES ('481433179');
INSERT INTO `seguridad` VALUES ('164175606');
INSERT INTO `seguridad` VALUES ('705750719');
INSERT INTO `seguridad` VALUES ('222573854');
INSERT INTO `seguridad` VALUES ('1182360563');
INSERT INTO `seguridad` VALUES ('1149451258');
INSERT INTO `seguridad` VALUES ('582721119');
INSERT INTO `seguridad` VALUES ('565542981');
INSERT INTO `seguridad` VALUES ('960825659');
INSERT INTO `seguridad` VALUES ('614331860');
INSERT INTO `seguridad` VALUES ('591811062');
INSERT INTO `seguridad` VALUES ('701521113');
INSERT INTO `seguridad` VALUES ('407415069');
INSERT INTO `seguridad` VALUES ('548290640');
INSERT INTO `seguridad` VALUES ('1067753074');
INSERT INTO `seguridad` VALUES ('377844927');
INSERT INTO `seguridad` VALUES ('953665010');
INSERT INTO `seguridad` VALUES ('308724256');
INSERT INTO `seguridad` VALUES ('808745342');
INSERT INTO `seguridad` VALUES ('155567987');
INSERT INTO `seguridad` VALUES ('527365219');
INSERT INTO `seguridad` VALUES ('51311902');
INSERT INTO `seguridad` VALUES ('903058141');
INSERT INTO `seguridad` VALUES ('643382577');
INSERT INTO `seguridad` VALUES ('382556857');
INSERT INTO `seguridad` VALUES ('282048055');
INSERT INTO `seguridad` VALUES ('161578480');
INSERT INTO `seguridad` VALUES ('840578694');
INSERT INTO `seguridad` VALUES ('1144071496');
INSERT INTO `seguridad` VALUES ('899681877');
INSERT INTO `seguridad` VALUES ('775168204');
INSERT INTO `seguridad` VALUES ('665532357');
INSERT INTO `seguridad` VALUES ('17920273');
INSERT INTO `seguridad` VALUES ('378735370');
INSERT INTO `seguridad` VALUES ('1012471378');
INSERT INTO `seguridad` VALUES ('940234155');
INSERT INTO `seguridad` VALUES ('468892767');
INSERT INTO `seguridad` VALUES ('847665140');
INSERT INTO `seguridad` VALUES ('931255517');
INSERT INTO `seguridad` VALUES ('221609207');
INSERT INTO `seguridad` VALUES ('51423207');
INSERT INTO `seguridad` VALUES ('706233042');
INSERT INTO `seguridad` VALUES ('554412438');
INSERT INTO `seguridad` VALUES ('1184141450');
INSERT INTO `seguridad` VALUES ('431753856');
INSERT INTO `seguridad` VALUES ('465776215');
INSERT INTO `seguridad` VALUES ('180166486');
INSERT INTO `seguridad` VALUES ('796093625');
INSERT INTO `seguridad` VALUES ('134976482');
INSERT INTO `seguridad` VALUES ('467445797');
INSERT INTO `seguridad` VALUES ('280007455');
INSERT INTO `seguridad` VALUES ('528033052');
INSERT INTO `seguridad` VALUES ('417358354');
INSERT INTO `seguridad` VALUES ('796279134');
INSERT INTO `seguridad` VALUES ('212185348');
INSERT INTO `seguridad` VALUES ('505920373');
INSERT INTO `seguridad` VALUES ('210627072');
INSERT INTO `seguridad` VALUES ('829967577');
INSERT INTO `seguridad` VALUES ('616891885');
INSERT INTO `seguridad` VALUES ('927842150');
INSERT INTO `seguridad` VALUES ('989319848');
INSERT INTO `seguridad` VALUES ('72942257');
INSERT INTO `seguridad` VALUES ('974887245');
INSERT INTO `seguridad` VALUES ('874304239');
INSERT INTO `seguridad` VALUES ('833529351');
INSERT INTO `seguridad` VALUES ('397249173');
INSERT INTO `seguridad` VALUES ('693952343');
INSERT INTO `seguridad` VALUES ('418248797');
INSERT INTO `seguridad` VALUES ('437430433');
INSERT INTO `seguridad` VALUES ('153712896');
INSERT INTO `seguridad` VALUES ('1152196792');
INSERT INTO `seguridad` VALUES ('995961072');
INSERT INTO `seguridad` VALUES ('891816293');
INSERT INTO `seguridad` VALUES ('1070684117');
INSERT INTO `seguridad` VALUES ('868293746');
INSERT INTO `seguridad` VALUES ('520315875');
INSERT INTO `seguridad` VALUES ('1095876245');
INSERT INTO `seguridad` VALUES ('897789685');
INSERT INTO `seguridad` VALUES ('639004564');
INSERT INTO `seguridad` VALUES ('971028656');
INSERT INTO `seguridad` VALUES ('1213563185');
INSERT INTO `seguridad` VALUES ('276408580');
INSERT INTO `seguridad` VALUES ('2782735');
INSERT INTO `seguridad` VALUES ('400402827');
INSERT INTO `seguridad` VALUES ('790750964');
INSERT INTO `seguridad` VALUES ('1072316596');
INSERT INTO `seguridad` VALUES ('818280507');
INSERT INTO `seguridad` VALUES ('615741729');
INSERT INTO `seguridad` VALUES ('935448021');
INSERT INTO `seguridad` VALUES ('507627056');
INSERT INTO `seguridad` VALUES ('1134573432');
INSERT INTO `seguridad` VALUES ('955631405');
INSERT INTO `seguridad` VALUES ('883987811');
INSERT INTO `seguridad` VALUES ('730275015');
INSERT INTO `seguridad` VALUES ('217268296');
INSERT INTO `seguridad` VALUES ('433089521');
INSERT INTO `seguridad` VALUES ('535379210');
INSERT INTO `seguridad` VALUES ('800174824');
INSERT INTO `seguridad` VALUES ('617819430');
INSERT INTO `seguridad` VALUES ('98134385');
INSERT INTO `seguridad` VALUES ('1181692730');
INSERT INTO `seguridad` VALUES ('1114649761');
INSERT INTO `seguridad` VALUES ('930513480');
INSERT INTO `seguridad` VALUES ('1128525837');
INSERT INTO `seguridad` VALUES ('1113276994');
INSERT INTO `seguridad` VALUES ('116017458');
INSERT INTO `seguridad` VALUES ('357513135');
INSERT INTO `seguridad` VALUES ('446891394');
INSERT INTO `seguridad` VALUES ('444108759');
INSERT INTO `seguridad` VALUES ('501727869');
INSERT INTO `seguridad` VALUES ('1140361315');
INSERT INTO `seguridad` VALUES ('446742987');
INSERT INTO `seguridad` VALUES ('1111792921');
INSERT INTO `seguridad` VALUES ('714098626');
INSERT INTO `seguridad` VALUES ('49716524');
INSERT INTO `seguridad` VALUES ('482212317');
INSERT INTO `seguridad` VALUES ('798802057');
INSERT INTO `seguridad` VALUES ('1019075500');
INSERT INTO `seguridad` VALUES ('542873775');
INSERT INTO `seguridad` VALUES ('515307131');
INSERT INTO `seguridad` VALUES ('226988970');
INSERT INTO `seguridad` VALUES ('1074728214');
INSERT INTO `seguridad` VALUES ('606243666');
INSERT INTO `seguridad` VALUES ('434647797');
INSERT INTO `seguridad` VALUES ('211332006');
INSERT INTO `seguridad` VALUES ('393910010');
INSERT INTO `seguridad` VALUES ('519944857');
INSERT INTO `seguridad` VALUES ('941458514');
INSERT INTO `seguridad` VALUES ('820840532');
INSERT INTO `seguridad` VALUES ('951772817');
INSERT INTO `seguridad` VALUES ('7494665');
INSERT INTO `seguridad` VALUES ('173154244');
INSERT INTO `seguridad` VALUES ('1038553950');
INSERT INTO `seguridad` VALUES ('139540005');
INSERT INTO `seguridad` VALUES ('907881377');
INSERT INTO `seguridad` VALUES ('219308895');
INSERT INTO `seguridad` VALUES ('66634949');
INSERT INTO `seguridad` VALUES ('958599550');
INSERT INTO `seguridad` VALUES ('903577567');
INSERT INTO `seguridad` VALUES ('130116145');
INSERT INTO `seguridad` VALUES ('146626450');
INSERT INTO `seguridad` VALUES ('939455017');
INSERT INTO `seguridad` VALUES ('716436040');
INSERT INTO `seguridad` VALUES ('779397811');
INSERT INTO `seguridad` VALUES ('480691143');
INSERT INTO `seguridad` VALUES ('1115911222');
INSERT INTO `seguridad` VALUES ('726082510');
INSERT INTO `seguridad` VALUES ('651990197');
INSERT INTO `seguridad` VALUES ('460433555');
INSERT INTO `seguridad` VALUES ('1595477');
INSERT INTO `seguridad` VALUES ('1147002539');
INSERT INTO `seguridad` VALUES ('49864931');
INSERT INTO `seguridad` VALUES ('878867762');
INSERT INTO `seguridad` VALUES ('58212839');
INSERT INTO `seguridad` VALUES ('857422916');
INSERT INTO `seguridad` VALUES ('1102035146');
INSERT INTO `seguridad` VALUES ('543318997');
INSERT INTO `seguridad` VALUES ('943758826');
INSERT INTO `seguridad` VALUES ('156569735');
INSERT INTO `seguridad` VALUES ('1187443511');
INSERT INTO `seguridad` VALUES ('1076620406');
INSERT INTO `seguridad` VALUES ('907473257');
INSERT INTO `seguridad` VALUES ('535750228');
INSERT INTO `seguridad` VALUES ('954592555');
INSERT INTO `seguridad` VALUES ('694768583');
INSERT INTO `seguridad` VALUES ('1001118224');
INSERT INTO `seguridad` VALUES ('1093019406');
INSERT INTO `seguridad` VALUES ('681374830');
INSERT INTO `seguridad` VALUES ('775947342');
INSERT INTO `seguridad` VALUES ('503508756');
INSERT INTO `seguridad` VALUES ('422663913');
INSERT INTO `seguridad` VALUES ('329798084');
INSERT INTO `seguridad` VALUES ('826257396');
INSERT INTO `seguridad` VALUES ('288466668');
INSERT INTO `seguridad` VALUES ('158350622');
INSERT INTO `seguridad` VALUES ('469746109');
INSERT INTO `seguridad` VALUES ('959675503');
INSERT INTO `seguridad` VALUES ('621937731');
INSERT INTO `seguridad` VALUES ('110118270');
INSERT INTO `seguridad` VALUES ('1063226653');
INSERT INTO `seguridad` VALUES ('805628790');
INSERT INTO `seguridad` VALUES ('699406309');
INSERT INTO `seguridad` VALUES ('499835676');
INSERT INTO `seguridad` VALUES ('839131724');
INSERT INTO `seguridad` VALUES ('1026903981');
INSERT INTO `seguridad` VALUES ('883282877');
INSERT INTO `seguridad` VALUES ('1166332581');
INSERT INTO `seguridad` VALUES ('314215324');
INSERT INTO `seguridad` VALUES ('419473157');
INSERT INTO `seguridad` VALUES ('703858527');
INSERT INTO `seguridad` VALUES ('1137096355');
INSERT INTO `seguridad` VALUES ('546769465');
INSERT INTO `seguridad` VALUES ('682302375');
INSERT INTO `seguridad` VALUES ('920941214');
INSERT INTO `seguridad` VALUES ('1034955074');
INSERT INTO `seguridad` VALUES ('830041780');
INSERT INTO `seguridad` VALUES ('890925850');
INSERT INTO `seguridad` VALUES ('213780726');
INSERT INTO `seguridad` VALUES ('926766198');
INSERT INTO `seguridad` VALUES ('55207592');
INSERT INTO `seguridad` VALUES ('92940132');
INSERT INTO `seguridad` VALUES ('235596589');
INSERT INTO `seguridad` VALUES ('1161991670');
INSERT INTO `seguridad` VALUES ('695881638');
INSERT INTO `seguridad` VALUES ('248619325');
INSERT INTO `seguridad` VALUES ('108114772');
INSERT INTO `seguridad` VALUES ('958822161');
INSERT INTO `seguridad` VALUES ('37361622');
INSERT INTO `seguridad` VALUES ('446260664');
INSERT INTO `seguridad` VALUES ('1154200290');
INSERT INTO `seguridad` VALUES ('1100365564');
INSERT INTO `seguridad` VALUES ('1064191300');
INSERT INTO `seguridad` VALUES ('597487639');
INSERT INTO `seguridad` VALUES ('389457793');
INSERT INTO `seguridad` VALUES ('1098436270');
INSERT INTO `seguridad` VALUES ('18068681');
INSERT INTO `seguridad` VALUES ('926803300');
INSERT INTO `seguridad` VALUES ('509927369');
INSERT INTO `seguridad` VALUES ('419436055');
INSERT INTO `seguridad` VALUES ('1174717590');
INSERT INTO `seguridad` VALUES ('800100620');
INSERT INTO `seguridad` VALUES ('343785466');
INSERT INTO `seguridad` VALUES ('812195810');
INSERT INTO `seguridad` VALUES ('28494289');
INSERT INTO `seguridad` VALUES ('1132384426');
INSERT INTO `seguridad` VALUES ('774018048');
INSERT INTO `seguridad` VALUES ('673138228');
INSERT INTO `seguridad` VALUES ('751979573');
INSERT INTO `seguridad` VALUES ('740440911');
INSERT INTO `seguridad` VALUES ('71606592');
INSERT INTO `seguridad` VALUES ('1082593797');
INSERT INTO `seguridad` VALUES ('475793704');
INSERT INTO `seguridad` VALUES ('886251022');
INSERT INTO `seguridad` VALUES ('802029914');
INSERT INTO `seguridad` VALUES ('174155993');
INSERT INTO `seguridad` VALUES ('482880149');
INSERT INTO `seguridad` VALUES ('833603554');
INSERT INTO `seguridad` VALUES ('671283138');
INSERT INTO `seguridad` VALUES ('1195643011');
INSERT INTO `seguridad` VALUES ('355695147');
INSERT INTO `seguridad` VALUES ('419695768');
INSERT INTO `seguridad` VALUES ('310208328');
INSERT INTO `seguridad` VALUES ('210664174');
INSERT INTO `seguridad` VALUES ('359108513');
INSERT INTO `seguridad` VALUES ('867737219');
INSERT INTO `seguridad` VALUES ('288689279');
INSERT INTO `seguridad` VALUES ('1030280246');
INSERT INTO `seguridad` VALUES ('980452516');
INSERT INTO `seguridad` VALUES ('586431300');
INSERT INTO `seguridad` VALUES ('893968198');
INSERT INTO `seguridad` VALUES ('507404446');
INSERT INTO `seguridad` VALUES ('759066019');
INSERT INTO `seguridad` VALUES ('772014550');
INSERT INTO `seguridad` VALUES ('568733737');
INSERT INTO `seguridad` VALUES ('828297995');
INSERT INTO `seguridad` VALUES ('1137764188');
INSERT INTO `seguridad` VALUES ('581570963');
INSERT INTO `seguridad` VALUES ('573148852');
INSERT INTO `seguridad` VALUES ('471972217');
INSERT INTO `seguridad` VALUES ('670429796');
INSERT INTO `seguridad` VALUES ('579604567');
INSERT INTO `seguridad` VALUES ('1213637388');
INSERT INTO `seguridad` VALUES ('550442544');
INSERT INTO `seguridad` VALUES ('504473403');
INSERT INTO `seguridad` VALUES ('337849176');
INSERT INTO `seguridad` VALUES ('773016299');
INSERT INTO `seguridad` VALUES ('1083632648');
INSERT INTO `seguridad` VALUES ('665012932');
INSERT INTO `seguridad` VALUES ('531186705');
INSERT INTO `seguridad` VALUES ('514156975');
INSERT INTO `seguridad` VALUES ('234594841');
INSERT INTO `seguridad` VALUES ('593035422');
INSERT INTO `seguridad` VALUES ('13059936');
INSERT INTO `seguridad` VALUES ('57916024');
INSERT INTO `seguridad` VALUES ('977039150');
INSERT INTO `seguridad` VALUES ('311024568');
INSERT INTO `seguridad` VALUES ('793533600');
INSERT INTO `seguridad` VALUES ('1014697486');
INSERT INTO `seguridad` VALUES ('179647061');
INSERT INTO `seguridad` VALUES ('93607965');
INSERT INTO `seguridad` VALUES ('270398087');
INSERT INTO `seguridad` VALUES ('967949206');
INSERT INTO `seguridad` VALUES ('175046436');
INSERT INTO `seguridad` VALUES ('124031448');
INSERT INTO `seguridad` VALUES ('775131102');
INSERT INTO `seguridad` VALUES ('1136391421');
INSERT INTO `seguridad` VALUES ('982827032');
INSERT INTO `seguridad` VALUES ('1017888242');
INSERT INTO `seguridad` VALUES ('1021338710');
INSERT INTO `seguridad` VALUES ('998521097');
INSERT INTO `seguridad` VALUES ('12095289');
INSERT INTO `seguridad` VALUES ('142730760');
INSERT INTO `seguridad` VALUES ('533820934');
INSERT INTO `seguridad` VALUES ('181576355');
INSERT INTO `seguridad` VALUES ('1139730584');
INSERT INTO `seguridad` VALUES ('1124222028');
INSERT INTO `seguridad` VALUES ('1024084244');
INSERT INTO `seguridad` VALUES ('1156834518');
INSERT INTO `seguridad` VALUES ('494678525');
INSERT INTO `seguridad` VALUES ('196008959');
INSERT INTO `seguridad` VALUES ('338368602');
INSERT INTO `seguridad` VALUES ('259749867');
INSERT INTO `seguridad` VALUES ('1093390424');
INSERT INTO `seguridad` VALUES ('835792561');
INSERT INTO `seguridad` VALUES ('637928611');
INSERT INTO `seguridad` VALUES ('852896495');
INSERT INTO `seguridad` VALUES ('190740502');
INSERT INTO `seguridad` VALUES ('333990588');
INSERT INTO `seguridad` VALUES ('200461176');
INSERT INTO `seguridad` VALUES ('975629281');
INSERT INTO `seguridad` VALUES ('1183139701');
INSERT INTO `seguridad` VALUES ('1112275245');
INSERT INTO `seguridad` VALUES ('671691258');
INSERT INTO `seguridad` VALUES ('879201678');
INSERT INTO `seguridad` VALUES ('683489633');
INSERT INTO `seguridad` VALUES ('683526735');
INSERT INTO `seguridad` VALUES ('212667671');
INSERT INTO `seguridad` VALUES ('463513005');
INSERT INTO `seguridad` VALUES ('1040112226');
INSERT INTO `seguridad` VALUES ('1031244893');
INSERT INTO `seguridad` VALUES ('501616563');
INSERT INTO `seguridad` VALUES ('121434322');
INSERT INTO `seguridad` VALUES ('909959078');
INSERT INTO `seguridad` VALUES ('597747352');
INSERT INTO `seguridad` VALUES ('740700623');
INSERT INTO `seguridad` VALUES ('422849422');
INSERT INTO `seguridad` VALUES ('987427656');
INSERT INTO `seguridad` VALUES ('987464758');
INSERT INTO `seguridad` VALUES ('516605694');
INSERT INTO `seguridad` VALUES ('767451028');
INSERT INTO `seguridad` VALUES ('407006949');
INSERT INTO `seguridad` VALUES ('864731972');
INSERT INTO `seguridad` VALUES ('128298157');
INSERT INTO `seguridad` VALUES ('119430824');
INSERT INTO `seguridad` VALUES ('805554586');
INSERT INTO `seguridad` VALUES ('848370074');
INSERT INTO `seguridad` VALUES ('495197950');
INSERT INTO `seguridad` VALUES ('124662179');
INSERT INTO `seguridad` VALUES ('425372345');
INSERT INTO `seguridad` VALUES ('1213897101');
INSERT INTO `seguridad` VALUES ('901685375');
INSERT INTO `seguridad` VALUES ('1044638646');
INSERT INTO `seguridad` VALUES ('726787445');
INSERT INTO `seguridad` VALUES ('710944972');
INSERT INTO `seguridad` VALUES ('1168669995');
INSERT INTO `seguridad` VALUES ('1043896610');
INSERT INTO `seguridad` VALUES ('417951983');
INSERT INTO `seguridad` VALUES ('557046667');
INSERT INTO `seguridad` VALUES ('578454411');
INSERT INTO `seguridad` VALUES ('65039571');
INSERT INTO `seguridad` VALUES ('537753726');
INSERT INTO `seguridad` VALUES ('5491167');
INSERT INTO `seguridad` VALUES ('1058997047');
INSERT INTO `seguridad` VALUES ('68749752');
INSERT INTO `seguridad` VALUES ('866178943');
INSERT INTO `seguridad` VALUES ('867143590');
INSERT INTO `seguridad` VALUES ('527921746');
INSERT INTO `seguridad` VALUES ('612736483');
INSERT INTO `seguridad` VALUES ('614183453');
INSERT INTO `seguridad` VALUES ('43743133');
INSERT INTO `seguridad` VALUES ('913891870');
INSERT INTO `seguridad` VALUES ('532522371');
INSERT INTO `seguridad` VALUES ('583759969');
INSERT INTO `seguridad` VALUES ('754762209');
INSERT INTO `seguridad` VALUES ('682821801');
INSERT INTO `seguridad` VALUES ('648725238');
INSERT INTO `seguridad` VALUES ('560460033');
INSERT INTO `seguridad` VALUES ('1026495862');
INSERT INTO `seguridad` VALUES ('1199724210');
INSERT INTO `seguridad` VALUES ('838538095');
INSERT INTO `seguridad` VALUES ('170965237');
INSERT INTO `seguridad` VALUES ('50384357');
INSERT INTO `seguridad` VALUES ('856940592');
INSERT INTO `seguridad` VALUES ('1144442514');
INSERT INTO `seguridad` VALUES ('929585935');
INSERT INTO `seguridad` VALUES ('517013814');
INSERT INTO `seguridad` VALUES ('742481510');
INSERT INTO `seguridad` VALUES ('451009695');
INSERT INTO `seguridad` VALUES ('920904112');
INSERT INTO `seguridad` VALUES ('290062046');
INSERT INTO `seguridad` VALUES ('456092643');
INSERT INTO `seguridad` VALUES ('383261791');
INSERT INTO `seguridad` VALUES ('708013929');
INSERT INTO `seguridad` VALUES ('678221176');
INSERT INTO `seguridad` VALUES ('679148721');
INSERT INTO `seguridad` VALUES ('1065193049');
INSERT INTO `seguridad` VALUES ('249509768');
INSERT INTO `seguridad` VALUES ('41813839');
INSERT INTO `seguridad` VALUES ('965018163');
INSERT INTO `seguridad` VALUES ('900349709');
INSERT INTO `seguridad` VALUES ('975035652');
INSERT INTO `seguridad` VALUES ('1083521343');
INSERT INTO `seguridad` VALUES ('206620076');
INSERT INTO `seguridad` VALUES ('621158593');
INSERT INTO `seguridad` VALUES ('272141872');
INSERT INTO `seguridad` VALUES ('658483014');
INSERT INTO `seguridad` VALUES ('731239662');
INSERT INTO `seguridad` VALUES ('132453559');
INSERT INTO `seguridad` VALUES ('861838031');
INSERT INTO `seguridad` VALUES ('994402796');
INSERT INTO `seguridad` VALUES ('111405');
INSERT INTO `seguridad` VALUES ('876307737');
INSERT INTO `seguridad` VALUES ('937933842');
INSERT INTO `seguridad` VALUES ('569624180');
INSERT INTO `seguridad` VALUES ('220755866');
INSERT INTO `seguridad` VALUES ('1155164937');
INSERT INTO `seguridad` VALUES ('1015550828');
INSERT INTO `seguridad` VALUES ('291657424');
INSERT INTO `seguridad` VALUES ('1000042271');
INSERT INTO `seguridad` VALUES ('261196838');
INSERT INTO `seguridad` VALUES ('158907149');
INSERT INTO `seguridad` VALUES ('701372705');
INSERT INTO `seguridad` VALUES ('1075099232');
INSERT INTO `seguridad` VALUES ('966168319');
INSERT INTO `seguridad` VALUES ('892743838');
INSERT INTO `seguridad` VALUES ('240976352');
INSERT INTO `seguridad` VALUES ('1060666628');
INSERT INTO `seguridad` VALUES ('346271287');
INSERT INTO `seguridad` VALUES ('874192934');
INSERT INTO `seguridad` VALUES ('1030354450');
INSERT INTO `seguridad` VALUES ('860465264');
INSERT INTO `seguridad` VALUES ('291286405');
INSERT INTO `seguridad` VALUES ('845624540');
INSERT INTO `seguridad` VALUES ('81957997');
INSERT INTO `seguridad` VALUES ('1014140959');
INSERT INTO `seguridad` VALUES ('1163772556');
INSERT INTO `seguridad` VALUES ('1193936328');
INSERT INTO `seguridad` VALUES ('131674421');
INSERT INTO `seguridad` VALUES ('179906774');
INSERT INTO `seguridad` VALUES ('444850795');
INSERT INTO `seguridad` VALUES ('810563331');
INSERT INTO `seguridad` VALUES ('78507528');
INSERT INTO `seguridad` VALUES ('1036958572');
INSERT INTO `seguridad` VALUES ('934446272');
INSERT INTO `seguridad` VALUES ('1063300856');
INSERT INTO `seguridad` VALUES ('956336340');
INSERT INTO `seguridad` VALUES ('1038331339');
INSERT INTO `seguridad` VALUES ('533190203');
INSERT INTO `seguridad` VALUES ('618561467');
INSERT INTO `seguridad` VALUES ('447930245');
INSERT INTO `seguridad` VALUES ('633327987');
INSERT INTO `seguridad` VALUES ('230884660');
INSERT INTO `seguridad` VALUES ('264610204');
INSERT INTO `seguridad` VALUES ('198457678');
INSERT INTO `seguridad` VALUES ('871224789');
INSERT INTO `seguridad` VALUES ('1010764694');
INSERT INTO `seguridad` VALUES ('244872042');
INSERT INTO `seguridad` VALUES ('250548619');
INSERT INTO `seguridad` VALUES ('1154237391');
INSERT INTO `seguridad` VALUES ('629506500');
INSERT INTO `seguridad` VALUES ('406969847');
INSERT INTO `seguridad` VALUES ('119838944');
INSERT INTO `seguridad` VALUES ('489113253');
INSERT INTO `seguridad` VALUES ('753166831');
INSERT INTO `seguridad` VALUES ('261975976');
INSERT INTO `seguridad` VALUES ('804144717');
INSERT INTO `seguridad` VALUES ('99284542');
INSERT INTO `seguridad` VALUES ('1174086859');
INSERT INTO `seguridad` VALUES ('380590461');
INSERT INTO `seguridad` VALUES ('568807940');
INSERT INTO `seguridad` VALUES ('853638531');
INSERT INTO `seguridad` VALUES ('81735386');
INSERT INTO `seguridad` VALUES ('192039065');
INSERT INTO `seguridad` VALUES ('874452646');
INSERT INTO `seguridad` VALUES ('165845188');
INSERT INTO `seguridad` VALUES ('499575964');
INSERT INTO `seguridad` VALUES ('487888894');
INSERT INTO `seguridad` VALUES ('486738738');
INSERT INTO `seguridad` VALUES ('494344609');
INSERT INTO `seguridad` VALUES ('12651817');
INSERT INTO `seguridad` VALUES ('374357357');
INSERT INTO `seguridad` VALUES ('649244663');
INSERT INTO `seguridad` VALUES ('47193601');
INSERT INTO `seguridad` VALUES ('891074257');
INSERT INTO `seguridad` VALUES ('761848655');
INSERT INTO `seguridad` VALUES ('714395440');
INSERT INTO `seguridad` VALUES ('1145852382');
INSERT INTO `seguridad` VALUES ('57470802');
INSERT INTO `seguridad` VALUES ('548587454');
INSERT INTO `seguridad` VALUES ('948136840');
INSERT INTO `seguridad` VALUES ('1168855504');
INSERT INTO `seguridad` VALUES ('1121105476');
INSERT INTO `seguridad` VALUES ('456426559');
INSERT INTO `seguridad` VALUES ('1008538586');
INSERT INTO `seguridad` VALUES ('534117748');
INSERT INTO `seguridad` VALUES ('1004605794');
INSERT INTO `seguridad` VALUES ('184878416');
INSERT INTO `seguridad` VALUES ('568845042');
INSERT INTO `seguridad` VALUES ('382779468');
INSERT INTO `seguridad` VALUES ('599342729');
INSERT INTO `seguridad` VALUES ('750421297');
INSERT INTO `seguridad` VALUES ('1064488114');
INSERT INTO `seguridad` VALUES ('477871405');
INSERT INTO `seguridad` VALUES ('1161546448');
INSERT INTO `seguridad` VALUES ('1180468371');
INSERT INTO `seguridad` VALUES ('848221667');
INSERT INTO `seguridad` VALUES ('1162882113');
INSERT INTO `seguridad` VALUES ('337032937');
INSERT INTO `seguridad` VALUES ('190146873');
INSERT INTO `seguridad` VALUES ('573223055');
INSERT INTO `seguridad` VALUES ('746006182');
INSERT INTO `seguridad` VALUES ('267429942');
INSERT INTO `seguridad` VALUES ('885731596');
INSERT INTO `seguridad` VALUES ('483436677');
INSERT INTO `seguridad` VALUES ('1065230151');
INSERT INTO `seguridad` VALUES ('786706867');
INSERT INTO `seguridad` VALUES ('118614584');
INSERT INTO `seguridad` VALUES ('222685160');
INSERT INTO `seguridad` VALUES ('985535464');
INSERT INTO `seguridad` VALUES ('1172120464');
INSERT INTO `seguridad` VALUES ('1021078997');
INSERT INTO `seguridad` VALUES ('686235167');
INSERT INTO `seguridad` VALUES ('1096766689');
INSERT INTO `seguridad` VALUES ('538940984');
INSERT INTO `seguridad` VALUES ('647278267');
INSERT INTO `seguridad` VALUES ('687682138');
INSERT INTO `seguridad` VALUES ('969544584');
INSERT INTO `seguridad` VALUES ('580532112');
INSERT INTO `seguridad` VALUES ('595892261');
INSERT INTO `seguridad` VALUES ('1184364061');
INSERT INTO `seguridad` VALUES ('38103658');
INSERT INTO `seguridad` VALUES ('755096125');
INSERT INTO `seguridad` VALUES ('92346503');
INSERT INTO `seguridad` VALUES ('474829057');
INSERT INTO `seguridad` VALUES ('886844651');
INSERT INTO `seguridad` VALUES ('946689869');
INSERT INTO `seguridad` VALUES ('80325517');
INSERT INTO `seguridad` VALUES ('383929624');
INSERT INTO `seguridad` VALUES ('742815426');
INSERT INTO `seguridad` VALUES ('330428814');
INSERT INTO `seguridad` VALUES ('116165865');
INSERT INTO `seguridad` VALUES ('905581065');
INSERT INTO `seguridad` VALUES ('234520637');
INSERT INTO `seguridad` VALUES ('319001457');
INSERT INTO `seguridad` VALUES ('1064154198');
INSERT INTO `seguridad` VALUES ('1068346703');
INSERT INTO `seguridad` VALUES ('138612460');
INSERT INTO `seguridad` VALUES ('521837049');
INSERT INTO `seguridad` VALUES ('26936013');
INSERT INTO `seguridad` VALUES ('240679537');
INSERT INTO `seguridad` VALUES ('1180282862');
INSERT INTO `seguridad` VALUES ('771012802');
INSERT INTO `seguridad` VALUES ('1124407537');
INSERT INTO `seguridad` VALUES ('1101293109');
INSERT INTO `seguridad` VALUES ('234483535');
INSERT INTO `seguridad` VALUES ('789860521');
INSERT INTO `seguridad` VALUES ('215413205');
INSERT INTO `seguridad` VALUES ('876752959');
INSERT INTO `seguridad` VALUES ('150633446');
INSERT INTO `seguridad` VALUES ('1148264000');
INSERT INTO `seguridad` VALUES ('1061186053');
INSERT INTO `seguridad` VALUES ('1048756947');
INSERT INTO `seguridad` VALUES ('466258539');
INSERT INTO `seguridad` VALUES ('237600087');
INSERT INTO `seguridad` VALUES ('141766113');
INSERT INTO `seguridad` VALUES ('738771329');
INSERT INTO `seguridad` VALUES ('592478895');
INSERT INTO `seguridad` VALUES ('736322610');
INSERT INTO `seguridad` VALUES ('59622707');
INSERT INTO `seguridad` VALUES ('1201059875');
INSERT INTO `seguridad` VALUES ('908141089');
INSERT INTO `seguridad` VALUES ('618635670');
INSERT INTO `seguridad` VALUES ('570551725');
INSERT INTO `seguridad` VALUES ('606800193');
INSERT INTO `seguridad` VALUES ('131785727');
INSERT INTO `seguridad` VALUES ('841506240');
INSERT INTO `seguridad` VALUES ('69974112');
INSERT INTO `seguridad` VALUES ('1132607037');
INSERT INTO `seguridad` VALUES ('380367850');
INSERT INTO `seguridad` VALUES ('681003812');
INSERT INTO `seguridad` VALUES ('621529611');
INSERT INTO `seguridad` VALUES ('962458138');
INSERT INTO `seguridad` VALUES ('564318621');
INSERT INTO `seguridad` VALUES ('687236916');
INSERT INTO `seguridad` VALUES ('541092888');
INSERT INTO `seguridad` VALUES ('17252441');
INSERT INTO `seguridad` VALUES ('426559603');
INSERT INTO `seguridad` VALUES ('343933873');
INSERT INTO `seguridad` VALUES ('735432166');
INSERT INTO `seguridad` VALUES ('144511647');
INSERT INTO `seguridad` VALUES ('1031875624');
INSERT INTO `seguridad` VALUES ('418471408');
INSERT INTO `seguridad` VALUES ('43780235');
INSERT INTO `seguridad` VALUES ('1007277124');
INSERT INTO `seguridad` VALUES ('738548718');
INSERT INTO `seguridad` VALUES ('443032806');
INSERT INTO `seguridad` VALUES ('986129093');
INSERT INTO `seguridad` VALUES ('783367704');
INSERT INTO `seguridad` VALUES ('1160359190');
INSERT INTO `seguridad` VALUES ('745894877');
INSERT INTO `seguridad` VALUES ('153193471');
INSERT INTO `seguridad` VALUES ('447002700');
INSERT INTO `seguridad` VALUES ('247283659');
INSERT INTO `seguridad` VALUES ('38511778');
INSERT INTO `seguridad` VALUES ('438654793');
INSERT INTO `seguridad` VALUES ('420140990');
INSERT INTO `seguridad` VALUES ('738660024');
INSERT INTO `seguridad` VALUES ('789303994');
INSERT INTO `seguridad` VALUES ('1199538701');
INSERT INTO `seguridad` VALUES ('761329229');
INSERT INTO `seguridad` VALUES ('11909780');
INSERT INTO `seguridad` VALUES ('65521895');
INSERT INTO `seguridad` VALUES ('495346357');
INSERT INTO `seguridad` VALUES ('672730108');
INSERT INTO `seguridad` VALUES ('1068420906');
INSERT INTO `seguridad` VALUES ('412646424');
INSERT INTO `seguridad` VALUES ('1023527717');
INSERT INTO `seguridad` VALUES ('1180134454');
INSERT INTO `seguridad` VALUES ('222944872');
INSERT INTO `seguridad` VALUES ('121026202');
INSERT INTO `seguridad` VALUES ('10648319');
INSERT INTO `seguridad` VALUES ('48306655');
INSERT INTO `seguridad` VALUES ('138575358');
INSERT INTO `seguridad` VALUES ('992696113');
INSERT INTO `seguridad` VALUES ('216229445');
INSERT INTO `seguridad` VALUES ('162172109');
INSERT INTO `seguridad` VALUES ('1006275375');
INSERT INTO `seguridad` VALUES ('78470426');
INSERT INTO `seguridad` VALUES ('292065543');
INSERT INTO `seguridad` VALUES ('683600939');
INSERT INTO `seguridad` VALUES ('486701636');
INSERT INTO `seguridad` VALUES ('1173901350');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `turno`
-- 

CREATE TABLE `turno` (
  `idTurno` int(11) NOT NULL,
  `nombreTurno` varchar(20) default NULL,
  PRIMARY KEY  (`idTurno`),
  UNIQUE KEY `XPKturno` (`idTurno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `turno`
-- 

INSERT INTO `turno` VALUES (1, 'mañana');
INSERT INTO `turno` VALUES (2, 'noche');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `login` varchar(20) NOT NULL,
  `password` varchar(50) default NULL,
  `nombre` varchar(50) default NULL,
  `apellidoPaterno` varchar(50) default NULL,
  `apellidoMaterno` varchar(50) default NULL,
  `preguntaSecreta` varchar(50) default NULL,
  `respuestaSecreta` varchar(50) default NULL,
  `estadoUsuario` int(11) NOT NULL,
  PRIMARY KEY  (`login`),
  UNIQUE KEY `XPKusuario` (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` VALUES ('irubenv', 'faad95253aee7437871781018bdf3309', 'ignacio ruben', 'tacza', 'valverde', 'quien es mi hermana', 'lombriz', 1);
INSERT INTO `usuario` VALUES ('ecojal', 'faad95253aee7437871781018bdf3309', 'eloy humberto', 'cojal', 'torres', '¿cómo se llama mi mascota?', 'pedro', 1);
INSERT INTO `usuario` VALUES ('pbravo', 'faad95253aee7437871781018bdf3309', 'pedro', 'bravo', 'pardo', '¿cómo se llama mi mascota?', 'eloy', 1);
INSERT INTO `usuario` VALUES ('jreategui', 'ca4b33532855080dfa79cf8a925d146d', 'juan', 'reategui', 'morales', '¿dónde nacio mi abuelo paterno?', 'felix', 0);
INSERT INTO `usuario` VALUES ('adelgado', 'ef72d53990bc4805684c9b61fa64a102', 'andrea', 'delgado', 'portugal', '¿qué apodo le puse a mi hermana?', 'plastilina', 1);
