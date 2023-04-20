<div class="form-group mb-3">
    <label for="">food 1 </label>
    <select id="optionselect" name="food1" class="js-example-basic-single" style="width: 100%;">
        @foreach ($items as $item)
        <option value="{{ $item->name }}">{{ $item->name }}</option>
        <option value="{{ $item->name }}">{{ $item->name }}</option>
        <option value="{{ $item->name }}">{{ $item->name }}</option>

        @endforeach
    </select>
</div>
<div class="form-group mb-3">
    <label for="">food 2</label>
    <select id="food2" name="food2" class="js-example-basic-single" style="width: 100%;">
        @foreach ($items as $item)
        <option id="{{ $item->name }}" value="{{ $item->name }}">{{ $item->name }}</option>
        <option id="{{ $item->name }}" value="{{ $item->name }}">{{ $item->name }}</option>

        <option id="{{ $item->name }}" value="{{ $item->name }}">{{ $item->name }}</option>

        @endforeach
    </select>
</div>

<script>
    $(document).ready(function () {
        $("#optionselect").change(function () {
            var values = $("#optionselect option:selected");
            var selectd = values.text();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post('site-address', {

                ajax: true,
                procedure: 'food-loader',
                selected: selectd


            },
                function (data, status) {
                    //loading food2 options     

                });
        });})
</script>