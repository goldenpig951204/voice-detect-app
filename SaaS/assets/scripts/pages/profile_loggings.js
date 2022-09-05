$(document).ready(function() {
    var dataTable = $("#profile_loggings_table").DataTable({
        paging: true,
        autoWidth: false,
        serverSide: true,
        ajax: {
            type: 'GET',
            url: `${baseUrl}profiles/get_datatable_profile_loggings`
        },
        order: [[0, 'asc']],
        columns: [{
            data: 'id',
            render: function (data, type, row, idx) {
                return idx.row + 1
            }
        }, {
            data: 'profile_id',
            render: function (data, type, row, idx) {
                return row.name
            }
        }, {
            data: 'event',
            render: function (data, type, row, idx) {
                return row.type
            }
        }, {
            data: 'date'
        }]
    })
})