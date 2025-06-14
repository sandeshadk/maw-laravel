<script type="text/javascript">
    //TableTools
    var sSwfPath = "{{ asset('/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf') }}";

    //Session messages
    var successMsg = "{{ session('success') }}";
    var infoMsg = "{{ session('info') }}";
    var warningMsg = "{{ session('warning') }}";
    var dangerMsg = "{{ session('danger') }}";
    var errorMsg = "";

    //Active links
    var requestUrl = "{{ request()->url() }}";
    var $activeLink = $("#menubar").find("a[href='" + requestUrl + "']");

    $activeLink.addClass('active');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on("click", ".item-delete", function () {
        var $button = $(this), $row = $(this).closest("tr");
        bootbox.confirm("Are you sure you want to delete this item?", function (response) {
            if (response)
                $.ajax({
                    "type": "POST",
                    "url": $button.data("url"),
                    "data": {_method: "DELETE"},
                    "success": function () {
                        $row.addClass("danger").fadeOut();
                    },
                    "error": function () {
                        bootbox.alert("Delete failed!");
                    }
                });
        });
    });

    $(document).on("click", ".item-cancel", function () {
        var $button = $(this), $row = $(this).closest("tr");
        bootbox.confirm("Are you sure you want to cancel this item?", function (response) {
            if (response)
                $.ajax({
                    "type": "POST",
                    "url": $button.data("url"),
                    "data": {_method: "get"},
                    "success": function () {
                        location.reload();
                    },
                    "error": function () {
                        bootbox.alert("Cancel failed!");
                    }
                });
        });
    });

    $(document).on("click", ".item-suspend", function () {
        var $button = $(this), $row = $(this).closest("tr");
        bootbox.confirm("Are you sure you want to suspend this item?", function (response) {
            if (response)
                $.ajax({
                    "type": "POST",
                    "url": $button.data("url"),
                    "data": {_method: "get"},
                    "success": function () {
                        location.reload();
                    },
                    "error": function () {
                        bootbox.alert("Suspend failed!");
                    }
                });
        });
    });

    $(document).on("click", ".mark-all-read", function () {
        var $button = $(this);
        $.ajax({
            "url": $button.data("href"),
            "success": function (response) {
                toastr.success(response.message);
            },
            "error": function () {
                bootbox.alert("Mark Failed!");
            }
        });
    });

    $(document).ready(function () {
        $(".search").on("keyup", function () {
            var $search = $(this);
            $(".menu").each(function () {
                var $menu = $(this);
                $(this).find('.title').each(function () {
                    if (~$(this).html().toLowerCase().indexOf($search.val().toLowerCase())) {
                        $menu.show();
                        return false;
                    } else {
                        $menu.hide();
                    }
                });
            });
        });

        if ($.isFunction($.fn.summernote)) {
            $('.summer-note').summernote({
                fontNames: [
                    'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New',
                    'Helvetica Neue', 'Impact', 'Lucida Grande', 'Roboto',
                    'Tahoma', 'Times New Roman', 'Verdana'
                ],
                height: 200
            });
        }

        $(".table").on('preXhr.dt', function ( e, settings, data ) {
            var dtProcessing = $(".dataTables_processing");
            var responsiveDiv = $(".table-responsive");
            dtProcessing.css("height", responsiveDiv.height());
            dtProcessing.css("width", responsiveDiv.width());
        } );
    });

    function bytesToSize(bytes) {
        var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        if (bytes == 0) return '0 Byte';
        var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
        return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    };
</script>