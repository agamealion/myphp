<?php
$host = "aws.connect.psdb.cloud";
$username = "wwiyhcrpt5ud4j4aj7mt";
$password = "pscale_pw_GK6q3vfp7U2G4lOOwwHA6HGAx7pO8KZxWbzKoavGxG2";
$database = "lisai";

// 配置 SSL/TLS 选项
$ssl_options = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
        "allow_self_signed" => true
    )
);

// 建立连接
$conn = new mysqli($host, $username, $password, $database, null, $ssl_options);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} else {
    echo "连接成功";
}

// 关闭连接
$conn->close();
?>
