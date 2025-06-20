<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="col-xl-6 grid-margin stretch-card flex-column">
        <h5 class="mb-2 text-titlecase mb-4">Ini Tabel</h5>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                        <thead>
                            <tr>
                                <th class="ms-5">ID</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pasien1 as $mk)
                            <tr>
                                <td>{{ $mk->id }}</td>
                                <td>{{ $mk->nama }}</td>
                                <td>{{ $mk->tanggal_lahir }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                    <a href="{{ route('editPasien', ['id' => $mk->id]) }}" class="btn btn-success btn-sm btn-icon-text me-3">
                                        Edit
                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                      </a>
                                    <a href="route"></a>
                                    <form action="{{ route('hapusPasien', ['id' => $mk->id] )}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-icon-text">
                                            Delete
                                            <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                                        </button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>