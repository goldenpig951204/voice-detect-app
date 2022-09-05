$(document).ready(function() {
    var datatable = $("#profile_logging_table").DataTable({
        pageLength: 10, 
        lengthMenu: [[5, 10, 15, -1], [5, 10, 15, 'All']],
        serverSide: true,
        processing: false,
        responsive: true,
        autoWidth: false,
        destroy: true,
        order: [[0, "asc"]],
        ajax: {
            url: `${baseUrl}profile-logging/get_profile_loggings`
        },
        columns: [
            {
                render: function (data, type, row, idx) {
                    return idx.row + 1
                }
            }, {
                data: 'profile_id',
                render: function (data, type, row, idx) {
                    console.log(row);
                    return row.name
                }
            }, {
                data: 'event',
                render: function (data, type, row, idx) {
                    return row.type
                }
            }, {
                data: 'date'
            }
        ]
    })
})