 <section id="api" class="py-24 border-t border-zinc-800/30">
        <div class="max-w-7xl mx-auto px-6 flex flex-col items-center text-center">
            <h2 class="text-3xl md:text-4xl font-medium mb-6">Developer-first integration</h2>
            <p class="text-zinc-400 text-lg max-w-2xl mx-auto mb-12 font-light">
                Integrate seamlessly with your existing systems using modular APIs. Embed our intelligence engine into
                your frontend, or use our pre-built origination components.
            </p>
            <div
                class="w-full max-w-3xl card p-1 bg-[#09090b] border-zinc-800 mb-10 text-left font-mono text-sm text-zinc-400 shadow-2xl">
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
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </section>