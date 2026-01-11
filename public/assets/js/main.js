/* ===== HOSPITAL WEBSITE MAIN JAVASCRIPT ===== */

document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize all Bootstrap components
    initBootstrapComponents();
    
    // Initialize counters animation
    initCounters();
    
    // Initialize scroll to top button
    initScrollToTop();
    
    // Initialize form validation
    initFormValidation();
    
    // Initialize appointment modal
    initAppointmentModal();
    
    // Initialize floating buttons
    initFloatingButtons();
});

/* ===== INITIALIZE BOOTSTRAP COMPONENTS ===== */
function initBootstrapComponents() {
    // Tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
    
    // Toast notifications
    const toastElList = [].slice.call(document.querySelectorAll('.toast'));
    const toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl);
    });
}

/* ===== COUNTER ANIMATION ===== */
function initCounters() {
    const counters = document.querySelectorAll('.counter');
    
    if (counters.length === 0) return;
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                const step = target / (duration / 16); // 60fps
                let current = 0;
                
                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + '+';
                    }
                };
                
                updateCounter();
                observer.unobserve(counter);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
}

/* ===== SCROLL TO TOP BUTTON ===== */
function initScrollToTop() {
    const scrollBtn = document.getElementById('scrollToTop');
    
    if (!scrollBtn) return;
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollBtn.style.display = 'flex';
        } else {
            scrollBtn.style.display = 'none';
        }
    });
    
    // Scroll to top when clicked
    scrollBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/* ===== FORM VALIDATION ===== */
function initFormValidation() {
    const forms = document.querySelectorAll('.needs-validation');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
}

/* ===== APPOINTMENT MODAL ===== */
function initAppointmentModal() {
    const appointmentForms = document.querySelectorAll('.appointment-form');
    
    appointmentForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (this.checkValidity()) {
                // Show confirmation modal
                const modal = new bootstrap.Modal(document.getElementById('appointmentConfirmationModal'));
                modal.show();
                
                // Reset form after successful submission (for demo)
                setTimeout(() => {
                    this.reset();
                    this.classList.remove('was-validated');
                }, 1000);
            }
        });
    });
}

/* ===== FLOATING BUTTONS ===== */
function initFloatingButtons() {
    const emergencyBtn = document.getElementById('emergencyBtn');
    const whatsappBtn = document.getElementById('whatsappBtn');
    
    if (emergencyBtn) {
        emergencyBtn.addEventListener('click', function() {
            // In a real application, this would initiate a phone call
            // For demo, we'll show a toast notification
            showToast('Emergency call initiated. Connecting to emergency services...', 'info');
        });
    }
    
    if (whatsappBtn) {
        whatsappBtn.addEventListener('click', function() {
            // WhatsApp chat URL
            const phoneNumber = '+1234567890';
            const message = 'Hello, I need assistance with medical services.';
            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(url, '_blank');
        });
    }
}

/* ===== TOAST NOTIFICATION ===== */
function showToast(message, type = 'info') {
    // Create toast container if it doesn't exist
    let toastContainer = document.getElementById('toastContainer');
    
    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.id = 'toastContainer';
        toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
        document.body.appendChild(toastContainer);
    }
    
    // Create toast element
    const toastId = 'toast-' + Date.now();
    const toastHtml = `
        <div id="${toastId}" class="toast align-items-center text-bg-${type} border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    `;
    
    toastContainer.insertAdjacentHTML('beforeend', toastHtml);
    
    // Show the toast
    const toastEl = document.getElementById(toastId);
    const toast = new bootstrap.Toast(toastEl, { delay: 3000 });
    toast.show();
    
    // Remove toast from DOM after it's hidden
    toastEl.addEventListener('hidden.bs.toast', function() {
        toastEl.remove();
    });
}

/* ===== NAVBAR SCROLL EFFECT ===== */
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});

/* ===== DEPARTMENT FILTERING ===== */
function filterDepartments(category) {
    const departments = document.querySelectorAll('.department-card');
    const filterButtons = document.querySelectorAll('.filter-btn');
    
    // Update active button
    filterButtons.forEach(btn => {
        if (btn.getAttribute('data-filter') === category) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
    
    // Filter departments
    departments.forEach(dept => {
        if (category === 'all' || dept.getAttribute('data-category') === category) {
            dept.style.display = 'block';
            setTimeout(() => {
                dept.style.opacity = '1';
                dept.style.transform = 'scale(1)';
            }, 100);
        } else {
            dept.style.opacity = '0';
            dept.style.transform = 'scale(0.8)';
            setTimeout(() => {
                dept.style.display = 'none';
            }, 300);
        }
    });
}

/* ===== DOCTOR SCHEDULE TABLE SORTING ===== */
function sortSchedule(column) {
    const table = document.querySelector('.schedule-table');
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
    
    const isAsc = table.getAttribute('data-sort-direction') === 'asc';
    
    rows.sort((a, b) => {
        const aValue = a.querySelector(`td:nth-child(${column})`).textContent;
        const bValue = b.querySelector(`td:nth-child(${column})`).textContent;
        
        if (isAsc) {
            return aValue.localeCompare(bValue);
        } else {
            return bValue.localeCompare(aValue);
        }
    });
    
    // Reverse sort direction for next click
    table.setAttribute('data-sort-direction', isAsc ? 'desc' : 'asc');
    
    // Reorder rows
    rows.forEach(row => tbody.appendChild(row));
}