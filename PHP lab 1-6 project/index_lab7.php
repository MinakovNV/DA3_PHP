<?php

    include 'header.php';
    include 'Student.php';
    include 'Player.php';
    include 'Club.php';
    //Task - 1
    echo "<h1>Task - 1</h1>";
    $students = array(new Student(1, 'Sanzhar', 'Abilmazhinov', 3.6),
        new Student(2, 'Daniyar', 'Ibrayev', 3.6),
        new Student(3, 'Ravil', 'Brankov', 3.3),
        new Student(4, 'Sula', 'Shutnikov', 2.6),
        new Student(5, 'Drew', 'Sazontov', 2),
        );
    for($i = 0; $i < 5; $i++) {
        $students[$i]->getStudentData();
    }

    //Task - 2
    array_push($students, new Student(6, "Nikita", "Minakov", 3.6),
        new Student(7, "Aman", "Kumar", 2),
        new Student(8, "Sultan", "Akhmetbek", 3.6),
        new Student(9, "Alisher", "Akhmetkaliyev", 3.3),
        new Student(10, "Vitalik", "Rastrubin", 4)
    );
    echo "<br><h1>Task - 2</h1>";
    function topStudent($students) {
        $top = $students[0];
        for($i = 1; $i <  count($students); $i++) {
            if($top->getGpa() < $students[$i]->getGpa()) {
                $top = $students[$i];
            }
        }
        echo "<h2>The best GPA:</h2>";
        echo $top->getStudentData();
    }

    topStudent($students);

    //Task - 3
    echo "<br><h1>Task - 3</h1>";
    $plyaers1 = array(
        new Player(1, "Stas", "Pokatilov", "Golkiper"),
        new Player(2, "Sergei", "Keyler", "Zashitnik"),
        new Player(4, "Nuraly", "Alip", "Zashitnik"),
        new Player(7, "Abat", "Aiymbetov", "Napadaushiy"),
        new Player(8, "Aibol", "Abiken", "Poluzashitnik")
    );
    $plyaers2 = array(
        new Player(31, "Ruslan", "Abzhanov", "Vratar"),
        new Player(20, "Niyaz", "Idrisov", "Zashitnik"),
        new Player(18, "Timur", "Zhakupol", "Zashitnik"),
        new Player(30, "Sanat", "Zhumakhanov", "Napadaushiy"),
        new Player(6, "Miras", "Tuliev", "Poluzashitnik")
    );

    $club1 = new Club("Kairat", "Kazakhstan", 10, $plyaers1);
    $club2 = new Club("Okzhetpes", "Kazakhstan", 4, $plyaers2);

    $clubs = array($club1, $club2);
    for($i = 0; $i < count($clubs); $i++) {
        $clubs[$i]->printClubData();
        echo "</br>";
    }

    //Task 4
    echo "<br><h1>Task - 4</h1>";
    function sortPlayers($players) {
        for($i = 0; $i < count($players); $i++) {
            for($j = 0; $j < count($players) - 1; $j++) {
                if($players[$j]->getNumber() < $players[$j + 1]->getNumber()) {
                    $temp = $players[$j];
                    $players[$j] = $players[$j + 1];
                    $players[$j + 1] = $temp;
                }
            }
        }
        return $players;
    }

    function sortClubs($clubs) {
        for($i = 0; $i < count($clubs); $i++) {
            for($j = 0; $j < count($clubs) - 1; $j++) {
                if($clubs[$j]->getRatingPoints() < $clubs[$j + 1]->getRatingPoints()) {
                    $temp = $clubs[$j];
                    $clubs[$j] = $clubs[$j + 1];
                    $clubs[$j + 1] = $temp;
                }
            }
        }
        return $clubs;
    }

    $plyaers1 = array(
        new Player(1, "Stas", "Pokatilov", "Golkiper"),
        new Player(2, "Sergei", "Keyler", "Zashitnik"),
        new Player(4, "Nuraly", "Alip", "Zashitnik"),
        new Player(7, "Abat", "Aiymbetov", "Napadaushiy"),
        new Player(8, "Aibol", "Abiken", "Poluzashitnik"),
        new Player(14, "Adam", "Adahadzhev", "Poluzashitnik"),
        new Player(17, "Sultanbek", "Astanov", "Poluzashitnik")
    );
    $plyaers1 = sortPlayers($plyaers1);
    $club1 = new Club("Kairat", "Kazakhstan", 10, $plyaers1);

    $plyaers2 = array(
        new Player(31, "Ruslan", "Abzhanov", "Vratar"),
        new Player(20, "Niyaz", "Idrisov", "Zashitnik"),
        new Player(18, "Timur", "Zhakupol", "Zashitnik"),
        new Player(30, "Sanat", "Zhumakhanov", "Napadaushiy"),
        new Player(6, "Miras", "Tuliev", "Poluzashitnik"),
        new Player(35, "Yaroslav", "Baginskiy", "Vratar"),
        new Player(19, "Plamen", "Dimov", "Zashitnik"),
    );
    $plyaers2 = sortPlayers($plyaers2);
    $club2 = new Club("Okzhetpes", "Kazakhstan", 4, $plyaers2);

    $plyaers3 = array(
        new Player(12, "Dima", "Nepogodov", "Vratar"),
        new Player(25, "Sergei", "Malyi", "Zashitnik"),
        new Player(19, "Marat", "Bystrov", "Zashitnik"),
        new Player(9, "Vitya", "Li", "Napadaushiy"),
        new Player(14, "Samat", "Shamshi", "Poluzashitnik"),
        new Player(1, "Bekhan", "Shaizada", "Vratar"),
        new Player(5, "Dautov", "Damir", "Zashitnik"),
    );
    $plyaers3 = sortPlayers($plyaers3);
    $club3 = new Club("Ordabasy", "Kazakhstan", 8, $plyaers3);

    $plyaers4 = array(
        new Player(32, "Artem", "Rebrov", "Vratar"),
        new Player(56, "Ilya", "Gaponov", "Zashitnik"),
        new Player(39, "Pavel", "Maslov", "Zashitnik"),
        new Player(30, "Sasha", "Sobolev", "Napadaushiy"),
        new Player(7, "Ayaz", "Guliev", "Poluzashitnik"),
        new Player(98, "Sasha", "Maximenko", "Vratar"),
        new Player(38, "Drew", "Eshenkov", "Zashitnik"),
    );
    $plyaers4 = sortPlayers($plyaers4);
    $club4 = new Club("Spartak", "Russia", 19, $plyaers4);

    $plyaers5 = array(
        new Player(1, "Anton", "Shunin", "Vratar"),
        new Player(2, "Grisha", "Morozov", "Zashitnik"),
        new Player(4, "Vova", "Rykov", "Zashitnik"),
        new Player(27, "Kolya", "Komlichenko", "Napadaushiy"),
        new Player(6, "Artur", "Usupov", "Poluzashitnik"),
        new Player(31, "Igor", "Leshuk", "Vratar"),
        new Player(44, "Tony", "Shunich", "Zashitnik"),
    );
    $plyaers5 = sortPlayers($plyaers5);
    $club5 = new Club("Dinamo", "Russia", 1, $plyaers5);

    $league = array($club1, $club2, $club3, $club4, $club5);
    $league = sortClubs($league);
    for($i = 0; $i < count($league); $i++) {
        $league[$i]->printClubData();
        echo "<br>";
    }


include 'footer.php';
?>

