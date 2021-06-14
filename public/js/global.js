document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.datepicker');
    M.Datepicker.init(elements, { format: 'yyyy-mm-dd' });
});