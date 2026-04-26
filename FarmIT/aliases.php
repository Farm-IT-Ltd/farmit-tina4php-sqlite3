<?php

/**
 * FarmIT namespace aliases.
 *
 * Maps FarmIT\ClassName to Tina4\ClassName so both namespaces
 * work during the migration period. Existing Tina4\ imports are
 * unaffected. New code may use FarmIT\ imports.
 */

$__t4 = 'Tina4\\DataSQLite3';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\DataSQLite3');
}
$__t4 = 'Tina4\\SQLite3Connection';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\SQLite3Connection');
}
$__t4 = 'Tina4\\SQLite3Exec';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\SQLite3Exec');
}
$__t4 = 'Tina4\\SQLite3MetaData';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\SQLite3MetaData');
}
$__t4 = 'Tina4\\SQLite3Query';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\SQLite3Query');
}
unset($__t4);
