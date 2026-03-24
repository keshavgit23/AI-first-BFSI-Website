<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitto | AI-native credit infrastructure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        ui: {
                            900: '#0a0a0b',
                            800: '#121214',
                            700: '#18181b',
                            600: '#27272a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #0a0a0b;
            color: #d4d4d8;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #fafafa;
            letter-spacing: -0.02em;
        }
        .btn-primary {
            background-color: white;
            color: #0a0a0b;
            font-weight: 500;
            padding: 0.75rem 1.75rem;
            border-radius: 9999px;
            transition: all 0.2s ease;
            box-shadow: 0 4px 14px 0 rgba(255, 255, 255, 0.1);
        }
        .btn-primary:hover {
            background-color: #e4e4e7;
            transform: translateY(-1px);
        }
        .btn-secondary {
            background-color: rgba(255, 255, 255, 0.03);
            color: white;
            border: 1px solid #3f3f46;
            font-weight: 500;
            padding: 0.75rem 1.75rem;
            border-radius: 9999px;
            transition: all 0.2s ease;
        }
        .btn-secondary:hover {
            border-color: #71717a;
            background-color: rgba(255, 255, 255, 0.08);
        }
        .btn-outline {
            color: #a1a1aa;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            transition: color 0.2s;
        }
        .btn-outline:hover {
            color: white;
        }
        .btn-outline svg {
            margin-left: 0.5rem;
            transition: transform 0.2s;
        }
        .btn-outline:hover svg {
            transform: translateX(4px);
        }
        .card {
            background-color: #121214;
            border: 1px solid #27272a;
            border-radius: 1rem;
            padding: 1.5rem;
            transition: border-color 0.2s;
        }
        .card:hover {
            border-color: #3f3f46;
        }
        .glass-nav {
            background-color: rgba(10, 10, 11, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(39, 39, 42, 0.5);
        }
    </style>
</head>