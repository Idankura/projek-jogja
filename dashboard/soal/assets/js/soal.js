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