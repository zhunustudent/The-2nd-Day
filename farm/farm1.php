<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class Animal
    {
        abstract public function say();
        abstract public function walk();
    }

    class Cow extends Animal
    {
        public function say() { return "Moo! Moo! <br>"; }
        public function walk() { return "Top-Top! <br>"; }
    }
    
    class Pig extends Animal
    {
        public function say() { return "Oink! Oink! <br>"; }
        public function walk() { return "Top-Top! <br>"; }
    }
    
    class Chicken extends Animal
    {
        public function say() { return "Cluck! Cluck! <br>"; }
        public function walk() { return "Top-Top! <br>"; }
    }

    class Farm
    {
        public $animals = [];

        public function addAnimal(Animal $animal)
        {
            $this->animals[] = $animal;
            echo $animal->walk();
        }

        public function rollCall() 
        {
            shuffle($this->animals);
            foreach ($this->animals as $animal) 
            {
                echo $animal->say();
            }
        }
    }


    $cow = new Cow;
    $pig1 = new Pig;
    $pig2 = new Pig;
    $chicken = new Chicken;

    $farm = new Farm;
    $farm->addAnimal($cow);
    $farm->addAnimal($pig1);
    $farm->addAnimal($pig2);
    $farm->addAnimal($chicken);
    echo "<br>";

    $farm->rollCall();
    ?>
</body>
</html>