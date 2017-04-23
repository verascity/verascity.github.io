document.addEventListener("DOMContentLoaded", function(event) {
    var links = document.getElementById("project-list").getElementsByTagName("a");
    var project = document.getElementById("project_show").getElementsByTagName("div");
    
    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function () {
            var pro = project[i];
                        
            var pro_pre = pro.previousElementSibling;
            if (pro_pre) {
                pro_pre.classList.add("hidden");
            while (pro_pre = pro_pre.previousElementSibling) {
                pro_pre.classList.add("hidden");
            }
            }            
            
            var pro_next = pro.nextElementSibling;
            if (pro_next) {
                pro_next.classList.add("hidden");
            while (pro_next = pro_next.nextElementSibling) {
            pro_next.classList.add("hidden");
            }
            }
            
            pro.classList.remove("hidden");
        });
    
    }
    
    });