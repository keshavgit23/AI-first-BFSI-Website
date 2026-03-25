<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us & Request Demo | Vitto</title>
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

        .form-input {
            width: 100%;
            background-color: #121214;
            border: 1px solid #27272a;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            color: #fafafa;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }

        .form-input:focus {
            outline: none;
            border-color: #52525b;
            box-shadow: 0 0 0 1px #52525b;
        }

        .form-input::placeholder {
            color: #52525b;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #a1a1aa;
            margin-bottom: 0.5rem;
        }

        .btn-primary {
            background-color: white;
            color: #0a0a0b;
            font-weight: 500;
            padding: 0.875rem 2rem;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
            box-shadow: 0 4px 14px 0 rgba(255, 255, 255, 0.1);
            width: 100%;
            display: inline-block;
            text-align: center;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #e4e4e7;
            transform: translateY(-1px);
        }
        
        /* Custom select arrow */
        select.form-input {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2371717a' stroke-width='2'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1rem;
            padding-right: 2.5rem;
        }
    </style>
</head>

<?php include '../includes/nav.php'; ?>

<body class="antialiased selection:bg-zinc-800 selection:text-white">

    <!-- Hero / Intro Section -->
    <section class="pt-24 pb-12 md:pt-32 md:pb-16 px-6 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-zinc-800/20 via-ui-900 to-ui-900 pointer-events-none"></div>
        <div class="max-w-3xl mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium tracking-tight text-transparent bg-clip-text bg-gradient-to-b from-white to-zinc-400 mb-6">
                Talk to our product specialists
            </h1>
            <p class="text-lg md:text-xl text-zinc-400 font-light leading-relaxed max-w-2xl mx-auto">
                Transform your lending operations with AI. Tell us about your organization's needs, and our experts will help schedule a tailored demonstration.
            </p>
        </div>
    </section>

    <!-- Contact / Demo Form (Main Section) -->
    <section class="px-6 pb-24 relative z-10">
        <div class="max-w-3xl mx-auto">
            <div class="bg-ui-800/40 border border-zinc-800/80 rounded-2xl p-6 md:p-10 shadow-2xl backdrop-blur-xl">
                <form action="#" method="POST" class="space-y-10">
                    
                    <!-- Personal Details -->
                    <div>
                        <h2 class="text-lg font-medium text-white mb-6 border-b border-zinc-800/80 pb-3 flex items-center gap-3">
                            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-zinc-800 text-xs text-zinc-400">1</span>
                            Personal Details
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label for="fullName" class="form-label">Full Name <span class="text-zinc-600">*</span></label>
                                <input type="text" id="fullName" name="fullName" required class="form-input" placeholder="Jane Doe">
                            </div>
                            <div>
                                <label for="workEmail" class="form-label">Work Email <span class="text-zinc-600">*</span></label>
                                <input type="email" id="workEmail" name="workEmail" required class="form-input" placeholder="jane@organization.com">
                            </div>
                            <div>
                                <label for="phoneNumber" class="form-label">Phone Number <span class="text-zinc-600">*</span></label>
                                <input type="tel" id="phoneNumber" name="phoneNumber" required class="form-input" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                    </div>

                    <!-- Organization Details -->
                    <div>
                        <h2 class="text-lg font-medium text-white mb-6 border-b border-zinc-800/80 pb-3 flex items-center gap-3">
                            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-zinc-800 text-xs text-zinc-400">2</span>
                            Organization Details
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="companyName" class="form-label">Company Name <span class="text-zinc-600">*</span></label>
                                <input type="text" id="companyName" name="companyName" required class="form-input" placeholder="Acme Financial">
                            </div>
                            <div>
                                <label for="jobRole" class="form-label">Job Role / Designation <span class="text-zinc-600">*</span></label>
                                <input type="text" id="jobRole" name="jobRole" required class="form-input" placeholder="Head of Credit Risk">
                            </div>
                            <div>
                                <label for="companyType" class="form-label">Company Type <span class="text-zinc-600">*</span></label>
                                <select id="companyType" name="companyType" required class="form-input" defaultValue="">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="Bank">Bank</option>
                                    <option value="NBFC">NBFC</option>
                                    <option value="Fintech Startup">Fintech Startup</option>
                                    <option value="Lending Platform">Lending Platform</option>
                                    <option value="Insurance Company">Insurance Company</option>
                                    <option value="Microfinance Institution">Microfinance Institution</option>
                                    <option value="Payment Provider">Payment Provider</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="country" class="form-label">Country / Region <span class="text-zinc-600">*</span></label>
                                <input type="text" id="country" name="country" required class="form-input" placeholder="e.g. United States">
                            </div>
                        </div>
                    </div>

                    <!-- Product Interest & Context -->
                    <div>
                        <h2 class="text-lg font-medium text-white mb-6 border-b border-zinc-800/80 pb-3 flex items-center gap-3">
                            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-zinc-800 text-xs text-zinc-400">3</span>
                            Business Context
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="interestArea" class="form-label">Primary Interest Area</label>
                                <select id="interestArea" name="interestArea" class="form-input">
                                    <option value="" disabled selected>Select focus area</option>
                                    <option value="AI Credit Assessment">AI Credit Assessment</option>
                                    <option value="ML Risk Models">ML Risk Models</option>
                                    <option value="Rule Engine">Rule Engine</option>
                                    <option value="Fraud Intelligence">Fraud Intelligence</option>
                                    <option value="Collections Intelligence">Collections Intelligence</option>
                                    <option value="Agentic AI">Agentic AI</option>
                                    <option value="Lending Lifecycle Automation">Lending Lifecycle Automation</option>
                                    <option value="API Infrastructure">API Infrastructure</option>
                                    <option value="General Demo">General Demo</option>
                                </select>
                            </div>
                            <div>
                                <label for="orgSize" class="form-label">Organization Size (Optional)</label>
                                <select id="orgSize" name="orgSize" class="form-input">
                                    <option value="" disabled selected>Select size</option>
                                    <option value="Small">Small (&lt;100 employees)</option>
                                    <option value="Medium">Medium (100–1000 employees)</option>
                                    <option value="Large">Large (1000+ employees)</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label for="message" class="form-label">Message / Requirements</label>
                                <textarea id="message" name="message" rows="4" class="form-input resize-y" placeholder="Tell us about your use case, challenges, or current tech stack..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Consent & Submit -->
                    <div class="pt-4 space-y-8">
                        <label class="flex items-start gap-3 cursor-pointer group">
                            <div class="relative flex items-center justify-center mt-0.5">
                                <input type="checkbox" required class="peer appearance-none w-5 h-5 border border-zinc-600 rounded bg-ui-800 checked:bg-white checked:border-white transition-colors cursor-pointer">
                                <svg class="absolute w-3 h-3 text-black opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm text-zinc-400 group-hover:text-zinc-300 transition-colors pt-0.5 leading-snug">
                                I agree to be contacted regarding this request by Vitto platform specialists.
                            </span>
                        </label>

                        <button type="submit" class="btn-primary text-base md:text-lg py-3.5">
                            Contact Us / Request a Demo
                        </button>
                    </div>

                    <!-- Trust / Reassurance Section -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-8 pt-6 border-t border-zinc-800/60 mt-8">
                        <div class="flex items-center gap-2 text-xs font-medium text-zinc-500">
                            <svg class="w-4 h-4 text-zinc-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8V7z" />
                            </svg>
                            Information kept confidential
                        </div>
                        <div class="hidden sm:block w-1 h-1 rounded-full bg-zinc-700"></div>
                        <div class="flex items-center gap-2 text-xs font-medium text-zinc-500">
                            <svg class="w-4 h-4 text-zinc-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Response within 1 business day
                        </div>
                        <div class="hidden sm:block w-1 h-1 rounded-full bg-zinc-700"></div>
                        <div class="flex items-center gap-2 text-xs font-medium text-zinc-500">
                            <svg class="w-4 h-4 text-zinc-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            No spam, ever
                        </div>
                    </div>

                </form>
            </div>

            <!-- Contact Alternatives -->
            <div class="mt-16 text-center">
                <p class="text-zinc-500 font-medium mb-6 text-sm uppercase tracking-wider">Other ways to reach us</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 md:gap-10">
                    <a href="mailto:contact@vitto.ai" class="flex items-center gap-3 text-zinc-300 hover:text-white transition-colors group">
                        <div class="w-10 h-10 rounded-full bg-ui-800 border border-zinc-800 flex items-center justify-center group-hover:border-zinc-600 transition-colors">
                            <svg class="w-4 h-4 text-zinc-400 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        contact@vitto.ai
                    </a>
                    
                    <div class="flex items-center gap-3 text-zinc-400">
                        <div class="w-10 h-10 rounded-full bg-ui-800 border border-zinc-800 flex items-center justify-center">
                            <svg class="w-4 h-4 text-zinc-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        Mon-Fri, 9am - 6pm EST
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
