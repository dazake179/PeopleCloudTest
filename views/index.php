<!DOCTYPE html>
<html>
<head>
    <title>Vacantes en Indeed</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Vacantes en Indeed</h1>
        <table class="table mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Título</th>
                    <th scope="col">Fecha de publicación</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Descripción</th>
                </tr>
            </thead>
            <tbody id="vacancies-table-body"></tbody>
        </table>
    </div>
    <div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="descriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="descriptionModalLabel">Descripción de la vacante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="descriptionModalBody"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/indeed_vacancies.js"></script>
</body>
</html>