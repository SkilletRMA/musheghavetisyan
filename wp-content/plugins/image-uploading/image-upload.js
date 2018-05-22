    var addButton = document.getElementById( 'image-upload-button' );
    var deleteButton = document.getElementById( 'image-delete-button' );
    var img = document.getElementById( 'image-tag' );
    var hidden = document.getElementById( 'img-hidden-field' );

//stex kanchel em median
    var customUploader = wp.media({
        title: 'Select an Image',
        button: {
            text: 'Use this Image'
        },
        multiple: false
    });

    //inqy JavaScript kody
    var toggleVisibility = function(action){
        if('ADD' === action) {
            addButton.style.display = 'none';
            deleteButton.style.display = '';
            img.setAttribute('style', 'width: 100%;');
        }
        if('DELETE' === action) {
            addButton.style.display = '';
            deleteButton.style.display = 'none';
            img.removeAttribute('style');
        }
    };

    addButton.addEventListener( 'click', function() {
        if ( customUploader ) {
            customUploader.open();
        }
    });



    customUploader.on('select', function(){
       var attachment = customUploader.state().get('selection').first().toJSON();
       img.setAttribute('src', attachment.url);
       hidden.setAttribute('value', JSON.stringify( [ { id: attachment.id, url: attachment.url } ] ) );
       toggleVisibility('ADD');
    });

    deleteButton.addEventListener( 'click', function() {
        img.removeAttribute('src');
        hidden.removeAttribute('value');
        toggleVisibility('DELETE');
    });

    window.addEventListener('DOMContentLoaded', function() {
        if('' === customUploads.imageData || 0 === customUploads.imageData.length){
            toggleVisibility('DELETE');
        }
        else {
            img.setAttribute('src', customUploads.imageData.src);
            hidden.setAttribute('value', JSON.stringify( [ customUploads.imageData ] ));
            toggleVisibility('ADD');
        }
    });