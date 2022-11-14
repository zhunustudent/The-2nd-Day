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
    abstract class Animal { abstract public function say(); }
    abstract class Hoof extends Animal { abstract public function walk(); }
    abstract class Wig extends Animal { abstract public function tryToFly(); }


    class Cow extends Hoof
    {
        public function say() { return "Moo! Moo! <br>"; }
        public function walk() { return "Top-Top! <br>"; }
    }
    
    class Pig extends Hoof
    {
        public function say() { return "Oink! Oink! <br>"; }
        public function walk() { return "Top-Top! <br>"; }
    }
    
    class Chicken extends Wig
    {
        public function say() { return "Cluck! Cluck! <br>"; }
        public function tryToFly() { return "Zhih-Zhih! Top-Top! <br>"; }
    }

    class Goose extends Wig
    {
        public function say() { return "Honk! Honk! <br>"; }
        public function tryToFly() { return "Zhih-Zhih! Top-Top! <br>"; }
    }

    class Turkey extends Wig
    {
        public function say() { return "Gobble! Gobble! <br>"; }
        public function tryToFly() { return "Zhih-Zhih! Top-Top! <br>"; }
    }

    class Hourse extends Hoof
    {
        public function say() { return "I-ho-ho! I-ho-ho! <br>"; }
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


    class BirdFarm extends Farm
    {
        public $birds = [];
        public static $birdCount = 0;

        public function addAnimal(Animal $bird)
        {
            $this->birds[] = $bird;
            echo $bird->tryToFly();
            ++self::$birdCount;
        }

        public function rollCall() 
        {
            shuffle($this->birds);
            foreach ($this->birds as $bird) 
            {
                echo $bird->say();
            }
        }

        function showAnimalsCount()
        {
            echo '<br>The number of birds in farm: [' . BirdFarm::$birdCount . ']<br>';
        }
    }


    class Farmer
    {
        public function addAnimal(Farm $farm, Animal $animal)
        {
            $farm->addAnimal($animal);
        }
        public function rollCall(Farm $farm)
        {
            $farm->rollCall();
        }
    }


    $farm = new Farm;
    $farmer = new Farmer;
    $birdFarm = new BirdFarm;

    $cow = new Cow;
    $pig1 = new Pig;
    $pig2 = new Pig;
    $chicken = new Chicken;
    $turkey1 = new Turkey;
    $turkey2 = new Turkey;
    $turkey3 = new Turkey;
    $hourse1 = new Hourse;
    $hourse2 = new Hourse;
    $goose = new Goose;

    $farmer->addAnimal($farm, $cow);
    $farmer->addAnimal($farm, $pig1);
    $farmer->addAnimal($farm, $pig2);
    $farmer->addAnimal($birdFarm, $chicken);
    $farmer->addAnimal($birdFarm, $turkey1);
    $farmer->addAnimal($birdFarm, $turkey2);
    $farmer->addAnimal($birdFarm, $turkey3);
    $farmer->addAnimal($farm, $hourse1);
    $farmer->addAnimal($farm, $hourse2);
    $farmer->addAnimal($birdFarm, $goose);
    echo "<br>";

    $farmer->rollCall($farm);
    $farmer->rollCall($birdFarm);
    $birdFarm->showAnimalsCount();
    ?>
</body>
</html>