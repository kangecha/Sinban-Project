<div class="row">
	<div class="content">
			<table class="table striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr>
                    <th class="text-left">Nama Posko</th>
                    <th class="text-left">Alamat Lengkap Posko</th>
                    <th class="text-left">Nama Daerah</th>
                    <th class="text-left">Jumlah Korban</th>
                    
                </tr>
                </thead>

                <tbody>
                </tbody>

                <tfoot>
                <tr>
                    <th class="text-left">Nama Posko</th>
                    <th class="text-left">Alamat Lengkap Posko</th>
                    <th class="text-left">Nama Daerah</th>
                    <th class="text-left">Jumlah Korban</th>
                
                </tr>
                </tfoot>
            </table>

            <script>
                $(function(){
                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "http://localhost/sinbanproject/maps/jDataPosko",
                        "aoColumns": [
                            { "mData": "nama_posko" },
                            { "mData": "alamat_posko" },
                            { "mData": "nama_daerah" },
                            { "mData": "jmlkorban" }
                        ]
                    } );
                });
            </script>
	</div>
</div>