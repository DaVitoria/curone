$(document).ready(function() {
    // Manipular o clique no botão para abrir a modal
    $('#showmodal').click(function() {
        $('#exampleModal').modal('show');
    });

    // Manipular o evento de fechar a modal
    $('#exampleModal').on('hidden.bs.modal', function() {
        // Limpar os campos ou realizar outras ações necessárias
    });
});
