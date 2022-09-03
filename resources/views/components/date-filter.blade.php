<div>
    <div class="mb-0">
        <input class="form-control form-control" placeholder="Pick date rage" id="kt_daterangepicker_4" wire:ignore.self/>
    </div>
    <script>
        var start = moment();
        var end = moment().endOf("month");

        function cb(start, end) {
            $("#kt_daterangepicker_4").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
            @this.setDate(start.format("YYYY-MM-DD"),end.format("YYYY-MM-DD"));
        }

        $("#kt_daterangepicker_4").daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            "Today": [moment(), moment()],
            "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
            "Last 7 Days": [moment().subtract(6, "days"), moment()],
            "Last 30 Days": [moment().subtract(29, "days"), moment()],
            "This Month": [moment().startOf("month"), moment().endOf("month")],
            "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
            }
        }, cb);

        cb(start, end);
    </script>
</div>