<section class="py-1 container px-4 max-w-5xl mx-auto md:flex">
  <div class="mx-auto mt-6 w-full md:w-4/12">
    <div class="bg-salte-200 relative mb-6 flex w-full min-w-0 flex-col break-words rounded-lg border-0 shadow-lg">
      <div class="mb-0 rounded-t bg-white px-4 py-6">
        <div class="flex justify-between text-center">
          <h6 class="text-gray-700 text-md font-bold">معلومات العميل</h6>
          <button class="bg-black mr-1 rounded px-4 py-2 text-xs font-bold text-white shadow outline-none transition-all duration-150 ease-linear hover:shadow-md focus:outline-none" type="button">تعديل البيانات</button>
        </div>
      </div>
      <div class="flex-auto px-4 py-6 pt-0">
        <div class="flex flex-wrap gap-1">
          <div class="w-full">
            <div class="relative mb-3 w-full">
              <label class="text-gray-600 mb-2 block text-xs font-bold uppercase"> أسم المستخدم </label>
              <input type="text" 	disabled class="text-gray-600 w-full rounded border-0 bg-white px-3 py-3 text-sm shadow" value="{{ auth()->user()->name }}" />
            </div>
          </div>
          <div class="w-full">
            <div class="relative mb-3 w-full">
              <label class="text-gray-600 mb-2 block text-xs font-bold uppercase"> البريد الإلكتروني </label>
              <input type="email" 	disabled class="text-gray-600 w-full rounded border-0 bg-white px-3 py-3 text-sm shadow" value="{{ auth()->user()->email }}" />
            </div>
          </div>
          <div class="w-full">
            <div class="relative mb-3 w-full">
              <label class="text-gray-600 mb-2 block text-xs font-bold uppercase"> معلومات الدفع </label>
              <input type="text" 	disabled class="text-gray-600 w-full rounded border-0 bg-white px-3 py-3 text-sm shadow" value="الدفع عند الاستلام" />
            </div>
          </div>
          <div class="w-full">
            <div class="relative mb-3 w-full">
              <label class="text-gray-600 mb-2 block text-xs font-bold uppercase"> معلومات الشحن </label>
              <input type="text" 	disabled class="text-gray-600 w-full rounded border-0 bg-white px-3 py-3 text-sm shadow" value="حي الجامعة" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-auto mt-6 w-full px-4 md:w-8/12">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex justify-between text-center px-6 py-6">
              <h6 class="text-gray-700 text-md font-bold">عربة التسوق</h6>
            </div>
        <table class="w-full text-sm text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        المنتج
                    </th>
                    <th scope="col" class="px-6 py-3">
                        المتجر
                    </th>
                    <th scope="col" class="px-6 py-3">
                        العدد
                    </th>
                    <th scope="col" class="px-6 py-3">
                        السعر
                    </th>
                    <th scope="col" class="px-6 py-3">
                        تعديل
                    </th>
                </tr>
            </thead>
            <tbody>
            @forelse ($items as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $item->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->associatedModel->store->title }}
                    </td>
                    <td class="px-6 py-4">
                      قطعة واحدة
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->price }} ر.س 
                    </td>
                    <td class="px-6 py-4">
                      <form action="{{ route('cart.remove') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-red-600">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>
                                </button>
                        </form>
                    </td>
                </tr>
                @empty
                <div style="text-align: center">
                  <p>لاتوجد منتجات</p>
                </div>
            @endforelse
            
            </tbody>
            
        </table>
        @if(count($items) > 0)

        <div class="mt-5 px-4 py-6">
          <p>مجموع العربة:<strong>ر.س </strong></p>
          <div class="d-grid gap-2">
            <form action="{{ route('create.order') }}" method="post">
              @csrf
              <button class="bg-thir mt-2 rounded px-4 py-2 text-xs font-bold text-gray-800 shadow outline-none transition-all duration-150 ease-linear hover:shadow-md focus:outline-none" type="submit">إتمام الشراء</button>

            </form>
          </div>
        </div>
        @endif
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex justify-between text-center px-6 py-6">
              <h6 class="text-gray-700 text-md font-bold">الطلبات</h6>
            </div>
        <table class="w-full text-sm text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                    #رقم الطلب
                    </th>
                    <th scope="col" class="px-6 py-3">
                        المتجر
                    </th>
                    <th scope="col" class="px-6 py-3">
                    المنتج
                    </th>
                    <th scope="col" class="px-6 py-3">
                    السعر
                    </th>
                    <th scope="col" class="px-6 py-3">
                    الحالة
                    </th>
                </tr>
            </thead>
            <tbody>
            @forelse ($order_details as $order_detail)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $order_detail->id }}
                    </th>
                    <td class="px-6 py-4">
                    {{ $order_detail->store->title }}
                    </td>
                    <td class="px-6 py-4">
                    <a href="/store/{{ $order_detail->store->url }}/{{ $order_detail->product_id }}">{{ $order_detail->product_id }}</a>
                    </td>
                    <td class="px-6 py-4">
                    {{ $order_detail->store->title }}
                    </td>
                    <td class="px-6 py-4">
                    {{ $order_detail->order_id }}
                    </td>
                </tr>
                @empty
                <div style="text-align: center">
                  <p>لاتوجد طلبات</p>
                </div>
            @endforelse
            </tbody>
        </table>
    </div>
  </div>
</section>
