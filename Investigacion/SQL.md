# Palabras reservadas de MySQL
||||||
|---------------------------|-----------------------|----------------------|------------------|-------------------|
|ADD|	    |ALL|	    |ALTER|
|ANALYZE|	|AND|	    |AS|
|ASC|	|ASENSITIVE|    |BEFORE|
|BETWEEN|	|BIGINT|	|BINARY|
|BLOB|	    |BOTH|	    |BY|
|CALL|	|CASCADE|	|CASE|
|CHANGE|	|CHAR|	|CHARACTER|
|CHECK|	|COLLATE|	|COLUMN|
|CONDITION|	|CONSTRAINT|	|CONTINUE|
|CONVERT|	|CREATE|	|CROSS|
|CURRENT_DATE|	|CURRENT_TIME|	|CURRENT_TIMESTAMP|
|CURRENT_USER|	|CURSOR|	|DATABASE|
|DATABASES|	|DAY_HOUR|	|DAY_MICROSECOND|
|DAY_MINUTE|	|DAY_SECOND|	|DEC|
|DECIMAL|	|DECLARE|	|DEFAULT|
|DELAYED|	|DELETE|	|DESC|
|DESCRIBE|	|DETERMINISTIC|	|DISTINCT|
|DISTINCTROW|	|DIV|	|DOUBLE|
|DROP|	|DUAL|	|EACH|
|ELSE|	|ELSEIF|	|ENCLOSED|
|ESCAPED|	|EXISTS|	|EXIT|
|EXPLAIN|	|FALSE|	|FETCH|
|FLOAT|	|FLOAT4|	|FLOAT8|
|FOR|	|FORCE|	|FOREIGN|
|FROM|	|FULLTEXT|	|GRANT|
|GROUP|	|HAVING|	|HIGH_PRIORITY|
|HOUR_MICROSECOND|	|HOUR_MINUTE|	|HOUR_SECOND|
|IF|	|IGNORE|	|IN|
|INDEX|	|INFILE|	|INNER|
|INOUT|	|INSENSITIVE|	|INSERT|
|INT|	|INT1|	|INT2|
|INT3|	|INT4|	|INT8|
|INTEGER|	|INTERVAL|	|INTO|
|IS|	|ITERATE|	|JOIN|
|KEY|	|KEYS|	|KILL|
|LEADING|	|LEAVE|	|LEFT|
|LIKE|	|LIMIT|	|LINES|
|LOAD|	|LOCALTIME|	|LOCALTIMESTAMP|
|LOCK|	|LONG|	|LONGBLOB|
|LONGTEXT|	|LOOP|	|LOW_PRIORITY|
|MATCH|	|MEDIUMBLOB|	|MEDIUMINT|
|MEDIUMTEXT|	|MIDDLEINT|	|MINUTE_MICROSECOND|
|MINUTE_SECOND|	|MOD|	|MODIFIES|
|NATURAL|	|NOT|	|NO_WRITE_TO_BINLOG|
|NULL|	|NUMERIC|	|ON|
|OPTIMIZE|	|OPTION|	|OPTIONALLY|
|OR	ORDER|	|OUT|
|OUTER|	|OUTFILE|	|PRECISION|
|PRIMARY|	|PROCEDURE|	|PURGE|
|READ|	|READS|	|REAL|
|REFERENCES|	|REGEXP|	|RELEASE|
|RENAME|	|REPEAT|	|REPLACE|
|REQUIRE|	|RESTRICT|	|RETURN|
|REVOKE|	|RIGHT|	|RLIKE|
|SCHEMA|	|SCHEMAS|	|SECOND_MICROSECOND|
|SELECT|	|SENSITIVE|	|SEPARATOR|
|SET|	|SHOW|	|SMALLINT|
|SONAME|	|SPATIAL|	|SPECIFIC|
|SQL|	|SQLEXCEPTION|	|SQLSTATE|
|SQLWARNING|	|SQL_BIG_RESULT|	|SQL_CALC_FOUND_ROWS|
|SQL_SMALL_RESULT|	|SSL|	|STARTING|
|STRAIGHT_JOIN|	|TABLE|	|TERMINATED|
|THEN|	|TINYBLOB|	|TINYINT|
|TINYTEXT|	|TO|	|TRAILING|
|TRIGGER|	|TRUE|	|UNDO|
|UNION|	|UNIQUE|	|UNLOCK|
|UNSIGNED|	|UPDATE|	|USAGE|
|USE|	|USING|	|UTC_DATE|
|UTC_TIME|	|UTC_TIMESTAMP|	|VALUES|
|VARBINARY|	|VARCHAR|	|VARCHARACTER|
|VARYING|	|WHEN|	|WHERE|
|WHILE|	|WITH|	|WRITE|
|XOR|	|YEAR_MONTH|	|ZEROFILL|
# Modelo Entidad-Relacion
### Un modelo entidad-relación es una herramienta para el modelo de datos, la cual permite representar entidades de una base de datos:
* Se elabora el diagrama (o diagramas) entidad-relación.
* Se completa el modelo con listas de atributos y una descripción de otras restricciones que no se pueden reflejar en el diagrama.
### El modelado de datos no acaba con el uso de esta técnica. Son necesarias otras técnicas para lograr un modelo directamente implementable en una base de datos.
# Entidad Fuerte
### Una "entidad fuerte" (en teoría para el modelado de datos) es aquella que puede ser identificada unívocamente sin participar en la relación. Una "entidad debil" es aquella que no puede existir sin participar en la relación. Un cliente es una entidad fuerte porque puede ser identificada sin verbo (relación). Una factura es una entidad debil porque necesita un verbo (relación)
# Entidad Debil
### Es posible que un conjunto de entidades no tenga atributos suficientes para formar una clave primaria. Un conjunto de entidades de este tipo se denomina conjunto de entidades débiles. Una entidad débil es aquella cuya existencia depende de alguna otra entidad. Para que un conjunto de entidades débiles sea significativo, debe ser parte de un conjunto de relaciones uno a muchos. Cada entidad débil debe estar asociada con una entidad propietaria o dominante; es decir, que el conjunto de entidades débiles depende existencialmente del conjunto de entidades propietarias.
### La clave primaria de un conjunto de entidades débiles se forma con la clave primaria del conjunto de entidades propietarias, más el discriminante del conjunto de entidades débiles. El discriminante de un conjunto de entidades débiles se denomina la clave parcial del conjunto de entidades. El conjunto de entidades débiles se indica en los diagramas E-R por medio de un rectángulo de doble contorno.
# Atributo
### Especificación que define una propiedad de un objeto, elemento o archivo. También puede referirse o establecer el valor específico para una instancia determinada de los mismos.
### Sin embargo, actualmente, el término atributo puede y con frecuencia se considera como si fuera una propiedad dependiendo de la tecnología que se use.
### Para mayor claridad, los atributos deben ser considerados más correctamente como metadatos. Un atributo es con frecuencia y en general una característica de una propiedad.