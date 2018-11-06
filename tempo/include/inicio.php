<?php

    //Chama a url da previsão do tempo
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch, 
        CURLOPT_URL,
        "https://api.hgbrasil.com/weather/?format=json&woeid=12827267"
    );
    $result=curl_exec($ch);
    curl_close($ch);
    //Fim chamada

    //Converte para array
    $recebe = json_decode($result, true);

    // var_dump($result);
    // var_dump( $recebe["results"]["forecast"][0]);
    // if($recebe["results"]["temp"] > 26){
    //     print("está quente!");
    // } else {
    //     print("está fresquinho!");
    // }

    // print(
    //     "Montenegro está atualmente com "
    //     .$recebe["results"]["temp"]
    //     ." graus"
    // );

    function tempo($index){
        if ($index["condition"] == "cloud"){
            return "img/cloud.jpg";
        } elseif ($index["condition"] == "cloudly_day") {
            return "img/cloudly_day.jpg";
        } elseif ($index["condition"] == "clear_day") {
            return "img/clear_day.jpg";
        } elseif ($index["condition"] == "storm") {
            return "img/storm.jpg";
        }
    }
?>

<div class="container">
    <div class="row hoje">
        <div 
            class="col-md-12" 
            style="background: url(
                '<?php 
                        echo tempo($recebe["results"]["forecast"][0])
                    ?>
                ') center; 
                background-size: cover;">
            <center>
                <h1>Montenegro</h1>
                <h2><?php echo $recebe["results"]["temp"]?>°C</h2>
            </center>
        </div>
    </div>
     <div class="row forecast">
        <div 
            class="col-md-2" 
            style="background: url(
                '<?php 
                        echo tempo($recebe["results"]["forecast"][1])
                    ?>
                ') center; 
                background-size: cover;">
            <center>
                <h1><?php echo $recebe["results"]["forecast"][1]["weekday"]?></h1>
                <h3>
                    <?php 
                        echo $recebe["results"]["forecast"][1]["min"];
                        echo "°C - ";
                        echo $recebe["results"]["forecast"][1]["max"];
                        echo "°C"
                    ?>
                </h3>
            </center>
        </div>
        <div 
            class="col-md-2" 
            style="
                background: url(
                    '<?php 
                        echo tempo($recebe["results"]["forecast"][2])
                    ?>
                ') center; 
                background-size: cover;">
            <center>
                <h1><?php echo $recebe["results"]["forecast"][2]["weekday"]?></h1>
                <h3>
                    <?php 
                        echo $recebe["results"]["forecast"][2]["min"];
                        echo "°C - ";
                        echo $recebe["results"]["forecast"][2]["max"];
                        echo "°C"
                    ?>
                </h3>
            </center>
        </div>
        <div 
            class="col-md-2" 
            style="background: url(
                '<?php 
                        echo tempo($recebe["results"]["forecast"][3])
                    ?>
                ') center; 
                background-size: cover;">
            <center>
                <h1><?php echo $recebe["results"]["forecast"][3]["weekday"]?></h1>
                <h3>
                    <?php 
                        echo $recebe["results"]["forecast"][3]["min"];
                        echo "°C - ";
                        echo $recebe["results"]["forecast"][3]["max"];
                        echo "°C"
                    ?>
                </h3>
            </center>
        </div>
        <div 
            class="col-md-2" 
            style="background: url(
                '<?php 
                        echo tempo($recebe["results"]["forecast"][4])
                    ?>
                ') center; 
                background-size: cover;">
            <center>
                <h1><?php echo $recebe["results"]["forecast"][4]["weekday"]?></h1>
                <h3>
                    <?php 
                        echo $recebe["results"]["forecast"][4]["min"];
                        echo "°C - ";
                        echo $recebe["results"]["forecast"][4]["max"];
                        echo "°C"
                    ?>
                </h3>
            </center>
        </div>
        <div 
            class="col-md-2" 
            style="background: url(
                '<?php 
                        echo tempo($recebe["results"]["forecast"][5])
                    ?>') center; 
                    background-size: cover;">
            <center>
                <h1><?php echo $recebe["results"]["forecast"][5]["weekday"]?></h1>
                <h3>
                    <?php 
                        echo $recebe["results"]["forecast"][5]["min"];
                        echo "°C - ";
                        echo $recebe["results"]["forecast"][5]["max"];
                        echo "°C"
                    ?>
                </h3>
            </center>
        </div>
        <div 
            class="col-md-2" 
            style="background: url(
                '<?php 
                        echo tempo($recebe["results"]["forecast"][6])
                    ?>
                ') center; 
                background-size: cover;">
            <center>
                <h1><?php echo $recebe["results"]["forecast"][6]["weekday"]?></h1>
                <h3>
                    <?php 
                        echo $recebe["results"]["forecast"][6]["min"];
                        echo "°C - ";
                        echo $recebe["results"]["forecast"][6]["max"];
                        echo "°C"
                    ?>
                </h3>
            </center>
        </div>
    </div>
</div>