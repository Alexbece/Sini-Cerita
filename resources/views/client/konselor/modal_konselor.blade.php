</div>
    <div id="konselorModal" class="fixed inset-0 flex items-center justify-center bg-hitam-800/40">
        <div class="p-5 rounded-[45px] h-max w-max bg-pink-1 flex flex-col gap-2">
            <h1 class="text-4xl font-semibold text-pink-6">Keterangan Konselor</h1>
            <div class="grid gap-4 border-2 rounded-[25px] p-4">
                <div class="w-[700px] h-52 bg-pink-6 rounded-xl"></div>
                <div class="h-max">
                    <h3 class="text-2xl font-semibold ">Dr. Farrel Yassar S,Psi.</h3>
                    <p class="text-sm text-hitam-500">Psikolog</p>
                </div>
                <div class="flex gap-3">
                    <div class="flex items-center gap-2 px-2 py-1 rounded-lg bg-pink-6 w-max">
                        <p class="text-sm text-pink-1">15 Tahun</p>
                    </div>
                    <div class="flex items-center gap-2 px-2 py-1 rounded-lg bg-pink-6 w-max">
                        <i class='text-xl text-pink-1 bx bxs-like'></i>
                        <p class="text-sm text-pink-1">100%</p>
                    </div>
                </div>
                <p class="text-xl text-black">Rp 75.000 / Jam</p>
                
            </div>
        </div>

<script>
    const datepicker = document.getElementById('datepicker');
    const datepickerContainer = document.getElementById('datepicker-container');
    const daysContainer = document.getElementById('days-container');
    const currentMonthElement = document.getElementById('currentMonth');
    const prevMonthButton = document.getElementById('prevMonth');
    const nextMonthButton = document.getElementById('nextMonth');
    const cancelButton = document.getElementById('cancelButton');
    const applyButton = document.getElementById('applyButton');
    const toggleDatepicker = document.getElementById('toggleDatepicker');

    let currentDate = new Date();
    let selectedDate = null;

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        currentMonthElement.textContent = currentDate.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });

        daysContainer.innerHTML = '';
        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDayOfMonth; i++) {
            daysContainer.innerHTML += `<div></div>`;
        }

        for (let i = 1; i <= daysInMonth; i++) {
            daysContainer.innerHTML += `<div class="flex h-[38px] w-[38px] items-center justify-center rounded-[7px] border-[.5px] border-transparent text-dark hover:border-stroke hover:bg-gray-2 sm:h-[46px] sm:w-[47px] dark:text-white dark:hover:border-dark-3 dark:hover:bg-dark mb-2">${i}</div>`;
        }

        document.querySelectorAll('#days-container div').forEach(day => {
            day.addEventListener('click', function () {
                selectedDate = `${month + 1}/${this.textContent}/${year}`;
                document.querySelectorAll('#days-container div').forEach(d => d.classList.remove('bg-primary', 'text-white', 'dark:text-white'));
                this.classList.add('bg-primary', 'text-white', 'dark:text-white');
            });
        });
    }

    datepicker.addEventListener('click', function () {
        datepickerContainer.classList.toggle('hidden');
        renderCalendar();
    });

    toggleDatepicker.addEventListener('click', function () {
        datepickerContainer.classList.toggle('hidden');
        renderCalendar();
    });

    prevMonthButton.addEventListener('click', function () {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    nextMonthButton.addEventListener('click', function () {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });

    cancelButton.addEventListener('click', function () {
        selectedDate = null;
        datepickerContainer.classList.add('hidden');
    });

    applyButton.addEventListener('click', function () {
        if (selectedDate) {
            datepicker.value = selectedDate;
        }
        datepickerContainer.classList.add('hidden');
    });

    // Close datepicker when clicking outside
    document.addEventListener('click', function (event) {
        if (!datepicker.contains(event.target) && !datepickerContainer.contains(event.target)) {
            datepickerContainer.classList.add('hidden');
        }
    });
</script>