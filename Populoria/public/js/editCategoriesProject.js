"use strict"

document.querySelectorAll('.category').forEach(function(category) {
    category.addEventListener('click', function() {
        if (this.getAttribute('data-selected') === 'selected') {
            this.setAttribute('data-selected', 'unselected');
            this.style.backgroundColor = '#929292';
        } else {
            this.setAttribute('data-selected', 'selected');
            this.style.backgroundColor = this.getAttribute('data-color');
        }

        let selectedCategories = [];
        document.querySelectorAll('.category').forEach(function(category) {
            if (category.getAttribute('data-selected') === 'selected') {
                selectedCategories.push(category.getAttribute('data-category-id'));
            }
        });

        document.getElementById('selected_categories').value = JSON.stringify(selectedCategories);
    });
});