// Counter Animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter-number');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        
        // For year, just display as is
        if (target === 2023) {
            counter.innerText = target;
            return;
        }
        
        let current = 0;
        const speed = 20;
        const increment = Math.ceil(target / 100);
        
        const updateCounter = () => {
            current += increment;
            if (current >= target) {
                counter.innerText = target;
                return;
            }
            counter.innerText = current;
            setTimeout(updateCounter, speed);
        };
        
        // Start counter when visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counter.innerText = '0';
                    setTimeout(updateCounter, 300);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(counter);
    });
});



const observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        mutation.addedNodes.forEach(function(node) {
            if (node.nodeType === 1 && node.tagName === "DIV") {
                console.log("New DIV Added:", node);
            }
        });
    });
});

observer.observe(document.body, {
    childList: true,
    subtree: true
});



document.addEventListener("DOMContentLoaded", function () {
    console.log("Total divs:", document.querySelectorAll("div").length);

    document.querySelectorAll("div").forEach((div, index) => {
        console.log(index, div);
    });
});