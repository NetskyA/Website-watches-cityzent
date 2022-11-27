<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=rekap.xls");
header("Pragma: no-cache");
header("Expires: 0");

require_once 'connector.php';

$output = "";

$output .= "
		<table border='1'>
			<thead>
				<tr>
                    <th>Nota</th>
                    <th>Nama Customer</th>
                    <th>Total</th>
                    <th>Date Transaksi</th>
				</tr>
			<tbody>
	";
$subtotal=0;
$stmt = $conn->prepare("SELECT c.Nama_Lengkap as 'Nama',h.ID as 'ID',h.Total as 'Total',h.Waktu_Transaksi as 'Waktu' from h_trans h,customer c where h.ID_Customer=c.ID");
$stmt->execute();
$data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
foreach ($data as $key => $value) {
    $subtotal+= $value["Total"];
    $output .= "
				<tr>
					<td>" . $value["ID"] . "</td>
                            <td>" . $value["Nama"] . "</td>
                            <td>Rp " . number_format($value["Total"], 2, ',', '.') . "</td>
                            <td>" . $value["Waktu"] . "</td>
				</tr>
	";
}

$output .= "
            <tr>
                <td></td>
                <td></td>
                <td>Subtotal :</td>
                <td>Rp ".number_format($subtotal, 2, ',', '.')."</td>
            </tr>
			</tbody>
 
		</table>
	";

echo $output;
