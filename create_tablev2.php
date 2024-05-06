<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        caption {
            font-style: italic;
            padding-bottom: 6px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
        }
        h1 {
            color: red;
        }
    </style>
    <title>Create Table</title>
</head>
<body>
<?php
echo "<h1>Steven Halla, CIS 243</h1>";
function create_table($data, $header=NULL, $caption=NULL) {
    echo '<table>';
    if ($caption) {
        echo "<caption>$caption</caption>";
    }
    if ($header) {
        echo "<tr><th colspan='2'>$header</th></tr>";
    }
    foreach ($data as $dataset => $items) {
        echo "<tr><th colspan='2'>$dataset</th></tr>";
        end($items);
        while ($item = current($items)) {
            echo "<tr><td colspan='2'>$item</td></tr>";
            prev($items);
        }
    }
    echo '</table>';
}

$my_data = [
    'Data Set 1' => ['First piece of data', 'Second piece of data', 'And the third'],
    'Data Set 2' => ['First piece of data', 'Second piece of data', 'And the third'],
    'Data Set 3' => ['First piece of data', 'Second piece of data', 'And the third'],
    'Data Set 4' => ['First piece of data', 'Second piece of data', 'And the third']
];
$my_header = 'Data';
$my_caption = 'Data about something';
create_table($my_data, $my_header, $my_caption);
?>
</body>
</html>
