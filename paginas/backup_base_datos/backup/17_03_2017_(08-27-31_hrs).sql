SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS siffa;

USE siffa;

DROP TABLE IF EXISTS analisis;

CREATE TABLE `analisis` (
  `Idanalisis` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `Numero_Muestreo` int(11) NOT NULL COMMENT 'Esta Columna Es para LLEvar orden segun el numero de muestras para asi tener una estadistica segun el tiempo y el numero de muestraeo (Analisis)',
  `Idlaboratorio` bigint(20) NOT NULL COMMENT 'Nombre del Laboratorio que Realizo el Analisis de Suelo',
  `Idlotecultivo` bigint(20) NOT NULL COMMENT 'Esta llave foranea es para traer el cultivo segun su lote y finca',
  `Clima` varchar(40) NOT NULL COMMENT 'Clima del suelo',
  `Densidad_Aparente` float NOT NULL,
  `PH` float NOT NULL,
  `Profundidad_Muestra` float NOT NULL COMMENT 'Profundidad dela muestra',
  `Materia_Organica` float NOT NULL COMMENT 'Materi Organica',
  `Fosforo` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Aluminio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Calcio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Magnesio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Potasio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Sodio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `CICE` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Azufre` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Hierro` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Manganesio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Cobre` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Zinc` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Boro` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Saturacion_Aluminio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Saturacion_Sodio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `CE` float NOT NULL COMMENT 'Nutrientes del Suelo',
  PRIMARY KEY (`Idanalisis`),
  KEY `Idlaboratorio` (`Idlaboratorio`),
  KEY `Idlotecultivo` (`Idlotecultivo`),
  CONSTRAINT `analisis_ibfk_1` FOREIGN KEY (`Idlaboratorio`) REFERENCES `laboratorio` (`Idlaboratorio`) ON UPDATE CASCADE,
  CONSTRAINT `analisis_ibfk_2` FOREIGN KEY (`Idlotecultivo`) REFERENCES `lotecultivo` (`Idlotecultivo`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO analisis VALUES("1","1","1","3","calido","1","0","1","1","1","1","1","1","1","1","5","1","1","11","1","1","1","20","20","1");
INSERT INTO analisis VALUES("2","2","1","2","calido","1","0","1","1","1","1","1","1","1","1","5","1","1","1","1","1","1","20","20","1");
INSERT INTO analisis VALUES("3","2","1","1","calido","2","0","2","2","2","2","2","2","2","2","10","2","2","2","2","2","2","20","20","2");
INSERT INTO analisis VALUES("4","3","1","1","calido","3","3","3","3","3","3","3","3","3","3","15","3","3","3","3","3","3","20","20","3");



DROP TABLE IF EXISTS aplicacion_fetilizante;

CREATE TABLE `aplicacion_fetilizante` (
  `Idaplicacion_fertilizante` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `Numero_Kilogramos` float NOT NULL COMMENT 'Cantidad de Fertilizantes aplicados',
  `Idlotecultivo` bigint(20) NOT NULL COMMENT 'Cultivo con su respectivo lote y su finca',
  `Idfertilizante` bigint(20) NOT NULL COMMENT 'Fertilizante',
  PRIMARY KEY (`Idaplicacion_fertilizante`),
  KEY `Idlotecultivo` (`Idlotecultivo`),
  KEY `Idfertilizante` (`Idfertilizante`),
  CONSTRAINT `aplicacion_fetilizante_ibfk_1` FOREIGN KEY (`Idlotecultivo`) REFERENCES `lotecultivo` (`Idlotecultivo`) ON UPDATE CASCADE,
  CONSTRAINT `aplicacion_fetilizante_ibfk_2` FOREIGN KEY (`Idfertilizante`) REFERENCES `fertilizantes` (`Idfertilizante`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS ayuda;

CREATE TABLE `ayuda` (
  `IdAyuda` bigint(20) NOT NULL AUTO_INCREMENT,
  `Problema` varchar(500) NOT NULL,
  `archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`IdAyuda`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO ayuda VALUES("1","COMO REGISTRAR FINCA","");
INSERT INTO ayuda VALUES("2","COMO REGISTRAR LOTE","");
INSERT INTO ayuda VALUES("3","COMO REGISTRAR CULTIVO","");
INSERT INTO ayuda VALUES("4","COMO REGISTRAR TIPO DE CULTIVO","");
INSERT INTO ayuda VALUES("5","COMO REGISTRAR FERTILIZANTE","");
INSERT INTO ayuda VALUES("6","COMO REGISTRAR LOTECULTIVO","");
INSERT INTO ayuda VALUES("7","COMO REGISTRAR LABORATORIO","");
INSERT INTO ayuda VALUES("8","COMO REGISTRAR ANALISIS","");
INSERT INTO ayuda VALUES("9","COMO CONSULTAR FINCA","");
INSERT INTO ayuda VALUES("10","COMO CONSULTAR LOTE","");
INSERT INTO ayuda VALUES("11","COMO CONSULTAR CULTIVO","");
INSERT INTO ayuda VALUES("12","COMO CONSULTAR TIPO DE CULTIVO","");
INSERT INTO ayuda VALUES("13","COMO CONSULTAR FERTILIZANTE","");
INSERT INTO ayuda VALUES("14","COMO CONSULTAR LOTECULTIVO","");
INSERT INTO ayuda VALUES("15","COMO CONSULTAR LABORATORIO","");
INSERT INTO ayuda VALUES("16","COMO CONSULTAR ANALISIS","");
INSERT INTO ayuda VALUES("17","COMO EXPORTAR FINCA","");
INSERT INTO ayuda VALUES("18","COMO EXPORTAR LOTE","");
INSERT INTO ayuda VALUES("19","COMO EXPORTAR CULTIVO","");
INSERT INTO ayuda VALUES("20","COMO EXPORTAR FERTILIZANTE","");
INSERT INTO ayuda VALUES("21","COMO INGRESAR LOTE CULTIVO","");
INSERT INTO ayuda VALUES("22","COMO EXPORTAR LABORATORIO","");
INSERT INTO ayuda VALUES("23","COMO INTERPRETAR ANALISIS DE SUELO","");
INSERT INTO ayuda VALUES("24","COMO EXPORTAR ANALISIS","");
INSERT INTO ayuda VALUES("25","COMO REALIZAR COPIA DE SEGURIDAD A LA BASE DE DATOS","");
INSERT INTO ayuda VALUES("26","COMO CAMBIAR CLAVE DEL ADMINISTRADOR","");
INSERT INTO ayuda VALUES("27","QUE ES MODULO CONSULTAS","");
INSERT INTO ayuda VALUES("28","QUE ES MODULO  ACERCA DE ","");
INSERT INTO ayuda VALUES("29","QUE ES MODULO CAPTURA DE DATOS","");
INSERT INTO ayuda VALUES("30","QUE ES MODULO INTERPRETACION DEL SUELO","");
INSERT INTO ayuda VALUES("31","QUE ES MODULO COPIA DE SEGURIDAD","");
INSERT INTO ayuda VALUES("32","QUE ES MODULO CONFIGURACIONES","");
INSERT INTO ayuda VALUES("33","COMO EXPORTAR LOTECULTIVO","");



DROP TABLE IF EXISTS clima;

CREATE TABLE `clima` (
  `Idclima` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`Idclima`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO clima VALUES("1","Frio");
INSERT INTO clima VALUES("2","Medio");
INSERT INTO clima VALUES("3","Calido");



DROP TABLE IF EXISTS cultivo;

CREATE TABLE `cultivo` (
  `idcultivo` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `NombreCultivo` varchar(50) NOT NULL COMMENT 'Nombre Cultivo para la Idenificacion',
  `Idtipo_cultivo` bigint(20) NOT NULL COMMENT 'Tipo de Cultivo',
  `idrequerimiento` bigint(20) NOT NULL COMMENT 'Nutrientes de este Cultivo',
  PRIMARY KEY (`idcultivo`),
  KEY `idrequerimiento` (`idrequerimiento`),
  KEY `Idtipo_cultivo` (`Idtipo_cultivo`),
  CONSTRAINT `cultivo_ibfk_1` FOREIGN KEY (`idrequerimiento`) REFERENCES `requerimiento` (`idrequerimiento`) ON UPDATE CASCADE,
  CONSTRAINT `cultivo_ibfk_2` FOREIGN KEY (`Idtipo_cultivo`) REFERENCES `tipo_cultivo` (`Idtipo_cultivo`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO cultivo VALUES("1","CEBADA","1","1");
INSERT INTO cultivo VALUES("2","TRIGO","1","2");
INSERT INTO cultivo VALUES("3","AVENA","1","3");
INSERT INTO cultivo VALUES("4","MAIZ (HIBRIDO)","1","4");
INSERT INTO cultivo VALUES("5","MAIZ (HIBRIDO-VAR)","1","5");
INSERT INTO cultivo VALUES("6","SORGO","1","6");
INSERT INTO cultivo VALUES("7","ARROZ RIEGO (LLANOS)","1","7");
INSERT INTO cultivo VALUES("8","ARROZ RIEGO","1","8");
INSERT INTO cultivo VALUES("9","ARROZ RIEGO (TOL)","1","9");
INSERT INTO cultivo VALUES("10","ARROZ RIEGO (HUILA)","1","10");
INSERT INTO cultivo VALUES("11","PAPA (VAR.)","2","11");
INSERT INTO cultivo VALUES("12","PAPA (VAR. R-12)","2","12");
INSERT INTO cultivo VALUES("13","YUCA","2","13");
INSERT INTO cultivo VALUES("14","BATATA","2","14");
INSERT INTO cultivo VALUES("15","NAME","2","15");
INSERT INTO cultivo VALUES("16","REMOLACHA AZUCAR","2","16");
INSERT INTO cultivo VALUES("17","PAPA CRIOLLA","2","17");
INSERT INTO cultivo VALUES("18","TOMATE","3","18");
INSERT INTO cultivo VALUES("19","ESPARRAGOS","3","19");
INSERT INTO cultivo VALUES("20","ZANAHORIA","3","20");
INSERT INTO cultivo VALUES("21","COLIFLOR","3","21");
INSERT INTO cultivo VALUES("22","REPOLLO","3","22");
INSERT INTO cultivo VALUES("23","APIO","3","23");
INSERT INTO cultivo VALUES("24","LECHUGA","3","24");
INSERT INTO cultivo VALUES("25","CEBOLLA CABEZONA","3","25");
INSERT INTO cultivo VALUES("26","CEBOLLA","3","26");
INSERT INTO cultivo VALUES("27","REMOLACHA","3","27");
INSERT INTO cultivo VALUES("28","ESPINACAS","3","28");
INSERT INTO cultivo VALUES("29","BERENJENA","3","29");
INSERT INTO cultivo VALUES("30","PEPINO COHOMBRO","3","30");
INSERT INTO cultivo VALUES("31","PEPINO COHOMBRO","3","30");
INSERT INTO cultivo VALUES("32","FRIJOL VERDE","3","31");
INSERT INTO cultivo VALUES("33","AJO","3","33");
INSERT INTO cultivo VALUES("34","AJI (CAPSICUM)","3","34");
INSERT INTO cultivo VALUES("35","PEPINILLO","3","35");
INSERT INTO cultivo VALUES("36","HABICHUELA","3","36");
INSERT INTO cultivo VALUES("37","PIMENTON (HIBRIDO)","3","37");
INSERT INTO cultivo VALUES("38","HABA","4","38");
INSERT INTO cultivo VALUES("39","FRIJOL","4","39");
INSERT INTO cultivo VALUES("40","HABICHUELA","4","40");
INSERT INTO cultivo VALUES("41","GUISANTE","4","41");
INSERT INTO cultivo VALUES("42","ALFALFA","4","42");
INSERT INTO cultivo VALUES("43","ALVERJON","4","43");
INSERT INTO cultivo VALUES("44","ARVEJA","4","44");
INSERT INTO cultivo VALUES("45","SOYA (VAR.)","5","45");



DROP TABLE IF EXISTS departamento;

CREATE TABLE `departamento` (
  `Iddepartamento` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `NombreDepartamento` varchar(50) NOT NULL COMMENT 'Nombre del Departamento, Este Campo es para identificar la ubicacion',
  PRIMARY KEY (`Iddepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO departamento VALUES("1","Amazonas");
INSERT INTO departamento VALUES("2","Antioquia");
INSERT INTO departamento VALUES("3"," Arauca");
INSERT INTO departamento VALUES("4","Atlantico");
INSERT INTO departamento VALUES("5","Bolivar");
INSERT INTO departamento VALUES("6","Boyaca");
INSERT INTO departamento VALUES("7","Caldas");
INSERT INTO departamento VALUES("8","Caqueta");
INSERT INTO departamento VALUES("9","Casanare");
INSERT INTO departamento VALUES("10","Cauca");
INSERT INTO departamento VALUES("11","Cesar");
INSERT INTO departamento VALUES("12","Choco");
INSERT INTO departamento VALUES("13","Cordoba");
INSERT INTO departamento VALUES("14","Cundinamarca");
INSERT INTO departamento VALUES("15","Guainia");
INSERT INTO departamento VALUES("16","Guaviare");
INSERT INTO departamento VALUES("17","Huila");
INSERT INTO departamento VALUES("18","La Guajira");
INSERT INTO departamento VALUES("19","Magdalena");
INSERT INTO departamento VALUES("20","Meta");
INSERT INTO departamento VALUES("21","Narino");
INSERT INTO departamento VALUES("22","Norte de Santander");
INSERT INTO departamento VALUES("23","Putumayo");
INSERT INTO departamento VALUES("24","Quindio");
INSERT INTO departamento VALUES("25","Risaralda");
INSERT INTO departamento VALUES("26","San Andres y Providencia");
INSERT INTO departamento VALUES("27","Santander");
INSERT INTO departamento VALUES("28","Sucre");
INSERT INTO departamento VALUES("29","Tolima");
INSERT INTO departamento VALUES("30","Valle del Cauca");
INSERT INTO departamento VALUES("31","Vaupes");
INSERT INTO departamento VALUES("32","Vichada");



DROP TABLE IF EXISTS disponibilidad_segun_ph;

CREATE TABLE `disponibilidad_segun_ph` (
  `Iddisponibilidad` int(11) NOT NULL AUTO_INCREMENT,
  `Idph` int(11) NOT NULL,
  `N` float NOT NULL,
  `P` float NOT NULL,
  `K` float NOT NULL,
  `S` float NOT NULL,
  `Ca` float NOT NULL,
  `Mg` float NOT NULL,
  `Fe` float NOT NULL,
  `Mn` float NOT NULL,
  `B` float NOT NULL,
  `Zn` float NOT NULL,
  `Cu` float NOT NULL,
  `Mo` float NOT NULL,
  PRIMARY KEY (`Iddisponibilidad`),
  KEY `Idph` (`Idph`),
  CONSTRAINT `disponibilidad_segun_ph_ibfk_1` FOREIGN KEY (`Idph`) REFERENCES `ph` (`Idph`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO disponibilidad_segun_ph VALUES("1","1","0.01","0.1","0.1","0.1","0.1","0.1","1","0.3","0.3","0.3","0.3","0.1");
INSERT INTO disponibilidad_segun_ph VALUES("2","2","0.25","0.25","0.25","0.25","0.25","0.25","1","0.4","0.4","0.4","0.4","0.2");
INSERT INTO disponibilidad_segun_ph VALUES("3","3","0.3","0.3","0.3","0.3","0.3","0.3","1","0.6","0.6","0.6","0.6","0.3");
INSERT INTO disponibilidad_segun_ph VALUES("4","4","0.45","0.4","0.43","0.43","0.43","0.43","1","1","1","1","1","0.3");
INSERT INTO disponibilidad_segun_ph VALUES("5","5","0.8","0.45","0.8","0.8","0.5","0.5","1","1","1","1","1","0.4");
INSERT INTO disponibilidad_segun_ph VALUES("6","6","1","0.8","1","1","0.8","0.8","1","1","1","1","1","0.7");
INSERT INTO disponibilidad_segun_ph VALUES("7","7","1","1","1","1","1","1","0.8","1","1","1","1","0.9");
INSERT INTO disponibilidad_segun_ph VALUES("8","8","1","0.8","1","1","1","1","0.5","0.9","0.5","0.6","0.6","1");
INSERT INTO disponibilidad_segun_ph VALUES("9","9","0.7","0.4","1","1","1","1","0.4","0.7","0.4","0.3","0.3","1");
INSERT INTO disponibilidad_segun_ph VALUES("10","10","0.4","0.5","1","1","0.8","0.8","0.3","0.4","0.7","0.2","0.2","1");
INSERT INTO disponibilidad_segun_ph VALUES("11","11","0.3","1","1","1","0.4","0.4","0.2","0.2","1","0.1","1","1");



DROP TABLE IF EXISTS fertilizantes;

CREATE TABLE `fertilizantes` (
  `Idfertilizante` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `NombreFertilizante` varchar(50) NOT NULL COMMENT 'Nombre del Fertilizantes Con sus Propiedades',
  `Nitrogeno` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Fosforo` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Potasio` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Calcio` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Magnesio` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Azufre` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Zinc` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Boro` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Cobre` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  PRIMARY KEY (`Idfertilizante`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO fertilizantes VALUES("1","ABOCOL 10-20-20","10","20","20","3","0","0","0","0","0");
INSERT INTO fertilizantes VALUES("2","ABOCOL 10-30-10","10","30","10","3","0","0","0","0","0");
INSERT INTO fertilizantes VALUES("3","ABOCOL 12-24-12","12","24","12","3","0","0","0","0","0");
INSERT INTO fertilizantes VALUES("4","ABOCOL 12-26-12","12","26","12","3.5","0","0","0","0","0");
INSERT INTO fertilizantes VALUES("5","ABOCOL 13-26-6","13","16","6","0","0","7","0","0","0");
INSERT INTO fertilizantes VALUES("6","RAFOS (12-24-12-2)","12","24","12","2","2","1","0.2","0.4","0");
INSERT INTO fertilizantes VALUES("7","PLAN-K (10-14-23-2)","10","15","23","2","2","1","0.1","0.1","0");
INSERT INTO fertilizantes VALUES("8","TRIPLE 14 (14-14-14)","14","14","14","3.5","0","0","0","0","0");
INSERT INTO fertilizantes VALUES("9","ABOCOL (14-14-14-2)","14","14","14","1.5","2","4.5","0","0","0");
INSERT INTO fertilizantes VALUES("10","TRIPLE 15 (15-15-15-2)","15","15","15","2.5","0","0","0","0","0");
INSERT INTO fertilizantes VALUES("11","ABOCOL (17-17-17)","17","17","17","0","0","0","0","0","0");
INSERT INTO fertilizantes VALUES("12","CONPLEX (27-6-3-2)","27","6","3","0","2","4","0","0","0");
INSERT INTO fertilizantes VALUES("13","ABOCOL-LECHERO(25-10-5-1)","25","10","5","0","1","1","0","0","0");
INSERT INTO fertilizantes VALUES("14","NIPOTK-6MGO (18-5-15-6)","18","5","15","1","6","1","0","0.6","0");
INSERT INTO fertilizantes VALUES("15","MINOX (10-5-5-5) MENORES","10","5","5","14","5","3","3","1","0");
INSERT INTO fertilizantes VALUES("16","ABOCOL (25-14-0-2)","25","14","0","0","2","0","0","0","0");
INSERT INTO fertilizantes VALUES("17","FERTIL-INDIA(24-14-3-2)","23","14","3","0","2","0","0","0","0");
INSERT INTO fertilizantes VALUES("18","REMITAL-M 17-6-18-2","17","6","18","2.5","2","1.6","0.1","0.2","0");



DROP TABLE IF EXISTS hacienda;

CREATE TABLE `hacienda` (
  `Idhacienda` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre de la finca para su identificacion',
  `Fax` varchar(50) NOT NULL COMMENT 'Fax para enviar su plan nutricional para que el cliente no salga de su hogar',
  `Telefono` int(11) NOT NULL,
  `Idvereda` bigint(20) NOT NULL COMMENT 'Vereda A la que pertenece esa finca',
  `Tamano` float NOT NULL COMMENT 'Tamaño En Hectareas',
  PRIMARY KEY (`Idhacienda`),
  KEY `Idvereda` (`Idvereda`),
  CONSTRAINT `hacienda_ibfk_1` FOREIGN KEY (`Idvereda`) REFERENCES `vereda` (`Idvereda`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hacienda VALUES("1","SENA","123123123","2147483647","14","90");
INSERT INTO hacienda VALUES("2","CHAPARRAL","85785875","646463","6","100");



DROP TABLE IF EXISTS laboratorio;

CREATE TABLE `laboratorio` (
  `Idlaboratorio` bigint(20) NOT NULL AUTO_INCREMENT,
  `Nombre_Laboratorio` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Idmunicipio` bigint(20) NOT NULL,
  PRIMARY KEY (`Idlaboratorio`),
  KEY `Idmunicipio` (`Idmunicipio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO laboratorio VALUES("1","ICA","CLL 9 NUMERO 28DNS","32123132","15");



DROP TABLE IF EXISTS lote;

CREATE TABLE `lote` (
  `Idlote` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `NumeroLote` int(50) NOT NULL COMMENT 'Numero del lote en la finca',
  `IdHacienda` bigint(20) NOT NULL COMMENT 'Hacienda A la Cual pertenece el lote',
  `latitud` varchar(50) NOT NULL COMMENT 'Coordenadas geograficas',
  `longitud` varchar(50) NOT NULL COMMENT 'Cordenadas Geograficas',
  `Ha` float NOT NULL COMMENT 'Tamaño En Hectareas',
  PRIMARY KEY (`Idlote`),
  KEY `IdHacienda` (`IdHacienda`),
  CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`IdHacienda`) REFERENCES `hacienda` (`Idhacienda`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO lote VALUES("1","1","1","2314192340982","12341234","20");
INSERT INTO lote VALUES("2","2","1","2314192340982","12341234","20");
INSERT INTO lote VALUES("3","3","1","2314192340982","12341234","20");
INSERT INTO lote VALUES("4","4","1","2314192340982","12341234","20");
INSERT INTO lote VALUES("5","1","2","242314","123424","30");
INSERT INTO lote VALUES("6","4","2","242314","123424","30");
INSERT INTO lote VALUES("7","2","2","242314","123424","30");
INSERT INTO lote VALUES("8","3","2","242314","123424","10");
INSERT INTO lote VALUES("9","5","1","4321324","513451234","3");



DROP TABLE IF EXISTS lotecultivo;

CREATE TABLE `lotecultivo` (
  `Idlotecultivo` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `Idlote` bigint(20) NOT NULL COMMENT 'Numero del lote en la finca',
  `idcultivo` bigint(20) NOT NULL COMMENT 'Cultivo que tiene el lote',
  `Extension` float NOT NULL COMMENT 'Extension del cultivo en el lote',
  PRIMARY KEY (`Idlotecultivo`),
  KEY `Idlote` (`Idlote`),
  KEY `idcultivo` (`idcultivo`),
  CONSTRAINT `lotecultivo_ibfk_1` FOREIGN KEY (`Idlote`) REFERENCES `lote` (`Idlote`) ON UPDATE CASCADE,
  CONSTRAINT `lotecultivo_ibfk_2` FOREIGN KEY (`idcultivo`) REFERENCES `cultivo` (`idcultivo`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO lotecultivo VALUES("1","1","7","10");
INSERT INTO lotecultivo VALUES("2","1","8","10");
INSERT INTO lotecultivo VALUES("3","2","2","10");
INSERT INTO lotecultivo VALUES("4","2","15","10");
INSERT INTO lotecultivo VALUES("5","3","1","10");
INSERT INTO lotecultivo VALUES("6","3","41","10");
INSERT INTO lotecultivo VALUES("7","7","10","12");
INSERT INTO lotecultivo VALUES("8","7","6","12");
INSERT INTO lotecultivo VALUES("9","5","12","12");
INSERT INTO lotecultivo VALUES("10","5","37","12");
INSERT INTO lotecultivo VALUES("11","8","38","10");
INSERT INTO lotecultivo VALUES("12","6","45","1");



DROP TABLE IF EXISTS mineralizacion;

CREATE TABLE `mineralizacion` (
  `Idmineralizacion` int(11) NOT NULL AUTO_INCREMENT,
  `Idclima` int(11) NOT NULL,
  `RM` float NOT NULL,
  PRIMARY KEY (`Idmineralizacion`),
  KEY `Idclima` (`Idclima`),
  CONSTRAINT `mineralizacion_ibfk_1` FOREIGN KEY (`Idclima`) REFERENCES `clima` (`Idclima`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO mineralizacion VALUES("1","1","0.015");
INSERT INTO mineralizacion VALUES("2","2","0.02");
INSERT INTO mineralizacion VALUES("3","3","0.027");



DROP TABLE IF EXISTS municipio;

CREATE TABLE `municipio` (
  `Idmunicipio` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `Nombre_Municipio` varchar(50) NOT NULL COMMENT 'Nombre del Municipio, Este Campo es para identificar la ubicacion',
  `Iddepartamento` bigint(20) NOT NULL COMMENT 'Nombre del Departamento al que pertenece el municipio',
  PRIMARY KEY (`Idmunicipio`),
  KEY `Iddepartamento` (`Iddepartamento`),
  CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`Iddepartamento`) REFERENCES `departamento` (`Iddepartamento`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO municipio VALUES("1","Alpujarra","29");
INSERT INTO municipio VALUES("2","Alvarado","29");
INSERT INTO municipio VALUES("3","Ambalema","29");
INSERT INTO municipio VALUES("4","Anzoategui","29");
INSERT INTO municipio VALUES("5","Armero Guayabal","29");
INSERT INTO municipio VALUES("6","Ataco","29");
INSERT INTO municipio VALUES("7","Cajamarca","29");
INSERT INTO municipio VALUES("8","Carmen de Apicala","29");
INSERT INTO municipio VALUES("9","Casabianca","29");
INSERT INTO municipio VALUES("10","Chaparral","29");
INSERT INTO municipio VALUES("11","Coello","29");
INSERT INTO municipio VALUES("12","Coyaima","29");
INSERT INTO municipio VALUES("13","Cunday","29");
INSERT INTO municipio VALUES("14","Dolores","29");
INSERT INTO municipio VALUES("15","Espinal","29");
INSERT INTO municipio VALUES("16","Guamo","29");
INSERT INTO municipio VALUES("17","Falan","29");
INSERT INTO municipio VALUES("18","Flandes","29");
INSERT INTO municipio VALUES("19","Fresno","29");
INSERT INTO municipio VALUES("20","Herveo","29");
INSERT INTO municipio VALUES("21","San Sebastián de Mariquita","29");
INSERT INTO municipio VALUES("22","Honda","29");
INSERT INTO municipio VALUES("23","Ibague","29");
INSERT INTO municipio VALUES("24","Icononzo","29");
INSERT INTO municipio VALUES("25","Lerida","29");
INSERT INTO municipio VALUES("26","Libano","29");
INSERT INTO municipio VALUES("27","Melgar","29");
INSERT INTO municipio VALUES("28","Murillo","29");
INSERT INTO municipio VALUES("29","Natagaima","29");
INSERT INTO municipio VALUES("30","Ortega","29");
INSERT INTO municipio VALUES("31","Palocabildo","29");
INSERT INTO municipio VALUES("32","Piedras","29");
INSERT INTO municipio VALUES("33","Planadas","29");
INSERT INTO municipio VALUES("34","Prado","29");
INSERT INTO municipio VALUES("35","Purificacion","29");
INSERT INTO municipio VALUES("36","Rioblanco","29");
INSERT INTO municipio VALUES("37","Roncesvalles","29");
INSERT INTO municipio VALUES("38","Rovira","29");
INSERT INTO municipio VALUES("39","San Antonio","29");
INSERT INTO municipio VALUES("40","San Luis","29");
INSERT INTO municipio VALUES("41","Sebastián de Mariquita","29");
INSERT INTO municipio VALUES("42","Santa Isabel","29");
INSERT INTO municipio VALUES("43","Suárez","29");
INSERT INTO municipio VALUES("44","Valle de San Juan","29");
INSERT INTO municipio VALUES("45","Venadillo","29");
INSERT INTO municipio VALUES("46","Villahermosa","29");
INSERT INTO municipio VALUES("47","Villarrica","29");



DROP TABLE IF EXISTS parametro_materia;

CREATE TABLE `parametro_materia` (
  `Idparametro_materia` bigint(20) NOT NULL AUTO_INCREMENT,
  `Idclima` int(11) NOT NULL,
  `Nombre_Materia` varchar(50) NOT NULL,
  `numero_bajo` float NOT NULL,
  `numero_alto` float NOT NULL,
  PRIMARY KEY (`Idparametro_materia`),
  KEY `Idclima` (`Idclima`),
  CONSTRAINT `parametro_materia_ibfk_1` FOREIGN KEY (`Idclima`) REFERENCES `clima` (`Idclima`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO parametro_materia VALUES("1","2","MO","5","3");
INSERT INTO parametro_materia VALUES("2","3","MO","4","2");
INSERT INTO parametro_materia VALUES("3","1","MO","10","5");
INSERT INTO parametro_materia VALUES("4","2","CO","2.9","1.7");
INSERT INTO parametro_materia VALUES("5","3","CO","2.3","1.1");
INSERT INTO parametro_materia VALUES("6","1","CO","5.7","2.9");



DROP TABLE IF EXISTS parametros_encalamiento;

CREATE TABLE `parametros_encalamiento` (
  `Idparametros_encalamiento` int(11) NOT NULL AUTO_INCREMENT,
  `Cantidad_ph` float NOT NULL,
  `Cantidad_Materia_Organica` float NOT NULL,
  PRIMARY KEY (`Idparametros_encalamiento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO parametros_encalamiento VALUES("1","5.5","10");



DROP TABLE IF EXISTS parametros_nutrientes;

CREATE TABLE `parametros_nutrientes` (
  `Idparametro_nutriente` bigint(20) NOT NULL AUTO_INCREMENT,
  `Nombre_nutriente` varchar(50) NOT NULL,
  `Numero_Bajo` float NOT NULL,
  `Numero_Alto` float NOT NULL,
  PRIMARY KEY (`Idparametro_nutriente`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO parametros_nutrientes VALUES("1","P","15","40");
INSERT INTO parametros_nutrientes VALUES("2","K","0.2","0.4");
INSERT INTO parametros_nutrientes VALUES("3","Ca","3","6");
INSERT INTO parametros_nutrientes VALUES("4","Mg","1.5","2.5");
INSERT INTO parametros_nutrientes VALUES("5","Na","0.1","0.5");
INSERT INTO parametros_nutrientes VALUES("6","Al","1","2.5");
INSERT INTO parametros_nutrientes VALUES("7","S","8","12");
INSERT INTO parametros_nutrientes VALUES("8","Fe","20","100");
INSERT INTO parametros_nutrientes VALUES("9","Mn","10","25");
INSERT INTO parametros_nutrientes VALUES("10","Cu","1","3");
INSERT INTO parametros_nutrientes VALUES("11","B","0.3","0.6");
INSERT INTO parametros_nutrientes VALUES("12","Zn","2","4");
INSERT INTO parametros_nutrientes VALUES("13","CICE","3","6");
INSERT INTO parametros_nutrientes VALUES("14","porcentaje_Al","15","30");
INSERT INTO parametros_nutrientes VALUES("15","porcentaje_Na","7","15");



DROP TABLE IF EXISTS ph;

CREATE TABLE `ph` (
  `Idph` int(11) NOT NULL AUTO_INCREMENT,
  `Calificacion` varchar(50) NOT NULL,
  `Numero_menor` float NOT NULL,
  `Numero_Mayor` float NOT NULL,
  PRIMARY KEY (`Idph`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO ph VALUES("1","Ultra Acido","0","3.5");
INSERT INTO ph VALUES("2","Extremadanamente Acido","3.5","4.5");
INSERT INTO ph VALUES("3","Muy fuertemente acido","4.6","5");
INSERT INTO ph VALUES("4","Fuertemente acido","5.1","5.5");
INSERT INTO ph VALUES("5","Moderadamente acido","5.6","6");
INSERT INTO ph VALUES("6","Ligeramente Acido","6.1","6.5");
INSERT INTO ph VALUES("7","Neutro","6.6","7.3");
INSERT INTO ph VALUES("8","Ligeramente alcalino","7.4","7.8");
INSERT INTO ph VALUES("9","Moderadamente Alcalino","7.9","8.4");
INSERT INTO ph VALUES("10","Fuertemente Alcalino","8.5","9");
INSERT INTO ph VALUES("11","Extremadanamente Alcalino","0","9");



DROP TABLE IF EXISTS requerimiento;

CREATE TABLE `requerimiento` (
  `idrequerimiento` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `Nitrogeno` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Fosforo` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Potasio` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Calcio` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Magnesio` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Azufre` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Zinc` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Boro` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Cobre` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  PRIMARY KEY (`idrequerimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO requerimiento VALUES("1","150","55","150","30","25","20","0","0","0");
INSERT INTO requerimiento VALUES("2","170","75","175","40","30","30","0","0","0");
INSERT INTO requerimiento VALUES("3","150","45","160","35","15","20","0","0","0");
INSERT INTO requerimiento VALUES("4","160","65","160","40","65","30","1.3","1.2","0.8");
INSERT INTO requerimiento VALUES("5","120","50","120","30","50","25","1","1","0.5");
INSERT INTO requerimiento VALUES("6","120","40","100","25","30","15","1","0.5","0.5");
INSERT INTO requerimiento VALUES("7","120","60","125","40","41","12","3","1","0.3");
INSERT INTO requerimiento VALUES("8","100","50","160","25","20","10","2.5","0.2","0.1");
INSERT INTO requerimiento VALUES("9","180","65","112","35","30","20","3","0.5","0.2");
INSERT INTO requerimiento VALUES("10","154","25","112","30","26","25","3.5","0.4","0.2");
INSERT INTO requerimiento VALUES("11","150","70","280","50","45","18","0.5","1.5","0.1");
INSERT INTO requerimiento VALUES("12","170","80","310","60","50","20","0.8","2","0.15");
INSERT INTO requerimiento VALUES("13","150","70","350","35","40","20","0.5","0.5","0.05");
INSERT INTO requerimiento VALUES("14","190","75","340","15","65","19","0.2","0.15","0.1");
INSERT INTO requerimiento VALUES("15","140","40","190","10","20","10","0","0","0");
INSERT INTO requerimiento VALUES("16","200","39","250","50","54","35","0.5","0.15","0.05");
INSERT INTO requerimiento VALUES("17","120","40","210","35","30","20","0.5","1.5","0.15");
INSERT INTO requerimiento VALUES("18","140","65","190","60","25","30","1","1.5","0.5");
INSERT INTO requerimiento VALUES("19","120","60","150","30","20","10","0.5","1.5","0.15");
INSERT INTO requerimiento VALUES("20","150","50","240","100","30","30","0.8","0.8","0.5");
INSERT INTO requerimiento VALUES("21","250","44","292","70","20","15","0.15","0.05","0.02");
INSERT INTO requerimiento VALUES("22","175","69","200","5","38","18","0.6","0.02","0.01");
INSERT INTO requerimiento VALUES("23","200","80","300","0","25","0","0","0","0");
INSERT INTO requerimiento VALUES("24","90","90","160","5","15","12","0.5","0.05","0.05");
INSERT INTO requerimiento VALUES("25","120","80","150","40","10","18","0.25","0.4","0.2");
INSERT INTO requerimiento VALUES("26","85","50","160","20","15","20","0.2","0.4","0.02");
INSERT INTO requerimiento VALUES("27","150","50","220","40","50","30","0.3","0.5","0.1");
INSERT INTO requerimiento VALUES("28","120","45","200","5","35","0","0","0","0");
INSERT INTO requerimiento VALUES("29","175","40","300","10","30","10","0.5","0.3","0.1");
INSERT INTO requerimiento VALUES("30","170","50","120","30","60","10","0.4","0.3","0.1");
INSERT INTO requerimiento VALUES("31","170","50","120","30","60","10","0.4","0.3","0.1");
INSERT INTO requerimiento VALUES("32","130","40","160","15","30","5","0.5","0.1","0.1");
INSERT INTO requerimiento VALUES("33","15","5","15","5","12","10","0.1","0.1","0.05");
INSERT INTO requerimiento VALUES("34","110","50","130","40","18","20","1","1.5","0.2");
INSERT INTO requerimiento VALUES("35","70","50","120","30","60","12","1.5","1","0.3");
INSERT INTO requerimiento VALUES("36","175","20","150","50","20","20","0.43","0.32","0.25");
INSERT INTO requerimiento VALUES("37","160","65","180","30","60","15","1","1.5","0.2");
INSERT INTO requerimiento VALUES("38","160","45","120","15","20","5","0","0","0");
INSERT INTO requerimiento VALUES("39","105","40","120","50","15","15","0.3","0.4","0.2");
INSERT INTO requerimiento VALUES("40","135","24","52","40","15","15","0.3","0.4","0.2");
INSERT INTO requerimiento VALUES("41","125","35","80","10","15","10","0.2","0.2","0.2");
INSERT INTO requerimiento VALUES("42","170","46","150","5","25","12","0","0","0");
INSERT INTO requerimiento VALUES("43","70","10","55","8","10","5","0.3","0.2","0.15");
INSERT INTO requerimiento VALUES("44","125","30","75","50","20","20","0.43","0.32","0.25");
INSERT INTO requerimiento VALUES("45","220","40","170","45","40","20","2","0.5","0.15");



DROP TABLE IF EXISTS tipo_cultivo;

CREATE TABLE `tipo_cultivo` (
  `Idtipo_cultivo` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre del Tipo de cultivo para identificarlo es decir Cereales,Hortalizas ETC..',
  PRIMARY KEY (`Idtipo_cultivo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO tipo_cultivo VALUES("1","CEREALES");
INSERT INTO tipo_cultivo VALUES("2","TUBERCULOS Y RAICES");
INSERT INTO tipo_cultivo VALUES("3","HORTALIZAS");
INSERT INTO tipo_cultivo VALUES("4","LEGUMINOSAS");
INSERT INTO tipo_cultivo VALUES("5","OLEAGINOSAS");
INSERT INTO tipo_cultivo VALUES("6","ESTIMULANTES E INDUSTRIALES");
INSERT INTO tipo_cultivo VALUES("7","FRUTALES");
INSERT INTO tipo_cultivo VALUES("8","PASTOS");
INSERT INTO tipo_cultivo VALUES("9","ENSILAJE");
INSERT INTO tipo_cultivo VALUES("10","FLORES");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `Idusuario` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `Usuario` varchar(50) NOT NULL COMMENT 'Usuario para utilizar en el login no debe ser igual al nombre',
  `Rol` varchar(50) NOT NULL COMMENT 'Rol para saber sus privilegios',
  `password` varchar(200) NOT NULL COMMENT 'contraseña utilizada en el login',
  PRIMARY KEY (`Idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("1","Administrador","Administrador","$2y$12$8agwUIhljQMjgOP./FzAL.Uey8FqnviDMSRVqDg6SF3yugZnrOqO2");
INSERT INTO usuario VALUES("2","Consulta","Consulta","");



DROP TABLE IF EXISTS vereda;

CREATE TABLE `vereda` (
  `Idvereda` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `NombreVereda` varchar(50) NOT NULL COMMENT 'Nombre de la Vereda para saber su ubicacion',
  `Idmunicipio` bigint(20) NOT NULL COMMENT 'Nombre del municipio en el cual se encuentra la vereda',
  PRIMARY KEY (`Idvereda`),
  KEY `Idmunicipio` (`Idmunicipio`),
  CONSTRAINT `vereda_ibfk_1` FOREIGN KEY (`Idmunicipio`) REFERENCES `municipio` (`Idmunicipio`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO vereda VALUES("1","La Arenosa","15");
INSERT INTO vereda VALUES("2","Coyarco","15");
INSERT INTO vereda VALUES("3","La Trinidad","15");
INSERT INTO vereda VALUES("4","Guadualejo","15");
INSERT INTO vereda VALUES("5","San Francisco Centro","15");
INSERT INTO vereda VALUES("6","La Caimanera","15");
INSERT INTO vereda VALUES("7","Rincon De San Francisco","15");
INSERT INTO vereda VALUES("8","Talura Pto. Peñon","15");
INSERT INTO vereda VALUES("9","Agua Blanca Sector La Dulce","15");
INSERT INTO vereda VALUES("10","Dindalito Sector Centro","15");
INSERT INTO vereda VALUES("11","Aldana y Andagoya","15");
INSERT INTO vereda VALUES("12","Dindalito Sector La Unión","15");
INSERT INTO vereda VALUES("13","Montalvo","15");
INSERT INTO vereda VALUES("14","Dindalito Sector Sena","15");
INSERT INTO vereda VALUES("15","Patio Bonito","15");
INSERT INTO vereda VALUES("16","Guasimal","15");
INSERT INTO vereda VALUES("17","San Francisco Centro","15");
INSERT INTO vereda VALUES("18","Rincón De San Francisco","15");
INSERT INTO vereda VALUES("19","Agua Blanca Sector La Dulce","15");
INSERT INTO vereda VALUES("20","Canastos","15");
INSERT INTO vereda VALUES("21","Aldana y Andagoya","15");
INSERT INTO vereda VALUES("22","Cardonal","15");
INSERT INTO vereda VALUES("23","Guayabal","15");
INSERT INTO vereda VALUES("24","Paso Ancho","15");
INSERT INTO vereda VALUES("25","La Joya","15");
INSERT INTO vereda VALUES("26","Sucre","15");
INSERT INTO vereda VALUES("27","Las Delicias","15");



SET FOREIGN_KEY_CHECKS=1;