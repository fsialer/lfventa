Sistema Web de Ventas.
=====================

Para poder restaurar la base de datos, se utilizara el comando:

php artisan migrate. 

Posteriormente, se ejecutaran estos 2 disparadores(Triggers).

## tr_updateStockEntry
CREATE DEFINER=`root`@`127.0.0.1` TRIGGER `tr_updateStockEntry` 
AFTER INSERT ON `article_entry` 
FOR EACH ROW BEGIN
	UPDATE articles SET stock=stock+NEW.quantity
	WHERE articles.id=NEW.article_id;
END

## tr_updateStockSale
CREATE DEFINER=`root`@`127.0.0.1` TRIGGER `tr_updateStockSale` 
AFTER INSERT ON `article_sale` 
FOR EACH ROW BEGIN
	UPDATE articles SET stock=stock-NEW.quantity
	WHERE articles.id=NEW.article_id;
END
##

Estos triggers se podran ejecutar en mysql, si se desea implementar en 
otro gestor(postgres,oracle, etc), tener encuenta su sintaxis. La base
de datos puede operar en cualquier gestor de base de datos que maneje laravel, solo debe configurar.
Este Sistema esta por defecto con mysql.
Para comenzar a utilizar el sistema inicializar estos datos, utilizar cmd:
=>php artisan tinker
=>$user=['name'=>'Fernando','email'=>'admin@gmail.com','password'=>bcrypt('admin'),'type'=>'admin']
=>\App\User::create($user);




