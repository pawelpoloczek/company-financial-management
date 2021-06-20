document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.datepicker');
    M.Datepicker.init(elements, { format: 'yyyy-mm-dd' });
});

document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('select');
    M.FormSelect.init(elements);
});