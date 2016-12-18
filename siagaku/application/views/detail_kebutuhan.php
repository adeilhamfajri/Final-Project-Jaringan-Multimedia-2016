
                <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Tanggal Permintaan</th>
                    <th>Jenis Kebutuhan</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($kebutuhan as $row) { ?>
                  <tr>
                    <td><?php echo date_format(date_create($row->tanggal_permintaan),"d F Y"); ?></td>
                    <td><?php echo $row->nama_barang; ?></td>
                    <td><?php echo $row->jumlah_kebutuhan; ?></td>
                  </tr>
				<?php } ?>
                </tbody>
              </table>