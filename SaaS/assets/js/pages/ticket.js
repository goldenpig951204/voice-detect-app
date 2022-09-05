$(document).ready(function() {
    var datatable = $("#tickets_table").DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, -1], [5, 10, 15, 'All']],
        serverSide: true,
        processing: false,
        responsive: true, 
        autoWidth: false,
        destroy: true,
        order: [[0, "asc"]],
        ajax: {
            url: `${baseUrl}ticket/get_tickets`
        },
        columns: [
            {
                data: 'id',
                render: function (data, type, row, idx) {
                    return idx.row + 1
                }
            }, {
                data: 'type',
            }, {
                data: 'transaction_id'
            }, {
                data: 'name',
            }, {
                data: 'status'
            }, {
                data: 'open_date'
            }, {
                data: 'close_date'
            }
        ]
    });
})