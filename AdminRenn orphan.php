<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Administrer renn</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <?php
        if (isset($_SESSION['admin'])) {
            echo "<a href='Admin.php'>Du er ikke logget inn som admin, klikk her for å gå tilbake</a>";
        } else {
            ?>            
            <div class="container" id="adminRenn">
                <h1>Administrer renn</h1>
                <form action="" method="post">
                    <?php
                    
                    if (isset($_POST['lagnyttrenn'])) {
                        $db = mysqli_connect('localhost', 'root@localhost', '', 'test');

                        $navn = mysqli_real_escape_string($db, $_POST['rennNavn']);
                        $dato = mysqli_real_escape_string($db, $_POST['rennDato']);
                        $rennNr = mysqli_real_escape_string($db, $_POST['rennNr']);

                        $sql = "INSERT into renn(RennNr, Navn, Dato) ";
                        $sql .= "VALUES('$rennNr', '$navn', '$dato')";
                        $result = mysqli_query($db, $sql);

                        if (!$result) {
                            echo mysqli_error($db) . "<br>";
                            echo "Kunne ikke legge til renn";
                        }

                        mysqli_close($db);
                    }

                    if (isset($_POST['slettrenn'])) {
                        $db = mysqli_connect('localhost', 'root@localhost', '', 'test');

                        $event = mysqli_real_escape_string($db, $_POST['slettrenn']);

                        $sql = "DELETE FROM renn WHERE RennNr = '$event'";
                        $delRenn = mysqli_query($db, $sql);

                        if (!$delRenn) {
                            echo mysqli_error($db) . "<br>";
                            echo "Kunne ikke slette renn";
                        }

                        $sql = "DELETE FROM registrert WHERE RennNr = '$event'";
                        $cleanRenn = mysqli_query($db, $sql);

                        if (!$cleanRenn) {
                            echo mysqli_error($db) . "<br>";
                            echo "Kunne deregistrere utøvere fra rennet som ble slettet";
                        }

                        mysqli_close($db);
                    }

                    $db = mysqli_connect('localhost', 'root@localhost', '', 'test');

                    $sql = "SELECT RennNr, Dato, Navn ";
                    $sql .= "FROM renn";

                    $result = mysqli_query($db, $sql);

                    if (!$result) {
                            echo mysqli_error($db);
                        }

                    echo "<table> <tr>" . "<th> Øvelsesnummer </th>" . "<th> Navn </th>" . "<th> Dato </th>" . "<th>Mer informasjon</th>" . "<th>Slett renn</th>" . "</tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        $event = $row['RennNr'];
                        $name = $row['Navn'];
                        $date = $row['Dato'];

                        echo "<tr> <td>$event</td>" . "<td>$name</td>" . "<td>$date</td> <td> <button type='submit' name='renn' value='$event'>Se mer</button></td>" . "<td><button type='submit' name='slettrenn' value='$event'>Slett</button></td>" . "</td> </tr>";
                    }
                    echo "</table>";
                    mysqli_close($db);
                    ?>
                </form>

                <form method="post" action="">
                    <h3> Legg til nytt renn </h3> <br>
                    Renn Nummer: <input type="text" name="rennNr"> <br>
                    Navn: <input type="text" name="rennNavn"> <br>
                    Dato: <input type="text" name="rennDato" id="rennDato" onchange="checkDate()">
                    <div id="ErrorDateCheck"></div>
                    <input type="submit" name="lagnyttrenn">
                </form>

                <script type="text/javascript">
                    function checkDate() {
                        var dato = document.getElementById('rennDato').value;
                                var regex = /^ \d{4}\ - (0?[1 - 9] | 1[012])\ - (0?[1 - 9] | [12][0 - 9] | 3[01])$/;
                        if (dato !== "" && !regex.test(dato)) {
                            text = 'Venligst bruk formatet YYYY-MM-DD';
                        }
                        document.getElementById('ErrorDateCheck').innerHTML = text;
                    }
                </script>

                <?php
                if (isset($_POST['atlet'])) {
                    $db = mysqli_connect('localhost', 'root@localhost', '', 'test');
                    $email = mysqli_real_escape_string($db, $_POST['atlet']);
                    $event = mysqli_real_escape_string($db, $_POST['renn']);
                    $sql = "SELECT Epost ";
                    $sql .= "FROM atlet ";
                    $sql .= "WHERE Epost='$email'";
                    $result = mysqli_query($db, $sql);
                    if (!$result) {
                        echo "Fikk ikke koblet til database";
                    } else {
                        if (mysqli_affected_rows($db) == 1) {
                            $sql = "INSERT INTO registrert (Epost, RennNr) ";
                            $sql .= "VALUES ('$email', '$event')";
                            $result = mysqli_query($db, $sql);
                        } else {
                            echo "$email er ikke registrert som atlet";
                        }
                    }
                    mysqli_close($db);
                }
                if (isset($_POST['slett'])) {
                    $db = mysqli_connect('localhost', 'root@localhost', '', 'test');

                    $email = mysqli_real_escape_string($db, $_POST['slett']);
                    $event = mysqli_real_escape_string($db, $_POST['renn']);

                    $sql = "DELETE FROM registrert ";
                    $sql .= "WHERE Epost='$email' AND rennNr='$event'";
                    $result = mysqli_query($db, $sql);

                    if (!$result) {
                            echo mysqli_error($db) . "<br>";
                            echo "Kunne ikke avregistrere utøver fra rennet";
                        }

                    mysqli_close($db);
                }
                if (isset($_POST['renn'])) {

                    $db = mysqli_connect('localhost', 'root@localhost', '', 'test');

                    $renn = mysqli_real_escape_string($db, $_POST['renn']);

                    $sql = "SELECT Fornavn, Etternavn, person.Epost ";
                    $sql .= "FROM person, registrert ";
                    $sql .= "WHERE RennNr ='" . $renn . "' AND registrert.Epost = person.Epost";

                    $result = mysqli_query($db, $sql);

                    if (!$result) {
                            echo mysqli_error($db) . "<br>";
                            echo "Kunne ikke hente utøvere for valgt renn";
                        }

                    echo "<br /><br />";
                    echo "<form action='' method='post'>";
                    echo "<input type='hidden' name='renn' value='$renn' />";
                    echo "<table><tr><th> Utøvere i valgt øvelse </th><th>Slett</th> </tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr> <td>" . $row['Fornavn'] . " " . $row['Etternavn'] . "</td><td><button type='submit' name='slett' value='" . $row['Epost'] . "'>Slett</button></td> </tr>";
                    }
                    echo "</table></form><br />";
                    echo "<form action='' method='post'>"; //Egen form slik at når en skriver inn epost i tekstfeltet og trykker enter er det legg til knappen som trykkes på
                    echo "<input type='hidden' name='renn' value='$renn' />";
                    echo "Legg til ny atlet: <input type='text' name='atlet' /><button type='submit'>Legg til</button>";
                    echo "</form>";
                    mysqli_close($db);
                }
                ?>
                <a href="Admin.php">Tilbake til administratorforsiden</a>
            </div>
<?php } ?>
    </body>
</html>
