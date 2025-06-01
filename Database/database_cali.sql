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
    nom_pais varchar(45) not null,
    estatus int(2) not null
);

create table banco(
    pk_banco int not null primary key auto_increment,
    nom_banco varchar(45) not null,
    estatus int(2) not null
);

create table datos_bancarios(
    pk_datos_bancarios int not null primary key auto_increment,
    benficiario varchar(75) not null,
    clabe varchar(75) not null,
    fk_banco int not null,
    foreign key (fk_banco) references banco(pk_banco)
);

create table inf_dias_viaje_autorizados(
    pk_inf_dias_viaje_autorizados int not null primary key auto_increment,
    fecha_partida date not null,
    fecha_regreso date not null,
    dias_totales int not null,
    dias_hospedaje int not null,
    dias_autorizados int not null,
    sin_hospedaje int not null
);

create table transporte(
    pk_transporte int not null primary key auto_increment,
    tipo_vehiculo varchar(45) not null,
    linea_aerea varchar(45) null,
    horario_avion time null,
    linea_autobus varchar(45) null,
    horario_autobus time null,
    placa_vehiculo_utilitario varchar(45) null,
    placa_vehiculo_particular varchar(45) null
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
    nom_comitiva varchar(75) not null,
    funcion varchar(45) not null
);

create table estado(
    pk_estado int not null primary key auto_increment,
    nom_estado varchar(45) not null,
    fk_pais int not null,
    foreign key (fk_pais) references pais (pk_pais),
    estatus int(2) not null
);

create table ciudad(
    pk_ciudad int not null primary key auto_increment,
    nom_ciudad varchar(45) not null,
    fk_estado int not null,
    foreign key (fk_estado) references estado (pk_estado),
    estatus int(2) not null
);

create table itinerario(
    pk_itinerario int not null primary key auto_increment,
    fk_estado_partida_itinerario int not null,
    ciudad_partida_itinerario varchar(45) not null,
    fecha_partida_itinerario date not null,
    hora_partida_itinerario time not null,
    fk_estado_llegada_itinerario int not null,
    ciudad_llegada_itinerario varchar(45) not null,
    fecha_llegada_itinerario date not null,
    hora_llegada_itinerario time not null,
    foreign key (fk_estado_partida_itinerario) references estado(pk_estado),
    foreign key (fk_estado_llegada_itinerario) references estado(pk_estado)
);

create table gastos_autorizados(
    pk_gastos_autorizados int not null primary key auto_increment,
    gasto_hospedaje decimal null,
    gasto_alimentacion decimal null,
    gasto_avion decimal null,
    gasto_transporte decimal null,
    gasto_caseta decimal null,
    gasto_gasolina decimal null,
    gasto_taxi decimal null,
    gasto_total decimal null,
    origen_recurso varchar(45) not null
);

create table folio(
    pk_folio int not null primary key auto_increment,
    area varchar(45) not null,
    num_folio int not null
);

create table inf_usuario(
    pk_inf_usuario int not null primary key auto_increment,
    nombres varchar(45) not null,
    apaterno varchar(45) not null,
    amaterno varchar(45) not null,
    correo varchar(45) not null,
    telefono int not null,
    extension varchar(10) null
);

create table viaticos(
    pk_viaticos int not null primary key auto_increment,
    fecha date not null,
    objetivo_viaje varchar(500) not null,
    fk_inf_usuario int not null,
    fk_datos_bancarios int not null,
    fk_inf_dias_viaje_autorizados int not null,
    fk_comitiva int not null,
    fk_itinerario int not null,
    fk_transporte int not null,
    fk_gastos_autorizados int not null,
    foreign key (fk_inf_usuario) references inf_usuario (pk_inf_usuario),
    foreign key (fk_datos_bancarios) references datos_bancarios (pk_datos_bancarios),
    foreign key (fk_inf_dias_viaje_autorizados) references inf_dias_viaje_autorizados (pk_inf_dias_viaje_autorizados),
    foreign key (fk_comitiva) references comitiva (pk_comitiva),
    foreign key (fk_itinerario) references itinerario (pk_itinerario),
    foreign key (fk_transporte) references transporte (pk_transporte),
    foreign key (fk_gastos_autorizados) references gastos_autorizados (pk_gastos_autorizados)
);