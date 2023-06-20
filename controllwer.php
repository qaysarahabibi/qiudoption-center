<?php 
$conn = mysqli_connect("sql305.infinityfree.com", "if0_34466306", "npg1HOAEeozE6K", "if0_34466306_projekakhir");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $box = [];
    while ( $isi = mysqli_fetch_assoc($result)) {
        $box[] = $isi;
    }
    return $box;
}

function insert($data) {
    global $conn;;
    $email = htmlspecialchars($data["email"]);
    $nama = htmlspecialchars($data["nama"]);
    $animals = htmlspecialchars($data["animals"]);
    $query = "INSERT INTO adopt 
    VALUES 
    ('', '$email', '$nama', '$animals') 
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function masuk($data) {
    global $conn;;
    $ngaran = htmlspecialchars($data["ngaran"]);
    $komen = htmlspecialchars($data["komen"]);
    $query = "INSERT INTO feedback 
    VALUES 
    ('', '$ngaran', '$komen') 
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM feedback WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function update($post) {
    global $conn;
    $id = $post["id"];
    $ngaran = htmlspecialchars($post["ngaran"]);
    $komen = htmlspecialchars($post["komen"]);

    $query = "UPDATE feedback SET 
    ngaran = '$ngaran',
    komen = '$komen'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>