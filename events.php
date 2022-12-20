<?php
session_start();
require_once __DIR__ . '/connection.php';


$email = $_SESSION['email'];

//user
$sql_users = "SELECT nome FROM utenti WHERE email LIKE '%{$email}%'";
$result = mysqli_query($connect, $sql_users);  //query and get results
$user = mysqli_fetch_all($result, MYSQLI_ASSOC); //result as an array

//every info about every event
$sql_events = "SELECT attendees, nome_evento, data_evento FROM eventi WHERE attendees LIKE '%{$email}%'";
$result_e = mysqli_query($connect, $sql_events); //query and get results
$events = mysqli_fetch_all($result_e, MYSQLI_ASSOC); //result as an array

//events' names
$sql_event_names = "SELECT nome_evento FROM eventi WHERE attendees LIKE '%{$email}%'";
$result_e_names = mysqli_query($connect, $sql_event_names); //query and get results
$event_names = mysqli_fetch_all($result_e_names, MYSQLI_ASSOC); //result as an array

//events' dates
$sql_event_dates = "SELECT data_evento FROM eventi WHERE attendees LIKE '%{$email}%'";
$result_e_dates = mysqli_query($connect, $sql_event_dates); //query and get results
$event_dates = mysqli_fetch_all($result_e_dates, MYSQLI_ASSOC); //result as an array

//obtain a single dimension array fron a multidimensional one
function createSingleDimensionArray(Array $array){
    $result =[];
    if(!is_array($array)){
        return false;
    }
    foreach ($array as $key => $value){
        if(is_array($value)){
            $result = array_merge($result, createSingleDimensionArray($value));
        }else{
            $result[] = $value;
        }
    }
    return $result;
}
//single dimension arrays
$event_names_single = createSingleDimensionArray($event_names);
$event_dates_single = createSingleDimensionArray($event_dates);


//allow to iterate through both arrays($event_names_single and $event_dates_single) at the same time
$keysOne = array_keys($event_names_single);
$keysTwo = array_keys($event_dates_single);
$min = min(count($event_names_single), count($event_dates_single));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventi - Edusogno</title>

    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <header class="rectangle-1">
        <img class="logo" src="./assets/images/logo.svg">
    </header>

    <main>
        <section>
            <div class="container">
                <h1>

                        Ciao <?php if(isset($_SESSION['email'])){echo $user[0]['nome'];} else{echo "[nome]";} ?> ecco i tuoi eventi

                </h1>

                <div class="event-container">
                    <div class="event-content">
                        <?php for($i = 0; $i < $min; $i++) {?>
                        <div class="event-card">
                            <div class="event">
                                <h2>
                                    <?php echo $event_names_single[$keysOne[$i]] ?>
                                </h2>
                                <div class="event-time">
                                    <?php echo $event_dates_single[$keysTwo[$i]] ?>
                                </div>
                                <button class="btn">JOIN</button>
                            </div>
                        </div>
                        <?php ;} ?>
                    </div>

                </div>
            </div>

        </section>
        <div class="vector-4">
            <img src="./assets/images/vector-4.svg" alt="">
        </div>
        <div class="vector-5">
            <img src="./assets/images/vector-5.svg" alt="">
        </div>
        <div class="vector-1">
            <img src="./assets/images/vector-1.svg" alt="">
        </div>
        <div class="ellipse-12">

        </div>
        <div class="ellipse-13">

        </div>
        <div class="rocket">
            <div class="rocket-tip">
                <img src="./assets/images/rocket-tip.svg">
            </div>
            <div class="rocket-body">

            </div>
            <div class="rocket-hole">

            </div>
            <div class="rocket-left-wing">
                <img src="./assets/images/vector-2.svg">
            </div>
            <div class="rocket-right-wing">
                <img src="./assets/images/vector-2.svg">
            </div>
            <div class="rocket-central-wing">

            </div>
        </div>
    </main>

</body>
</html>