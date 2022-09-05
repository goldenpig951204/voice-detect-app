$(document).ready(function () {
    var datatable = $("#transaction_logging_table").DataTable({
        pageLength: 10,
        lengthMenu: [[5,10,15,-1], [5,10,15,'All']],
        serverSide: true,
        responsive: true,
        autoWidth: false,
        order: [[0, 'asc']],
        ajax: {
            url : `${baseUrl}transaction-logging/get_transaction_logging`
        },
        columns: [{
            data: 'id',
            render: function (data, type, row, idx) {
                return idx + 1
            }
        }, {
            data: 'transaction_id'
        }, {
            data: 'score'
        }, {
            data: 'category'
        }, {
            data: 'date'
        }]
    })
})