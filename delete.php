<?php
require 'controllwer.php';
$id = $_GET["id"];
if (delete($id) > 0) {
    echo "<script> 
    alert ('Feedback deleted successfully!');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "<script> 
    alert ('Yah, data gagal dihapus :');
    document.location.href = 'index.php';
    </script>
    ";
}
?>