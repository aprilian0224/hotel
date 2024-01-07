// ...
echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['judul']}</td>
        <td>{$row['deskripsi']}</td>
        <td><a href='{$row['file_path']}' target='_blank'>Download</a></td>";

// Tambahkan akses cetak laporan hanya untuk admin dan ketua
if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'ketua') {
    echo "<td><a href='print_report.php?id={$row['id']}' target='_blank'>Print</a></td>";
    // Tambahkan tombol delete dengan mengarahkan ke delete_report.php
    echo "<td><a href='delete_report.php?id={$row['id']}'>Delete</a></td>";
} else {
    echo "<td>Permission Denied</td>";
}

echo "</tr>";
// ...