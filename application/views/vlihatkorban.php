<div class="row">
	<div class="content">
			<table class="table striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr>
                    
                    <th class="text-left">Nama Lengkap</th>
                    <th class="text-left">Alamat Lengkap</th>
                    <th class="text-left">No Hp/Telp</th>
                    <th class="text-left">Tempat Posko</th>
                    
                </tr>
                </thead>

                <tbody>
                </tbody>

                <tfoot>
                <tr>
                    <th class="text-left">Nama Lengkap</th>
                    <th class="text-left">Alamat Lengkap</th>
                    <th class="text-left">No Hp/Telp</th>
                    <th class="text-left">Tempat Posko</th>
                    
                </tr>
                </tfoot>
            </table>

            <script>
                $(function(){
                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "http://localhost/sinbanproject/maps/jDataKorban",
                        "aoColumns": [
                            { "mData": "nama_lengkap" },
                            { "mData": "alamat_korban" },
                            { "mData": "no_hp" },
                            { "mData": "nama_posko" }
                        ]
                    } );
                });
            </script>
	</div>
</div>