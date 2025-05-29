drop table user_videojuegos cascade ;
drop table user cascade;
drop table Videogame cascade;

create or replace table Videogame
(
    videojuego_id     int auto_increment
        primary key,
    videojuego_nombre varchar(255) null,
    empresa           varchar(255) null,
    plataformas       varchar(255) null,
    generos           varchar(255) null,
    duracion          int          null comment 'duracion en horas',
    ano_lanzamiento   date         null,
    valoracion        int          null,
    constraint comprobacion_valoracion
        check (`valoracion` >= 0 and `valoracion` <= 10)
);

create or replace table user
(
    Id               int auto_increment
        primary key,
    nombre   varchar(255)                               null,
    primer_apellido     varchar(255)                               null,
    segundo_apellido    varchar(255)                               null,
    nick                varchar(255)                               unique,
    pais                varchar(255)                               null,
    telefono            varchar(255)                               unique,
    email               varchar(255)                               unique,
    password_hash       varchar(255)                               null,
    fecha_nacimiento    date                                       null,
    sexo                enum ('hombre', 'mujer', 'no_especificar') null,
    imagen_usuario      varchar(255)                               null
);

create or replace table user_videojuegos
(
    id_user       int not null,
    videojuego_id int not null,
    primary key (id_user, videojuego_id),
    constraint user_videojuegos_Videogame_videojuego_id_fk
        foreign key (videojuego_id) references Videogame (videojuego_id),
    constraint user_videojuegos_user_Id_fk
        foreign key (id_user) references user (Id)
);

insert into user (user.nombre,user.primer_apellido,user.segundo_apellido,user.nick,user.pais,user.telefono,
                  user.email,user.password_hash,user.fecha_nacimiento,user.sexo,user.imagen_usuario) values (
                  'Jose','Martinez','Gonzalez','JMG3000','ES','621996455',
                    'jmg3000@gmail.com','$2y$10$5kv7aFxNqh64y5veSmbLce2MaVUtilKDz4MuudS3legnurV/9SKgq',STR_TO_DATE('2025-07-07','%Y-%m-%d'),'hombre','imgpordefecto.jpg');