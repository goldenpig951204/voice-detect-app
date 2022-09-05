$(document).ready(function() {
    $("#users_table").DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, -1], [5, 10, 15, "All"]],
        serverSide: true,
        processing: true,
        responsive: true,
        autoWidth: false,
        destroy: true,
        order: [[0, "asc"]],
        ajax: {
            url: `${baseUrl}/admin/users/get-users`,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            }
        },
        columns: [
            {
                searchable: false,
                render: function(data, type, row, idx) {
                    return idx.row + 1
                }
            }, {
                data: 'name'
            }, {
                data: 'email'
            }, {
                data: 'domain'
            }, {
                data: 'api_token'
            }, {
                orderable: false,
                searchable: false,
                render: function (data, type, row, idx) {
                    return `
                        <button class="btn btn-success btn-sm radius-0" data-toggle="tooltip" title="active" data-id="${row.id}"><i class="fas fa-thumbs-up"></i></button>
                        <button class="btn btn-warning btn-sm radius-0" data-toggle="tooltip" title="disable" data-id="${row.id}"><i class="fas fa-thumbs-down text-light"></i></button>
                        <button class="btn btn-danger btn-sm radius-0" data-toggle="tooltip" title="delete" data-id="${row.id}"><i class="fa fa-trash"></i></button>
                    `
                }
            }
        ],
        drawCallback: function( settings ) {
            $("[data-toggle='tooltip']").tooltip();
        }
    });
});