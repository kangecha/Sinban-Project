<div class="row">
	<div class="content">
			<table class="table striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr>
                    <th class="text-left">Nama Daerah</th>
                    <th class="text-left">Ketinggian Air/cm</th>
                    <th class="text-left">Radius/Meter</th>
                    <th class="text-left">Jumlah Posko</th>
                    
                </tr>
                </thead>

                <tbody>
                </tbody>

                <tfoot>
                <tr>
                    <th class="text-left">Nama Daerah</th>
                    <th class="text-left">Ketinggian Air/cm</th>
                    <th class="text-left">Radius/Meter</th>
                    <th class="text-left">Jumlah Posko</th>
                    
                </tr>
                </tfoot>
            </table>

            <script>
                $(function(){
                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "http://localhost/sinbanproject/maps/jDataDaerah",
                        "aoColumns": [
                            { "mData": "nama_daerah" },
                            { "mData": "ketinggian_air" },
                            { "mData": "radius" },
                            { "mData": "jmlposko" }
                        ]
                    } );
                });
            </script>
	</div>
</div>