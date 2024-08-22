// opsi tuk memilih jenis soal
function toggleForm(idToShow) {
    // Sembunyikan semua form
    $("#essay-form, #pilgan-form").hide();
    // Uncheck semua checkbox
    $("#essay, #pilgan").prop('checked', false);
    // Tampilkan form yang sesuai dan ceklis checkbox-nya
    if (idToShow) {
        $("#" + idToShow).prop('checked', true);
        $("#" + idToShow + "-form").show();
    }
}

$("#essay").on("change", function() {
    toggleForm($(this).is(":checked") ? "essay" : null);
});

$("#pilgan").on("change", function() {
    toggleForm($(this).is(":checked") ? "pilgan" : null);
});

// Inisialisasi counter untuk ID dinamis
// Inisialisasi counter untuk ID dinamis
let counter = 1;

// Event listener untuk menambahkan elemen baru saat tombol "+" diklik
document.getElementById('customButton').addEventListener('click', function() {
    const opsi_opsi = 'col' + counter; // Buat ID dinamis berdasarkan counter
    const newOption = `
        <div class="col hapus" id='${opsi_opsi}'>
            <div class="card shadow-sm">
                <div class="row">
                    <div class="col p-3">
                        <label class="form-check-label position-absolute top-0 start-0">
                            <input type="checkbox" class="form-check-input text-start">
                            ${String.fromCharCode(64 + counter)} <!-- Huruf A, B, C, dst -->
                        </label>
                    </div>
                    <div class="col p-3">
                        <button type="button" class="btn btn-danger position-absolute top-0 end-0">Close</button>
                    </div>
                </div>
                <textarea name="" id="" class="textareajwb p-5" placeholder="Jawaban ${String.fromCharCode(64 + counter)}"></textarea>  
            </div>
        </div>
    `;

    // Tambahkan elemen baru ke dalam container
    const container = document.querySelector('.row.row-cols-1.row-cols-sm-2.row-cols-md-3.g-3');
    container.insertAdjacentHTML('beforeend', newOption);

    // Pindahkan customButton ke posisi terakhir
    container.appendChild(document.getElementById('customButton'));

    counter++; // Naikkan counter untuk ID berikutnya
    return counter;
});

// Event listener untuk menghapus elemen saat tombol "Close" diklik
document.addEventListener('click', function(event) {
    // Cek apakah target klik adalah tombol dengan kelas 'btn-danger'
    if (event.target.classList.contains('btn-danger')) {
        // Cegah tindakan default dan hentikan propagasi event
        event.preventDefault();
        event.stopPropagation();
        
        // Temukan elemen '.col' yang mencakup tombol yang diklik
        const colElement = event.target.closest('.hapus.col');
        if (colElement) {
            // Hapus elemen '.col' menggunakan metode parentNode.removeChild
            colElement.parentNode.removeChild(colElement); // Hapus seluruh elemen '.col'
            counter-=1;
            return counter;
        }
    }
});






