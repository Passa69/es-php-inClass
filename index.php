<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>

    <?php
        /** CONSEGNA:
         * 
         * DEFINIRE CLASSE Student:
         *      Attributi:
         *      - name
         *      - surname 
         *      - registrationNumber
         * 
         *      Metodi:
         *      - costruttore che accetta name e surname
         *      - getFullname: restituisce nome completo (nome + ' ' + cognome)
         *      - __toString: restituisce nome completo + registrationNumber 
         *          (nome + " " + cognome + ": " + registrationNumber)
         * 
         * UTILIZZO OGGETTI Studend:
         * 
         *      Generare 3 istanze della classe Student con valori in ingresso diversi 
         *      (nome e cognome);
         *      Valorizzare la variabile registrationNumber per ogni istanza
         *      Stampare i nomi completi per ogni oggetto
         *      Stampare tutti i 3 oggetti     
         * 
         *  RISULTATO ATTESO:
         * 
         *      Marco Rossi
         *      Francesca Bianchi
         *      Piero Verdi
         *      
         *      Marco Rossi: 12345
         *      Francesca Bianchi: 12346
         *      Piero Verdi: 12347
         */

        class Student {
            
            public $name;
            public $surname;
            public $registrationNumber;
            
            public function __construct($name, $surname) {
                
                $this -> name = $name;
                $this -> surname = $surname;
            }

            public function getFullname() {

                return $this -> name . " " . $this -> surname; 
            }

            public function __toString() {

                return $this -> getFullname() . ": " . $this -> registrationNumber;
            }
        }

        $s1 = new Student ("Antonio", "D'angelo");
        $s2 = new Student ("Nico", "Bianco");
        $s3 = new Student ("Rocco", "Serra");

        $s1 -> registrationNumber = "12345";
        $s2 -> registrationNumber = "56234";
        $s3 -> registrationNumber = "48953";

        echo $s1 -> getFullname() . "<br>"; 
        echo $s2 -> getFullname() . "<br>";
        echo $s3 -> getFullname() . "<br>" . "<br>";

        echo $s1 . "<br>"; 
        echo $s2 . "<br>";
        echo $s3 . "<br>";
    ?>
</body>
</html>