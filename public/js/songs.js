$("#addSongForm").click(function(e){
    e.preventDefault();

    var formData = new FormData();
    
  
    formData.append("songname", $("#songname").val());
    formData.append("songartist", $("#songartist").val());
    formData.append("songfile", $("#songfile").val());

    $.ajax({
        url: 'index.php?r=addsongform',
        type: 'POST',
        data: formData,
        processData: false, // Evita que jQuery procese los datos
    contentType: false, // Evita que jQuery establezca el tipo de contenidox
        success: function(response) {
                alert('Canción añadida correctamente!');        
        },
        error: function() {
            alert('Error al enviar les dades.');
        }
    });
});
