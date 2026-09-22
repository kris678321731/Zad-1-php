<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania PHP</title>
    <style>
        body {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial, sans-serif;
            margin: 30px;
            line-height: 1.6;
        }

        .zadanie {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .tytul {
            font-weight: bold;
            color: #333;
        }

        .wynik {
            color: #0066cc;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php
        $a = 10; // Przykładowa wartość początkowa $a
    ?>

    <h2>Początkowa wartość $a = <?php echo $a; ?></h2>

    <div class="zadanie">
        <span class="tytul">Zad 1:</span> Wartość zmiennej $a: 
        <span class="wynik"><?php echo $a; ?></span>
    </div>

    <div class="zadanie">
        <span class="tytul">Zad 2:</span> Liczba przeciwna do $a: 
        <span class="wynik"><?php echo -$a; ?></span>
    </div>

    <div class="zadanie">
        <span class="tytul">Zad 3:</span> Zmienna $a powiększona o 3: 
        <span class="wynik"><?php echo $a + 3; ?></span>
    </div>

    <div class="zadanie">
        <span class="tytul">Zad 4:</span> Zmienna $a pomniejszona o 5: 
        <span class="wynik"><?php echo $a - 5; ?></span>
    </div>

    <div class="zadanie">
        <span class="tytul">Zad 5:</span> Zmienna $a pomnożona przez 2: 
        <span class="wynik"><?php echo $a * 2; ?></span>
    </div>

    <div class="zadanie">
        <span class="tytul">Zad 6:</span> Zmienna $a podzielona przez 5: 
        <span class="wynik"><?phpecho $a / 5; ?></span>
    </div>

    <div class="zadanie">
        <span class="tytul">Zad 7:</span> Reszta z dzielenia zmiennej $a przez 2: 
        <span class="wynik"><?phpecho $a % 2; ?></span>
    </div>

    <div class="zadanie">
        <span class="tytul">Zad 8:</span> Wartość $a podniesiona do 3 potęgi: 
        <span class="wynik"><?php echo $a ** 3; ?></span>
    </div>

    <div class="zadanie">
        <span class="tytul">Zad 9:</span> 
        <span class="wynik"><?php echo "Wartość zmiennej \$a wynosi: $a i już się nie zmieni."; ?></span>
    </div>

</body>
</html>