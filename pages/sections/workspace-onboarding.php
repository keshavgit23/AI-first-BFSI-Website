<section id="self-signup"class="py-32 border-t border-zinc-800/30 relative overflow-hidden bg-ui-800/10">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom,_var(--tw-gradient-stops))] from-zinc-800/20 via-transparent to-transparent pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-medium mb-6">Create your organization workspace</h2>
                <p class="text-zinc-400 text-lg font-light leading-relaxed max-w-2xl mx-auto">
                    Organizations can securely onboard themselves without manual intervention. By verifying contact details and providing essential institutional information, a dedicated operations workspace is provisioned automatically.
                </p>
            </div>

            <div class="card p-8 md:p-14 border-zinc-800/60 bg-[#121214] shadow-2xl">
                
                <div class="space-y-12">
                
                    <!-- Step 1 -->
                    <div>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-8 h-8 rounded-full bg-zinc-800 border-2 border-zinc-700 flex items-center justify-center text-[13px] font-semibold text-zinc-300 shadow-sm">1</div>
                            <h3 class="text-lg font-medium text-white tracking-wide">Contact Verification</h3>
                        </div>
                        
                        <div class="grid sm:grid-cols-2 gap-5 pl-12">
                            <div>
                                <label class="block text-[11px] uppercase tracking-widest text-zinc-500 font-medium mb-2.5">Business Email</label>
                                <div class="w-full h-11 rounded border border-zinc-700/50 bg-[#0a0a0b] flex items-center px-4 text-[13px] text-zinc-300 font-light shadow-inner">
                                    operations@institution.com
                                </div>
                            </div>
                            <div>
                                <label class="block text-[11px] uppercase tracking-widest text-zinc-500 font-medium mb-2.5">Mobile Number</label>
                                <div class="w-full h-11 rounded border border-zinc-700/50 bg-[#0a0a0b] flex items-center px-4 text-[13px] text-zinc-300 font-light shadow-inner">
                                    +91 98765 43210
                                </div>
                            </div>
                            <div class="sm:col-span-2 mt-2 flex items-center justify-between p-4 rounded border border-emerald-900/30 bg-emerald-950/10">
                                <div class="flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-emerald-500"></div>
                                    <span class="text-zinc-300 text-[13px] font-light">Identity verified via OTP</span>
                                </div>
                                <span class="text-[11px] font-medium text-emerald-500 uppercase tracking-widest">Authenticated</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="pt-10 border-t border-zinc-800/40">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-8 h-8 rounded-full bg-zinc-800 border-2 border-zinc-700 flex items-center justify-center text-[13px] font-semibold text-zinc-300 shadow-sm">2</div>
                            <h3 class="text-lg font-medium text-white tracking-wide">Organization Details</h3>
                        </div>
                        
                        <div class="grid sm:grid-cols-2 gap-6 pl-12">
                            <div class="sm:col-span-2">
                                <label class="block text-[11px] uppercase tracking-widest text-zinc-500 font-medium mb-2.5">Organization Name</label>
                                <div class="w-full h-11 rounded border border-zinc-800/60 bg-[#0a0a0b]/50 px-4 flex items-center text-[13px] text-zinc-600 font-light">Registered business name</div>
                            </div>
                            <div>
                                <label class="block text-[11px] uppercase tracking-widest text-zinc-500 font-medium mb-2.5">Type of Institution</label>
                                <div class="w-full h-11 rounded border border-zinc-800/60 bg-[#0a0a0b]/50 flex items-center justify-between px-4 text-[13px] text-zinc-600 font-light">
                                    Entity class
                                    <svg class="w-4 h-4 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </div>
                            </div>
                            <div>
                                <label class="block text-[11px] uppercase tracking-widest text-zinc-500 font-medium mb-2.5">Location</label>
                                <div class="w-full h-11 rounded border border-zinc-800/60 bg-[#0a0a0b]/50 px-4 flex items-center text-[13px] text-zinc-600 font-light">Region</div>
                            </div>
                            <div>
                                <label class="block text-[11px] uppercase tracking-widest text-zinc-500 font-medium mb-2.5">Contact Person</label>
                                <div class="w-full h-11 rounded border border-zinc-800/60 bg-[#0a0a0b]/50 px-4 flex items-center text-[13px] text-zinc-600 font-light">Full name</div>
                            </div>
                            <div>
                                <label class="block text-[11px] uppercase tracking-widest text-zinc-500 font-medium mb-2.5">Designation</label>
                                <div class="w-full h-11 rounded border border-zinc-800/60 bg-[#0a0a0b]/50 px-4 flex items-center text-[13px] text-zinc-600 font-light">Corporate role</div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 & Output -->
                    <div class="pt-10 border-t border-zinc-800/40 pl-12">
                        <div class="flex flex-col sm:flex-row items-center gap-6 justify-between">
                            <button class="w-full sm:w-auto px-6 py-3 bg-white text-black text-[13px] font-medium rounded shadow-sm hover:bg-zinc-200 transition-colors whitespace-nowrap">
                                Submit Organization Profile
                            </button>
                            
                            <!-- Final System Output -->
                            <div class="flex-1 w-full p-4 rounded border border-zinc-700/50 bg-[#0a0a0b] flex items-center gap-4">
                                <div class="w-4 h-4 rounded-full border-[2px] border-zinc-600 border-t-zinc-300 animate-spin shrink-0"></div>
                                <div>
                                    <div class="text-[13px] font-medium text-zinc-300 tracking-wide mb-0.5">Workspace being created.</div>
                                    <div class="text-[11px] text-zinc-500 font-light">Access details will be shared once setup is complete.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
