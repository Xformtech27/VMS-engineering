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

