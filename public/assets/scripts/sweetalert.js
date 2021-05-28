$('.btn-delete').click(function() {
    let that = $(this);
    Swal.fire({
        title: 'Konfirmasi Hapus',
        text: "Apakah anda yakin ingin menghapus?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#6777EF',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Dihapus!',
                'Berhasil menghapus data.',
                'success'
            );
            that.parent('form').submit();
        }
    })
})