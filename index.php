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
<body class="antialiased selection:bg-zinc-800 selection:text-white">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-12">
                <a href="#" class="text-white text-xl font-semibold tracking-tight">Vitto</a>
                <div class="hidden lg:flex items-center gap-6 text-sm font-medium text-zinc-400">
                    <a href="#" class="hover:text-white transition-colors">Home</a>
                    <a href="#platform" class="hover:text-white transition-colors">AI Platform</a>
                    <a href="#lifecycle" class="hover:text-white transition-colors">Lending Lifecycle</a>
                    <a href="#collections" class="hover:text-white transition-colors">Collections Intelligence</a>
                    <a href="#agents" class="hover:text-white transition-colors">Agentic AI</a>
                    <a href="#api" class="hover:text-white transition-colors">API Infrastructure</a>
                </div>
            </div>
            <div class="hidden lg:flex items-center gap-6">
                <a href="#" class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">About</a>
                <a href="#" class="text-sm font-medium bg-white text-black px-4 py-2 rounded-full hover:bg-zinc-200 transition-colors">Contact/Demo</a>
            </div>
            <!-- Mobile menu button -->
            <button class="lg:hidden text-zinc-300 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-40 pb-24 md:pt-48 md:pb-32 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-zinc-800/40 via-ui-900 to-ui-900 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-medium tracking-tight max-w-4xl mx-auto leading-[1.1] text-transparent bg-clip-text bg-gradient-to-b from-white to-zinc-400">
                AI-native credit infrastructure for modern lenders
            </h1>
            <p class="mt-8 text-lg md:text-xl text-zinc-400 max-w-2xl mx-auto font-light leading-relaxed">
                Built for Banks, NBFCs, and MFIs — not retrofitted AI systems. Vitto handles decisioning and operations across the entire lending lifecycle — from origination to collections.
            </p>
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#" class="btn-primary w-full sm:w-auto text-center">Request Demo</a>
                <a href="#platform" class="btn-secondary w-full sm:w-auto text-center">Explore Platform</a>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="py-24 border-t border-zinc-800/30 bg-ui-800/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-16">
                <h2 class="text-3xl md:text-4xl font-medium">The legacy stack is fragmented</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card bg-ui-800/50">
                    <div class="h-10 w-10 rounded bg-zinc-800/80 flex items-center justify-center mb-6 border border-zinc-700">
                        <svg class="w-5 h-5 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                    </div>
                    <h3 class="text-lg font-medium mb-3">Disconnected Systems</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed">Patching together LOS, LMS, and CRM systems causes operational drag and brittle integrations.</p>
                </div>
                <div class="card bg-ui-800/50">
                    <div class="h-10 w-10 rounded bg-zinc-800/80 flex items-center justify-center mb-6 border border-zinc-700">
                        <svg class="w-5 h-5 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <h3 class="text-lg font-medium mb-3">Static Rules</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed">Hardcoded underwriting rules miss nuanced risk signals and require engineering resources to update.</p>
                </div>
                <div class="card bg-ui-800/50">
                    <div class="h-10 w-10 rounded bg-zinc-800/80 flex items-center justify-center mb-6 border border-zinc-700">
                        <svg class="w-5 h-5 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                    </div>
                    <h3 class="text-lg font-medium mb-3">Siloed Data</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed">Borrower context is lost between acquisition, servicing, and collections, degrading the customer experience.</p>
                </div>
                <div class="card bg-ui-800/50">
                    <div class="h-10 w-10 rounded bg-zinc-800/80 flex items-center justify-center mb-6 border border-zinc-700">
                        <svg class="w-5 h-5 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-lg font-medium mb-3">Reactive Collections</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed">Teams react to delinquencies instead of predicting them, leading to higher default rates and wasted effort.</p>
                </div>
            </div>
            <div class="mt-20 max-w-4xl mx-auto text-center border-t border-zinc-800/30 pt-16">
                <p class="text-xl md:text-2xl font-medium text-zinc-300 tracking-tight">
                    "Most systems don’t fail because of lack of data — they fail because they don’t know how to use it."
                </p>
            </div>
        </div>
    </section>

    <!-- Insight Section -->
    <section class="py-32 border-t border-zinc-800/30">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-medium leading-tight tracking-tight">
                "Lending is no longer a workflow problem.<br />
                <span class="text-zinc-500">It is a decisioning problem.</span>"
            </h2>
        </div>
    </section>

    <!-- Solution Section & AI Platform Preview -->
    <section id="platform" class="py-24 border-t border-zinc-800/30 bg-ui-800/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-medium mb-6">AI-first decisioning + full-stack automation</h2>
                    <p class="text-zinc-400 text-lg mb-10 leading-relaxed font-light">
                        Vitto replaces disconnected modules with a unified intelligence layer. Bring data, risk, and decisioning into one system — so teams can move faster without relying on manual processes or rigid rules.
                    </p>
                    <a href="#" class="btn-outline">
                        Explore AI Platform
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="card p-6 border-zinc-800">
                        <h4 class="font-medium text-white mb-2">Data Intelligence</h4>
                        <p class="text-sm text-zinc-400">Identity, bureau, and alternative data normalized instantly.</p>
                    </div>
                    <div class="card p-6 border-zinc-800 sm:translate-y-6">
                        <h4 class="font-medium text-white mb-2">Risk Prediction</h4>
                        <p class="text-sm text-zinc-400">Predict probability of default and borrower behavior using real data signals.</p>
                    </div>
                    <div class="card p-6 border-zinc-800">
                        <h4 class="font-medium text-white mb-2">Fraud Detection</h4>
                        <p class="text-sm text-zinc-400">Identify suspicious patterns early using behavioral and network signals.</p>
                    </div>
                    <div class="card p-6 border-zinc-800 sm:translate-y-6">
                        <h4 class="font-medium text-white mb-2">Agentic AI</h4>
                        <p class="text-sm text-zinc-400">Autonomous systems handling operations and follow-ups.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lending Lifecycle Preview -->
    <section id="lifecycle" class="py-24 border-t border-zinc-800/30">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-medium mb-6">One continuous lifecycle</h2>
            <p class="text-zinc-400 text-lg max-w-2xl mx-auto mb-6 font-light">
                A single control plane from originations to collections. Remove engineering bottlenecks while maintaining rigorous control over your credit policies.
            </p>
            <p class="text-zinc-400 text-lg max-w-2xl mx-auto mb-20 font-light">
                Each stage feeds into the next — enabling continuous learning and better decisions over time.
            </p>
            
            <div class="relative max-w-4xl mx-auto mb-16">
                <!-- Desktop line -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-ui-900 via-zinc-700 to-ui-900 -z-10 -translate-y-1/2"></div>
                <!-- Mobile line -->
                <div class="md:hidden absolute top-0 left-1/2 w-px h-full bg-gradient-to-b from-ui-900 via-zinc-700 to-ui-900 -z-10 -translate-x-1/2"></div>

                <div class="flex flex-col md:flex-row items-center justify-between gap-8 md:gap-0">
                    <div class="bg-ui-900 p-2">
                        <div class="w-16 h-16 rounded-full border border-zinc-700 bg-ui-800 flex items-center justify-center text-zinc-300 font-medium shadow-xl">1</div>
                        <span class="block mt-4 text-sm font-medium text-white">Acquire</span>
                    </div>
                    <div class="bg-ui-900 p-2">
                        <div class="w-16 h-16 rounded-full border border-zinc-700 bg-ui-800 flex items-center justify-center text-zinc-300 font-medium shadow-xl">2</div>
                        <span class="block mt-4 text-sm font-medium text-white">Underwrite</span>
                    </div>
                    <div class="bg-ui-900 p-2">
                        <div class="w-16 h-16 rounded-full border border-zinc-700 bg-ui-800 flex items-center justify-center text-zinc-300 font-medium shadow-xl">3</div>
                        <span class="block mt-4 text-sm font-medium text-white">Disburse</span>
                    </div>
                    <div class="bg-ui-900 p-2">
                        <div class="w-16 h-16 rounded-full border border-zinc-700 bg-ui-800 flex items-center justify-center text-zinc-300 font-medium shadow-xl">4</div>
                        <span class="block mt-4 text-sm font-medium text-white">Manage</span>
                    </div>
                    <div class="bg-ui-900 p-2">
                        <div class="w-16 h-16 rounded-full border border-zinc-700 bg-ui-800 flex items-center justify-center text-zinc-300 font-medium shadow-xl">5</div>
                        <span class="block mt-4 text-sm font-medium text-white">Collect</span>
                    </div>
                </div>
            </div>

            <a href="#" class="btn-outline">
                View Lifecycle
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
        </div>
    </section>

    <!-- Collections & Agentic AI Preview -->
    <section class="py-24 border-t border-zinc-800/30 bg-ui-800/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Collections -->
                <div id="collections" class="card border-zinc-800/60 p-8 lg:p-12 hover:bg-ui-800 transition-colors">
                    <div class="h-12 w-12 rounded bg-zinc-800/80 flex items-center justify-center mb-8 border border-zinc-700">
                        <svg class="w-6 h-6 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                    </div>
                    <h3 class="text-2xl font-medium mb-4">Proactive Collections</h3>
                    <p class="text-zinc-400 mb-8 leading-relaxed font-light">
                        Move beyond reactive recovery processes. Vitto detects financial stress early and deploys personalized repayment and restructuring plans before an account defaults.
                    </p>
                    <a href="#" class="btn-outline">
                        Explore Collections
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </div>
                
                <!-- Agentic AI -->
                <div id="agents" class="card border-zinc-800/60 p-8 lg:p-12 hover:bg-ui-800 transition-colors">
                    <div class="h-12 w-12 rounded bg-zinc-800/80 flex items-center justify-center mb-8 border border-zinc-700">
                        <svg class="w-6 h-6 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                    </div>
                    <h3 class="text-2xl font-medium mb-4">Agentic Workflows</h3>
                    <p class="text-zinc-400 mb-8 leading-relaxed font-light">
                        Systems that don’t just assist — they take action across workflows. Vitto handles document verifications, exception resolutions, and contextual borrower follow-ups autonomously.
                    </p>
                    <a href="#" class="btn-outline">
                        Understand Agentic AI
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- API Infrastructure Preview -->
    <section id="api" class="py-24 border-t border-zinc-800/30">
        <div class="max-w-7xl mx-auto px-6 flex flex-col items-center text-center">
            <h2 class="text-3xl md:text-4xl font-medium mb-6">Developer-first integration</h2>
            <p class="text-zinc-400 text-lg max-w-2xl mx-auto mb-12 font-light">
                Integrate seamlessly with your existing systems using modular APIs. Embed our intelligence engine into your frontend, or use our pre-built origination components.
            </p>
            <div class="w-full max-w-3xl card p-1 bg-[#09090b] border-zinc-800 mb-10 text-left font-mono text-sm text-zinc-400 shadow-2xl">
                <div class="flex items-center gap-2 px-4 py-3 border-b border-zinc-800/80">
                    <div class="w-3 h-3 rounded-full bg-zinc-700"></div>
                    <div class="w-3 h-3 rounded-full bg-zinc-700"></div>
                    <div class="w-3 h-3 rounded-full bg-zinc-700"></div>
                    <span class="ml-2 text-zinc-500 text-xs tracking-wide">POST /v1/decisions/underwrite</span>
                </div>
                <div class="p-6 overflow-x-auto">
<pre><code class="text-zinc-300">{
  <span class="text-zinc-500">"applicant"</span>: <span class="text-emerald-400">"app_8f992b1a"</span>,
  <span class="text-zinc-500">"product"</span>: <span class="text-emerald-400">"sme_working_capital"</span>,
  <span class="text-zinc-500">"data_sources"</span>: [<span class="text-emerald-400">"banking"</span>, <span class="text-emerald-400">"kyc"</span>, <span class="text-emerald-400">"alt_data"</span>],
  <span class="text-zinc-500">"response"</span>: {
    <span class="text-zinc-500">"status"</span>: <span class="text-emerald-400">"APPROVED"</span>,
    <span class="text-zinc-500">"credit_limit"</span>: <span class="text-indigo-400">500000</span>,
    <span class="text-zinc-500">"confidence_score"</span>: <span class="text-indigo-400">0.94</span>,
    <span class="text-zinc-500">"risk_factors"</span>: []
  }
}</code></pre>
                </div>
            </div>
            <a href="#" class="btn-outline">
                View API Infrastructure
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
        </div>
    </section>

    <!-- Built for Modern Lenders Section -->
    <section class="py-24 border-t border-zinc-800/30">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-medium mb-6 tracking-tight">Built for modern lenders</h2>
            <p class="text-zinc-400 text-lg leading-relaxed font-light max-w-2xl mx-auto">
                Designed for banks, NBFCs, and lending institutions looking to move from manual, rule-based systems to intelligent, automated decisioning.
            </p>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-32 border-t border-zinc-800/30 relative overflow-hidden bg-ui-800/20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,_var(--tw-gradient-stops))] from-zinc-800/30 via-transparent to-transparent pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-medium mb-10 tracking-tight">Ready to move from rule-based systems to AI-driven lending?</h2>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#" class="btn-primary w-full sm:w-auto text-center">Request Demo</a>
                <a href="#" class="btn-secondary w-full sm:w-auto text-center">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="pt-24 pb-8 border-t border-zinc-800/30 bg-[#0a0a0b] text-sm">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 md:gap-8 mb-16">
                <!-- Brand Section -->
                <div class="md:col-span-4 lg:col-span-5">
                    <div class="font-medium text-zinc-100 text-xl tracking-tight mb-6">Vitto</div>
                    <p class="text-zinc-500 leading-relaxed font-light">
                        AI-native credit infrastructure for modern lenders.<br/>
                        Built for banks, NBFCs, and lending institutions.
                    </p>
                </div>
                
                <!-- Platform Links -->
                <div class="md:col-span-4 lg:col-span-4">
                    <h4 class="text-zinc-100 font-medium mb-6 tracking-tight">Platform</h4>
                    <ul class="space-y-4 font-light">
                        <li><a href="#platform" class="text-zinc-500 hover:text-white transition-colors">AI Platform</a></li>
                        <li><a href="#lifecycle" class="text-zinc-500 hover:text-white transition-colors">Lending Lifecycle</a></li>
                        <li><a href="#collections" class="text-zinc-500 hover:text-white transition-colors">Collections Intelligence</a></li>
                        <li><a href="#agents" class="text-zinc-500 hover:text-white transition-colors">Agentic AI</a></li>
                        <li><a href="#api" class="text-zinc-500 hover:text-white transition-colors">API Infrastructure</a></li>
                    </ul>
                </div>
                
                <!-- Company / Actions -->
                <div class="md:col-span-4 lg:col-span-3">
                    <h4 class="text-zinc-100 font-medium mb-6 tracking-tight">Company</h4>
                    <ul class="space-y-4 font-light">
                        <li><a href="#" class="text-zinc-500 hover:text-white transition-colors">About Vitto</a></li>
                        <li><a href="#" class="text-zinc-500 hover:text-white transition-colors">Contact / Request Demo</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="border-t border-zinc-800/30 pt-8 text-center text-xs">
                <p class="text-zinc-600 font-light">&copy; 2026 Vitto. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
