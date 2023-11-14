$( document ).ready(function() {
    let table = new DataTable('table');
    table.on('draw.dt', function() {
        removeButton();
        editButon();
    });
    removeButton();
    editButon();
});

function removeButton()
{
    
    $('table tbody tr .remove').on('click', function(){
        event.preventDefault();

        // Muestra la ventana de confirmación
        var confirmed = confirm('¿Estás seguro de que deseas eliminar este producto?');

        // Si el usuario hace clic en "Aceptar", redirige
        if (confirmed) {
            window.location.href = $(this).attr('data-id');
        }
    });
}

function editButon()
{
    $('table tbody tr .edit').on('click', function(){
        window.location.href = $(this).attr('data-id');
    });
}