--
-- Base de datos: `ddw501`
--
CREATE DATABASE ddw501;
USE ddw501;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla participantes
--

CREATE TABLE `participantes` (
  `id` int(12) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ape` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla participantes
--

INSERT INTO `participantes` (`id`, `nom`, `ape`, `dni`, `sem`) VALUES
(33, 'Ramiro', 'Quispe', '12345678', '------'),
(34, 'eva', 'Martinez', '93387678', '------'),
(36, 'alejandra', 'Solano', '63345678', '------'),
(37, 'Antoni', 'Montes', '94545678', '------'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla trabajador
--

CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ape` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla trabajador
--

INSERT INTO `trabajador` (`id`, `nom`, `ape`, `cor`) VALUES
(26, 'Jorge', 'Luque', 'jluque@gmail.pe'),
(27, 'Elva', 'Martinez', 'emartinez@gmail.pe'),
(28, 'Andres', 'Garcia', 'agarcia@gmail.pe'),
(29, 'alicia', 'avalos', 'a@gmail.pe'),

--
-- Indices de la tabla participantes
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla trabajador
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de la tabla participantes
--
ALTER TABLE `participantes`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla trabajador
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;
