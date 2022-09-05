$(document).ready(function() {
    var dataTable = $("#profiles_table").DataTable({
        paging: true,
        autoWidth: false,
        serverSide: true,
        ajax: {
            type: 'GET',
            url: `${baseUrl}profiles/get_datatable_profiles`
        },
        order: [[0, "asc"]], 
        columns: [{
            data: 'id',
            render: function (data, type, row, idx) {
                return idx.row + 1
            }
        }, {
            data: 'name'
        }, {
            data: 'status',
            render: function (data, type, row, idx) {
                return `<span class="badge ${row.status == 1 ? 'badge-success' : (row.status == 2 ? 'badge-warning' : 'badge-danger')}">
                            ${row.type}
                        </span>`
            }
        }, {
            render: function (data, type, row, idx) {
                return `<button class="btn btn-primary btn-rounded py-1 px-2 ${row.status == 1 ? 'd-none' : 'd-inline-block'}" data-status="1" data-id="${row.id}"><i class="mdi mdi-thumb-up"></i></button>
                        <button class="btn btn-warning btn-rounded py-1 px-2 ${row.status == 2 ? 'd-none' : 'd-inline-block'}" data-status="2" data-id="${row.id}"><i class="mdi mdi-thumb-down"></i></button>
                        <button class="btn btn-danger  btn-rounded py-1 px-2" data-status="3" data-id="${row.id}"><i class="mdi mdi-delete"></i></button>`
            }
        }]
    });

    $("#profiles_table").on("click", "tr", function () {
        var data = dataTable.row(this).data(); 
        location.href = baseUrl + "profiles/individual/" + data.id
    });

    $("#profiles_table").on("click", "tr .btn", function (event) {
        event.stopPropagation();
        var id = $(this).data("id");
        var status = $(this).data("status");
        var url = baseUrl + "profiles/set_profile_permission/" + id;
        $.showLoading({name: "line-scale"});
        $.ajax({
            url: url,
            type: "POST",
            data: { status: status }
        }).then(function (res) {
            console.log(res);
            setTimeout(function () {
                $.hideLoading();
                dataTable.ajax.reload();
            }, 1000);
            if (res.result) {
                $.toast({
                    heading: "Success",
                    text: "The profile have been updated successfully.",
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'success',
                    hideAfter: 3000,
                    stack: 6
                });
            } else {
                $.toast({
                    heading: "Warning",
                    text: "The profile have not been updated unfortunately.",
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3000,
                    stack: 6
                });
            }
        });
    })
});