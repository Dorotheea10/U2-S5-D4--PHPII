<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Benvenuto in Biblioteca</h1>

        <?php
        require_once 'Libro.php';
        require_once 'DVD.php';

        // Creazione di alcuni oggetti di tipo Libro e DVD
        $libro1 = new Libro(3);
        $libro2 = new Libro(5);
        $dvd1 = new DVD(2);

        // Test dei metodi di prestito e restituzione
        $libro1->presta();
        $libro1->restituisci();
        $libro1->presta();
        $dvd1->presta();

        // Utilizzo dei metodi statici contaLibri() e contaDVD()
        echo "<p>Numero totale di libri: " . Libro::contaLibri() . "</p>";
        echo "<p>Numero totale di DVD: " . DVD::contaDVD() . "</p>";
        ?>

        <div class="material">
            <h2>Testa i metodi</h2>
            <button class="btn" onclick="location.reload()">Ricarica pagina</button>
        </div>
    </div>
</body>
</html>
