<style>
    /* Custom styles using provided color palette */
    :root {
        --bg-dark: oklch(0.92 0.04 231);
        --bg: oklch(0.96 0.04 231);
        --bg-light: oklch(1 0.04 231);
        --text: oklch(0.15 0.08 231);
        --text-muted: oklch(0.4 0.08 231);
        --highlight: oklch(1 0.08 231);
        --border: oklch(0.6 0.08 231);
        --border-muted: oklch(0.7 0.08 231);
        --primary: oklch(0.4 0.1 231);
        --secondary: oklch(0.4 0.1 51);
        --danger: oklch(0.5 0.08 30);
        --warning: oklch(0.5 0.08 100);
        --success: oklch(0.5 0.08 160);
        --info: oklch(0.5 0.08 260);
    }

    /* Background Colors */
    .custom-bg-dark { background-color: var(--bg-dark); }
    .custom-bg { background-color: var(--bg); }
    .custom-bg-light { background-color: var(--bg-light); }
    
    /* Text Colors */
    .custom-text { color: var(--text); }
    .custom-text-muted { color: var(--text-muted); }
    .custom-highlight { color: var(--highlight); }
    
    /* Border Colors */
    .custom-border { border-color: var(--border); }
    .custom-border-muted { border-color: var(--border-muted); }
    
    /* Background Colors for Components */
    .custom-primary { background-color: var(--primary); }
    .custom-secondary { background-color: var(--secondary); }
    .custom-danger { background-color: var(--danger); }
    .custom-warning { background-color: var(--warning); }
    .custom-success { background-color: var(--success); }
    .custom-info { background-color: var(--info); }
    
    /* Text Colors for Components */
    .custom-primary-text { color: white; }
    .custom-secondary-text { color: white; }
    .custom-danger-text { color: white; }
    .custom-warning-text { color: var(--text); }
    .custom-success-text { color: white; }
    .custom-info-text { color: white; }
    
    /* Form Elements */
    .custom-form-input {
        border-color: var(--border);
        color: var(--text);
        background-color: var(--bg-light);
        padding: 0.5rem 0.75rem;
        border-radius: 0.375rem;
        width: 100%;
        border-width: 1px;
    }
    
    .custom-form-input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(156, 163, 175, 0.2);
    }
    
    /* Buttons */
    .custom-btn-primary {
        background-color: var(--primary);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-weight: 500;
        transition: all 0.3s;
        display: inline-block;
        text-align: center;
        cursor: pointer;
    }
    .custom-btn-primary:hover {
        background-color: oklch(0.3 0.1 231);
    }
    
    .custom-btn-secondary {
        background-color: transparent;
        border: 1px solid var(--border);
        color: var(--text-muted);
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-weight: 500;
        transition: all 0.3s;
        display: inline-block;
        text-align: center;
        cursor: pointer;
    }
    .custom-btn-secondary:hover {
        border-color: var(--primary);
        color: var(--primary);
    }
    
    .custom-btn-danger {
        background-color: var(--danger);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-weight: 500;
        transition: all 0.3s;
        display: inline-block;
        text-align: center;
        cursor: pointer;
    }
    .custom-btn-danger:hover {
        background-color: oklch(0.4 0.08 30);
    }
    
    /* Links */
    .custom-link {
        color: var(--primary);
        transition: all 0.3s;
    }
    .custom-link:hover {
        color: oklch(0.3 0.1 231);
    }
    
    /* Cards */
    .custom-card {
        background-color: var(--bg-light);
        border: 1px solid var(--border);
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    
    /* Tables */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .custom-table th {
        background-color: var(--bg-dark);
        color: var(--text);
        padding: 0.75rem 1rem;
        text-align: left;
        font-weight: 500;
        border-bottom: 1px solid var(--border);
    }
    
    .custom-table td {
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--border-muted);
        color: var(--text);
    }
    
    .custom-table tbody tr:hover {
        background-color: var(--bg-dark);
    }
    
    /* Badge */
    .custom-badge {
        display: inline-flex;
        align-items: center;
        padding: 0.25rem 0.5rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    
    .custom-badge-primary {
        background-color: var(--primary);
        color: white;
    }
    
    .custom-badge-success {
        background-color: var(--success);
        color: white;
    }
    
    .custom-badge-danger {
        background-color: var(--danger);
        color: white;
    }
    
    .custom-badge-warning {
        background-color: var(--warning);
        color: var(--text);
    }
    
    .custom-badge-info {
        background-color: var(--info);
        color: white;
    }
    
    /* Alerts */
    .custom-alert {
        padding: 1rem;
        border-radius: 0.375rem;
        margin-bottom: 1rem;
    }
    
    .custom-alert-success {
        background-color: var(--success);
        color: white;
    }
    
    .custom-alert-danger {
        background-color: var(--danger);
        color: white;
    }
    
    .custom-alert-warning {
        background-color: var(--warning);
        color: var(--text);
    }
    
    .custom-alert-info {
        background-color: var(--info);
        color: white;
    }
</style>
