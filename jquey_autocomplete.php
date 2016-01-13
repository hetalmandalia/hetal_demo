<!doctype html>
<?php
error_reporting(0);
$connection = new MongoClient("mongodb://192.168.10.10");
//echo "Connection to database successfully<br/>";
$db = $connection->mist;
//echo "Database mydb selected<br/>";
$collection = $db->city;
//echo "Collection selected succsessfully<br/>";
//$query = $collection->find(array('state' => "Gujarat"));
$query = $collection->find();
$query = json_decode(json_encode(iterator_to_array($query)), 1);

$i = 0;
foreach ($query as $city) {
    if ($city["name"] != "" && $city["name"] != NULL) {
        $data[$i] = $city["name"];
        $i++;
    }
}
$data = json_encode($data);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>jQuery UI Autocomplete - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
            $(function () {
                var availableTags = <?php echo $data; ?>;
                $("#tags").autocomplete({
                    source: availableTags
                });
            });
        </script>
    </head>
    <body>
        <div class="ui-widget">
            <label for="tags">Tags: </label>
            <input id="tags">
        </div>
    </body>
</html>