$(document).ready(function() {
    var speakersTable = $("#profiles_table").DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, -1], [5, 10, 15, 'All']],
        serverSide: true,
        processing: false,
        responsive: true,
        autoWidth: false,
        destroy: true,
        order: [[0, "asc"]],
        ajax: {
            url: `${baseUrl}profiles/get_profiles`,
        },
        columns: [
            {
                render: function (data, type, row, idx) {
                    return idx.row + 1
                }
            }, {
                data: 'name'
            }, {
                data: 'status',
                render: function (data, type, row) {
                    return `<span class="badge ${row.status == 1 ? 'badge-success' : (row.status == 2 ? 'badge-warning' : 'badge-danger')}">${row.type}</span>`
                }
            }, {
                orderable: false,
                searchable: false,
                render: function (data, type, row, idx) {
                    return `
                        <button class="active_btn btn btn-success btn-sm radius-0 ${row.status == 1 ? 'd-none' : 'd-inline-block'}" data-id="${row.id}" data-toggle="tooltip" title="active"><i class="fas fa-thumbs-up"></i></button>
                        <button class="disable_btn btn btn-warning btn-sm radius-0 text-white ${row.status == 2 ? 'd-none' : 'd-inline-block'}" data-id="${row.id}" data-toggle="tooltip" title="disable"><i class="fas fa-thumbs-down"></i></button>
                        <button class="demaged_btn btn btn-danger btn-sm radius-0 ${row.status == 3 ? 'd-none' : 'd-inine-block'}" data-id="${row.id}" data-toggle="tooltip" title="damgaged"><i class="fa fa-trash"></i></button>
                     `
                }
            }
        ],
    });

    $("#profiles_table").on("click", ".active_btn", function() {
        $.showLoading({name: 'line-scale'});
        let id = $(this).data("id");
        $.ajax({
            url: `${baseUrl}profiles/update_profile`,
            type: 'POST',
            data: {
                id: id,
                status: 1
            }
        }).then(function(result) {
            $.hideLoading();
            toastr.success("The profile have been updated.", "Success");
            speakersTable.ajax.reload();
        }, err => {
            toastr.error(err, "Warning");
        });
    });

    $("#profiles_table").on("click", ".disable_btn", function() {
        $.showLoading({name: 'line-scale'});
        let id = $(this).data("id");
        $.ajax({
            url: `${baseUrl}profiles/update_profile`,
            type: 'POST',
            data: {
                id: id,
                status: 2
            }
        }).then(function (result) {
            $.hideLoading();
            toastr.success("The profile have been updated.", "Success");
            speakersTable.ajax.reload();
        }, err => {
            toastr.error(err, "Warning");
        });
    });

    $("#profiles_table").on("click", ".demaged_btn", function() {
        $.showLoading({name: 'line-scale'});
        let id = $(this).data("id");
        $.ajax({
            url: `${baseUrl}profiles/delete_profile/${id}`,
            method: 'DELETE'
        }).then(function(result) {
            $.hideLoading();
            toastr.success("The profile have been damaged.", "Success");
            speakersTable.ajax.reload();
        }, err => {
            toastr.error(err, "Warning");
        });
    });
});