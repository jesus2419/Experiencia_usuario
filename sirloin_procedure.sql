DELIMITER //

CREATE PROCEDURE InsertarUsuario(
    IN p_nombre VARCHAR(255),
    IN p_apellido VARCHAR(255),
    IN p_email VARCHAR(255),
    IN p_usuario VARCHAR(50),
    IN p_pass VARCHAR(25),
    IN p_fecha_nac DATE,
    IN p_genero VARCHAR(255),
    IN p_imagen BLOB
)
BEGIN
    INSERT INTO usuarios (nombre, apellido, email, usuario, pass, fecha_nac, genero, imagen)
    VALUES (p_nombre, p_apellido, p_email, p_usuario, p_pass, p_fecha_nac, p_genero, p_imagen);
END //

DELIMITER ;


-- Llamando al procedimiento almacenado para insertar un nuevo usuario
CALL InsertarUsuario(
    'Juan',
    'Pérez',
    'juan@example.com',
    'juan123',
    'contrasena123',
    '2000-01-15',
    'Masculino',
    NULL  -- Aquí puedes pasar la imagen en formato BLOB si lo deseas, de lo contrario, pasa NULL
);

select * from usuarios