document.addEventListener('DOMContentLoaded', function() {
    var dropdowns = document.getElementsByClassName('dropdown-btn');
    
    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener('click', function() {
            this.classList.toggle('active');
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
});
