<?php

$host = "localhost";
$dbname = "animales";
$user = "root";
$pass = "";

try {
    // Conexión inicial sin especificar la base de datos
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Eliminar la base de datos si ya existe
    $dropDB = "DROP DATABASE IF EXISTS $dbname";
    $conn->exec($dropDB);

    // Crear la base de datos
    $createDB = "CREATE DATABASE $dbname";
    $conn->exec($createDB);
    echo "Base de datos creada con éxito.<br>";

    // Reconectar a la base de datos recién creada
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear la tabla
    $sqlProtectora = "CREATE TABLE protectora (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        imagen VARCHAR(255) NOT NULL,
        especie VARCHAR(50) NOT NULL,
        edad INT NOT NULL,
        raza VARCHAR(50) NOT NULL,
        sexo VARCHAR(50) NOT NULL,
        esterilizado BOOLEAN NOT NULL,
        tamano VARCHAR(50) NOT NULL,
        protectora VARCHAR(50) NOT NULL,
        contacto VARCHAR(50) NOT NULL,
        ubicacion VARCHAR(50) NOT NULL,
        descripcion VARCHAR(255) NOT NULL
    )";
    $conn->exec($sqlProtectora);
    echo "Tabla 'protectora' creada con éxito.<br>";


    // Insertar registros
    $insertProtectora = "INSERT INTO protectora (nombre, imagen, especie, edad, raza, sexo, esterilizado, tamano, protectora, contacto, ubicacion, descripcion)
    VALUES  
        ('Astilla', './img/animales/an1.webp', 'Perro', 5, 'Mestizo', 'Macho', true, 'Mediano', 'Protectora Caricias', '6123456789', 'Sevilla', 'Mi nombre es ASTILLA, y soy una cruce de sharpei. Al principio no era nada sociable y tenía un carácter muy fuerte, ya que era muy desconfiada. Pero, poco a poco, y sobre todo en estos últimos años he pegado un gran cambio: dejo que me quiten la pelota de la boca, y hasta permito a mis humanas que me limpien los oídos, algo impensable para mí hace unos años. Me adoptas? escribe a adopciones@uprodea.org'),
        ('Ares', './img/animales/an2.webp', 'Perro', 9, 'Mestizo', 'Macho', true, 'Mediano', 'Protectora Esperanza', '646958099', 'Barcelona', 'Buenos días amigos, por favor, ayudarme a difundir a Ares, a ver si le encontramos un hogar entre todos. Ares fue traicionado por su antiguos dueños al ser abandonado en la perrera sin miramientos. Ares tiene 9 años recien cumplidos, pero es un perro muy fuerte y se le ve de maravilla. Ares tiene algo único: la capacidad de disfrutar con lo mínimo: estar fuera de la jaula 20 minutos para él es lo mejor del mundo.'),
        ('Luna', './img/animales/an3.webp', 'Gato', 3, 'Siames', 'Hembra', true, 'Pequeño', 'Protectora Felina', '647123456', 'Madrid', 'Luna es una gata siamesa dulce y tranquila. Le encanta acurrucarse en el sofá y observar por la ventana. Perfecta para cualquier hogar.'),
        ('Thor', './img/animales/an4.webp', 'Perro', 2, 'Mestizo', 'Macho', true, 'Grande', 'Particular', '612456789', 'Málaga', 'Thor es un labrador juguetón y lleno de energía. Busca una familia activa que disfrute de paseos largos y aventuras.'),
        ('Mía', './img/animales/an5.webp', 'Gato', 4, 'Europeo', 'Hembra', true, 'Pequeño', 'Protectora Gaticos', '622987654', 'Valencia', 'Mía es una gata independiente pero muy cariñosa. Perfecta para quienes buscan compañía sin demasiadas demandas.'),
        ('Rex', './img/animales/an6.webp', 'Perro', 7, 'Mestizo', 'Macho', false, 'Grande', 'Protectora Canina', '638123890', 'Granada', 'Rex es un pastor alemán leal y protector. Busca un hogar con espacio y personas que le dediquen tiempo.'),
        ('Nina', './img/animales/an7.webp', 'Perro', 1, 'Mestizo', 'Hembra', true, 'Pequeño', 'Particular', '654321098', 'Sevilla', 'Nina es una bulldog francesa adorable y juguetona. Ideal para familias con niños pequeños.'),
        ('Simba', './img/animales/an8.webp', 'Gato', 2, 'Mestizo', 'Macho', true, 'Pequeño', 'Protectora Felina', '621345678', 'Cádiz', 'Simba es un gato bengalí curioso y lleno de energía. Le encanta explorar y jugar.'),
        ('Coco', './img/animales/an9.webp', 'Perro', 8, 'Mestizo', 'Macho', true, 'Pequeño', 'Particular', '611223344', 'Bilbao', 'Coco es un caniche tranquilo que busca una familia que le dé amor y tranquilidad en sus últimos años.'),
        ('Lola', './img/animales/an10.webp', 'Gato', 6, 'Europeo', 'Hembra', true, 'Pequeño', 'Protectora Esperanza', '667890123', 'Murcia', 'Lola es una gata tímida pero cariñosa. Necesita un hogar paciente que le dé tiempo para adaptarse.'),
        ('Max', './img/animales/an11.webp', 'Perro', 3, 'Mestizo', 'Macho', true, 'Grande', 'Protectora Dorados', '689123456', 'Madrid', 'Max es un golden retriever juguetón y cariñoso. Ideal para familias activas.'),
        ('Sasha', './img/animales/an12.webp', 'Gato', 5, 'Mestizo', 'Hembra', false, 'Pequeño', 'Particular', '612334455', 'Zaragoza', 'Sasha es una gata angora elegante y tranquila. Perfecta para un hogar con adultos.'),
        ('Toby', './img/animales/an13.webp', 'Perro', 4, 'Mestizo', 'Macho', true, 'Mediano', 'Protectora Beagles', '644567890', 'Sevilla', 'Toby es un beagle curioso y sociable. Le encanta pasear y olfatear.'),
        ('Lili', './img/animales/an14.webp', 'Gato', 3, 'Mestizo', 'Hembra', true, 'Pequeño', 'Protectora Gaticos', '634567890', 'Valencia', 'Lili es una gata persa tranquila y amorosa. Perfecta para un hogar sereno.'),
        ('Bruno', './img/animales/an15.webp', 'Perro', 6, 'Mestizo', 'Macho', false, 'Grande', 'Protectora Boxer', '629876543', 'Barcelona', 'Bruno es un boxer lleno de energía y muy cariñoso. Necesita una familia activa.'),
        ('Mochi', './img/animales/an16.webp', 'Gato', 1, 'Europeo', 'Macho', true, 'Pequeño', 'Particular', '610345678', 'Granada', 'Mochi es un gatito juguetón que busca un hogar lleno de amor.'),
        ('Bella', './img/animales/an17.webp', 'Perro', 2, 'Mestizo', 'Hembra', true, 'Grande', 'Protectora Ártica', '600123456', 'Madrid', 'Bella es una husky activa y juguetona. Busca una familia con experiencia en su raza.'),
        ('Nico', './img/animales/an18.webp', 'Gato', 7, 'Europeo', 'Macho', true, 'Pequeño', 'Protectora Felina', '643567890', 'Valencia', 'Nico es un gato adulto tranquilo y cariñoso. Ideal para cualquier hogar.'),
        ('Rocky', './img/animales/an19.webp', 'Perro', 5, 'Mestizo', 'Macho', true, 'Grande', 'Particular', '612098765', 'Bilbao', 'Rocky es un pitbull cariñoso y obediente. Busca un hogar responsable.'),
        ('Mila', './img/animales/an20.webp', 'Gato', 2, 'Mestizo', 'Hembra', true, 'Pequeño', 'Protectora Gaticos', '632145678', 'Sevilla', 'Mila es una gata siberiana curiosa y juguetona. Perfecta para familias activas.');";
    
    $conn->exec($insertProtectora);
    
    echo "Registros insertados con éxito.<br>";

} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}