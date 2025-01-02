    <!-- local js -->
    <script src="<?= JS ;?>bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= JS ;?>@native.js"></script>
    <script>
     function deleteConfirm(event, url) {
  event.preventDefault(); // Mencegah aksi default (redirect)

  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: true,
  });

  swalWithBootstrapButtons
    .fire({
      title: "Yakin Dek?",
      text: "nnti kalau elu mau hapus datanya bakalan hilang permanen lho",
      icon: "warning",
      showCancelButton: true,
      cancelButtonText: "Batal",
      confirmButtonText: "Hapus",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        // Jika user mengonfirmasi, redirect ke URL
        window.location.href = url;
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire({
          title: "batal dihapus",
          text: "",
          icon: "error",
        });
      }
    });
}

    </script>
  </body>
</html>