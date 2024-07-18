<x-admin.layouts>
    <x-notification.notifications />

    @section('title', 'Contact Form')


    <div class="container p-5">
        <h2 class="pb-5">Contact Details</h2>
        <div class=" p-5 card shadow">
            <div class="d-flex align-content-center justify-content-end">

                <label style="height: 19px " class="mt-3 me-5">
                    Search :
                </label>

                <input type="text" id="tableSearch" class="form-control" style="width: 200px;">
            </div>
            <table class="table" id="table">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>MESSAGE</th>
                    <th>ACTION</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

</x-admin.layouts>

<script>
    $(document).ready(function() {
        var commonOptions = {
            ordering: false,
            "order": [],
            "dom": "<'row'" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-3 col-md-1 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-3 col-md-4 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",

        };

        const tableDt = $('#table').dataTable(commonOptions);


        $('#tableSearch').on('input', function() {
            var searchValue = $(this).val().toLowerCase();
            $('#table').dataTable().fnFilter(searchValue);
        });
    });
</script>
