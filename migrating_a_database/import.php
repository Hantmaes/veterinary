<?php

require_once('DB.php');

DB::connect('127.0.0.1:3307', 'laravel_clinic', 'root', 'rootroot');


$data = json_decode(file_get_contents('clients.json'), true);


DB::statement('TRUNCATE TABLE `owners`');
DB::statement('TRUNCATE TABLE `animals`');

foreach($data as $owner) {
   DB::statement("INSERT INTO `owners` (first_name, surname, address, email, number) 
    VALUES ('".$owner['first_name']."', '".$owner['surname']."', address, email, number)");

    $owner_id = DB::select("SELECT `id` FROM `owners` WHERE `surname` = '".$owner['surname']."'")[0];

    var_dump($owner_id->id);

    foreach($owner["pets"] as $pet) {
        
            DB::statement("INSERT INTO `animals` (owner_id, specie_id, name, breed, weight, age, photo) 
            VALUES ( $owner_id->id, 1, '".$pet['name']."', '".$pet['breed']."', '".$pet['weight']."', '".$pet['age']."', '".$pet['photo']."')");
            
            var_dump($pet);
        
    }
}
