<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menjadi Dokter</title>

    @include('layouts.partial.link')
</head>

<body>
    <div class="flex items-center justify-center w-full h-svh">
        <div data-stepper="" class="p-4 shadow w-[50%] bg-white rounded-xl" id="wizard-validation-horizontal">
            <!-- Stepper Nav -->
            <ul class="relative flex flex-col gap-2 md:flex-row">
                <li class="flex flex-col items-center flex-1 gap-2 group md:flex-row"
                    data-stepper-nav-item='{ "index": 1 }'>
                    <span
                        class="min-h-7.5 min-w-7.5 group inline-flex flex-col items-center gap-2 align-middle text-sm md:flex-row">
                        <span
                            class="stepper-active:bg-primary stepper-active:shadow stepper-active:text-primary-content stepper-success:bg-primary stepper-success:shadow stepper-success:text-primary-content stepper-error:bg-error stepper-error:text-error-content stepper-completed:bg-success stepper-completed:group-focus:bg-success bg-base-200/50 text-base-content group-focus:bg-base-content/20 size-7.5 flex flex-shrink-0 items-center justify-center rounded-full font-medium">
                            <span
                                class="text-sm stepper-success:hidden stepper-error:hidden stepper-completed:hidden">1</span>
                            <span class="icon-[tabler--check] stepper-success:block hidden size-4 flex-shrink-0"></span>
                            <span class="icon-[tabler--x] stepper-error:block hidden size-4 flex-shrink-0"></span>
                        </span>
                        <span class="font-medium text-hitam-800 text-nowrap">Biodata</span>
                    </span>
                    <div
                        class="w-full h-px stepper-success:bg-primary stepper-completed:bg-success bg-base-content/20 group-last:hidden max-md:mt-2 max-md:h-8 max-md:w-px md:flex-1">
                    </div>
                </li>
                <li class="flex flex-col items-center flex-1 gap-2 group md:flex-row"
                    data-stepper-nav-item='{ "index": 2 }'>
                    <span
                        class="min-h-7.5 min-w-7.5 group inline-flex flex-col items-center gap-2 align-middle text-sm md:flex-row">
                        <span
                            class="stepper-active:bg-primary stepper-active:shadow stepper-active:text-primary-content stepper-success:bg-primary stepper-success:shadow stepper-success:text-primary-content stepper-error:bg-error stepper-error:text-error-content stepper-completed:bg-success stepper-completed:group-focus:bg-success bg-white border text-base-content group-focus:bg-base-content/20 size-7.5 flex flex-shrink-0 items-center justify-center rounded-full font-medium">
                            <span
                                class="text-sm stepper-success:hidden stepper-error:hidden stepper-completed:hidden">2</span>
                            <span class="icon-[tabler--check] stepper-success:block hidden size-4 flex-shrink-0"></span>
                            <span class="icon-[tabler--x] stepper-error:block hidden size-4 flex-shrink-0"></span>
                        </span>
                        <span class="font-medium text-hitam-800 text-nowrap">Dokumen Kedokteran</span>
                    </span>
                    <div
                        class="w-full h-px stepper-success:bg-primary stepper-completed:bg-success bg-base-content/20 group-last:hidden max-md:mt-2 max-md:h-8 max-md:w-px md:flex-1">
                    </div>
                </li>
                <li class="flex flex-col items-center flex-1 w-full gap-2 group md:flex-row"
                    data-stepper-nav-item='{ "index": 3 }'>
                    <span
                        class="min-h-7.5 min-w-7.5 group inline-flex flex-col items-center gap-2 align-middle text-sm md:flex-row">
                        <span
                            class="stepper-active:bg-primary stepper-active:shadow stepper-active:text-primary-content stepper-success:bg-primary stepper-success:shadow stepper-success:text-primary-content stepper-error:bg-error stepper-error:text-error-content stepper-completed:bg-success stepper-completed:group-focus:bg-success bg-white border text-base-content group-focus:bg-base-content/20 size-7.5 flex flex-shrink-0 items-center justify-center rounded-full font-medium">
                            <span
                                class="text-sm stepper-success:hidden stepper-error:hidden stepper-completed:hidden">3</span>
                            <span class="icon-[tabler--check] stepper-success:block hidden size-4 flex-shrink-0"></span>
                            <span class="icon-[tabler--x] stepper-error:block hidden size-4 flex-shrink-0"></span>
                        </span>
                        <span class="font-medium text-hitam-800 text-nowrap">Submit</span>
                    </span>
                    <div
                        class="w-full h-px stepper-success:bg-primary stepper-completed:bg-success bg-base-content/20 group-last:hidden max-md:mt-2 max-md:h-8 max-md:w-px md:flex-1">
                    </div>
                </li>
                <!-- End Item -->
            </ul>
            <!-- End Stepper Nav -->

            <!-- Stepper Content -->
            <form id="wizard-validation-form-horizontal" class="mt-5 needs-validation sm:mt-8"
                action="{{ route('proses-pendaftaran-konselor') }}" method="POST">
                @csrf
                <!-- Biodata -->
                <div id="account-details-validation" class="space-y-5" data-stepper-content-item='{ "index": 1 }'>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="bg-white label label-text text-hitam-800" for="nama_lengkap"> Nama Lengkap
                            </label>
                            <input type="text" placeholder="Nama Lengkap"
                                class="bg-white border text-hitam-800 input" id="nama_lengkap" name="nama_lengkap"
                                required />
                        </div>
                        <div>
                            <label class="label label-text text-hitam-800" for="tanggal_lahir"> Tanggal Lahir </label>
                            <input type="text" class="bg-white border text-hitam-800 input jsPickr"
                                id="tanggal_lahir" name="tanggal_lahir" placeholder="YYYY-MM-DD" required />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="bg-white label label-text text-hitam-800" for="alamat"> Alamat
                            </label>
                            <input type="text" placeholder="Alamat"
                                class="bg-white border text-hitam-800 input" id="alamat" name="alamat" required />
                        </div>
                        <div>
                            <h6 class="mb-1 text-sm font-medium text-hitam-800">Jenis Kelamin</h6>
                            <div class="flex gap-4">
                                <div class="flex items-center gap-1">
                                    <input type="radio" name="jenis_kelamin" class="bg-white radio" id="pria"
                                        required />
                                    <label class="text-base label label-text" for="pria"> Pria </label>
                                </div>
                                <div class="flex items-center gap-1">
                                    <input type="radio" name="jenis_kelamin" class="bg-white radio" id="wanita"
                                        required />
                                    <label class="text-base label label-text" for="wanita"> Wanita </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="label label-text text-hitam-800" for="email"> Email </label>
                            <input type="email" class="bg-white border input text-hitam-800"
                                placeholder="contoh@gmail.com" id="email" name="email" aria-label="contoh@gmail.com"
                                required="" />
                        </div>
                        <div>
                            <label class="bg-white label label-text text-hitam-800" for="no_telp"> Nomor Telepon
                            </label>
                            <input type="text" placeholder="0811-2222-3333"
                                class="bg-white border text-hitam-800 input" id="no_telp" name="no_telp" required />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="label label-text text-hitam-800" for="password"> Password </label>
                            <div class="bg-white border input-group">
                                <input id="password" type="password" name="password" class="bg-white border input"
                                    placeholder="Masukkan password" required />
                                <span class="input-group-text">
                                    <button type="button" data-toggle-password='{ "target": "#password" }'
                                        class="block" aria-label="toggle password">
                                        <span
                                            class="icon-[tabler--eye] text-base-content/80 password-active:block hidden size-4 flex-shrink-0"></span>
                                        <span
                                            class="icon-[tabler--eye-off] text-base-content/80 password-active:hidden block size-4 flex-shrink-0"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <div class="label label-text text-hitam-800" for="foto_profil"> Foto Profil </div>
                                <p class="mr-2 text-xs">125px : 155px | Maks. 1 Mb</p>
                            </div>
                            <div
                                data-file-upload='{
                                "url": "/upload",
                                "maxFiles": 1,
                                "singleton": true
                              }'>
                                <template data-file-upload-preview="">
                                    <div class="flex items-center w-full">
                                        <span class="overflow-hidden truncate grow-0"
                                            data-file-upload-file-name=""></span>
                                        <span class="grow-0">.</span>
                                        <span class="grow-0" data-file-upload-file-ext=""></span>
                                    </div>
                                </template>

                                <button type="button"
                                    class="relative flex w-full overflow-hidden text-sm border rounded-lg border-base-content/20 focus:z-10 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none disabled:pointer-events-none disabled:opacity-50">
                                    <span class="h-full px-4 py-3 text-nowrap bg-base-200 rounded-s-lg">Pilih
                                        File</span>
                                    <span class="flex h-full px-4 py-3 overflow-hidden group grow text-base-content"
                                        data-file-upload-previews="">
                                        <span class="group-has-[div]:hidden">Tidak ada file</span>
                                    </span>
                                    <span class="absolute top-0 left-0 w-full h-full"
                                        data-file-upload-trigger=""></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <div class="label label-text text-hitam-800"> Foto Wajah </div>
                            <div
                                data-file-upload='{
                            "url": "/upload",
                            "acceptedFiles": "image/*",
                            "maxFiles": 1,
                            "singleton": true
                            }'>
                                <template data-file-upload-preview="">
                                    <div class="size-14">
                                        <img class="object-contain w-full rounded-full" data-dz-thumbnail="" />
                                    </div>
                                </template>

                                <div class="flex flex-wrap items-center gap-3 sm:gap-5">
                                    <div class="group" data-file-upload-previews=""
                                        data-file-upload-pseudo-trigger="">
                                        <span
                                            class="border-base-content/30 text-base-content/50 flex size-14 shrink-0 cursor-pointer items-center justify-center rounded-full border-2 border-dotted hover:bg-base-200/60 group-has-[div]:hidden">
                                            <span class="icon-[tabler--user-circle] size-9 shrink-0"></span>
                                        </span>
                                    </div>
                                    <div class="grow">
                                        <div class="flex items-start gap-x-2">
                                            <div>
                                                <button type="button" class="text-sm btn btn-primary"
                                                    data-file-upload-trigger="">
                                                    <span class="icon-[tabler--upload] size-4 shrink-0"></span>
                                                    Unggah foto wajah
                                                </button>
                                                <p class="mt-1 text-xs">Maks. 1 Mb</p>
                                            </div>
                                            <button type="button" class="text-sm btn btn-outline btn-secondary"
                                                data-file-upload-clear="">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="label label-text text-hitam-800"> Foto KTP </div>
                            <div
                                data-file-upload='{
                            "url": "/upload",
                            "acceptedFiles": "image/*",
                            "maxFiles": 1,
                            "singleton": true
                            }'>
                                <template data-file-upload-preview="">
                                    <div class="h-[100px] w-[150px]">
                                        <img class="object-contain w-full rounded-lg" data-dz-thumbnail="" />
                                    </div>
                                </template>

                                <div class="flex flex-wrap items-center gap-3 sm:gap-5">
                                    <div class="group" data-file-upload-previews=""
                                        data-file-upload-pseudo-trigger="">
                                        <span
                                            class="border-base-content/30 text-base-content/50 flex h-[100px] w-[150px] shrink-0 cursor-pointer items-center justify-center rounded-lg border-2 border-dotted hover:bg-base-200/60 group-has-[div]:hidden">
                                            <span class="icon-[tabler--user-circle] size-9 shrink-0"></span>
                                        </span>
                                    </div>
                                    <div class="grow">
                                        <button type="button" class="text-sm btn btn-primary"
                                            data-file-upload-trigger="">
                                            <span class="icon-[tabler--upload] size-4 shrink-0"></span>
                                            Unggah foto KTP
                                        </button>
                                        <p class="mt-1 text-xs">Maks. 1 Mb</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Biodata -->
                <!-- Dokumen Kedokteran -->
                <div id="personal-info-validation" class="space-y-5" data-stepper-content-item='{ "index": 2 }'
                    style="display: none">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <div class="label label-text text-hitam-800"> Dokumen STRPK </div>
                            <div
                                data-file-upload='{
                                "url": "/upload",
                                "maxFiles": 1,
                                "singleton": true
                                }'>
                                <template data-file-upload-preview="">
                                    <div class="flex items-center w-full">
                                        <span class="overflow-hidden truncate grow-0"
                                            data-file-upload-file-name=""></span>
                                        <span class="grow-0">.</span>
                                        <span class="grow-0" data-file-upload-file-ext=""></span>
                                    </div>
                                </template>

                                <button type="button"
                                    class="relative flex w-full overflow-hidden text-sm border rounded-lg border-base-content/20 focus:z-10 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none disabled:pointer-events-none disabled:opacity-50">
                                    <span class="h-full px-4 py-3 text-nowrap bg-base-200 rounded-s-lg">Pilih
                                        File</span>
                                    <span class="flex h-full px-4 py-3 overflow-hidden group grow text-base-content"
                                        data-file-upload-previews="">
                                        <span class="group-has-[div]:hidden">Tidak ada file</span>
                                    </span>
                                    <span class="absolute top-0 left-0 w-full h-full"
                                        data-file-upload-trigger=""></span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <label class="bg-white label label-text text-hitam-800" for="no_strpk"> Nomor STRPK
                            </label>
                            <input type="text" placeholder="Nomor STRPK"
                                class="bg-white border text-hitam-800 input" id="no_strpk" name="no_strpk" required />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="label label-text text-hitam-800" for="strpk_expired"> Masa Berlaku STRPK
                            </label>
                            <input type="text" class="bg-white border text-hitam-800 input jsPickr"
                                id="strpk_expired" name="strpk_expired" placeholder="YYYY-MM-DD" required />
                        </div>
                        <div>
                            <div class="label label-text text-hitam-800"> Dokumen SIPPK </div>
                            <div
                                data-file-upload='{
                                "url": "/upload",
                                "maxFiles": 1,
                                "singleton": true
                                }'>
                                <template data-file-upload-preview="">
                                    <div class="flex items-center w-full">
                                        <span class="overflow-hidden truncate grow-0"
                                            data-file-upload-file-name=""></span>
                                        <span class="grow-0">.</span>
                                        <span class="grow-0" data-file-upload-file-ext=""></span>
                                    </div>
                                </template>

                                <button type="button"
                                    class="relative flex w-full overflow-hidden text-sm border rounded-lg border-base-content/20 focus:z-10 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none disabled:pointer-events-none disabled:opacity-50">
                                    <span class="h-full px-4 py-3 text-nowrap bg-base-200 rounded-s-lg">Pilih
                                        File</span>
                                    <span class="flex h-full px-4 py-3 overflow-hidden group grow text-base-content"
                                        data-file-upload-previews="">
                                        <span class="group-has-[div]:hidden">Tidak ada file</span>
                                    </span>
                                    <span class="absolute top-0 left-0 w-full h-full"
                                        data-file-upload-trigger=""></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="bg-white label label-text text-hitam-800" for="no_sippk"> Nomor SIPPK
                            </label>
                            <input type="text" placeholder="Nomor SIPPK"
                                class="bg-white border text-hitam-800 input" id="no_sippk" name="no_sippk" required />
                        </div>
                    </div>
                </div>
                <!-- End Personal Info -->
                <!-- Submit -->
                <div id="social-links-validation" class="space-y-5" data-stepper-content-item='{ "index": 3}'
                    style="display: none">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="label label-text" for="formValidationTwitterHorizontal"> TWITTER </label>
                            <input type="text" name="formValidationTwitterHorizontal"
                                id="formValidationTwitterHorizontal" class="input"
                                placeholder="https://twitter.com/abc" />
                        </div>
                        <div>
                            <label class="label label-text" for="formValidationFacebookHorizontal"> FACEBOOK </label>
                            <input type="text" name="formValidationFacebookHorizontal"
                                id="formValidationFacebookHorizontal" class="input"
                                placeholder="https://facebook.com/abc" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="label label-text" for="formValidationGoogleHorizontal"> GOOGLE+ </label>
                            <input type="text" name="formValidationGoogleHorizontal"
                                id="formValidationGoogleHorizontal" class="input"
                                placeholder="https://plus.google.com/abc" />
                        </div>
                        <div>
                            <label class="label label-text" for="formValidationLinkedInHorizontal"> LINKEDIN </label>
                            <input type="text" name="formValidationLinkedInHorizontal"
                                id="formValidationLinkedInHorizontal" class="input"
                                placeholder="https://linkedin.com/abc" />
                        </div>
                    </div>
                </div>
                <!-- End Social Links -->
                <!-- Final Content -->
                <div data-stepper-content-item='{ "isFinal": true }' style="display: none">
                    <div
                        class="flex items-center justify-center h-48 p-4 border border-dashed border-base-content/40 bg-base-200/50 rounded-xl">
                        <h3 class="text-3xl text-base-content/50">Your Form has been Submitted</h3>
                    </div>
                </div>
                <!-- End Final Content -->
                <!-- Button Group -->
                <div class="flex items-center justify-between mt-5 gap-y-2">
                    <button type="button" class="btn btn-primary btn-prev max-sm:btn-square"
                        data-stepper-back-btn="">
                        <span class="icon-[tabler--chevron-left] text-primary-content size-5 rtl:rotate-180"></span>
                        <span class="max-sm:hidden">Back</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-next max-sm:btn-square"
                        data-stepper-next-btn="">
                        <span class="max-sm:hidden">Next</span>
                        <span class="icon-[tabler--chevron-right] text-primary-content size-5 rtl:rotate-180"></span>
                    </button>
                    <button type="button" class="btn btn-primary" data-stepper-finish-btn=""
                        style="display: none">Finish</button>
                    <button type="reset" class="btn btn-primary" data-stepper-reset-btn=""
                        style="display: none">Reset</button>
                </div>
                <!-- End Button Group -->
            </form>
            <!-- End Stepper Content -->
        </div>
        <!-- End Stepper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        window.addEventListener('load', function() {
            // Initialize flatpickr
            flatpickr('.jsPickr', {
                allowInput: true,
                monthSelectorType: 'static'
            })
        })
    </script>
</body>

</html>
