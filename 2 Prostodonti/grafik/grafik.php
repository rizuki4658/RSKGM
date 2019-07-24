
	
	 <script>
	 		var tgl = new Date();
	 		var noBln=tgl.getMonth();
	 		var bulan="";
	 		if (noBln==0) {
	 			bulan="Januari";
	 		}else if(noBln==1){
	 			bulan="Februari";
	 		}else if(noBln==2){
	 			bulan="Maret";
	 		}else if(noBln==3){
	 			bulan="April";
	 		}else if(noBln==4){
	 			bulan="Mei";
	 		}else if(noBln==5){
	 			bulan="Juli";
	 		}else if(noBln==6){
	 			bulan="Juli";
	 		}else if(noBln==7){
	 			bulan="Agustus";
	 		}else if(noBln==8){
	 			bulan="September";
	 		}else if(noBln==9){
	 			bulan="Oktober";
	 		}else if(noBln==10){
	 			bulan="November";
	 		}else if(noBln==11){
	 			bulan="Desember";
	 		}
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {

                    labels: ["Acrylic", "Kerangka Logam",
                        "Porcelain",
                        "Porcelain",
                        "Crown & Bridge",
                        "Dowel/ Pasak",
                        "Reparasi",
                        "Bongkar prothesa",
                        "Night Guard",
                        "Splint Oklusal",
                        "Kontrol",
                        "Pasien Baru",
                        "Pasien Lama",
                        "Umum",
                        "BPJS",
                        "Gratis"],
                    datasets: [{
                            label: tgl.getDate() + " " + bulan + " " + tgl.getFullYear(),
                            data: [<?php echo '"' . $total1 . '",'; ?> <?php echo '"' . $total2 . '",'; ?> <?php echo '"' . $total3 . '",'; ?> <?php echo '"' . $total4 . '",'; ?> <?php echo '"' . $total5 . '",'; ?> <?php echo '"' . $total6 . '",'; ?> <?php echo '"' . $total7 . '",'; ?> <?php echo '"' . $total8 . '",'; ?> <?php echo '"' . $total9 . '",'; ?> <?php echo '"' . $total10 . '",'; ?> <?php echo '"' . $total11 . '",'; ?> <?php echo '"' . $total12 . '",'; ?> <?php echo '"' . $total13 . '",'; ?> <?php echo '"' . $total14 . '",'; ?> <?php echo '"' . $total15 . '",'; ?> <?php echo '"' . $total16 . '",'; ?> ],
                            backgroundColor: [
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)',
                                'rgba(0, 143, 213, 0.7)'
                            ],
                            borderColor: [
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)',
                                'rgb(255, 255, 0)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>