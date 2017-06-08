<table class="table table-bordered">
	<thead>
		<tr>
			<th> </th>
			<th>Judul</th>
			<th>Penulis</th>
		</tr>
	</thead>
	<tbody>
 <?php foreach ($isi_buku as $ib) { ?>
		<tr>
			<td>1</td>
			<td><?= $ib['judul'] ?></td>
			<td><?= $ib['penulis'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>



