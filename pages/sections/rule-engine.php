<section id="rule-engine" class="py-24 border-t border-zinc-800/30 bg-ui-800/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- LEFT SIDE — Flow Visualization -->
                <div
                    class="order-2 lg:order-1 w-full bg-[#0a0a0b] rounded-2xl border border-zinc-800/50 p-6 md:p-8 shadow-2xl relative overflow-hidden">

                    <!-- Line connector background -->
                    <div class="absolute left-10 md:left-12 top-10 bottom-10 w-px bg-zinc-800/50"></div>

                    <!-- Step 1 - Input -->
                    <div class="relative flex gap-5 mb-6">
                        <div
                            class="w-8 h-8 rounded-full bg-[#121214] border border-zinc-700 flex items-center justify-center text-xs text-zinc-400 font-medium shrink-0 z-10 shadow-lg mt-1 relative">
                            1
                        </div>
                        <div
                            class="flex-1 card p-5 bg-[#121214] border-zinc-800/60 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.5)]">
                            <h4 class="text-[13px] uppercase tracking-widest font-semibold text-zinc-500 mb-3">Borrower
                                Snapshot</h4>
                            <div class="grid grid-cols-2 gap-y-3 gap-x-4 text-[13px] font-light">
                                <div><span class="text-zinc-500 block mb-0.5">Credit score</span><span
                                        class="text-zinc-300 font-medium">740</span></div>
                                <div><span class="text-zinc-500 block mb-0.5">Income range</span><span
                                        class="text-zinc-300 font-medium">₹85,000 / mo</span></div>
                                <div><span class="text-zinc-500 block mb-0.5">Existing loans</span><span
                                        class="text-zinc-300 font-medium">1 Personal</span></div>
                                <div><span class="text-zinc-500 block mb-0.5">Employment</span><span
                                        class="text-zinc-300 font-medium">4 years stable</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 - Rule Eval -->
                    <div class="relative flex gap-5 mb-6">
                        <div
                            class="w-8 h-8 rounded-full bg-[#121214] border border-zinc-700 flex items-center justify-center text-xs text-zinc-400 font-medium shrink-0 z-10 shadow-lg mt-1">
                            2</div>
                        <div
                            class="flex-1 card p-5 bg-[#121214] border-zinc-800/60 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.5)]">
                            <h4 class="text-[13px] uppercase tracking-widest font-semibold text-zinc-500 mb-3">Rule
                                Evaluation</h4>
                            <ul class="space-y-2.5 text-[13px] font-light text-zinc-300">
                                <li class="flex items-center justify-between">
                                    <span>Credit score threshold</span>
                                    <span class="text-emerald-400 font-medium tracking-wide">✔ PASS</span>
                                </li>
                                <li class="flex items-center justify-between border-t border-zinc-800/40 pt-2.5">
                                    <span>Minimum income</span>
                                    <span class="text-emerald-400 font-medium tracking-wide">✔ PASS</span>
                                </li>
                                <li class="flex items-center justify-between border-t border-zinc-800/40 pt-2.5">
                                    <span>Existing loan limits</span>
                                    <span class="text-rose-400 font-medium tracking-wide">⚠ FAIL</span>
                                </li>
                            </ul>

                            <!-- AI Adjustment -->
                            <div class="mt-5 rounded-lg border border-indigo-900/30 bg-indigo-950/10 p-3.5">
                                <div class="text-[11px] font-semibold text-indigo-400 mb-1.5 tracking-widest uppercase">
                                    AI Adjustment
                                </div>
                                <p class="text-[13px] text-zinc-400 leading-relaxed font-light">
                                    Rule criteria adjusted dynamically. Reliable behavior pattern overrides strict loan
                                    quantity limits.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3, 4, 5 - Output Grid -->
                    <div class="relative flex gap-5">
                        <div
                            class="w-8 h-8 rounded-full bg-[#121214] border border-zinc-700 flex items-center justify-center text-xs text-zinc-400 font-medium shrink-0 z-10 shadow-lg mt-1">
                            3</div>
                        <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-4">

                            <!-- Decision Output & Risk -->
                            <div
                                class="card p-4 pb-5 bg-[#121214] border-zinc-800/60 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.5)] flex flex-col">
                                <span
                                    class="text-[11px] uppercase tracking-widest text-zinc-500 font-semibold block mb-3">Decision
                                    Output</span>
                                <div class="mb-4">
                                    <span class="text-2xl font-medium text-amber-400 block mb-1">REVIEW</span>
                                    <span class="text-[12px] text-zinc-400 font-light block">Borderline status</span>
                                </div>
                                <div class="mt-auto border-t border-zinc-800/50 pt-3">
                                    <span
                                        class="text-[11px] uppercase tracking-widest text-zinc-500 font-semibold block mb-1">Risk
                                        Category</span>
                                    <span class="text-[13px] text-emerald-400 font-medium">LOW</span>
                                </div>
                            </div>

                            <!-- Deviation Control -->
                            <div
                                class="card p-4 pb-5 bg-[#121214] border-zinc-800/60 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.5)] flex flex-col">
                                <span
                                    class="text-[11px] uppercase tracking-widest text-zinc-500 font-semibold block mb-3">Deviation
                                    Control</span>
                                <div>
                                    <span class="text-[13px] font-medium text-zinc-300 block mb-1">Incomplete
                                        verification</span>
                                    <span class="text-[12px] text-zinc-400 font-light leading-snug block mb-4">Required
                                        documents missing from initial upload.</span>
                                </div>
                                <div class="mt-auto border-t border-zinc-800/50 pt-3">
                                    <span
                                        class="text-[11px] uppercase tracking-widest text-zinc-500 font-semibold block mb-1">Action
                                        Required</span>
                                    <span class="text-[13px] text-zinc-300 font-medium">Manual approval needed</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDE — Content Panel -->
                <div class="order-1 lg:order-2 pl-0 lg:pl-6">
                    <h2 class="text-3xl md:text-4xl font-medium mb-6 leading-tight">System evaluates eligibility using
                        defined lending rules</h2>
                    <p class="text-zinc-400 text-lg mb-10 font-light leading-relaxed">
                        Rules validate borrowers against exact lending criteria to produce structured decisions. This
                        categorizes risk cleanly and ensures complete consistency and control over approvals.
                    </p>

                    <div class="space-y-5">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded shadow-md bg-zinc-800/40 border border-zinc-700/50 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-zinc-300" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-zinc-300 text-[15px] font-medium">Automated eligibility checks</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded shadow-md bg-zinc-800/40 border border-zinc-700/50 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-zinc-300" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                            </div>
                            <span class="text-zinc-300 text-[15px] font-medium">Risk categorization</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded shadow-md bg-zinc-800/40 border border-zinc-700/50 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-zinc-300" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <span class="text-zinc-300 text-[15px] font-medium">Exception handling</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded shadow-md bg-zinc-800/40 border border-zinc-700/50 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-zinc-300" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <span class="text-zinc-300 text-[15px] font-medium">Manual review triggers</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
