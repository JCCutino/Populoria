"use strict"

document.addEventListener("DOMContentLoaded", function() {
    let selectedCategories = [];

    document.querySelectorAll('.category').forEach(function(category) {
        if (category.getAttribute('data-selected') === 'selected') {
            selectedCategories.push(category.getAttribute('data-category-id'));
        }
        document.getElementById('selected_categories').value = JSON.stringify(selectedCategories);

        category.addEventListener('click', function() {
            if (this.getAttribute('data-selected') === 'selected') {
                this.setAttribute('data-selected', 'unselected');
                this.style.backgroundColor = '#929292';
                let index = selectedCategories.indexOf(category.getAttribute('data-category-id'));
                if (index > -1) {
                    selectedCategories.splice(index, 1);
                }
            } else {
                this.setAttribute('data-selected', 'selected');
                this.style.backgroundColor = this.getAttribute('data-color');
                selectedCategories.push(category.getAttribute('data-category-id'));
            }

            document.getElementById('selected_categories').value = JSON.stringify(selectedCategories);
        });
    });
});
