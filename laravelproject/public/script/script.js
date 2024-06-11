

// const selectAllCheckbox = document.querySelector('input[name="ville[]"]');
const selectAllCheckbox = document.querySelector('input[name="checkall"]');

const villeCheckboxes = document.querySelectorAll('input[name="ville[]"]');
selectAllCheckbox.addEventListener('change', function() {
    const isChecked = selectAllCheckbox.checked;
    villeCheckboxes.forEach(function(checkbox) {
        checkbox.checked = isChecked;
    });
});
villeCheckboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        const allChecked = [...villeCheckboxes].every(function(cb) {
            return cb.checked;
        });
        selectAllCheckbox.checked = allChecked;
    });
});

