<?php
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'peserta';
 
// Table's primary key
$primaryKey = 'id_peserta';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => 'id_peserta', 'dt' => 0 ),
    array( 'db' => 'nama', 'dt' => 1 ),
    array( 'db' => 'telp', 'dt' => 2 ),
    array( 'db' => 'asal', 'dt' => 3 ),
    array( 'db' => 'alamat', 'dt' => 4 ),
    array( 'db' => 'email', 'dt' => 5 ),
    array( 'db' => 'tanggal', 'dt' => 6 )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'tiket',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);