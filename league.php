<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Some League thing</title>
    </head>
    <body>
        <?php
        $file = fopen("https://prod.api.pvp.net/api/lol/na/v1.3/summoner/by-name/RiotSchmick?api_key=0e93152b-898d-41a7-8b74-39a609fcec81", "r");
        var_dump(json_decode($file));
        ?>
        <form name="data" method="GET" action="">
            <input type="submit" />
        </form>
    </body>
</html>