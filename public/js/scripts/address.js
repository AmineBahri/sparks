(function ($, DataTable) {
    $.extend(true, DataTable.defaults, {
        pageLength : 20,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'All']],
        language: {
            url : '/dataTables/lang/'+lang+'.json'
        }
    });
})(jQuery, jQuery.fn.dataTable);
var address = $('.table-address').DataTable({
    processing: true,
    serverSide: true,
    ajax: "/address-sparks",
    columns: [
        {data: null,
            searchable: false,
            sortable: false,
            "render": function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            }},
        {data: 'title', name: 'title'},
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        {data: 'phone', name: 'phone'},
        {data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        }
    ],
    'address': []
});
$(document).on("click",".sa-warning" , function(e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    var tr = $(this).parent().parent();
    Swal.fire({
        title: title,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: yes,
        cancelButtonText: failed,
        confirmButtonClass: 'btn btn-success mt-2',
        cancelButtonClass: 'btn btn-danger ms-2 mt-2',
        buttonsStyling: false
    }).then(function (result) {
        if (result.value) {
            Swal.fire({
            title: done,
            text: addressDelete,
            icon: 'success',
            confirmButtonColor: '#776acf',
            })
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "DELETE",
                url: "/address-destroy/"+id,
                success: function (response) {
                    tr.remove();
                }   
            });
        } else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
        ) {
            Swal.fire({
            title: dismiss,
            text: addressSafe,
            icon: 'error',
            confirmButtonColor: '#776acf',
            })
        }
    });
});