$(document).ready(function(){
    $('#kota').change(function(){
        $.getJSON('index.php',{action:'getKota', kode_kota:$(this).val()}, function(json){
            $('#daerah').html('');
            $.each(json, function(index, row) {
                $('#daerah').append('<option value='+row.kode_daerah+'>'+row.nama+'</option>');
            });
        });
    });
});