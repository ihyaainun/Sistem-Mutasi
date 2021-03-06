
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Organization Chart Plugin</title>
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="jquery.orgchart.css">
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    #chart-container { height:  620px; }
    .orgchart { background: white; }
  </style>
</head>
<body>

  <div id="chart-container"></div>

  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.orgchart.js"></script>
  <script type="text/javascript">
   var nama = 'RAIS';
    $(function() {

    var datascource = {
      'name': nama,
      'title': 'Manager Unit Pelaksana Pengatur Distribusi',
      'children': [

          { 'name': nama, 'title': 'Pejabat ' ,
          'children':[

                { 'name': nama, 'title': 'Pejabat Pelaksana Keselamatan,Kesehatan kerja,Keamnan dan Lingkungan(K3L)' },
                { 'name': nama, 'title': 'Pejabat Pelaksana Pengadaan' }
          
        ]
},


        { 'name': nama, 'title': 'Manager Bagian Fasilitas Oprasi',
          'children': [
            { 'name': nama, 'title': 'Supervisor Perencanaan SCADA'},
                            
              { 'name': nama, 'title': 'Supervisor Remote Terminal Unit (RTU) dan peripheral' },
              { 'name': nama, 'title': 'Supervisor SCADA dan Telekomunikasi' }
                        ]
            },


            { 'name': nama, 'title': 'Manager Bagian Keuangan, SDM dan Administrasi',
              'children': [                 
              { 'name': nama, 'title': 'Supervisor Keuangan dan Akuntansi' },
              { 'name': nama, 'title': 'Supervisor SDM dan Administrasi' }
                          ]
						  
            },
		 
		  
		           { 'name': nama, 'title': ' Manager Bagian Operasi Sistem Distribusi',
          'children': [
			{ 'name': nama, 'title': 'Supervisor Operasi '},                
              { 'name': nama, 'title': 'Supervisor Pemeliharaan Elektromekanik' },                
              { 'name': nama, 'title': 'Supervisor Pengelolaan Data dan Gambar' },
			  { 'name': nama, 'title': 'Supervisor Perencanaan Pemeliharaan' },
			  { 'name': nama, 'title': 'Supervisor Perencanaan dan Evaluasi Operasi' },
              { 'name': nama, 'title': 'Supervisor Proteksi dan Meter' }
                       ]
           

        }

]
    };

    $('#chart-container').orgchart({
      'data' : datascource,
      'nodeContent': 'title',
      'verticalLevel': 3,
      'visibleLevel': 4
    });

  });
  </script>
  </div>
  </body>
</html> 