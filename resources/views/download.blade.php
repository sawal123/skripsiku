<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hadir Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <h1 class="text-center">DAFTAR TAMU HADIR</h1>
<table class="table table-striped border">
                    <thead class="table-dark mb-5">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Jam Checkin</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['nama']}}</td>
                        <td>{{$item['alamat']}}</td>
                        <td>{{$item['notelp']}}</td>
                        <td>{{$item['created_at']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
</body>
</html>