<div class="row">
	<div class="content">
			<table class="table striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr>
                    <th class="text-left">Nama Donatur</th>
                    <th class="text-left">Alamat Donatur</th>
                    <th class="text-left">Jenis Donasi</th>
                    <th class="text-left">Jumlah Donasi</th>
                    <th class="text-left">Kepada Posko</th>
                    
                </tr>
                </thead>

                <tbody>
                </tbody>

                <tfoot>
                <tr>
                    <th class="text-left">Nama Donatur</th>
                    <th class="text-left">Alamat Donatur</th>
                    <th class="text-left">Jenis Donasi</th>
                    <th class="text-left">Jumlah Donasi</th>
                    <th class="text-left">Kepada Posko</th>
                    
                </tr>
                </tfoot>
            </table>

            <script>
                $(function(){
                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "http://localhost/sinbanproject/maps/jDataDonatur",
                        "aoColumns": [
                            { "mData": "nama_donatur" },
                            { "mData": "alamat_donatur" },
                            { "mData": "jenis_donasi" },
                            { "mData": "keterangan" },
                            { "mData": "nama_posko" }
                        ]
                    } );
                });
            </script>
	</div>
</div>