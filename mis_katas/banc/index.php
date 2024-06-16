<?php 
    /* Donat el diagrama de classes de la imatge.

Programa una aplicació que tingui programades totes les opcions del següent menú:

    0.- Sortir de l'aplicació.
    1.- Crear client/a.
    2.- Eliminar client/a.
    3.- Crear compta d'un client/a.
    4.- Ingressar euros en un compte d'un client/a.
    5.- Retirar euros en un compte d'un client/a.

A tenir en compte:
- El saldo inicial de totes les comptes, ha de ser 0 €.
- En crear un client/a, no haurà de tenir cap compte “associada”.
- El diagrama UML mostrà les propietats i mètodes mínims que han de tenir les classes, 
però pots crear-ne més si és necessari. */

include_once("banc.php");
$banc = new Banc();

do {
    echo "\nMenu:\n";
    echo "0.- Sortir de l'aplicació.\n";
    echo "1.- Crear client/a.\n";
    echo "2.- Eliminar client/a.\n";
    echo "3.- Crear compte d'un client/a.\n";
    echo "4.- Ingressar euros en un compte d'un client/a.\n";
    echo "5.- Retirar euros en un compte d'un client/a.\n";
    echo "Trieu una opció: ";
    $opcio = trim(fgets(STDIN));

    switch ($opcio) {
        case 0:
            echo "Sortint de l'aplicació...\n";
            break;
        case 1:
            echo "Introduïu el DNI del client: ";
            $dni = trim(fgets(STDIN));
            echo "Introduïu el nom del client: ";
            $nom = trim(fgets(STDIN));
            $banc->crearClient($dni, $nom);
            break;
        case 2:
            echo "Introduïu el DNI del client a eliminar: ";
            $dni = trim(fgets(STDIN));
            $banc->eliminarClient($dni);
            break;
        case 3:
            echo "Introduïu el DNI del client: ";
            $dni = trim(fgets(STDIN));
            echo "Introduïu el número de compte: ";
            $numeroCompte = trim(fgets(STDIN));
            $banc->crearCompte($dni, $numeroCompte);
            break;
        case 4:
            echo "Introduïu el DNI del client: ";
            $dni = trim(fgets(STDIN));
            echo "Introduïu el número de compte: ";
            $numeroCompte = trim(fgets(STDIN));
            echo "Introduïu la quantitat a ingressar: ";
            $quantitat = floatval(trim(fgets(STDIN)));
            $banc->ingressar($dni, $numeroCompte, $quantitat);
            break;
        case 5:
            echo "Introduïu el DNI del client: ";
            $dni = trim(fgets(STDIN));
            echo "Introduïu el número de compte: ";
            $numeroCompte = trim(fgets(STDIN));
            echo "Introduïu la quantitat a retirar: ";
            $quantitat = floatval(trim(fgets(STDIN)));
            $banc->retirar($dni, $numeroCompte, $quantitat);
            break;
        default:
            echo "Opció no vàlida.\n";
            break;
    }
} while ($opcio != 0);
?>
