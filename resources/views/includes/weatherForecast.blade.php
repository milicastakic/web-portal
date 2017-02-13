<div>
    <h1>Vremenska prognoza</h1>
    <?php
    $urlLocation="http://ip-api.com/json";
    $curlL = curl_init($urlLocation);

    curl_setopt($curlL, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlL, CURLOPT_POST, false);
    $curl_odgovorL = curl_exec($curlL);
    curl_close($curlL);
    $parsiran_jsonL = json_decode ($curl_odgovorL);
    $grad=$parsiran_jsonL->city;
    echo $grad;

    $url='http://api.openweathermap.org/data/2.5/weather?q='.$grad.'&appid=a19af177043f04418f219f3143dab635&units=metric';
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, false);
    $curl_odgovor = curl_exec($curl);
    curl_close($curl);
    $parsiran_json = json_decode ($curl_odgovor);
    $weath=$parsiran_json->weather;
    $img="";

    for ($i=0; $i < count($weath); $i++){

         $temp= $parsiran_json->main->temp;

        $vreme= $weath[$i]->main;

        $opis= $weath[$i]->description;
        $img=$weath[$i]->icon;
        $urlTrans="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20170126T164610Z.a228f07237b0cfbb.05caa51ca0bc55e9378b9a764b554f212929e60f&text=".$temp."&text=".$vreme."&text=".$opis."&lang=en-bs";

        $curl1=curl_init($urlTrans);
        curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl1, CURLOPT_POST, false);
        $curl_odgovor1 = curl_exec($curl1);
        curl_close($curl1);
        $string = file_get_contents($urlTrans);
        $parsiran_json1 = json_decode ($string, true);
        $temp1= $parsiran_json1['text'][0];
        $vreme1= $parsiran_json1['text'][1];
        $opis1= $parsiran_json1['text'][2];
    }
    $imgurl='http://openweathermap.org/img/w/'.$img.'.png';

    ?>
    <h5>Temperatura:  <?php echo $temp1; ?></h5>
    <br>
    <h5>Vreme:   <?php echo $vreme1; ?> </h5>
    <br>
    <h5>Opis:    <?php echo $opis1; ?></h5>

    <br>
    <img src="<?php echo $imgurl; ?>" alt="" style="width:128px;height:128px;">
</div>