create database BD_CRUD_PHP;
use BD_CRUD_PHP;

drop table if exists tb_empleado;
create table tb_empleado(
IdEmpleado int not null auto_increment primary key,
NombreEmpleado varchar(50),
ApellidoEmpleado varchar(50),
PuestoEmpleado varchar(50),
SueldoEmpleado decimal
);


/*---------------------Listar Empleados-----------------*/
drop procedure if exists ListarEmpleados;
delimiter @@
create procedure ListarEmpleados()
begin
	select * from tb_empleado;
end @@
delimiter;


/*---------------------Buscar Empleados-----------------*/
drop procedure if exists BuscarEmpleados;
delimiter @@
create procedure BuscarEmpleados(Id int)
begin
	select * from tb_empleado where IdEmpleado = Id;
end@@
delimiter;


/*---------------------Insertar Empleados-----------------*/
drop procedure if exists InsertarEmpleado;
delimiter @@
create procedure InsertarEmpleado(NombreEmpleado varchar(50),
								  ApellidoEmpleado varchar(50),
								  PuestoEmpleado varchar(50),
								  SueldoEmpleado decimal)
begin
	insert into tb_empleado(NombreEmpleado, ApellidoEmpleado,PuestoEmpleado,SueldoEmpleado) values (NombreEmpleado,ApellidoEmpleado,PuestoEmpleado,SueldoEmpleado);
end @@
delimiter;


drop procedure if exists ActualizarEmpleado;
delimiter @@
create procedure ActualizarEmpleado(xIdEmpleado int,
								  xNombreEmpleado varchar(50),
								  xApellidoEmpleado varchar(50),
								  xPuestoEmpleado varchar(50),
								  xSueldoEmpleado decimal)
begin
	UPDATE tb_empleado set NombreEmpleado = xNombreEmpleado,
							ApellidoEmpleado = xApellidoEmpleado,
							PuestoEmpleado = xPuestoEmpleado,
                            SueldoEmpleado = xSueldoEmpleado
                            where IdEmpleado=xIdEmpleado;
end @@
delimiter;

drop procedure if exists EliminarEmpleado;
delimiter @@
create procedure EliminarEmpleado(xIdEmpleado int)
begin
	DELETE FROM tb_empleado where IdEmpleado = xIdEmpleado;
end @@
delimiter;

call ListarEmpleados();
call BuscarEmpleados(1);
call InsertarEmpleado('Raul', 'Ramirez','Ingeniero',2300.45);
call ActualizarEmpleado(1,'Boris', 'Castillo','Contador',1200.00);
call EliminarEmpleado(1);





