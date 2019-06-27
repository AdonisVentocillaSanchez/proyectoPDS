

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL,
  `nombreCarrera` varchar(50) default NULL,
  `vacantesCarrera` int(11) default NULL,
  `idTurno` int(11) default NULL,
  PRIMARY KEY  (`idCarrera`),
  UNIQUE KEY `XPKcarrera` (`idCarrera`),
  KEY `idTurno` (`idTurno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO carrera VALUES("1","administracion de empresas","5","1");
INSERT INTO carrera VALUES("2","administracion de empresas","40","2");
INSERT INTO carrera VALUES("3","contabilidad","40","1");
INSERT INTO carrera VALUES("4","contabilidad","40","2");
INSERT INTO carrera VALUES("5","computacion e informatica","1","1");
INSERT INTO carrera VALUES("6","computacion e informatica","40","2");
INSERT INTO carrera VALUES("7","mecanica automotriz","40","1");
INSERT INTO carrera VALUES("8","mecanica automotriz","40","2");
INSERT INTO carrera VALUES("9","mecanica de produccion","1","1");
INSERT INTO carrera VALUES("10","mecanica de produccion","40","2");
INSERT INTO carrera VALUES("11","electrotecnia indsutrial","40","1");
INSERT INTO carrera VALUES("12","electrotecnia indsutrial","40","2");
INSERT INTO carrera VALUES("13","secretariado ejecutivo","40","1");
INSERT INTO carrera VALUES("14","secretariado ejecutivo","40","2");





CREATE TABLE `code` (
  `codigo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO code VALUES("44");





CREATE TABLE `configuracion` (
  `costoAdmision` double NOT NULL,
  `proceso` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO configuracion VALUES("170","20131");





CREATE TABLE `detalleprivilegio` (
  `idPrivilegio` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  PRIMARY KEY  (`idPrivilegio`,`login`),
  UNIQUE KEY `XPKdetallePrivilegio` (`idPrivilegio`,`login`),
  KEY `login` (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO detalleprivilegio VALUES("1","adelgado");
INSERT INTO detalleprivilegio VALUES("1","ecojal");
INSERT INTO detalleprivilegio VALUES("1","irubenv");
INSERT INTO detalleprivilegio VALUES("1","jreategui");
INSERT INTO detalleprivilegio VALUES("1","pbravo");
INSERT INTO detalleprivilegio VALUES("2","adelgado");
INSERT INTO detalleprivilegio VALUES("2","ecojal");
INSERT INTO detalleprivilegio VALUES("2","irubenv");
INSERT INTO detalleprivilegio VALUES("2","jreategui");
INSERT INTO detalleprivilegio VALUES("2","pbravo");
INSERT INTO detalleprivilegio VALUES("3","adelgado");
INSERT INTO detalleprivilegio VALUES("3","ecojal");
INSERT INTO detalleprivilegio VALUES("3","irubenv");
INSERT INTO detalleprivilegio VALUES("3","jreategui");
INSERT INTO detalleprivilegio VALUES("4","adelgado");
INSERT INTO detalleprivilegio VALUES("4","irubenv");
INSERT INTO detalleprivilegio VALUES("4","jreategui");
INSERT INTO detalleprivilegio VALUES("5","adelgado");
INSERT INTO detalleprivilegio VALUES("5","irubenv");
INSERT INTO detalleprivilegio VALUES("6","adelgado");
INSERT INTO detalleprivilegio VALUES("6","ecojal");
INSERT INTO detalleprivilegio VALUES("6","irubenv");
INSERT INTO detalleprivilegio VALUES("7","adelgado");
INSERT INTO detalleprivilegio VALUES("7","irubenv");
INSERT INTO detalleprivilegio VALUES("8","irubenv");
INSERT INTO detalleprivilegio VALUES("9","adelgado");
INSERT INTO detalleprivilegio VALUES("9","ecojal");
INSERT INTO detalleprivilegio VALUES("9","irubenv");
INSERT INTO detalleprivilegio VALUES("9","pbravo");
INSERT INTO detalleprivilegio VALUES("10","irubenv");
INSERT INTO detalleprivilegio VALUES("11","irubenv");
INSERT INTO detalleprivilegio VALUES("12","irubenv");
INSERT INTO detalleprivilegio VALUES("13","irubenv");
INSERT INTO detalleprivilegio VALUES("14","irubenv");
INSERT INTO detalleprivilegio VALUES("15","irubenv");
INSERT INTO detalleprivilegio VALUES("16","irubenv");
INSERT INTO detalleprivilegio VALUES("17","irubenv");





CREATE TABLE `distrito` (
  `idDistrito` varchar(20) NOT NULL,
  `nombreDistrito` varchar(50) default NULL,
  PRIMARY KEY  (`idDistrito`),
  UNIQUE KEY `XPKdistrito` (`idDistrito`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO distrito VALUES("Lima 01","Cercado de Lima");
INSERT INTO distrito VALUES("Lima 02","Ancon");
INSERT INTO distrito VALUES("Lima 03","Ate");
INSERT INTO distrito VALUES("Lima 04","Barranco");
INSERT INTO distrito VALUES("Lima 05","Breña");
INSERT INTO distrito VALUES("Lima 06","Carabayllo");
INSERT INTO distrito VALUES("Lima 07","Comas");
INSERT INTO distrito VALUES("Lima 08","Chaclacayo");
INSERT INTO distrito VALUES("Lima 09","Chorrillos");
INSERT INTO distrito VALUES("Lima 10","El Agustino");
INSERT INTO distrito VALUES("Lima 11","Jesus Maria");
INSERT INTO distrito VALUES("Lima 12","La Molina");
INSERT INTO distrito VALUES("Lima 13","La Victoria");
INSERT INTO distrito VALUES("Lima 14","Lince");
INSERT INTO distrito VALUES("Lima 15","Lurigancho");
INSERT INTO distrito VALUES("Lima 16","Lurin");
INSERT INTO distrito VALUES("Lima 17","Magdalena");
INSERT INTO distrito VALUES("Lima 18","Miraflores");
INSERT INTO distrito VALUES("Lima 19","Pachacamac");
INSERT INTO distrito VALUES("Lima 20","Pucusana");
INSERT INTO distrito VALUES("Lima 21","Pueblo Libre");
INSERT INTO distrito VALUES("Lima 22","Puente Piedra");
INSERT INTO distrito VALUES("Lima 23","Punta Negra");
INSERT INTO distrito VALUES("Lima 24","Punta Hermosa");
INSERT INTO distrito VALUES("Lima 25","Rimac");
INSERT INTO distrito VALUES("Lima 26","San Bartolo");
INSERT INTO distrito VALUES("Lima 27","San Isidro");
INSERT INTO distrito VALUES("Lima 28","Independencia");
INSERT INTO distrito VALUES("Lima 29","San Juan De Miraflores");
INSERT INTO distrito VALUES("Lima 30","San Luis");
INSERT INTO distrito VALUES("Lima 31","San Martin De Porres");
INSERT INTO distrito VALUES("Lima 32","San Miguel");
INSERT INTO distrito VALUES("Lima 33","Santiago De Surco");
INSERT INTO distrito VALUES("Lima 34","Surquillo");
INSERT INTO distrito VALUES("Lima 35","Villa Maria Del Triunfo");
INSERT INTO distrito VALUES("Lima 36","San Juan De Lurigancho");
INSERT INTO distrito VALUES("Lima 37","Santa Maria Del Mar");
INSERT INTO distrito VALUES("Lima 38","Santa Rosa");
INSERT INTO distrito VALUES("Lima 39","Los Olivos");
INSERT INTO distrito VALUES("Lima 40","Cieneguilla");
INSERT INTO distrito VALUES("Lima 41","San Borja");
INSERT INTO distrito VALUES("Lima 42","Villa El Salvador");
INSERT INTO distrito VALUES("Lima 43","Santa Anita");
INSERT INTO distrito VALUES("Callao 01","Callao");
INSERT INTO distrito VALUES("Callao 02","Bellavista");
INSERT INTO distrito VALUES("Callao 03","Carmen De La Legua");
INSERT INTO distrito VALUES("Callao 04","La Perla");
INSERT INTO distrito VALUES("Callao 05","La Punta");
INSERT INTO distrito VALUES("Callao 06","Ventanilla");





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
  `idCarrera2` int(11) default NULL,
  PRIMARY KEY  (`idpostulante`),
  UNIQUE KEY `XPKpostulante` (`idpostulante`),
  KEY `idDistrito` (`idDistrito`),
  KEY `idCarrera` (`idCarrera`),
  KEY `login` (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO postulante VALUES("201310000006","maria laura ","tello","horna","calle alcanfores 1456 dpto 12","4022356","996521475","4503265","maria_l@hotmail.es","10/octubre/1984","Saturday, 09 de February de 2013 a horas: 11:19:41 am","conviviente","femenino","apto","Lima 13","3","irubenv","9846-23-56556","ordinario","8");
INSERT INTO postulante VALUES("201310000005","carmen esmeralda","toledo","valverde","jr. guadalupe huare 479 ","10556498","99256321","2769045","carmen@gmail.com","13/enero/1977","Saturday, 09 de February de 2013 a horas: 11:11:41 am","divorciado(a)","femenino","apto","Lima 29","13","irubenv","10-556569-32","ordinario","10");
INSERT INTO postulante VALUES("201310000004","pedro","bravo","pardo","calle los aires 25 interior 2","45122653","99562324","2875632","pedro.bravo@gmail.com","13/noviembre/1957","Saturday, 09 de February de 2013 a horas: 04:48:15 am","casado(a)","masculino","apto","Lima 35","10","irubenv","80-65212323","ordinario","14");
INSERT INTO postulante VALUES("201310000003","ignacio ruben","tacza","valverde","jr. guadalupe huare 481","10559395","992431427","2769048","irubenv@hotmail.com","17/junio/1976","Saturday, 09 de February de 2013 a horas: 04:44:58 am","soltero(a)","masculino","apto","Lima 29","11","irubenv","58959-6563","ordinario","3");
INSERT INTO postulante VALUES("201310000001","eloy humberto","cojal","torres","otro mz. d lote 4 barrio 4 sector 29","02115369","995236598","2874596","ecojal@hotmail.com","19/diciembre/1979","Friday, 08 de February de 2013 a horas: 09:48:27 am","soltero(a)","masculino","apto","Lima 42","5","irubenv","09-52525-1251","ordinario","13");
INSERT INTO postulante VALUES("201310000002","sandra","delgado","portugal","av. maria reich mz n1 lote 6 urb pachacamac","07852635","993402486","2769048","xandra_s15@hotmail.com","2/septiembre/1985","Friday, 08 de February de 2013 a horas: 11:45:52 am","casado(a)","femenino","apto","Lima 01","1","irubenv","02-95632","ordinario","2");
INSERT INTO postulante VALUES("201310000007","carmen lizet","tacza","valverde","   jr. los alamos 156","45123669","99523698","4503019","car_lizet@hotmail.com","16/septiembre/1990","Saturday, 09 de February de 2013 a horas: 11:53:10 am","casado(a)","femenino","apto","Lima 19","1","irubenv","1023565-45","ordinario","2");
INSERT INTO postulante VALUES("201310000008","maria luz","peña","guevara","calle  4 mz a lote 6","5266352","99632541","2875693","maria@gmail.com","5/mayo/1978","Saturday, 09 de February de 2013 a horas: 08:18:04 pm","separado(a)","femenino","apto","Lima 05","14","irubenv","99-99-999","ordinario","11");
INSERT INTO postulante VALUES("201310000009","cecilia","altamirano","guia","  jr. los sauces 34","56232625","99526345","2569352","cecil@yahoo.com","18/octubre/1981","Saturday, 09 de February de 2013 a horas: 08:19:31 pm","soltero(a)","femenino","apto","Lima 42","12","irubenv","88-8888-999","ordinario","6");
INSERT INTO postulante VALUES("201310000010","jimmi christian","de la cruz","iñoñan","psj. los vicus 789","85226342","99562358","2568965","jimmy@gmail.com","23/noviembre/1973","Saturday, 09 de February de 2013 a horas: 08:20:58 pm","soltero(a)","masculino","apto","Lima 33","1","irubenv","99-88-656565","ordinario","9");
INSERT INTO postulante VALUES("201310000011","susana","livano","caceres","psj. los alcanfores 452","42556365","985623456","2451236","susan@gmail.com","6/enero/1983","Saturday, 09 de February de 2013 a horas: 08:23:29 pm","divorciado(a)","masculino","apto","Lima 42","2","irubenv","77-88-999999","ordinario","5");
INSERT INTO postulante VALUES("201310000012","manuel abelardo","alcantara","ramirez","av. los libertadores 450 dpto. 5","10002536","99526341","4502635","manuel@gmail.com","22/febrero/1979","Saturday, 09 de February de 2013 a horas: 08:24:56 pm","soltero(a)","masculino","apto","Lima 41","1","irubenv","66-559-5454","ordinario","7");
INSERT INTO postulante VALUES("201310000013","moises","cotacallapa","vilca","calle  3 mz z lote 24 urb los libertadores","42336525","994578548","7601245","moises@hotmail.com","18/marzo/1982","Saturday, 09 de February de 2013 a horas: 08:26:46 pm","casado(a)","masculino","apto","Lima 04","4","irubenv","55-562-45454","ordinario","7");
INSERT INTO postulante VALUES("201310000014","gladys esmeralda","valverde","ocaña","jr. guadalupe huare 479 pamplona baja","09225154","960215486","2769532","gladys@yahoo.com","17/julio/1956","Saturday, 09 de February de 2013 a horas: 08:29:13 pm","separado(a)","femenino","apto","Lima 29","1","irubenv","998-45454-45","ordinario","6");
INSERT INTO postulante VALUES("201310000015","ignacio felix","tacza","rojas","av. juan velzco alvarado mz a lote 37 a.a.h.h. 13 ","10023568","996325689","4886232","ignacio@yahoo.com","7/octubre/1954","Saturday, 09 de February de 2013 a horas: 08:30:59 pm","separado(a)","masculino","apto","Lima 29","7","irubenv","77-885-552","ordinario","4");
INSERT INTO postulante VALUES("201310000016","jose","perez","saenz","av. eucaliptus 456","10225636","996325689","2874596","jose@mail.com","1/diciembre/1980","Monday, 11 de February de 2013 a horas: 09:31:51 pm","soltero(a)","masculino","apto","Lima 19","9","irubenv","88-55-223","ordinario","1");
INSERT INTO postulante VALUES("201310000017","juana","lopez","ariana","av. carlos izaguirre 4512","45125689","996523323","5623265","juanal@yahoo.com","1/enero/1985","Monday, 11 de February de 2013 a horas: 09:33:19 pm","soltero(a)","femenino","apto","Lima 31","8","irubenv","2332242423234","ordinario","4");
INSERT INTO postulante VALUES("201310000018","liz","delgado","portugal","calle 5 sector 4 barrio 3 mz a lt 5","10225632","9956565111","2875632","lizp@hotmail.com","9/abril/1990","Monday, 11 de February de 2013 a horas: 09:35:00 pm","divorciado(a)","femenino","apto","Lima 42","1","irubenv","454541112","ordinario","7");
INSERT INTO postulante VALUES("201310000019","lina","lozada","perez","psj. los aviadores 45","45112545","99562365","256985","lina_98@hotmail.com","19/noviembre/1983","Monday, 11 de February de 2013 a horas: 09:36:51 pm","casado(a)","femenino","apto","Lima 33","5","irubenv","454545321","ordinario","1");
INSERT INTO postulante VALUES("201310000020","jesus","altamirano","velasquez","psj. los tirados 2323","45125632","99653214","2589621","jal.ve12@yahoo.com","18/septiembre/1982","Monday, 11 de February de 2013 a horas: 09:40:11 pm","casado(a)","masculino","apto","Lima 11","6","irubenv","78654454","ordinario","3");
INSERT INTO postulante VALUES("201310000021","lucrecia jacinta","vera","lucana","jr. los amigos 45","12457845","99852454","2874521","lucre@yahoo.es","19/abril/1990","Monday, 11 de February de 2013 a horas: 09:42:06 pm","soltero(a)","femenino","apto","Lima 28","6","irubenv","45645454","ordinario","3");
INSERT INTO postulante VALUES("201310000022","jose","puma","olaechea","av. los incas 412","40115263","9924314259","2896532","jose@hotmail.com","19/noviembre/1983","Saturday, 16 de February de 2013 a horas: 12:56:44 am","casado(a)","masculino","apto","Lima 05","5","irubenv","1502-9636-5","ordinario","3");
INSERT INTO postulante VALUES("201310000023","cuasimodo","huaman","chingay","av. los ficus 1410","10559396","99653214","4521269","cuasi@yahoo.com","10/octubre/1980","Monday, 18 de February de 2013 a horas: 12:44:05 am","soltero(a)","masculino","apto","Lima 26","1","irubenv","88-99-1232","becado","3");
INSERT INTO postulante VALUES("201310000024","marita","alcazar","becerra","av. gran chimu 467","78451125","993402486","2568965","marita@yahoo.com","1/septiembre/1998","Monday, 18 de February de 2013 a horas: 01:42:03 pm","conviviente","femenino","apto","Lima 09","1","irubenv","99-63-5665","ordinario","8");
INSERT INTO postulante VALUES("201310000025","sandra","alvarado","jimenez","psj. los alacnfores 45","12556936","99563245","4502636","sandraj@yahoo.com","17/octubre/1983","Monday, 18 de February de 2013 a horas: 03:13:24 pm","casado(a)","femenino","apto","Lima 13","2","irubenv","996-666-6","becado","10");
INSERT INTO postulante VALUES("201310000026","jacinto","perez","huaman","calle 25 sector 6 barrio 3 lote 56","45223659","99653247","2875693","jacinto@yahoo.es","20/diciembre/1979","Monday, 18 de February de 2013 a horas: 03:45:30 pm","conviviente","masculino","apto","Lima 42","2","irubenv","99-512-2512","becado","6");
INSERT INTO postulante VALUES("201310000027","kirena","garcia","kewa","av. alcanfores 1456 dpto 12","1055296","99562358","2875632","kgarcia@hotmail.com","1/enero/1998","Thursday, 21 de February de 2013 a horas: 01:18:10 am","soltero(a)","femenino","apto","Lima 12","1","irubenv","9963-5511","ordinario","9");
INSERT INTO postulante VALUES("201310000028","jeronimo","garces","valdez","calle 4 lote 5 mz 3 urb los alamos","45544145","996525356","2865232","je_garces@yahoo.es","1/septiembre/1989","Thursday, 21 de February de 2013 a horas: 01:21:35 am","soltero(a)","masculino","apto","Lima 02","1","irubenv","99-6653-6","ordinario","7");
INSERT INTO postulante VALUES("201310000029","sofia maria","alamo","justo","psj. maria magdalena 234","10556363","992563256","2875964","so_ma@hotmail.com","1/enero/1998","Thursday, 21 de February de 2013 a horas: 01:24:26 am","soltero(a)","femenino","apto","Lima 12","1","irubenv","99-88-7774","ordinario","5");
INSERT INTO postulante VALUES("201310000030","maricarmen","felix","soriano","calle 25 los constructores","40225969","99874512","2453698","maricarmen@yahoo.es","12/julio/1992","Thursday, 21 de February de 2013 a horas: 01:29:20 am","soltero(a)","femenino","apto","Lima 12","1","irubenv","99-45-454545","ordinario","5");
INSERT INTO postulante VALUES("201310000031","anita fernanda","rojas","paz","av. los aviadores 567","45112236","99561248","4523698","anifer@yahoo.com","1/octubre/1982","Thursday, 21 de February de 2013 a horas: 01:39:03 am","casado(a)","femenino","apto","Lima 33","1","irubenv","1066-99-52","ordinario","9");
INSERT INTO postulante VALUES("201310000032","pedro","martin","suarez","av. aviacion 456","10559656","99854521","6352145","pedro@latinmail.com","1/enero/1998","Thursday, 21 de February de 2013 a horas: 01:50:28 am","soltero(a)","masculino","apto","Lima 41","1","irubenv","10-55-996","ordinario","10");
INSERT INTO postulante VALUES("201310000034","jimmi jesus","sandoval","caceres","av. los leones 456","10023568","995236598","4886232","jjesus@hotmail.com","1/diciembre/1982","Thursday, 21 de February de 2013 a horas: 01:36:15 pm","soltero(a)","masculino","apto","Lima 13","1","irubenv","100-99-86","ordinario","2");
INSERT INTO postulante VALUES("201310000033","sandra maria","salazar","vesti","av. neopomuceno vargas 2345","10556633","995302352","42562358","s_mari@yahoo.es","6/mayo/1988","Thursday, 21 de February de 2013 a horas: 01:28:54 pm","soltero(a)","femenino","apto","Lima 29","1","irubenv","100-553-2","ordinario","6");
INSERT INTO postulante VALUES("201310000035","telesforo","paz","rojas","jr. francisco vallejos 456","10023536","99653214","2684512","tele@yahoo.es","5/enero/1944","Saturday, 23 de February de 2013 a horas: 03:25:48 am","soltero(a)","masculino","apto","Lima 29","1","irubenv","99-232-4","ordinario","6");
INSERT INTO postulante VALUES("201310000036","jesus alberto","casas","marin","jr. los alcanfores 567","10002536","993402486","2769048","jalberto@yahoo.es","16/octubre/1985","Sunday, 24 de February de 2013 a horas: 01:47:41 am","soltero(a)","masculino","apto","Lima 34","5","irubenv","100-99-885","ordinario","9");
INSERT INTO postulante VALUES("201310000037","pedro luis","gallo","urrutia","psj. los pinos 2050","42051212","993402486","2569352","pluis@yahoo.es","1/enero/1998","Monday, 25 de February de 2013 a horas: 11:27:42 pm","soltero(a)","masculino","apto","Lima 42","1","irubenv","99-45-5356","ordinario","6");
INSERT INTO postulante VALUES("201310000038","marita liz","vargas","rosas","av. los piuranos 1235","10559636","99526340","2875964","ma_liz@yahoo.es","1/enero/1998","Monday, 25 de February de 2013 a horas: 11:34:39 pm","conviviente","femenino","apto","Callao 06","5","irubenv","99-556-25","ordinario","1");
INSERT INTO postulante VALUES("201310000039","luz sandra","binuta","solorzano","psj. alcanfores 4578","50223635","99245632","2896352","l_ma@yahoo.com","1/enero/1998","Monday, 25 de February de 2013 a horas: 11:36:04 pm","separado(a)","femenino","apto","Lima 10","14","irubenv","99-85-896","ordinario","9");
INSERT INTO postulante VALUES("201310000040","eloy manuel","perez","vela","calle 212 mz n lote 56","21445698","995236598","2875693","eloy@hayoo.es","1/diciembre/1998","Monday, 25 de February de 2013 a horas: 11:37:14 pm","divorciado(a)","masculino","apto","Callao 05","1","irubenv","99-66-5521","ordinario","10");
INSERT INTO postulante VALUES("201310000041","pedro miguel","alcazar","benites","av. wiesse 4562","45112326","99562358","4503265","pmiguel@yahoo.es","18/septiembre/1982","Monday, 25 de February de 2013 a horas: 11:38:24 pm","soltero(a)","masculino","apto","Lima 03","9","irubenv","99-565-45","ordinario","1");
INSERT INTO postulante VALUES("201310000042","ana maria","francia","changra","av. enrique openheimer 455","10025369","992431427","4502635","amaria@yahoo.es","1/enero/1998","Wednesday, 27 de February de 2013 a horas: 12:48:27 pm","soltero(a)","femenino","apto","Lima 29","5","irubenv","999-555-66","ordinario","0");
INSERT INTO postulante VALUES("201310000043","cecilia ","francia","changra","av. enrique openheimer 455","10025698","993402486","4502635","cecilia_fran@tans.com","19/noviembre/1979","Wednesday, 27 de February de 2013 a horas: 12:54:11 pm","casado(a)","femenino","apto","Lima 29","6","irubenv","99-99-999","ordinario","5");
INSERT INTO postulante VALUES("201310000044","florinda","meza","soriano","av. los pericos 4512","41558962","985623456","3524178","flor_meza@hotmail.com","31/octubre/1981","Wednesday, 27 de February de 2013 a horas: 01:43:44 pm","separado(a)","femenino","apto","Callao 04","1","irubenv","9595-9898","ordinario","5");





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

INSERT INTO privilegios VALUES("1","../admision/indexRegPostulante.php","Registrar Postulante","admision","1","Registra datos de postulante a admision","../img/registrarpostulante.png");
INSERT INTO privilegios VALUES("2","../admision/indexEditPostulante.php","Editar Postulante","admision","2","Permite cambiar los datos ingresados de un postulante e imprimir nuevamente la ficha de inscripcion","../img/editar.png");
INSERT INTO privilegios VALUES("3","../admision/indexInsertResultado.php","Registrar resultados","admision","8","Registra los resultados por carrera","../img/registrarResultado.png");
INSERT INTO privilegios VALUES("4","../admision/indexReporteResultado.php","Reportar resultados","admision","12","Genera el reporte final de ingresantes","../img/reportarResultado.png");
INSERT INTO privilegios VALUES("5","../admision/indexReporteInscripciones.php","Reporte Inscripciones","admision","3","Genera un informe detallado de el avance por carrera de la cantidad de postulantes inscritos","../img/reporteInscripcion.png");
INSERT INTO privilegios VALUES("6","../user/indexRegUser.php","Registrar Usuario","usuario","1","permite registrar los datos de un nuevo usuario del sistema y asignarle sus privilegios de acceso","../img/registrarUser.png");
INSERT INTO privilegios VALUES("7","../user/indexEditUser.php","Editar Usuario","usuario","2","permite cambiar los datos y privilegios de algún usuario del sistema","../img/editarUser.png");
INSERT INTO privilegios VALUES("9","../user/indexCambiarClave.php","Cambiar Clave","seguridad","2","permite al usuario cambiar su clave","../img/changepassword.png");
INSERT INTO privilegios VALUES("8","../seguridad/indexDesactivarUsuario.php","Desactivar Usuario","seguridad","1","desactiva usuarios por seguridad","../img/desactivarUser.png");
INSERT INTO privilegios VALUES("10","../admision/indexVerEstadisticas.php","Ver Estadisticas","admision","4","permite visualizar  graficos estadisticos de admision","../img/estadistica.png");
INSERT INTO privilegios VALUES("11","../admision/indexInsertResultadoTradicional.php","Registrar Resultados [Tradicional]","admision","9","registra resultados codigo a codigo de cada postulante","../img/registrarResultadoTradicional.png");
INSERT INTO privilegios VALUES("12","../admision/indexGenerarAulas.php","Distribuir Postulantes en Aulas","admision","5","Genera la distribucion aleatoria de postulantes en aulas","../img/distribuirPostulantes.png");
INSERT INTO privilegios VALUES("14","../admision/indexVerDistribucionAulas.php","Reporte de Distribucion de aulas ","admision","7","permite visualizar e imprimir la distribucion de alumnos en aulas","../img/ReporteDistribucionAulas.png");
INSERT INTO privilegios VALUES("13","../admision/IndexInsertSedes.php","Administrar Sedes de Examen","admision","6","permite gestionar las sedes en donde se realizará el examen de admision","../img/VerSedes.png");
INSERT INTO privilegios VALUES("15","../admision/indexCalificarPostulantes.php","Calificar Examen de Admison","admision","10","Permite calificar el examen de admision y obtiene el estado del postulante, si ingreso o no","../img/calificarExamen.png");
INSERT INTO privilegios VALUES("16","../admision/indexControlCalidad.php	","Realizar Control de Calidad","admision","11","permite cotejar los puntajes ingresados, colocando un codigo de postulante valido","../img/controlCalidad.png");
INSERT INTO privilegios VALUES("17","../backupDB/indexBackup.php","Efectuar Backup","usuario","3","permite efectuar un backup de base de datos, crear un archivo con los scripts SQL, con los inserts enteros","../img/hacerBK.png");





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

INSERT INTO puntaje VALUES("201310000001","apto","60","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000002","apto","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000003","calificado","45","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000004","apto","100","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000005","calificado","123","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000006","calificado","12","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000007","calificado","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000008","calificado","34","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000009","calificado","65","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000010","calificado","34","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000011","calificado","12","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000012","calificado","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000013","calificado","45","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000014","apto","65","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000015","calificado","65","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000016","calificado","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000017","calificado","45","1","2","ingreso");
INSERT INTO puntaje VALUES("201310000018","calificado","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000019","calificado","65","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000020","calificado","12","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000021","calificado","65","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000022","calificado","34","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000023","apto","65","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000027","calificado","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000028","calificado","45","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000029","apto","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000030","calificado","34","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000031","calificado","100","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000032","calificado","45","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000033","calificado","45","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000034","calificado","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000035","calificado","65","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000036","calificado","65","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000024","calificado","100","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000040","calificado","34","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000041","calificado","12","1","1","no ingreso");
INSERT INTO puntaje VALUES("201310000025","calificado","123","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000042","apto","0","","","");
INSERT INTO puntaje VALUES("201310000026","calificado","45","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000037","calificado","100","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000038","calificado","123","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000039","calificado","65","1","1","ingreso");
INSERT INTO puntaje VALUES("201310000043","apto","0","","","");
INSERT INTO puntaje VALUES("201310000044","apto","0","","","");





CREATE TABLE `sede` (
  `idSede` int(11) NOT NULL auto_increment,
  `nombreSede` varchar(70) NOT NULL,
  `direccionSede` text,
  `cantidadAulasSede` int(11) default NULL,
  `cantidadPostulantesAulaSede` int(11) default NULL,
  `estadoSede` int(11) default NULL,
  PRIMARY KEY  (`idSede`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO sede VALUES("1","istp julio cesar tello","av. bolivar 100 villa el salvador","20","40","1");
INSERT INTO sede VALUES("2","i.e. 6046 \'los libertadores lima\'","av. alamos 2005 villa el salvador","2","2","0");
INSERT INTO sede VALUES("3","i.e. 6423 \'republica de francia\'","av. micaela bastidas 100, ruta b ves","2","3","0");
INSERT INTO sede VALUES("4","i.e. 3562 inca pachacutec","av. los alamos 1235 ves","4","2","0");
INSERT INTO sede VALUES("5","los  pericos","av brasil 4512 villa maria","5","2","0");
INSERT INTO sede VALUES("6","i.e. 6232 virgen del buen paso","av. pasos perdidos 4512","4","5","0");





CREATE TABLE `seguridad` (
  `numeroSec` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO seguridad VALUES("3261769be720b0fefbfffec05e9d9202");
INSERT INTO seguridad VALUES("032dd17b77fab7d51a476c5ff2b5659c");
INSERT INTO seguridad VALUES("0a7d83f084ec258aefd128569dda03d7");
INSERT INTO seguridad VALUES("69d1fc78dbda242c43ad6590368912d4");





CREATE TABLE `turno` (
  `idTurno` int(11) NOT NULL,
  `nombreTurno` varchar(20) default NULL,
  PRIMARY KEY  (`idTurno`),
  UNIQUE KEY `XPKturno` (`idTurno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO turno VALUES("1","mañana");
INSERT INTO turno VALUES("2","noche");





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

INSERT INTO usuario VALUES("irubenv","faad95253aee7437871781018bdf3309","ignacio ruben","tacza","valverde","quien es mi hermana","lombriz","1");
INSERT INTO usuario VALUES("ecojal","faad95253aee7437871781018bdf3309","eloy humberto","cojal","torres","¿cómo se llama mi mascota?","pedro","1");
INSERT INTO usuario VALUES("pbravo","faad95253aee7437871781018bdf3309","pedro","bravo","pardo","¿cómo se llama mi mascota?","eloy","1");
INSERT INTO usuario VALUES("jreategui","ca4b33532855080dfa79cf8a925d146d","juan","reategui","morales","¿dónde nacio mi abuelo paterno?","felix","0");
INSERT INTO usuario VALUES("adelgado","ef72d53990bc4805684c9b61fa64a102","andrea","delgado","portugal","¿qué apodo le puse a mi hermana?","plastilina","1");



