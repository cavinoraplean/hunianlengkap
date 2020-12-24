<center>
	<br><br><br>
    <h1>Daftar Type Rumah Hunian Lengkap</h1>
    <br><br>
	<br><br>
	<table border="1" cellpadding="7">
		<thead>
			<tr>
				<th><center>Type</center></th>
				<th><center>Spesifikasi</center></th>
				<th><center>Harga</center></th>
			</tr>
		</thead>
		
		<tbody>
			<?php foreach ($tb_rumah as $a) { ?>
			<tr>
				<td><?php echo $a->Type ?></td>	
				<td><?php echo $a->Fasilitas ?></td>	
				<td><?php echo 'Rp '.$a->Harga ?></td>	
			</tr>	
			<?php } ?>
		</tbody>
		
	</table>    
    <!-- <p class="p1">Anda dapat mencari berbagai macam type rumah di perumahan yang telah kami sediakan</p> -->
</center>