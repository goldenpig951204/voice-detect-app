$(document).ready(function () {
    var dataTable = $("#tickets_table").DataTable({
        pagging: true,
        autoWidth: false,
        serverSide: true,
        order: [[0, 'asc']],
        ajax: {
            type: 'GET',
            url: `${baseUrl}tickets/get_datatable_tickets`
        },
        columns: [{
            data: 'id',
            render: function (data, type, row, idx) {
                return idx.row + 1
            }
        }, {
            data: 'type',
            render: function (data, type, row, idx) {
                return row.ticket_type
            }
        }, {
            data: 'transaction_id'
        }, {
            data: 'profile_id',
            render: function (data, type, row, idx) {
                return row.name
            }
        }, {
            data: 'status',
            render: function (data, type, row, idx) {
                return row.status_type
            }
        }, {
            data: 'open_date'
        }, {
            data: 'close_date'
        }] 
    })
})