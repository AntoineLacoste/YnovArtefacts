<?php
$host      = $_REQUEST ["host"];
$query     = $_REQUEST ["query"];
$num_hosts = count($host);
if (empty($query) || count($host) == 0) {
    echo '<form method="get">
    <input type="checkbox"
    name="host[]" value="bagel.indexdata.dk/gils" />
        GILS test
    <input type="checkbox"
    name="host[]" value="localhost:9999/Default" />
        local test
    <input type="checkbox" checked="checked"
    name="host[]" value="z3950.loc.gov:7090/voyager" />
        Library of Congress
    <br />
    RPN Query:
    <input type="text" size="30" name="query" />
    <input type="submit" name="action" value="Search" />
    </form>
    ';
} else {
    echo 'Vous avez recherché ' . htmlspecialchars($query) . '<br />';
    for ($i = 0; $i < $num_hosts; $i++) {
        $id [] = yaz_connect($host [$i]);
        yaz_syntax($id [$i], "usmarc");
        yaz_range($id [$i], 1, 10);
        yaz_search($id [$i], "rpn", $query);
    }
    yaz_wait();
    for ($i = 0; $i < $num_hosts; $i++) {
        echo '<hr />' . $host [$i] . ':';
        $error = yaz_error($id [$i]);
        if (!empty($error)) {
            echo "Erreur: $error";
        } else {
            $hits = yaz_hits($id [$i]);
            echo "Nombre de résultats : $hits";
        }
        echo '<dl>';
        for ($p = 1; $p <= 10; $p++) {
            $rec = yaz_record($id [$i], $p, "string");
            if (empty($rec)) continue;
            echo "<dt><strong>$p</strong></dt><dd>";
            echo nl2br($rec);
            echo "</dd>";
        }
        echo '</dl>';
    }
}
?> 