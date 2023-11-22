<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('booking.store') }}" >
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email@emailxxx">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender1" value="laki-laki">
                <label class="form-check-label" for="gender1">
                  Laki Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender2" value="perempuan">
                <label class="form-check-label" for="gender2">
                  Perempuan
                </label>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="0854xxx">
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">company</label>
                <input type="text" class="form-control" name="company" id="company" placeholder="komunitas xxx....">
            </div>
            <div class="mb-3">
                <label for="event_type" class="form-label">event_type</label>
                <input type="text" class="form-control" name="event_type" id="event_type" placeholder="pelatihan ......">
            </div>
            <div class="mb-3">
                <label for="event_name" class="form-label">event_name</label>
                <input type="text" class="form-control" name="event_name" id="event_name" placeholder="pelatihan ......">
            </div>


            <div class="mb-3">
                <label for="descroption" class="form-label">Description</label>
                <textarea class="form-control" id="descroption" name="description" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Pesan</button>
        </form>

    </div>


</body>
</html>
