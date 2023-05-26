
$(document).ready(function() {
    $.ajax({
        url: '../controllers/IndeedVacanciesController.php',
        dataType: 'json',
        success: function(data) {
            var vacanciesTableBody = $('#vacancies-table-body');

            data.forEach(function(vacancy) {
                var row = $('<tr>');
                row.append('<td>' + vacancy.company + '</td>');
                row.append('<td>' + vacancy.title + '</td>');
                row.append('<td>' + vacancy.date + '</td>');
                row.append('<td>' + vacancy.city + ', ' + vacancy.state + ', ' + vacancy.country + '</td>');
                row.append('<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#descriptionModal" data-description="' + vacancy.description + '">Ver detalle</button></td>');

                vacanciesTableBody.append(row);
            });
        },
        error: function(xhr, status, error) {
            console.log('Error al obtener las vacantes:', error);
        }
    });

    $('#descriptionModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var description = button.data('description');
        var modal = $(this);
        modal.find('.modal-body').html(description);
    });
});

