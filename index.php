<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo mulu kerja kaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <form action="postdata.php" method="POST" enctype="multipart/form-data">
        <div class="container mt-5">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" id="alamat"
                        placeholder="alinda kencana blok a6/19 kaliaabng tengah bekasi utara">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin1" value="pria">
                    <label class="form-check-label" for="flexRadioDefault2">
                        pria
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin2" value="wanita">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Wanita
                    </label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nohp</label>
                    <input type="text" name="nohp" class="form-control" id="nohp" placeholder="08213287369">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">foto </label>
                    <input class="form-control" name="foto" type="file" id="foto">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
<div class="container mt-5">