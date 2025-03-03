<div class="flex items-center justify-center h-svh">
    @if (!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif


    <div class="p-3 bg-white rounded-lg w-[55%] h-max">
        <ul class="flex justify-around w-full gap-3 pb-3 border-b nav nav-pills nav-fill text-hitam-800">
            <li>
                <a class="flex items-center gap-2 {{ $currentStep != 1 ? '' : 'active' }}" href="#step1"><span
                        class="text-3xl icon-[hugeicons--identity-card]"></span> Biodata</a>
            </li>
            <li>
                <a class="flex items-center gap-2 {{ $currentStep != 2 ? '' : 'active' }}" href="#step2"><span
                        class="text-3xl icon-[basil--document-outline]"></span> Dokumen Kedokteran</a>
            </li>
            <li>
                <a class="flex items-center gap-2 {{ $currentStep != 3 ? '' : 'active' }}" href="#step3"><span
                        class="text-3xl icon-[hugeicons--identity-card]"></span> Submit</a>
            </li>
        </ul>

        <div class="pt-3">

            <h1 class="mb-4 text-4xl font-bold text-center text-hitam-800">Step 1 - Biodata</h1>

            {{-- Step 1 - Biodata --}}
            <div id="step1" class="w-full needs-validation" style="display: {{ $currentStep != 1 ? 'none' : '' }}">
                <div class="grid grid-cols-[150px,1fr] items-center w-full gap-2 mb-3">
                    <label for="nama_lengkap" class="form-label text-nowrap">Nama Lengkap</label>
                    <input type="text" wire:model="nama_lengkap"
                        class="form-control {{ $errors->first('nama_lengkap') ? 'is-invalid' : '' }}" id="nama_lengkap"
                        aria-describedby="nama_lengkap">
                </div>
                <div>
                    <div class="label label-text">Jenis Kelamin</div>
                    <div class="flex items-center gap-2">
                        <input type="radio" id="pria" name="radio-0" class="bg-white radio" required />
                        <label class="text-base label label-text" for="male">Pria</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="radio" id="wanita" name="radio-0" class="bg-white radio" required />
                        <label class="text-base label label-text" for="wanita">Wanita</label>
                    </div>
                    <span class="error-message">Please select your Gender</span>
                    <span class="success-message">Looks good!</span>
                </div>
                <div class="grid grid-cols-[150px,1fr] items-center w-full gap-2 mb-3">
                    <label for="alamat" class="form-label text-nowrap">Alamat</label>
                    <input type="text" wire:model="alamat"
                        class="form-control {{ $errors->first('alamat') ? 'is-invalid' : '' }}" id="alamat"
                        aria-describedby="alamat">
                </div>
                <div class="grid grid-cols-[150px,1fr] items-center w-full gap-2 mb-3">
                    <label for="email" class="form-label text-nowrap">Email</label>
                    <input type="email" wire:model="email"
                        class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}" id="email"
                        aria-describedby="email">
                </div>
                <div class="grid grid-cols-[150px,1fr] items-center w-full gap-2 mb-3">
                    <label for="no_telp" class="form-label text-nowrap">Nomor Telepon</label>
                    <input type="text" wire:model="no_telp"
                        class="form-control {{ $errors->first('no_telp') ? 'is-invalid' : '' }}" id="no_telp"
                        aria-describedby="no_telp">
                </div>
                <div class="grid grid-cols-[150px,1fr] items-center w-full gap-2 mb-3">
                    <label for="password" class="form-label text-nowrap">Password</label>
                    <input type="text" wire:model="password"
                        class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }}" id="password"
                        aria-describedby="password">
                </div>
                <div class="grid grid-cols-[150px,1fr] items-center w-full gap-2 mb-3">
                    <label for="tanggal_lahir" class="form-label text-nowrap">Tanggal Lahir</label>
                    <input type="text" class="w-full bg-white input" placeholder="YYYY-MM-DD" id="tanggal_lahir" />
                </div>
                <button class="btn btn-primary" wire:click="firstStepSubmit" type="button">Lanjut</button>
            </div>
        </div>

        {{-- Step 2 - Dokumen Kedokteran --}}
        <div id="step2" class="needs-validation" style="display: {{ $currentStep != 2 ? 'none' : '' }}">
        </div>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        // Human Friendly
        flatpickr('#tanggal_lahir', {
            altInput: true,
            altFormat: 'F j, Y',
            dateFormat: 'Y-m-d'
        })
    })
</script>
