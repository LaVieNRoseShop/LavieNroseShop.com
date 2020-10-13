-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2018 a las 07:41:13
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `la-libertad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `nombre`, `descripcion`) VALUES
(0, 'tarjeta.jpg', 'Tarjetas de presentacion', 'Tarjetas:\r\nLas tarjetas tienen miles de tipos de usos ya sean para tarjetas de presentación, de invitación, de bodas entre otras hay miles de tarjetas que son presentados en diferentes, También pueden a ver materiales básicos que son la cartulina cola vinílica. Lo importante es la tipografía y el estilo que le podamos dar a su tarjeta de presentación o invitación.'),
(1, 'pendones.jpg', 'Pendones', 'Los pendones es una herramienta de publicidad efectiva. No es algo fijo si no dinámico en el cual puede colocarse en cualquier lugar ya sea en un lugar comercial en un colegio entre otros lugares poblados para tener mas visualización.  Los pendones hay varios tipos de presentación como: roll up, trípode, para colgar, araña o pasacalles funcionan perfectamente para el mismo fin con diferentes estilos.'),
(2, 'volante.jpg', 'Volante', 'Los volantes son una forma práctica y económica de publicitar información de manera eficiente y rápida.  los Volantes cuentan con múltiples opciones de materiales y acabados que te permitirán escoger la finalización de tus artículos tal cual la desees.\r\nNo dejes de pedir tus Volantes y de personalizarlos de mil maneras, podrás hacer uso de ellos tanto en invitaciones de cumpleaños, como en promociones de productos de tu empresa o simplemente como información adicional de un evento.'),
(3, 'Sellos.jpg', 'Sellos', 'El sello se aplica, por un lado, para nombrar el instrumento con imágenes grabadas que, a través de la impresión de tinta sobre el papel, se utiliza para autorizar documentos. Además de ofrecer otros tipos de sellos automático, de madera, almohadilla, fechadores o secos. Recibimos su diseño o, si nos lo permite, asesoramos la elaboración de este.'),
(4, 'factureros.jpg', 'Factureros', 'Imprimimos todo tipo de facturas, recibos de caja, ingreso a caja, egresos, documentos equivalentes, talonarios en papeles como bond, periódico y químico el  cual elimina el uso de papel carboncillo, entregamos sus pedidos a tiempo y calidad.\r\n'),
(5, 'rifas.jpg', 'rifas', 'Las rifas se derivan con los talonarios los cuales pueden ser de material de papel bond, periódico  químico lo cual elimina el papel típico que es el carboncillo.'),
(6, 'carnetpvc.jpg', 'Carnet PVC', 'Tarjetas de PVC/Polyester de extrema durabilidad, que permiten acabados brillantes y protección extra contra rayones, calor y paso del tiempo. Opción de banda magnética, chips de contacto y no contacto / proximidad (HID, MIFARE, DESFire, iClass), códigos de barra.\r\nImpresoras de inyección de tinta con calidad fotográfica para impresión en papeles de alta calidad y blancura.'),
(7, 'avisos.jpg', 'Avisos', 'somos expertos en el manejo de su imagen corporativa, por eso sabemos que su marca siempre debe destacarse visualmente. En Diseños y servicios trabajamos con un amplio portafolio para destacar en interiores y exteriores su marca. Contamos con diferentes técnicas, materiales y maquinaria de última tecnología para hacer de los avisos publicitarios un punto que focaliza la atención de su grupo objetivo.\r\n•    Avisos metálicos\r\n•    Avisos acrílicos\r\n•    Avisos bronce\r\n•    Avisos aluminio\r\n•    Avisos madera\r\n•    Avisos poliuretano');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
