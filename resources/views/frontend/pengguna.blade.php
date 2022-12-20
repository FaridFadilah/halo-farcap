<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="">
    <input type="text" id="email">
    <input type="text" id="password">
    <input type="file" id="photo">
    <button onclick="tambahPengguna">Submit</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
  <script>
    function tambahPengguna(){
      let nama = $('#nama').val()
      let deskripsi = $('#email').val()
      let img = $('#password').val()
      let photo = $('#photo').val()

      if(nama == '') return alert('nama tidak boleh kosong')
      if(deskripsi == '') return alert('deskripsi tidak boleh kosong')
      if(img == '') return alert('img tidak boleh kosong')

      let fd = new FormData()
      fd.append('nama', nama)
      fd.append('email', email)

      if(password !== '') return fd.append('password', password)
      if(photo.prop('files').length > 0) return fd.append('photo', photo.props('files')[0])

      $.ajax({
        url: 'http://localhost:8000/api/pengguna/tambah',
        method: 'POST',
        data: fd,
        processData: false, //agar data tidak diproses dulu sebelum dikirim
        contentType: false, //di false karena menggunakan form data (FD)
        success : _ => {
          window.location.href = "http://localhost:8000/"
        }
      })
    }
  </script>
</body>
</html>