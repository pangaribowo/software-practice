function editData(nim) {
    window.location.href = 'form_update.php?id=' + nim;
}

function deleteData(nim) {
    if (confirm('Anda yakin ingin menghapus data dengan NIM ' + nim + '?')) {
        window.location.href = 'form_delete.php?id=' + nim;
    }
}
