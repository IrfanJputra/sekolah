<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tinymce Editor in using PHP Example - Nicesnippets.com</title>
    <!-- include Boostrap 5 -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- include tinymce -->
    <script src="https://cdn.tiny.cloud/1/mm6l99xsdy8839w49co27k6rib54auzv3dsdlaehcanu59xq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
<?php
include '../koneksi.php';
include '../function.php';
$query = mysqli_query($conn, "SELECT * FROM tb_tagline");
$data = mysqli_fetch_array($query);
 var_dump($data);
?>

<?php


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah_artikel($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'aksi.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'aksi.php';
			</script>
		";
	}


}
?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center bg-danger text-white">
                        <h4>Tinymce Editor in using PHP Example - Nicesnippets.com</h4>
                    </div>
                    <div class="card-body">
                        <form method='post' action=''>
                            <div class="mb-3">
                                <label><strong>Judul</strong></label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label><strong>Artikel</strong></label>
                                <textarea id="mytextarea" name='artikel' class="form-control"></textarea><br>
                            </div>

                            <div class="mb-3" >
                            <label><strong>Tag :</strong></label>
                                <select name="id_tag"  class="form-control">
                                <option value="<?= $data['id_tag'] ?>"><?= $data['tagline']; ?></option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: [
                'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
                'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
                'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange styleselect | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
</body>
</html>