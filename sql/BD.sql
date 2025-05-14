create table user
(
    Id               int                                        null,
    nombre_usuario   varchar(255)                               null,
    apellido_uno     varchar(255)                               null,
    apellido_dos     varchar(255)                               null,
    nick_name        varchar(255)                               null,
    pais             varchar(255)                               null,
    email            varchar(255)                               null,
    contraseña       varchar(255)                               null,
    fecha_nacimiento date                                       null,
    sexo             enum ('hombre', 'mujer', 'no_especificar') null,
    imagen_usuario   varchar(255)                               null
);
