$(document).ready(function() {
    var dataTable = $("#transaction_loggings_table").DataTable({
        pagging: true,
        autoWidth: false,
        serverSide: true,
        order: [[0, 'asc']],
        ajax: {
            type: 'GET',
            url: `${baseUrl}transactions/get_datatable_transaction_loggings`
        },
        columns: [{
            data: 'id',
            render: function (data, type, row, idx) {
                return idx.row + 1
            }
        }, {
            data: 'transaction_id'
        }, {
            data: 'score',
        }, {
            data: 'score_category',
            render: function (data, type, row, idx) {
                return 'row.type';
            }
        }, {
            data: 'date'
        }]
    })
});