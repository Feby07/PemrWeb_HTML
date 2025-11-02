<?php
function get_pg_connection(): PgSql\Connection {
    static $conn = null;
    if ($conn instanceof PgSql\Connection) {
        return $conn;
    }

    $connStr = "host=localhost port=5432 dbname=bacabukuonline_db user=postgres password=311205 options='--client_encoding=UTF8'";
    $conn = @pg_connect($connStr);

    if (!$conn) {
        throw new RuntimeException("Koneksi PostgreSQL gagal: " . pg_last_error());
    }

    return $conn;
}

function q(string $sql) {
    $conn = get_pg_connection();
    $res = @pg_query($conn, $sql);
    if ($res === false) {
        throw new RuntimeException("Query gagal: " . pg_last_error($conn));
    }
    return $res;
}

function qparams(string $sql, array $params) {
    $conn = get_pg_connection();
    $res = @pg_query_params($conn, $sql, $params);
    if ($res === false) {
        throw new RuntimeException("Query gagal: " . pg_last_error($conn));
    }
    return $res;
}
?>
