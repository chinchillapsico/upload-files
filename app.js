// SIDEBAR
$(document).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
  // START OPEN
  $('.button-collapse').sideNav('show');
});
        

var form = document.getElementById('file-form');
var fileSelect = document.getElementById('file');
var uploadButton = document.getElementById('upload-button');

form.onsubmit = function(event) {
    event.preventDefault();
            
    uploadButton.innerHTML = 'Subiendo...';
              // Obtiene documentos del input
    var files = fileSelect.files;
              // Crea FormData object.
    var formData = new FormData();

    
          
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
              // tipo documento
            if (!file.type.match('.*')) {
                continue;
            }

            // Añade documento
        formData.append('file', file, file.name);
        formData.getAll('file' , file, file.name);

        /*
        formData.delete'file', file, file.name);
        */
       
    }
    
    $.ajax({
        url: 'upload.php', 
        type: 'POST',
        data: formData,
        dataType: 'text',
            success: function (data) {
                console.log(data)
            },
            error: function(error){
                alert(error);
            },
        cache: false,
        contentType: false,
        processData: false
    });
}

