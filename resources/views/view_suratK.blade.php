<!DOCTYPE html>
<head>
    <title>Surat Keluar</title>
    <meta charset="utf-8">
    <style>
        		body{
			font-family: times new roman;
			background-color: #ffffff;
		}
		.rangka-surat{
			width: 750px;
			margin: 0 auto;
			background-color: #ffffff;
			height: 500px;
			padding: 20px;
		}
		.table-kop{
			border-bottom: 5px solid #000000;
			padding: 2px;
		}
		.tengah{
			text-align: center;
			line-height: 5px;
		}
		.jenis-surat{
			text-align: center;
			font-size: 24px;
			font-weight: bolder;
			margin: 20px;
			text-decoration-line: underline;
		}
		.table-no-surat{
			border: 1px solid #000000;
			position: relative;
			width: 97%;
			margin: 10px;
		}
		.td{
			border: 1px solid #000000;
		}
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            /* border: 1px solid;  */
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>

</head>

<body>
<div class="rangka-surat">
		<table class="table-kop" width="100%">
			<tr>
				<td><img src="{{asset('assets/images/logo_poliwangi.png')}}" width="140px"></td>
				<td class="tengah">
					<h2 style="font-weight: normal;">KEMENTRIAN PENDIDIKAN, KEBUDAYAAN</h2>
					<h2 style="font-weight: normal;">RISET, DAN TEKNOLOGI</h2>
					<h2>POLITEKNIK NEGERI BANYUWANGI</h2>
					<h2 style="font-size: 18px; font-weight: normal;">Jl. Raya Jember kilometer 13 Labanasem, Kabat, Banyuwangi, 68461</h2>
					<h2 style="font-size: 18px; font-weight: normal;">Telepon / Faks : (0333) 636780</h2>
					<h2 style="font-size: 18px; font-weight: normal;">E-mail : <u>poliwangi@poliwangi.ac.id</u> ; Website : <u>http://www.poliwangi.ac.id</u></h2>
				</td>
			</tr>
            <div id=halaman>
        <!-- <h3 id=judul>SURAT PERNYATAAN</h3> -->

        <!-- <p>Saya yang bertanda tangan di bawah ini :</p> -->

        <table>
            <tr>
                <td style="width: 30%;">Nomor</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$showData->Nomor_Surat}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tanggal Surat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$showData->Tanggal_Surat}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Perihal</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$showData->Perihal}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Prodi</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$showData->Prodi}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Kepada</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$showData->Kepada}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jenis Disposisi</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$showData->Disposisi}}</td>
            </tr>
        </table>
        
        <p>{{$showData->Isi_Disposisi}}
        </p>
        <br>
        <p>Demikian atas perhatian dan kerjasamanya diucapkan terima kasih</p>

        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan</div><br><br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">Direktur</div>

    </div>
        </table>
	</div><
</body>

</html>