<nav class="relative py-4  bg-black text-white">
    <div class="relative container px-4 max-w-5xl mx-auto">
        <div class="flex items-center justify-between relative">
            <a class="inline-block" href="/store/{{ auth()->user()->store->url }}">
              <img class="bg-white rounded-lg" src="/images/logos/{{ auth()->user()->store->logo }}" alt="store" width="40">
            </a>
            <div class="block mr-auto">
            <a href="/dashboard" class="inline-flex justify-center rounded-lg text-sm font-medium py-2.5 px-4 bg-white text-gray-800 hover:bg-gray-400 -my-2.5 mr-4">
                <span>الإدارة</span>
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                </svg>

            </a>
            <a href="/store/{{ auth()->user()->store->url }}" class="inline-flex justify-center rounded-lg text-sm font-medium py-2.5 px-4 bg-white text-gray-800 hover:bg-gray-400 -my-2.5 mr-4">
                <span>متجرك</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>

            </a>
            </div>
        </div>
    </div>
</nav>
