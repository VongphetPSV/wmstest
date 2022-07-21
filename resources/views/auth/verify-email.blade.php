<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('ຂອບໃຈທີ່ລົງທະບຽນຜູ້ໃຊ້ໃໝ່. ການລົງທະບຽນ ຜູ້ໃຊ້ໃໝ່ ຈະຕ້ອງໄດ້ຢັ້ງຢືນ ອີເມວກ່ອນ. ກະລຸນາ ເຂົ້າໄປອີເມວຂອງທ່ານ ແລ້ວກົດລິ້ງ ເພື່ອຢັ້ງຢືນ ແລະ ເຂົ້າໃຊ້ລະບົບ.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('ລິ້ງເພື່ອຢັ້ງຢືນ ໄດ້ສົ່ງໄປອີເມວຂອງທ່ານແລ້ວ.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('ສົ່ງອີເມວ ລິ້ງຢັ້ງຢືນ ອີກຄັ້ງໜຶ່ງ') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('ອອກຈາກລະບົບ') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
