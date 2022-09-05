$(document).ready(function () {
    var dataTable = $("#transactions_table").DataTable({
        paging: true,
        autoWidth: false,
        serverSide: true,
        ajax: {
            type: 'GET',
            url: `${baseUrl}transactions/get_datatable_transactions`
        },
        order: [[0, "asc"]],
        columns: [{
            data: "id",
            render: function (data, type, row, idx) {
                return idx.row + 1
            }
        }, {
            data: 'target_profile',
            render: function (data, type, row, idx) {
                return row.name
            }
        }, {
            data: "grade",
            render: function (data, type, row, idx) {
                return row.type
            }
        }]
    });

    $("#transactions_table").on("click", "tr", function () {
        var data = dataTable.row(this).data();
        location.href = baseUrl + "transactions/individual/" + data.id
    })
})