$(document).ready(function () {
    var datatable = $("#transactions_table").DataTable({
        pageLength: 10,
        lengthMenu: [[5,10,15,-1],[5,10,15,'All']],
        serverSide: true,
        responsive: true,
        autoWidth: false,
        destroy: true,
        order: [[0, "asc"]],
        ajax: {
            url: `${baseUrl}transactions/get_transactions`
        },
        columns: [{
            data: 'id',
            render: function (data, type, row, idx) {
                return idx + 1
            }
        }, {
            data: 'name'
        }, {
            data: 'type',
        }]
    })
})