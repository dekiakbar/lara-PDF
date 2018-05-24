<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="" content="">
	<title>Surat Kerja</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
        .tab{
            margin-left: 80px;
        }

        table{
            margin: auto;
            width: 100%;
            border-collapse: collapse;
        }
        
        td{
            border: 1px solid black;
        }
        
        footer{
            width: 100%;
        }
    </style>
<body>

	<header id="header" style="margin-left:10px;">
        <img src="storage/bps.jpg" style="width: 80px;height: 80px;">
        <div style="display: inline-block;margin-left: 20px;">
            <p><h3><i>BADAN PUSAT STATISTIK</i></h3></p>
            <p style="margin-top: -10px;"><h3><i>KABUPATEN SUKABUMI</i></h3></p>
        </div>
    </header>

    <div style="margin-left: 300px;">
        <p><h4 style="text-decoration: underline;">SURAT TUGAS</h4></p>
    </div>

    <div style="margin-left: 180px;margin-top: -30px;">
        <p>Nomor  : 037/32021/SPD-KSA.A/PRODUKSI/02/2018</p>
    </div>

    <p>Yang bertandatangan di bawah ini :</p>

    <div style="margin-left: 200px;">
        <p><h4>KEPALA BPS KABUPATEN SUKABUMI</h4></p>
    </div>

    <p>Memberikan Tugas Kepada :</p>

    <p>Nama<span style="margin-left: 95px;">:  {{$p->users->name}}</span></p>
    <p>NIP<span style="margin-left: 108px;">:  {{$p->nip}}</span></p>
    <p>Jabatan<span style="margin-left: 85px;">:  {{$p->jabatan}}</span></p>
    <p>Anggota<span class="tab">:  -  </span></p>

    <p>Tujuan<span style="margin-left: 88px;">: {{$k->kegiatan}}</span></p>
    
    <p>Waktu Pelaksanaan<span style="margin-left: 10px;">:   27 Pebruari 2018</span></p>

    <table>
        <thead>
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;text-align: center;">
                    <p>Kabupaten Sukabumi, {{date('j-M-Y')}}</p>
                    <p>Kepala</p>
                    <br>
                    <span style="margin:auto;width: 100%;">
                        <p style="text-decoration: underline;">Dody Gunawan Yusuf, S.Si</p>
                        <p style="margin-top: -15px;">NIP. 19660128 199403 1 002</p>
                    </span>
                </td>
            </tr>
        </thead>
    </table>

    <footer style="margin-top: 260px;">
        <p style="margin-left: 170px;font-size: 15px;">Jalan Raya Karangtengah KM 14 No 52 Cibadak, Sukabumi</p>
        <p style="margin-left: 30px;margin-top: -15px;font-size: 15px;">Telp/Fax: (0266) 536953 / 536949. email : bps3202@bps.go.id, Website: http://sukabumikab.bps.go.id</p>    
    </footer>
</body>
</html>
