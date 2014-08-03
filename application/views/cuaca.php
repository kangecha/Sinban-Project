<html>
 
<head>
        <title>Contoh Informasi Cuaca dari API BMKG</title>
 
       
</head>
 
<body>
        <marquee direction="up" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">
                        <?php
                        //Penentuan Waktu
                        $waktu=date("H:i:s"); 
                        $t=explode(":",$waktu); 
                        $jam=$t[0]; 
                        $menit=$t[1]; 
                        //Penentuan Waktu

                        foreach ($cuaca['Isi']['Row'] as $no => $c) : ?>
                        
                                <?php   $daerah = $c['Daerah'];
                                        if ($jam > 00 and $jam < 10 ){ 
                                            if ($menit >00 and $menit<60){ 
                                            $cc = $c['Pagi']; 
                                                if ($cc == 'Hujan Ringan' OR $cc == 'Hujan Sedang') {
                                                        echo "<img src='".site_url()."assets/gambar/hujan.png' width='150px'><br>";
                                                        echo $daerah." <br> ".$cc."<hr>";
                                                }elseif ($cc == 'Berawan') {
                                                        echo "<img src='".site_url()."assets/gambar/mendung.png' width='150px'><br>";
                                                        echo $daerah." <br> ".$cc."<hr>";
                                                }else{
                                                   echo "<img src='".site_url()."assets/gambar/cerah.png' width='150px'><br>";
                                                   echo $daerah." <br> ".$cc."<hr>";    
                                                } 
                                            } 
                                        }else if ($jam >= 10 and $jam < 18 ){ 
                                            if ($menit >00 and $menit<60){ 
                                            $cc = $c['Siang']; 
                                                if ($cc == 'Hujan Ringan' OR $cc == 'Hujan Sedang') {
                                                        echo "<img src='".site_url()."assets/gambar/hujan.png' width='150px'><br>";
                                                        echo $daerah." <br> ".$cc."<hr>";
                                                }elseif ($cc == 'Berawan') {
                                                        echo "<img src='".site_url()."assets/gambar/mendung.png' width='150px'><br>";
                                                        echo $daerah." <br> ".$cc."<hr>";
                                                }else{
                                                   echo "<img src='".site_url()."assets/gambar/cerah.png' width='150px'><br>";
                                                   echo $daerah." <br> ".$cc."<hr>"; 
                                                }
                                            } 
                                        }else if ($jam >= 18 and $jam <= 24 ){ 
                                            if ($menit >00 and $menit<60){ 
                                            $cc = $c['Malam']; 
                                                if ($cc == 'Hujan Ringan' OR $cc == 'Hujan Sedang') {
                                                        echo "<img src='".site_url()."assets/gambar/hujan.png' align='center' width='150px'><br>";
                                                        echo $daerah." <br> ".$cc."<hr>";
                                                }elseif ($cc == 'Berawan') {
                                                        echo "<img src='".site_url()."assets/gambar/mendung.png' align='center' width='150px'><br>";
                                                        echo $daerah." <br> ".$cc."<hr>";
                                                }else{
                                                        echo "<img src='".site_url()."assets/gambar/cerah.png' align='center' width='150px'><br>";
                                                        echo $daerah." <br> ".$cc."<hr>";  
                                                }
                                            } 
                                        }

                                ?>                                
                        </tr>
                <?php endforeach ?>                    
                </marquee>
</body>
 
</html>