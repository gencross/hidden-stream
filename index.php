<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>hidden-stream</title>
    </head>
    <body>
         <?php
         $rawdata = fopen("http://prod.api.pvp.net/api/lol/na/v1.2/game/by-summoner/25714810/recent?api_key=0e93152b-898d-41a7-8b74-39a609fcec81", "r");
         $data = json_decode($rawdata, TRUE);
         $id = $data["summonerId"];
       // $ch = curl_init();
       // curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
       // curl_setopt($ch, CURLOPT_HEADER, false);
        ?>
        <div id="container">
            <table>
                <tr>
                    <th>Stat</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Summoner ID</td>
                    <td><?php echo $id ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>
