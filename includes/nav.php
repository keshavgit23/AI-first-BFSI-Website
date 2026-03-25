<nav class="fixed w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-12">
                <a href="index.php" class="text-white text-xl font-semibold tracking-tight">Vitto</a>
                <div class="hidden lg:flex items-center gap-6 text-sm font-medium text-zinc-400">
                    <a href="/AI-First-BFSI-Website/index.php" class="hover:text-white transition-colors">Home</a>
                    
                    <div class="relative group">
                        <!-- Desktop Hover Nav -->
                        <a href="/AI-First-BFSI-Website/pages/ai-platform.php" class="text-white transition-colors flex items-center gap-1.5 py-4">
                            AI Platform
                            <svg class="w-3.5 h-3.5 text-zinc-500 group-hover:text-white transition-colors mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </a>
                        
                        <!-- Dropdown Panel -->
                        <div class="absolute left-0 top-[90%] w-60 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 translate-y-2 transition-all duration-200 z-50">
                            <!-- Invisible hover bridge -->
                            <div class="absolute -top-4 left-0 w-full h-4"></div>
                            
                            <div class="bg-[#121214] border border-zinc-800/80 rounded-xl shadow-[0_12px_40px_-10px_rgba(0,0,0,0.8)] p-2 flex flex-col gap-0.5">
                                <a href="/AI-First-BFSI-Website/pages/ai-platform.php#data-assessment" class="block px-3.5 py-2.5 rounded-lg text-[13.5px] text-zinc-400 hover:text-white hover:bg-zinc-800/50 transition-colors">Data Based Assessment</a>
                                <a href="/AI-First-BFSI-Website/pages/ai-platform.php#ml-model" class="block px-3.5 py-2.5 rounded-lg text-[13.5px] text-zinc-400 hover:text-white hover:bg-zinc-800/50 transition-colors">ML Model</a>
                                <a href="/AI-First-BFSI-Website/pages/ai-platform.php#rule-engine" class="block px-3.5 py-2.5 rounded-lg text-[13.5px] text-zinc-400 hover:text-white hover:bg-zinc-800/50 transition-colors">Rule Engine</a>
                                <a href="/AI-First-BFSI-Website/pages/ai-platform.php#fraud-intelligence" class="block px-3.5 py-2.5 rounded-lg text-[13.5px] text-zinc-400 hover:text-white hover:bg-zinc-800/50 transition-colors">Fraud Intelligence</a>
                                <a href="/AI-First-BFSI-Website/pages/ai-platform.php#collection-intelligence" class="block px-3.5 py-2.5 rounded-lg text-[13.5px] text-zinc-400 hover:text-white hover:bg-zinc-800/50 transition-colors">Collection Intelligence</a>
                                <a href="/AI-First-BFSI-Website/pages/ai-platform.php#agentic-ai" class="block px-3.5 py-2.5 rounded-lg text-[13.5px] text-zinc-400 hover:text-white hover:bg-zinc-800/50 transition-colors">Agentic AI</a>
                                <a href="/AI-First-BFSI-Website/pages/ai-platform.php#self-signup" class="block px-3.5 py-2.5 rounded-lg text-[13.5px] text-zinc-400 hover:text-white hover:bg-zinc-800/50 transition-colors">Self Sign-Up</a>
                            </div>
                        </div>
                    </div>

                    <a href="/AI-First-BFSI-Website/index.php#lifecycle" class="hover:text-white transition-colors">Lending Lifecycle</a>
                    <a href="/AI-First-BFSI-Website/index.php#collections" class="hover:text-white transition-colors">Collections
                        Intelligence</a>
                    <a href="/AI-First-BFSI-Website/index.php#agentic-ai" class="hover:text-white transition-colors">Agentic AI</a>
                    <a href="/AI-First-BFSI-Website/index.php#api" class="hover:text-white transition-colors">API Infrastructure</a>
                </div>
            </div>
            <div class="hidden lg:flex items-center gap-6">
                <a href="/AI-First-BFSI-Website/pages/about.php" class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">About</a>
                <a href="/AI-First-BFSI-Website/pages/contact.php" class="text-sm font-medium bg-white text-black px-4 py-2 rounded-full hover:bg-zinc-200 transition-colors">Contact/Request Demo</a>
            </div>
            <!-- Mobile menu button -->
            <button class="lg:hidden text-zinc-300 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </nav>
