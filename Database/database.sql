create table persona (
    pk_persona int not null primary key auto_increment,
    nombre varchar(45) not null,
    apaterno varchar(45) not null,
    amaterno varchar(45) null,
    sexo varchar(45) not null,
    telefono varchar(45) null
);

create table pais(
    pk_pais int not null primary key auto_increment,
    nom_pais varchar(45) not null
);

create table banco(
    pk_banco int not null primary key auto_increment,
    nom_banco varchar(45) not null
);

create table transporte(
    pk_transporte int not null primary key auto_increment,
    tipo_vehiculo varchar(45) null,
    linea varchar(45) null,
    placa varchar(45) null,
    horario varchar(45) null
);

create table usuario(
    pk_usuario int not null primary key auto_increment,
    cod_usuario varchar(45) not null,
    contraseña varchar(100) not null,
    estatus int(2) not null,
    fk_persona int not null,
    foreign key (fk_persona) references persona (pk_persona)
);

create table comitiva(
    pk_comitiva int not null primary key auto_increment,
    funcion varchar(45) not null,
    fk_persona int not null,
    foreign key (fk_persona) references persona (pk_persona)
);

create table estado(
    pk_estado int not null primary key auto_increment,
    nom_estado varchar(45) not null,
    fk_pais int not null,
    foreign key (fk_pais) references pais (pk_pais)
);

create table ciudad(
    pk_ciudad int not null primary key auto_increment,
    nom_ciudad varchar(45) not null,
    fk_estado int not null,
    foreign key (fk_estado) references estado (pk_estado)
);

create table itinerario(
    pk_itinerario int not null primary key auto_increment,
    fecha_salida date not null,
    hora_realizacion varchar(45) not null,
    fk_ciudad int not null,
    foreign key (fk_ciudad) references ciudad (pk_ciudad)
);

create table viaticos(
    pk_viaticos int not null primary key auto_increment,
    fecha date not null,
    beneficiario varchar(45) not null,
    clabe varchar(45) not null,
    fecha_partida date not null,
    fecha_regreso date not null,
    hospedaje varchar(45) null,
    dias_hospedaje int null,
    objetivo_viaje varchar(500) not null,
    total_gastos decimal null,
    fk_comitiva int not null,
    fk_usuario int not null,
    fk_itinerario int not null,
    fk_transporte int not null,
    fk_ciudad int not null,
    fk_banco int not null,
    foreign key (fk_comitiva) references comitiva (pk_comitiva),
    foreign key (fk_usuario) references usuario (pk_usuario),
    foreign key (fk_itinerario) references itinerario (pk_itinerario),
    foreign key (fk_transporte) references transporte (pk_transporte),
    foreign key (fk_ciudad) references ciudad (pk_ciudad),
    foreign key (fk_banco) references banco (pk_banco)
);

create table gastos_autorizados(
    pk_gastos_autorizados int not null primary key auto_increment,
    detalle_gasto varchar(45) not null,
    monto_gasto decimal not null,
    fk_viaticos int not null,
    foreign key (fk_viaticos) references viaticos (pk_viaticos)
)