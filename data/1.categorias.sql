INSERT INTO `cateogoria_cursos` (`idcategoria_cursos`, `nombre`, `idarea`) VALUES (NULL, 'General Investigación', '5');
INSERT INTO `cateogoria_cursos` (`idcategoria_cursos`, `nombre`, `idarea`) VALUES (NULL, 'General Inglés', '5');
INSERT INTO `cateogoria_cursos` (`idcategoria_cursos`, `nombre`, `idarea`) VALUES (NULL, 'General Matemática', '5');

INSERT INTO `cateogoria_cursos` (`idcategoria_cursos`, `nombre`, `idarea`) VALUES (NULL, 'Algoritmos', '1'), (NULL, 'Estadistica', '1');

INSERT INTO `curso` (`idcurso`, `nombre`, `nombre_corto`, `idcategoria_cursos`) VALUES (NULL, 'Individuo y Medio Ambiente', 'Individuo', '8'), (NULL, 'Investigación académica', 'Investigación', '8'), (NULL, 'Ciudadanía y Reflexión Ética', 'Ética', '8');
INSERT INTO `curso` (`idcurso`, `nombre`, `nombre_corto`, `idcategoria_cursos`) VALUES (NULL, 'Inglés 1', 'Inglés 1', '10'), (NULL, 'Inglés 2', 'Inglés 2', '10'), (NULL, 'Inglés 3', 'Inglés 3', '10'), (NULL, 'Inglés 4', 'Inglés 4', '10');
INSERT INTO `curso` (`idcurso`, `nombre`, `nombre_corto`, `idcategoria_cursos`) VALUES (NULL, 'Matemática básica1', 'Matemática 1', '11');


INSERT INTO `curso` (`idcurso`, `nombre`, `nombre_corto`, `idcategoria_cursos`) VALUES (NULL, 'Matemática básica2', 'Matemática 2', '6'), (NULL, 'Cálculo Integral', 'Cálculo Integral', '6'), (NULL, 'Cálculo diferencial', 'Cálculo diferencial', '6'), (NULL, 'Ecuaciones diferenciales', 'Ecuaciones diferenciales', '6');

INSERT INTO `curso` (`idcurso`, `nombre`, `nombre_corto`, `idcategoria_cursos`) VALUES (NULL, 'Principios de algorimos', 'Algoritmos', '12');
