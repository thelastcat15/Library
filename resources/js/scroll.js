export function scroll() {
    const scrollContainers = document.querySelectorAll('.overflow-x-auto');

    scrollContainers.forEach(container => {
        const scrollLeftButtons = container.parentElement.querySelector('button:first-of-type');
        const scrollRightButtons = container.parentElement.querySelector('button:last-of-type');
        
        scrollLeftButtons.addEventListener('click', () => {
            const distance = 288 + 1.5 * 16;
            container.scrollBy({
                left: -distance,
                behavior: 'smooth'
            });
        });
        
        scrollRightButtons.addEventListener('click', () => {
            const distance = 288 + 1.5 * 16;
            container.scrollBy({
                left: distance,
                behavior: 'smooth'
            });
        });
    });
}