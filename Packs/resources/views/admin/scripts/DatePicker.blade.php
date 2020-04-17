<!-- datepicker -->
{{-- check for existence of an input field (birthdate, graduationdate, order deliverydate, ...--}}
<script type="text/javascript">
    let BD = document.getElementById('BirthDate');
    let GD = document.getElementById('GraduationDate');
    let DC = document.getElementById('DashboardCalendar');
    let RD = document.getElementById('NewOrderRegisterDate');
    let DD = document.getElementById('NewOrderDeliveryDate');

    //create date picker for birthdate
    if (document.contains(BD)) {
        window.pd = $('#BirthDate').persianDatepicker({
            altField: '#BirthDateAlt',
            altFormat: 'YYYY-MM-DD HH:mm:ss',
            initialValue: false,
            format: 'L',
            timePicker: {
                enabled: false
            }
        });
    }
    //    ===============================================================
    //create date picker for graduation date
    if (document.contains(GD)) {
        window.pd = $('#GraduationDate').persianDatepicker({
            altField: '#GraduationDateAlt',
            altFormat: 'YYYY-MM-DD HH:mm:ss',
            initialValue: false,
            format: 'L',
            timePicker: {
                enabled: false
            }
        });
    }

    //    ===============================================================
    //create calendar for dashboard
    if (document.contains(DC)) {
        $("#DashboardCalendar").persianDatepicker({
            inline: true,
        });
    }

    //    ===============================================================
    //create date picker for new order delivery date
    if (document.contains(RD)) {
         $('#NewOrderRegisterDate').persianDatepicker({
             altField: '#NewOrderRegisterDateAlt',
             altFormat: 'YYYY-MM-DD HH:mm:ss',
             format: 'LLLL',
        });
    }
    //    ===============================================================
    //create date picker for new order delivery date
    if (document.contains(DD)) {
        window.pd = $('#NewOrderDeliveryDate').persianDatepicker({
            altField: '#NewOrderDeliveryDateAlt',
            altFormat: 'YYYY-MM-DD HH:mm:ss',
            initialValue: false,
            format: 'LLLL',
            timePicker: {
                enabled: true
            }
        });
    }
</script>
